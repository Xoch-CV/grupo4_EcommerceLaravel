@extends('layouts.layoutMain')
 @section('content')

 <main>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        <div class="carousel-inner" role="listbox">
          <!-- Primer slide -->
          <div class="carousel-item active">
            <img src="{{asset('storage/la-odisea-de-los-giles.jpg')}}" alt="">
            <img src="img/la-odisea-de-los-giles.jpg" alt="">
            <div class="carousel-caption">
              <h2>La Odisea de los Giles</h2>
              <p class="lead">Se metieron con los perdedores equivocados.</p>
              <div class="boton">
                <input type="submit" value='comprar entrada' class="button"></input>
              </div>
            </div>
          </div>
          <!-- Segundo slide -->
          <div class="carousel-item">
            <img src="{{asset('storage/messi-cirque-du-soleil.png')}}" alt="">
            <div class="carousel-caption">
              <h2>Messi 10</h2>
              <p class="lead">El nuevo espectáculo de Cirque du Soleil.</p>
              <div class="boton">
                <input type="submit" value='comprar entrada' class="button"></input>
              </div>
            </div>
          </div>
          <!-- Tercer slide -->
          <div class="carousel-item">
          <img src="{{asset('storage/metallica2017.jpg')}}" alt="">
            <div class="carousel-caption">
              <h2>Metallica</h2>
              <p class="lead">18 de abril. Campo Argentino de Polo.</p>
              <div class="boton">
                <input type="submit" value='comprar entrada' class="button"></input>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      
      <div class="col-8 buscador">
        <div class="row">

          
      
          <form class="" action="/events/{{request('q')}}" method="get" style="width:100%; align:center">
          @csrf
          
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

        <div class="row">
          <div class="col-lg-1">
          </div>
          <div class="col-lg-10">
            <ul class="row principal">
            @foreach ($categories as $category)
              <li class="col-6 col-sm-6 col-md-4 col-lg-2">
              <a href="{{ url('categories/' . $category->name) }}">
                <i class="{{$category->icono}}"></i><h3>{{$category->name}}</h3>
              </a>
              </li>
            @endforeach
            </ul>
          </div>
        </div>
    </main>


 <section>
      <div class="divisor col-6 col-lg-2">
      </div>
      <h4>Recomendados</h4>
      <div class="row">
        <div class="cards col-12">
          <div class="col-6 col-lg-2">
            <img src="img/puro-disenio.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Feria Puro Diseño</h5>
              <a href="#" class="btn-cards">Ver más</a>
            </div>
          </div>
          <div class="col-6 col-lg-2">
            <img src="img/elmato.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">El Mató a un Policía Motorizado</h5>
              <a href="#" class="btn-cards">Ver más</a>
            </div>
          </div>
          <div class="col-6 col-lg-2">
            <img src="img/motogp.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Moto GP</h5>
              <a href="#" class="btn-cards">Ver más</a>
            </div>
          </div>
          <div class="col-6 col-lg-2">
            <img src="img/volar.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Enrique piñeyro</h5>
              <a href="#" class="btn-cards">Ver más</a>
            </div>
          </div>
        </div>
      </div>
    </section>
 @endsection