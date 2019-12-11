<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\User;
use App\Cart;
use App\Event;
use Auth;
use Carbon\Carbon;

class CartController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function cartCounts(){
        return view('partial.navbar');
    }

    public function cartItems(){
        return view('compra.resumen');

    }

    public function finish(){

        $cart = auth()->user()->carts()->open()->latest()->first();
        $cart->purchased_at=\Carbon\Carbon::now();
        $cart->total_price=$cart->events()->sum('total_event');
        $cart->save();
        return redirect('/');

    }

    public function listadoOrdenes(){
        $user = auth()->user();
        $cart = auth()->user()->carts()->whereNotNull('purchased_at')->get();

        return view('user.perfil')->with('user', $user)
                                  ->with('purchased', $cart);
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
        $cart = auth()->user()->carts()->open()->latest()->first();

        if (! $cart) {
            $cart = auth()->user()->carts()->create(['total_price' => 0]);
        }

        // purchased_at (TIMESTAMP)
        $qty = $req->get('quantity');
        $total_event = $qty * $event->price;

            $cart->events()->sync(array($id => array(
            'qty' => $qty,
            'price' => $event->price,
            'total_event' => $total_event)
            ),false);

        return view('compra.resumen')->with('order', $cart);

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
    public function removeItem($id)
    {
        $cart = auth()->user()->carts()->open()->latest()->first();
        $cart->events()->detach($id);
        return view('compra.resumen')->with('order', $cart);
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
