<?php

namespace App\Http\Controllers;

use App\Event;
use App\Country;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::with('country')->paginate(50);

        return view('events.index',[
            'events'=>$events,
        ]);
    }
	
	public function getNextEvents(){
		$actualDate = date(('Y-m-d'));
		$country = Country::where('code', app('config')->get('app.country'))->get()->first();
		
		$events = Event::where('country_id', $country->id)->where('date_start', '>=', $actualDate)->get();
		
		return $events;
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$countries = Country::whereNotIn('code',array('all_countries'))->get();
		return view('events.create',[
            'countries'=>$countries,
        ]);
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
            'title'=>['required','string'],
            'description'=>['required','string'],
            'date_start'=>['required','date'],
            'hour'=>['required','string'],
            'address'=>['required','string'],
            'temary'=>['required','string'],
            'about'=>['required','string'],
            'price'=>['required','numeric'],
            'img'=>['required','file'],
            'contry_id'=>['required', 'string'],
        ]);

        $country = Country::where('code',app('config')->get('app.country'))->first();

        if(!$country){
            abort(404);
        };

        Event::create([
            'name'=>$request->input('title'),
            'description'=>$request->input('description'),
            'date_start'=>$request->input('date_start'),
            'hour'=>$request->input('hour'),
            'address'=>$request->input('address'),
            'temary'=>$request->input('temary'),
            'about_event'=>$request->input('about'),
            'price'=>$request->input('price'),
            'country_id'=>$request->input('contry_id'),
            'img'=>$request->file('img')->store('img_events','public'),
        ]);

        return redirect()->route('events.index')->with('success','Creado Exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function show(Events $events)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::where('id',$id)->first();

        if (!$event) {
            abort(404);
        }

        $countries = Country::all();

        return view('events.edit',[
            'event'=>$event,
            'countries'=>$countries,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>['required','string'],
            'description'=>['required','string'],
            'date_start'=>['required','date'],
            'hour'=>['required','string'],
            'address'=>['required','string'],
            'temary'=>['required','string'],
            'about'=>['required','string'],
            'price'=>['required','numeric'],
            'img'=>['file'],
            'contry_id'=>['required', 'string'],
        ]);

        $event = Event::where('id',$id)->first();

        $this->img = $event->img;


        if ($request->file('img')) 
        {
            $this->img = $request->file('img')->store('img_events','public');
        }

        $event->update([
            'name'=>$request->input('title'),
            'description'=>$request->input('description'),
            'date_start'=>$request->input('date_start'),
            'hour'=>$request->input('hour'),
            'address'=>$request->input('address'),
            'temary'=>$request->input('temary'),
            'about_event'=>$request->input('about'),
            'price'=>$request->input('price'),
            'country_id'=>$request->input('contry_id'),
            'img'=>$this->img,
        ]);

        return back()->with('status','Actualizado Exitosamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::where('id',$id)->first();

        $event->delete();

        return back()->with('success','Eliminado Exitosamente');
    }
}
