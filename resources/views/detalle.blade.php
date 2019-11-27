@extends('layouts.layoutMain')

@section('content')
    <p>Detalle del evento <b>{{$event->name}}</b></h1>
    <!--<p>Categoria del evento <b>/*echo$event->category_id*/</b></p>-->
    @if ($event->category)
    <p>Categoria del evento <b>{{$event->category->name}}</b></p>
    @endif
    <form class="" action="/events/{{$event->id}}" method="post">
      @method('DELETE')
      @csrf
      <input type="hidden" name="id" value="{{$event->id}}">
      <input class="button2" type="submit" name="" value="Borrar Evento">

    </form>
    <a href="/events/{{$event->id}}/edit">Editar</a>
@endsection
