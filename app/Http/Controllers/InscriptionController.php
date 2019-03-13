<?php

namespace App\Http\Controllers;

use App\Inscription;
use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailAdminBank;
use App\Mail\EmailUserBank;
use MercadoPago\SDK;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string',
            'phone'=>'required|string',
            'email'=>'required|string|email',
            'message'=>'required|string',
            'method_payment'=>'required|string',
            'event'=>'required|exists:events,id',
        ]);

        $payment_methods = [
            'transferencia',
            'mercado_pago'
        ];

        if (!in_array($request->input('method_payment'), $payment_methods)) {
            abort(404);
        }

        session()->put('inscription',$request->all());
		
		session()->put('inscriptionMail', $request->input('email'));
		
		session()->put('date_start', $request->input('date_start'));
		session()->put('hour', $request->input('hour'));
		session()->put('address', $request->input('address'));
		
		session()->put('name', $request->input('name'));
        session()->put('email', $request->input('email'));
        session()->put('phone', $request->input('phone'));
        session()->put('message', $request->input('message'));
		
        /*
        Inscription::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
            'questions'=>$request->input('message'),
            'event_id'=>$request->input('event'),
            
        ]);*/

        if ($request->input('method_payment') == 'mercado_pago') 
        {
			SDK::setClientId("8522721791217541");
			SDK::setClientSecret("1l4OLlePPmNTS8NPWCqottIKDFhKNh4k");
			
			$preference = new \MercadoPago\Preference();
			$item = new \MercadoPago\Item();
			$item->id = $request->event;
			$item->title = "Curso: ".$request->eventName;
			$item->quantity = 1;
			$item->currency_id = "ARS";
			$item->unit_price = floatval($request->price);
			$payer = new \MercadoPago\Payer();
			$payer->email = $request->email;
			$preference->items = array($item);
			$preference->payer = $payer;
			
			$successUrl = strval(request()->getHttpHost()."/thanks");
			$failureUrl = strval(request()->getHttpHost()."/failure");
			$pendingUrl = strval(request()->getHttpHost()."/pending");
			
			$preference->back_urls = array(
				"success" => $successUrl,
				"failure" => $failureUrl,
				"pending" => $pendingUrl
			);
			$preference->auto_return = "approved";
			
			$preference->save();
		
			return redirect($preference->sandbox_init_point); //init_point to prod
        }
        else
        {
            $session = session('inscription');

            $event = Event::where('id',$session['event'])->first();

            Mail::to('admin@admin.com')->send(new EmailAdminBank($event,$session));

            Mail::to($session['email'])->send(new EmailUserBank($event,$session));

            return view('shoping.thanks',
                [
                'event'=>$event,
                ]);

        }




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function show(Inscription $inscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function edit(Inscription $inscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inscription $inscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inscription $inscription)
    {
        //
    }
}
