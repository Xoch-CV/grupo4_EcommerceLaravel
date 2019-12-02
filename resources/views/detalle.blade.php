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
        @else
          <form action="/compra/compra">
          <input type="comprar entrada" value='comprar entrada' class="button"></input>
          </form>
          @endif
        
        @else

        <div class="col-12 col-sm-12 col-md-4 col-lg-3 boton">  
        <form action="/compra/compra">
        
          <input type="submit" value='Comprar entrada' class="button"></input>
        
        </form>
        </div>
      @endauth
    @endif
    </div>
  </div>
@endsection
