@extends('layouts.layoutMain')

@section('content')
    <p>Detalle del evento <b>{{$event->name}}</b></h1>
    <!--<p>Categoria del evento <b>/*echo$event->category_id*/</b></p>-->
    @if ($event->category)
    <p>Categoria del evento <b>{{$event->category->name}}</b></p>
    <p>Desripcion:</p>
    <p>{{$event->description}}</p>
    @endif
    @if (Route::has('login'))
      @auth
        @if (Auth::user()->role==1)
      <img src="{{asset('$event->image')}}" alt="Foto">
      <form class="" action="/events/{{$event->id}}" method="post">
        @method('DELETE')
        @csrf
        <input type="hidden" name="id" value="{{$event->id}}">
        <input class="button2" type="submit" name="" value="Borrar Evento">
      </form>

      <a href="/events/{{$event->id}}/edit">Editar</a>
      @else
        
        <a href="/compra/compra">comprar</a>
        
        @endif
      
      @else
        
        <a href="{{ route('login') }}">comprar-sin-loguear</a>
        @endauth
    @endif
@endsection
