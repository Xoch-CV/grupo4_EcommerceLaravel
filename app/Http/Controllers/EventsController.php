<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('q')){
          $events = Event::where('name', 'like', '%' . $request->get('q') . '%')->paginate(10)->appends($request ->only('q'));
        } else{
        $events = Event::paginate(10)->appends($request->only('q'));
        }
        return view("/listado")->with("events", $events);
        //return view("listado", compact("events"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reglas = [
          "name" => "required|string|min:1|max:255",
          "description" => "required|string|min:1|max:255",
          "initial_date" => "required|date",
          "ending_date" =>"required|date",
          "price"=> "required|numeric",
          "category_id"=>"required|integer|min:1|max:5"
        ];
        $mensaje = [
          "required" => "El campo :attribute es obligatorio.",
          "min" => "El campo :attribute no puede ser menor a :min.",
          "max" => "El campo :attribute no debe mayor a :max.",
          "numeric" => "El campo :attribute debe ser numérico.",
          "integer" => "El campo :attribute debe ser entero.",
          "date" => "El campo :attribute debe ser una fecha."
        ];

        $this->validate($request, $reglas, $mensaje);
        Event::create($request->all());

        return redirect ('/events');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view("/detalle")->with("event", $event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('events.edit')->with("event", $event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $idevent)
    {
      $reglas = [
        "name" => "required|string|min:1|max:255",
        "description" => "required|string|min:1|max:255",
        "initial_date" => "required|date",
        "ending_date" =>"required|date",
        "price"=> "required|numeric",
        "category_id"=>"required|integer|min:1|max:5"
      ];
      $mensaje = [
        "required" => "El campo :attribute es obligatorio.",
        "min" => "El campo :attribute no puede ser menor a :min.",
        "max" => "El campo :attribute no debe mayor a :max.",
        "numeric" => "El campo :attribute debe ser numérico.",
        "integer" => "El campo :attribute debe ser entero.",
        "date" => "El campo :attribute debe ser una fecha."
      ];

      $this->validate($req, $reglas, $mensaje);

        Event::find($idevent)->update($req->all());
        return redirect('/events');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req)
    {
      $id =$req['id'];
      $events=Event::find($id);
      $events->delete();
      return redirect('/events');
    }
    }
