@extends('layouts.layoutMain')

@section('content')

  <h3><b>Elementos agregados al carrito</b></h3>
    @if ($order<>null)
    @foreach ($order->events as $event)

        <div>{{ $event->name }}</div>
        <p>Día: <b>{{ $event->initial_date }}</b></p>
        <p>Precio unitario: <b>$ {{ $event->price }}</b></p>
        <p>Evento <b> {{$event->pivot->event_id }}</b></p>
        <p>Cantidad de tickets: <b> {{ $event->pivot->qty}}</b></p>
        <p>Total: <b>$ {{ $event->pivot->qty * $event->pivot->price }}</b></p>
        <form action="/events/{{$event->id}}" method="get">
        @csrf
            <input type="hidden" name="id" value="">
            <button class="" type="submit" name="" >Modificar Seleccion</button>
        </form>
        <form class="" action="/compra/{{$event->id}}" method="post">
        @method('DELETE')
        @csrf
          <div class="">
            <input type="hidden" name="id" value="{{$event->id}}">
            <button class="" type="submit" name="" >Eliminar seleccion</button>
          </div>
        </form>
    @endforeach

    <h3><b>Total de la compra</b></h3>
    <p>Gran total: <b>$ {{ $order->events->sum('pivot.total_event') }}</b></p>
    <div class="">
    <a href="/compra">Finalizar compra</a>
    </div>
  @else
    <h3><b>No has agregado ningun evento al carrito.</b></h3>
@endif
@endsection
