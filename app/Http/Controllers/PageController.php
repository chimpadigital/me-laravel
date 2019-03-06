<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use MercadoPago\SDK;

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
    	dd($request-all());
    	
    	SDK::setAccessToken("TEST-7677681462240655-030619-56ef71506ec4840faa5b98a6040dfd57-413786444");
	    //...
	    $payment = new \MercadoPago\Payment();
	    $payment->transaction_amount = 181;
	    $payment->token = $request->input('token');
	    $payment->description = "Rustic Bronze Knife";
	    $payment->installments = 1;
	    $payment->payment_method_id = "visa";
	    $payment->payer = array(
	    "email" => $request->input('email'),
	    );
	    // Save and posting the payment
	    $payment->save();
	    //...
	    // Print the payment status

	    echo $payment->status;
    	//...
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
}
