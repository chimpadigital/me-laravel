<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use MercadoPago\SDK;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailAdminInscription;
use App\Mail\EmailUserInscription;
use App\Mail\EmailContactForm;
use App;


class PageController extends Controller
{
    public function locale(Request $request)
    {
    	session()->put('country',$request->input('country'));

    	return redirect()->route('welcome');
    }

    public function events()
    {
    	$events = App::call('App\Http\Controllers\EventsController@getNextEvents');

    	//dd($events);

    	return view('site.events',[
    		'events'=>$events,
    	]);
    }

    public function showEvents($id)
    {
    	$event = Event::with('country')->where('id',$id)->country()->first();

    	if (!$event) {
    		abort(404);
    	}

    	//dd($events);
		
		session()->put('date_start', $event->date_start);
		session()->put('hour', $event->hour);
		session()->put('address', $event->address);
		
		$nextEvents = App::call('App\Http\Controllers\EventsController@getNextEvents');

    	return view('site.event-show')->with('event', $event)->with('nextEvents', $nextEvents);
    }

    public function EventsInscription($id)
    {
    	$event = Event::with('country')->where('id',$id)->country()->first();
		session()->put('eventId', $id);
		
    	if (!$event) {
    		abort(404);
    	}

    	//dd($events);
		
		$nextEvents = App::call('App\Http\Controllers\EventsController@getNextEvents');
		
    	return view('site.events-inscription')->with('event', $event)->with('nextEvents', $nextEvents);
    }

    public function payment(Request $request)
    { 	

    	$request->validate([
    		'paymentMethodId'=>'required',
    		'token'=>'required',
    		'email'=>'required',

    	]);
    	if ($session = session('inscription')) {
    		
    		$event = Event::where('id',$session['event'])->first();

    		SDK::setAccessToken(env('MERCADOPAGOAPI'));
		    //...
		    $payment = new \MercadoPago\Payment();
		    $payment->transaction_amount = $event->price;
		    $payment->token = $request->input('token');
		    $payment->description = $event->name;
		    $payment->installments = 1;
		    $payment->payment_method_id = $request->input('paymentMethodId');
		    $payment->payer = array(
		    "email" => $request->input('email'),
		    );
		    // Save and posting the payment
		    $payment->save();
		    //...
		    // Print the payment status

		    switch ($payment->status) {
		    	case 'approved':
		    		Mail::to('admin@admin.com')->send(new EmailAdminInscription($event,$session,$payment));

		    		Mail::to($session['email'])->send(new EmailUserInscription($event,$session,$payment));
		    		
					$nextEvents = App::call('App\Http\Controllers\EventsController@getNextEvents');
					
		    		return view('shoping.thanks',[
		    			'event'=>$event,
						'nextEvents'=>$nextEvents
		    		]);

		    		break;

		    	case 'in_process':

		    		return view('shoping.process',[
		    			'event'=>$event,
		    		]);

		    		break;

		    	case 'rejected':

		    		return redirect()->route('/cursos/payments',$event->id)->with('error','Hubo un problema al procesar tu pago, por favor selecciona otro metodo de pago o reintenta mas tarde');

		    		break;

		    	case null:

		    		return redirect()->route('events.inscription.front',$event->id)->with('error','Hubo un problema al procesar tu pago, por favor selecciona otro metodo de pago o reintenta mas tarde');

		    		break;
				
				default:
					
					return redirect()->route('events.inscription.front',$event->id)->with('error','Hubo un problema al procesar tu pago, por favor selecciona otro metodo de pago o reintenta mas tarde');
					
					break;
		    }
    	}

    	return abort(404);
    	
    }

    public function createUserTest()
    {

		 SDK::setAccessToken("TEST-426245754543658-030615-5da329c447d20783fae169b9d5022434-413578258");

		  $body = array(
		    "json_data" => array(
		      "site_id" => "MLA"
		    )
		  );

		  $result = SDK::post('/users/test_user', $body);

		  var_dump($result);
    }

    public function paymentMEthods()
    {
    	SDK::setAccessToken(env('MERCADOPAGOAPI'));

    	$method_payments = MercadoPago::get("/v1/payment_methods");

    	dd($method_payments);
    }
	
	public function sendEmail(Request $request){		
		$msg = $request->message."\n\nNombre: ".$request->name."\nTeléfono: ".$request->phone."\nPaís: ".$request->country;
		$msg = wordwrap($msg,70);
		
		$headers =  'MIME-Version: 1.0' . "\r\n"; 
		$headers .= 'From: '.$request->email;
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
		if(session('country') == 'ar')
			$to = 'contamemas@meexperiencias.com';
		if(session('country') == 'cr')
			$to = 'holacostarica@meexperiencias.com';

		mail($to,"Contacto de ".$request->name." desde el formulario de la página web",$msg, $headers);
		
		session()->flash('successMail', 'Tu mensaje ha sido enviado');
		
		return redirect()->route('welcome');
	}
	
	public function thanks(){
		$event = Event::where('id',session('eventId'))->first();
		
		$session = session()->all();
		
		Mail::to('admin@admin')->send(new EmailAdminInscription($event,$session,""));
		Mail::to($session['email'])->send(new EmailUserInscription($event,$session,""));
					
		$nextEvents = App::call('App\Http\Controllers\EventsController@getNextEvents');
		return view('shoping.thanks')->with('nextEvents', $nextEvents);
	}
	
	public function pending(){
		$event = Event::where('id',session('event'))->first();
		$nextEvents = App::call('App\Http\Controllers\EventsController@getNextEvents');
		
		return view('shoping.process')->with('nextEvents', $nextEvents);
	}
	
	public function failure(){
		$nextEvents = App::call('App\Http\Controllers\EventsController@getNextEvents');
		$event = Event::where('id',session('eventId'))->first();
		return view('site.events-inscription')->with('event', $event)->with('error', 'Hubo un problema al procesar tu pago, por favor selecciona otro metodo de pago o reintenta mas tarde')->with('nextEvents', $nextEvents);
	}

}
