@extends('layouts.layoutMain')

@section('content')
  <div class="row detalle">
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 imagen">
    <img src="{{asset('$event->image')}}" alt="Foto">
    </div>

  <div class="col-12 col-sm-12 col-md-6 col-lg-6 descripcion">
    <h4>{{$event->name}}</h4>
      <!--<p>Categoria del evento <b>/*echo$event->category_id*/</b></p>-->


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
        <form class="" action="/events/{{$event->id}}" method="post">
          @method('DELETE')
          @csrf
          <input type="hidden" name="id" value="{{$event->id}}">
          <input class="button2" type="submit" name="" value="Borrar Evento">
        </form>

        <a href="/events/{{$event->id}}/edit">Editar</a>
        {{--@else
          <form action="/compra/compra">
          <input type="comprar entrada" value='comprar entrada' class="button"></input>
          </form>
          @endif--}}
        @else
        <div class="row">          
          <form action="/compra/{{$event->id}}" method="post">
          @csrf
            <div class="">
              <label for="quantiy">Cantidad tickets</label>
              <select name="quantity">
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
            <br>
            <div class="row">
              <div class="col-12 col-sm-12 col-md-4 col-lg-6">
                <input type="submit" value='Agregar al carrito' class="button" name='add'>
              </div>
            </form> 
              <div class="col-12 col-sm-12 col-md-4 col-lg-6">
              {{--<a href="{{ url('/') }}">Ver más eventos</a>--}}
                <a class="button2" href="{{ url('/') }}">Ver más eventos</a>
              </div>
            </div>

        </div>
        @endif
      @else
        {{--Boton comprar que redirigue al usuario visitando a loggearse para realizar comprar--}}
        {{--<a href="{{ route('login') }}">Agregar al carrito-sin-loguear</a>--}}
          <div class="col-6 col-sm-6 col-md-6 col-lg-3">
          <a class="button" href="{{ route('login') }}">
            
          comprar entrada</a>
          </div>
      @endauth
    @endif
    </div>
  </div>
@endsection
