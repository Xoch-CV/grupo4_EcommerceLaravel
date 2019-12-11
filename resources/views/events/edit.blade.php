@extends('layouts.layoutForms')

@section('content')
<div class="container-fluid container">
    <div class="header">
        <h3>{{ __('Editar evento') }}</h3>
    </div>
    <div class="row">
        <div class="col-1 col-sm-1 col-md-1 col-lg-2"></div>
            <div class="col-10 col-sm-10 col-md-10 col-lg-8">
            <form class="" action="/events/{{$event->id}}" method="post" enctype="multipart/form-data">
                @method('PATCH')
                    @csrf
                     
                    <div class="row">
                         <div class="col-11 col-sm-12 col-md-10 col-lg-11 inputregister">
                         <label for="name">Nombre</label>
                         {{$event->name}}<br/>
                         <input type="text" name="name" value="{{old('name')}}"><br>
                        <p>{{$errors->first('name')}}</p>
                         </div>

                        <div class="col-11 col-sm-12 col-md-10 col-lg-11 inputregister">
                            <label for="description">Descripción</label>
                            {{$event->description}}<br/>
                            <input type="textarea" name="description" value="{{old('description')}}"><br>
                            <p>{{$errors->first('description')}}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-11 col-sm-12 col-md-10 col-lg-5 inputregister">
                        <label for="initial_date">Fecha de inicio</label>
                        {{\Carbon\Carbon::parse($event->initial_date)->locale('es')->isoFormat("LL")}}<br/>
                        <input type="date" name="initial_date" value="{{old('initial_date')}}"><br>
                        <p>{{$errors->first('initial_date')}}</p>
                        </div>
                    
                        <div class="col-11 col-sm-12 col-md-10 col-lg-5 inputregister">
                        <label for="ending_date">Fecha de fin</label>
                        {{\Carbon\Carbon::parse($event->initial_date)->locale('es')->isoFormat("LL")}}<br/>
                        <input type="date" name="ending_date" value="{{old('ending_date')}}"><br>
                        <p>{{$errors->first('ending_date')}}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-11 col-sm-12 col-md-10 col-lg-5 inputregister">
                        <label for="price">Precio</label>
                        {{$event->price}}<br/>
                        <input type="text" name="price" value="{{old('price')}}"><br>
                        <p>{{$errors->first('price')}}</p>
                        </div>

                        <div class="col-11 col-sm-12 col-md-10 col-lg-5 inputregister">
                        <label for="category_id">Categoría</label>
                        {{$event->category_id}}<br/>
                        <input type="text" name="category_id" value="{{old('category_id')}}"><br>
                        <p>{{$errors->first('category_id')}}</p>
                        </div>
                    </div>
                    <br>
                    <!-- Buttons -->
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                        <input type="file" name="image">
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-6 col-sm-6 col-md-6 col-lg-2">
                        <button type="submit" class="button2">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
                    <!-- Imagen singno exclamacion -->
                    <div class="col-10 col-sm-10 col-md-10 col-lg-2">
                        <img class="register" src="{{asset('img/signo.png')}}" alt="">
                    </div>
    </div>        
</div>
@endsection


​
   