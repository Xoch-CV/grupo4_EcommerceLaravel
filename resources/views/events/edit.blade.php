<form class="" action="/events/{{$event->id}}" method="post">
  @method('PATCH')
  @csrf
  <div class="">

    <label for="name">Nombre</label>
    {{$event->name}}
    <input type="text" name="name" value="{{old('name')}}"><br>
    <p>{{$errors->first('name')}}</p>

    <label for="description">Descripción</label>
    {{$event->description}}
    <input type="text" name="description" value="{{old('description')}}"><br>
    <p>{{$errors->first('description')}}</p>

    <label for="initial_date">Fecha de inicio</label>
    {{$event->initial_date}}
    <input type="date" name="initial_date" value="{{old('initial_date')}}"><br>
    <p>{{$errors->first('initial_date')}}</p>

    <label for="ending_date">Fecha de fin</label>
    {{$event->ending_date}}
    <input type="date" name="ending_date" value="{{old('ending_date')}}"><br>
    <p>{{$errors->first('ending_date')}}</p>

    <label for="price">Precio</label>
    {{$event->price}}
    <input type="text" name="price" value="{{old('price')}}"><br>
    <p>{{$errors->first('price')}}</p>

    <label for="category_id">Categoría</label>
    {{$event->category_id}}
    <input type="text" name="category_id" value="{{old('category_id')}}"><br>
    <p>{{$errors->first('category_id')}}</p>

  </div>
  <div class="">
    <button type="submit">Guardar</button>
  </div>
</form>
