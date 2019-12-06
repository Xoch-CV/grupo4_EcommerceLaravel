<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\User;
use App\Cart;
use App\Event;
use Auth;

class CartController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        $user = Auth::user()->id;
        $agregados = Cart::where('user_id',$user->id);
        dd($agregados);
        return view('compra.resumen')->with('agregados', $agregados);

    }

     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addItem($id, Request $req)
    {
        /*$cart = auth()->user()->carts()->create(['total_price' => 0]);
        $item = $cart->events()->attach($id, ['qty' => 1, 'price' => 1]);*/ 
        
        $event = Event::find($id);
        $qty = $req->get('quantity');

        $total_event = $qty*$event->price;

        $cart = auth()->user()->carts()->create(['total_price' => 0]);
        /*dd($cart);*/
        $cart->events()->attach($id, ['qty' => $qty, 'price' => $total_event]);
        /*dd($item);*/
        return view('compra.resumen')->with('events', $event)
                                     ->with('order', $cart);
                                     /*->with('item',$item);*/
    }                           

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($eventId)
    {
        
    }
}
