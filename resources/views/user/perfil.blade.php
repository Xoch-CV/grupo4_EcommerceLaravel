@extends('layouts.layoutMain')

@section('content')

  {{--<h3><b>Información del Usuario</b></h3>
  <br>
  <div><p>Nombre: <b>{{ $user->name }}</b> <b>{{ $user->surname }}</b></p></div>
  <div><p>Correo de la cuenta: <b>{{ $user->email }}</b></p></div>
  --}}

  <h3><b>Histórico de compras</b></h3>

    @foreach ($purchased   as $order)

        <div><p>ID orden: <b>{{ $order->id }}</b></p></div>

        @foreach ($order->events as $orderevents)
          <div><p>Nombre evento: <b>{{$orderevents->name}}</b></p></div>
          <div><p>Cantidad: <b>{{$orderevents->pivot->qty}}</b></p></div>
          <div><p>Subtotal: <b>{{$orderevents->pivot->total_event}}</b></p></div>
        @endforeach
        <div><p>Total: <b>{{ $order->total_price }}</b></p></div>
        <div><p>Fecha de compra: <b>{{ $order->purchased_at }}</b></p></div>

    @endforeach


@endsection
