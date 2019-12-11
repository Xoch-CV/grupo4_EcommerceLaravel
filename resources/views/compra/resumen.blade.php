@extends('layouts.layoutMain')

@section('content')

  <h3><b>Elementos agregados al carrito</b></h3>
  <div><p>Compras pendientes: <b>{{$order->events->count('pivot')}}</b></p></div>

  <div class="row compra">
    @foreach ($order->events as $event)
      
        <div class="col-12 col-sm-10 col-md-6 col-lg-3">
          <div class="card">

            <div class="contenedor">
              <img src="/storage/imagenesevento/{{$event->image}}" alt="Foto">
              <form action="/compra/{{$event->id}}" method="post">
                @method('DELETE')
                @csrf
              <div class="boton_eliminar"><input type="hidden" name="id" value="{{$event->id}}">
                  <button type="submit" name="" id="botonEliminar" class="button_eliminar" onclick="eliminarSeleccionEvento()"><i class="fas fa-2x fa-times-circle"></i></button>
              </div>
              </form> 
            </div>
          
            
            <div class="card-body">
              <h3 class="card-title">{{ $event->name }}</h3>
              <p>Día: <b>{{\Carbon\Carbon::parse($event->initial_date)->locale('es')->isoFormat("LL")}}</b></p>
              <p>Precio unitario: <b>$ {{ $event->price }}</b></p>
              <p>Cantidad de tickets: <b> {{ $event->pivot->qty}}</b></p>
              <p>Total: <b>$ {{ $event->pivot->qty * $event->pivot->price }}</b></p>
              <form action="/events/{{$event->id}}" method="get">
              @csrf
                <input type="hidden" name="id" value="">
                <button class="button" type="submit" name="" >Modificar</button>
              </form>
            </div>

          </div>
        </div>
        
    @endforeach
    </div>

    <h3><b>Total de la compra</b></h3>
    <p>Gran total: <b>$ {{ $order->events->sum('pivot.total_event') }}</b></p>
    <div class="">
    <a href="/compra">Finalizar compra</a>
    </div>
    

@endsection
