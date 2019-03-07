<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use MercadoPago\SDK;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailAdminInscription;
use App\Mail\EmailUserInscription;


class PageController extends Controller
{
    public function locale(Request $request)
    {
    	session()->put('country',$request->input('country'));

    	return back();
    }

    public function events()
    {
    	$events = Event::with('country')->country()->paginate(10);

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

    	return view('site.event-show',[
    		'event'=>$event,
    	]);
    }

    public function EventsInscription($id)
    {
    	$event = Event::with('country')->where('id',$id)->country()->first();

    	if (!$event) {
    		abort(404);
    	}

    	//dd($events);

    	return view('site.events-inscription',[
    		'event'=>$event,
    	]);
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
		    		
		    		return view('shoping.thanks',[
		    			'event'=>$event,
		    		]);

		    		break;

		    	case 'in_process':

		    		return view('shoping.process',[
		    			'event'=>$event,
		    		]);

		    		break;

		    	case 'rejected':

		    		return redirect()->route('events.inscription.front',$event->id)->with('error','Hubo un problema al procesar tu pago, por favor selecciona otro metodo de pago o reintenta mas tarde');

		    		break;

		    	case null:

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

}
