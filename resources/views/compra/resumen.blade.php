@extends('layouts.layoutMain')

@section('content')
    <h3><b>Elementos agregados al carrito</b></h3>
    <p>Evento: <b></b></p>
    <p>Día: <b></b></p>
    <p>Precio unitario: <b></b></p>
    <p>Cantidad de tickets: <b>0</b></p>
    <p>Total:<b>0</b></p>

    <form class="" action="" method="post">
        <input type="hidden" name="id" value="">
        <button class="" type="submit" name="" >Modificar Seleccion</button>
        <button class="" type="submit" name="" >Eliminar Seleccion</button>
    </form>
    <br>

    <h3><b>Total de la compra</b></h3>
    <p>Gran total: <b></b></p>
    <div class="">
    <a href="/graciasportucompra">Comprar</a>
    </div>
@endsection