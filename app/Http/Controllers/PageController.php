<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Post;
use App\Country;
use App\Category;
use MercadoPago\SDK;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailAdminInscription;
use App\Mail\EmailUserInscription;
use App\Mail\EmailAdminPendig;
use App\Mail\EmailUSerPendig;
use App\Mail\ContactMail;
use App\Mail\EmailContactForm;
use App;



class PageController extends Controller
{
    public function locale(Request $request,$code)
    {


    	$country = Country::where('code',$code)->first();

    	if ($country) {

    		//if (\URL::previous() == route('/')."/" ) {
	    	//	
	    	//	return redirect()->route('welcome');
	    	//}

    		//return back()->withCookie(cookie()->forever('country',$code));
			session()->put('country_code', $code);
			config(['app.country' => session()->get('country_code')]);
    	}else{
			$code = 'ar';
		}

    	

    	return redirect('./bienvenido/'.$code);
    	
    }

    public function events($country_code=null)
    {
    	//dd($country_code);

		if (is_null($country_code)) {
		
			$country = Country::where('code',app('config')->get('app.country'))->get()->first();		
			
		}else{

			$country = Country::where('code',$country_code)->get()->first();
		}


		if (!$country) {
			return abort(404);
		}

		if ($country->code != app('config')->get('app.country')) 
	    	{

	    		return redirect()->route('events',$country->code)->withCookie(cookie()->forever('country',$country->code));

	    	}


		$actualDate = date(('Y-m-d'));

		$events = Event::where('country_id', $country->id)->where('date_start', '>=', $actualDate)->get();
	
		$pastEvents = Event::where('country_id', $country->id)->where('date_start', '<', $actualDate)->paginate(6);

		$eventsOther = Event::whereNotIn('country_id', array($country->id))->where('date_start', '>=', $actualDate)->get();

    	//dd($eventsOther);

    	return view('site.events',[
    		'events'=>$events,
    		'pastEvents'=>$pastEvents,
    		'eventsOther'=>$eventsOther,
    	]);
    }

    public function showEvents(Request $request,$id)
    {
    	$event = Event::with('country')->where('id',$id)->first();

    	if (!$event) {
    		abort(404);
    	}

    	if ($event->country->code != app('config')->get('app.country')) 
    	{

    		return redirect()->route('events.show.front',$event->id)->withCookie(cookie()->forever('country',$event->country->code));

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
    	$event = Event::with('country')->where('id',$id)->first();
		
		session()->put('eventId', $id);
		
    	if (!$event) {
    		abort(404);
    	}

    	if ($event->country->code != app('config')->get('app.country')) 
    	{

    		return redirect()->refresh()->withCookie(cookie()->forever('country',$event->country->code));

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

	
	public function sendEmail(Request $request){		
		$msg = $request->message."\n\nNombre: ".$request->name."\nTeléfono: ".$request->phone."\nPaís: ".$request->country;
		$msg = wordwrap($msg,70);
		
		if(app('config')->get('app.country') == 'ar')
		{
			$to = 'contamemas@meexperiencias.com';
		}
		if(app('config')->get('app.country') == 'cr')
		{
			$to = 'holacostarica@meexperiencias.com';
		}

		Mail::to($to)->send(new ContactMail($msg,$request));

		//mail($to,"Contacto de ".$request->name." desde el formulario de la página web",$msg, $headers);
		
		session()->flash('successMail', 'Tu mensaje ha sido enviado');
		
		return redirect()->route('welcome');
	}
	
	public function thanks(Request $request){

		$event = Event::where('id',session('eventId'))->first();
		
		$session = session()->all();

		if(app('config')->get('app.country') == 'ar')
		{
			$to = 'contamemas@meexperiencias.com';
		}
		if(app('config')->get('app.country') == 'cr')
		{
			$to = 'holacostarica@meexperiencias.com';
		}
		
		$id = $request->input('merchant_order_id');

		Mail::to($to)->send(new EmailAdminInscription($event,$session,$id));

		Mail::to($session['email'])->send(new EmailUserInscription($event,$session,$id));
					
		$nextEvents = App::call('App\Http\Controllers\EventsController@getNextEvents');
		return view('shoping.thanks')->with('nextEvents', $nextEvents);
	}
	
	public function pending(Request $request){
		
		$session = session()->all();

		$event = Event::where('id',session('eventId'))->first();

		$nextEvents = App::call('App\Http\Controllers\EventsController@getNextEvents');

		$id = $request->input('merchant_order_id');

		if(app('config')->get('app.country') == 'ar')
		{
			$to = 'contamemas@meexperiencias.com';
		}
		if(app('config')->get('app.country') == 'cr')
		{
			$to = 'holacostarica@meexperiencias.com';
		}


		Mail::to($to)->send(new EmailAdminPendig($event,$session,$id));

		Mail::to($session['email'])->send(new EmailUSerPendig($event,$session,$id));
		
		return view('shoping.process')->with('nextEvents', $nextEvents);
	}
	
	public function failure(){
		$nextEvents = App::call('App\Http\Controllers\EventsController@getNextEvents');
		$event = Event::where('id',session('eventId'))->first();
		return view('site.events-inscription')->with('event', $event)->with('error', 'Hubo un problema al procesar tu pago, por favor selecciona otro metodo de pago o reintenta mas tarde')->with('nextEvents', $nextEvents);
	}


	public function blogIndex(Request $request)
	{
		if (!is_null($request->input('category'))) {
			
			$category = Category::where('id',$request->input('category'))->first();

			if (!$category) {
				return redirect()->route('blog');
			}
			
		}
		else
		{
			$category = null;
		}
			

		$country = Country::where('code',app('config')->get('app.country'))->first();
		
		$countriall = Country::where('code',"all_countries")->first();

		$posts = Post::categoryFilter($request->input('category'))
		               ->whereIn('country_id',array($country->id,$countriall->id))
		               ->latest()
		               ->paginate(25);

		//dd($posts);
		return view('blog.index',[
			'posts'=>$posts,
			'category'=>$category,
		]);
	}

	public function blogShow($id)
	{
		$post = Post::where('id',$id)->first();
		
		if (!$post) 
		{
			return about(404);
		}

		$tags = explode(',', $post->tags);
		
		return view('blog.example_note',[
			'post'=>$post,
		]);
	}

	public function latestPosts()
    {
    	$country = Country::where('code',app('config')->get('app.country'))->first();
		
		$countriall = Country::where('code',"all_countries")->first();

		$latestPosts = Post::whereIn('country_id',array($country->id,$countriall->id))->latest()->paginate(3);

		return $latestPosts;

         
    }

    public function categories()
    {
    	$categories = Category::all();

    	return $categories;
    }

}
