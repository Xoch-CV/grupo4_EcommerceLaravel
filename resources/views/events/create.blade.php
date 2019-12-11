<form class="" action="/events" method="post" enctype="multipart/form-data">
  @csrf
  <div class="">
    <label for="name">Nombre</label>
    <input type="text" name="name" value="{{old('name')}}"><br>
    <p>{{$errors->first('name')}}</p>

    <label for="description">Descripción</label>
    <input type="text" name="description" value="{{old('description')}}"><br>
    <p>{{$errors->first('description')}}</p>

    <label for="initial_date">Fecha de inicio</label>
    <input type="date" name="initial_date" value="{{old('initial_date')}}"><br>
    <p>{{$errors->first('initial_date')}}</p>

    <label for="ending_date">Fecha de fin</label>
    <input type="date" name="ending_date" value="{{old('ending_date')}}"><br>
    <p>{{$errors->first('ending_date')}}</p>

    <label for="price">Precio</label>
    <input type="text" name="price" value="{{old('price')}}"><br>
    <p>{{$errors->first('price')}}</p>

    <label for="category_name">Categoría</label>
    <input type="text" name="category_id" value="{{old('category_name')}}"><br>
    <p>{{$errors->first('category_name')}}</p>

    <label for="">Imagen</label>
    <input type="file" name="image" value="">

  </div>
  <div class="">
    <button type="submit">Guardar</button>
  </div>
</form>
