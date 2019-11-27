 @extends('layouts.layoutMain')
 @section('content')
 <main>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Primer slide -->
          <div class="carousel-item active">
            <img src="img/la-odisea-de-los-giles.jpg" alt="">
            <div class="carousel-caption">
              <h2>La Odisea de los Giles</h2>
              <p class="lead">Se metieron con los perdedores equivocados.</p>
            </div>
          </div>
          <!-- Segundo slide -->
          <div class="carousel-item">
            <img src="img/messi-cirque-du-soleil.png" alt="">
            <div class="carousel-caption">
              <h2>Messi 10</h2>
              <p class="lead">El nuevo espectáculo de Cirque du Soleil.</p>
            </div>
          </div>
          <!-- Tercer slide -->
          <div class="carousel-item">
            <img src="img/metallica2017.jpg" alt="">
            <div class="carousel-caption">
              <h2>Metallica</h2>
              <p class="lead">18 de abril. Campo Argentino de Polo.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
      </div>
        <form class="" action="/events/{{request('q')}}" method="get">
        @csrf
        <div class="container">
          <div class="inputWithIcon">
            <input type="text" name="q" value="{{request('q')}}" placeholder="Buscar">
            <i class="fa fa-search fa-lg fa-fw" aria-hidden="true"></i>
          <input type="submit" value='Buscar'></input>
      </div>
        </div>
        </form>

        <div class="row">
          <div class="col-lg-1">
          </div>
          <div class="col-lg-10">
            <ul class="row principal">
            @foreach ($categories as $category)
              <li class="col-6 col-sm-6 col-md-4 col-lg-2">
              <a href="{{ url('categories/' . $category->id) }}">
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