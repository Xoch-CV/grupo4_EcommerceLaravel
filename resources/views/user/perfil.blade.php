@extends('layouts.layoutMain')

@section('content')

  {{--<h3><b>Información del Usuario</b></h3>
  <br>
  <div><p>Nombre: <b>{{ $user->name }}</b> <b>{{ $user->surname }}</b></p></div>
  <div><p>Correo de la cuenta: <b>{{ $user->email }}</b></p></div>
  --}}

  <h3><b>Histórico de compras</b></h3>
  
    @foreach ($order as $order)
        
        <div><p>ID orden: <b>{{ $order->id }}</b></p></div>
        {{-- <div><p>Nombre evento: <b>{{$order->events->pivot->event_id}}</b></p></div> --}}
        <div><p>Total: <b>{{ $order->total_price }}</b></p></div>
        <div><p>Fecha de compra: <b>{{ $order->purchased_at }}</b></p></div>

    @endforeach

    
@endsection