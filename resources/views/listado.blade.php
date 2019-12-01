@extends('layouts.layoutMain')
@section('content')
    <form class="" action="" method="get">
      @csrf
      <div class="">
      <input type="text" name="q" value="{{request('q')}}" placeholder="Buscar">
      </div>
      <div class="">
        <input type="submit" value='Buscar'></input>
      </div>
    </form>
    {{--Imprimo los eventos con su link de detalle--}}
      @foreach ($events as $event)
      <a href="/events/{{$event->id}}">{{$event->name}}</a><br>
     @endforeach
     {{--$events->links()--}}
@endsection
