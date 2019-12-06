@extends('layouts.layoutMain')

@section('content')
    {{--dd($item)--}}
        
    <h3><b>Elementos agregados al carrito</b></h3>
    <p>Evento: <b>{{ $events->name }}</b></p>
    <p>Día: <b>{{ $events->initial_date }}</b></p>
    <p>Precio unitario: <b>{{ $events->price }}</b></p>

    <p>Cantidad de tickets: <b></b></p>
    <p>Total:<b>{{--$order->totalEvent()--}}</b></p>
    <form class="" action="" method="post">
        <input type="hidden" name="id" value="">
        <button class="" type="submit" name="" >Modificar Seleccion</button>
        <button class="" type="submit" name="" >Eliminar Seleccion</button>
    </form>
    <br>

    <h3><b>Total de la compra</b></h3>
    <p>Gran total: <b>{{ $order->total_price }}</b></p>
    <div class="">
    <a href="/graciasportucompra">Comprar</a>
    </div>
@endsection