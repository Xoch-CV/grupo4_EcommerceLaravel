@extends('layouts.layoutMain')
@section('content')

<div class="col-8 buscador">
  <div class="row">
    <form class="" action="/events/{{request('q')}}" method="get" style="width:100%; align:center">
      <div class="inputWithIcon col-12 col-sm-12 col-md-8 col-lg-9" >
        <input type="text" name="q" value="{{request('q')}}" placeholder="Qué querés ir a ver...">
          <i class="fa fa-search fa-lg fa-fw" aria-hidden="true"></i>
      </div>
      <div class="col-12 col-sm-12 col-md-4 col-lg-3 boton">
        <input type="submit" value='Buscar' class="button"></input>
      </div>
    </form>
  </div>
</div>

    <section>
      <div class="divisor col-6 col-lg-2">
      </div>
      <h4>{{ isset($category) ? $category->name : 'Resultado de la búsqueda'}}</h4>
      <div class="row">
        <div class="cards col-12">
        @foreach ($events as $event)
          <div class="col-6 col-lg-2">
            <img src="img/puro-disenio.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$event->name}}</h5>
              <a href="/events/{{$event->id}}" class="btn-cards">Ver más</a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>



@endsection
