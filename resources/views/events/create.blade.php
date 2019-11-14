<form class="" action="/events" method="post">
  @csrf
  <div class="">
    <label for="title">Title</label>
    <input type="text" name="title" value="{{old('title')}}"><br>
    <p>{{$errors->first('title')}}</p>
    <label for="rating">Rating</label>
    <input type="text" name="rating" value="{{old('rating')}}"><br>
    <p>{{$errors->first('rating')}}</p>
    <label for="awards">Awards</label>
    <input type="text" name="awards" value="{{old('awards')}}"><br>
    <p>{{$errors->first('awards')}}</p>
    <label for="release_date">Release Date</label>
    <input type="date" name="release_date" value="{{old('release_date')}}"><br>
    <p>{{$errors->first('release_date')}}</p>
  </div>
  <div class="">
    <button type="submit">Guardar</button>
  </div>
</form>
