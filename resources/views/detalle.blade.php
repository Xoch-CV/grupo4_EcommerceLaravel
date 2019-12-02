@extends('layouts.layoutMain')

@section('content')
    <p>Detalle del evento <b>{{$event->name}}</b></h1>
    @if ($event->category)
    <p>Categoria del evento <b>{{$event->category->name}}</b></p>
    <p>Desripcion:</p>
    <p>{{$event->description}}</p>
    <p>Día del evento: <b>{{$event->initial_date}}</b></p>
    <p>Precio Ticket: <b>{{$event->price}}</b></p>
    @endif
    @if (Route::has('login'))
      @auth
        @if (Auth::user()->role==1)
        {{--<img src="{{asset('$event->image')}}" alt="Foto">--}}
        <form class="" action="/events/{{$event->id}}" method="post">
        @method('DELETE')
        @csrf
          <div class="">
            <input type="hidden" name="id" value="{{$event->id}}">
            <button class="" type="submit" name="" >Borrar Evento</button>
          </div>
        </form>
        
        {{--Boton editar habilitado para Administrador--}}
        <div class="">
          <a href="/events/{{$event->id}}/edit">Editar Evento</a>
        </div>
        @else
        {{--Opciones de compra habilitado para Usuario Navegador--}}
        <form class="" action="/compra/{{$event->id}}" method="post">
        @csrf
          <div class="">
            <label for="quantiy">Cantidad tickets</label>
            <select name="quantity" form="">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div>

          <div class="">
          <button type="submit">Agregar al carrito</button>
          </div>
        </form>
        <br>
        <div class="">
          <a href="/">Ver más eventos</a>
        </div>
        @endif
      @else
        {{--Boton comprar que redirigue al usuario visitando a loggearse para realizar comprar--}}
        <a href="{{ route('login') }}">Agregar al carrito-sin-loguear</a>
      @endauth
    @endif
@endsection
