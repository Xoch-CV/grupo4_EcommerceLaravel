<form class="" action="/events/{{$event->id}}" method="post">
  @method('PATCH')
  @csrf
  <div class="">
    <label for="title">Title</label><br>
    {{$event->title}}
    <input type="text" name="title" value="{{old('title')}}"><br>
    <p>{{$errors->first('title')}}</p>
    <label for="rating">Rating</label><br>
    {{$event->rating}}
    <input type="text" name="rating" value="{{old('rating')}}"><br>
    <p>{{$errors->first('rating')}}</p>
    <label for="awards">Awards</label><br>
    {{$event->awards}}
    <input type="text" name="awards" value="{{old('awards')}}"><br>
    <p>{{$errors->first('awards')}}</p>
    <label for="release_date">Release Date</label><br>
    {{$event->release_date}}
    <input type="date" name="release_date" value="{{old('release_date')}}"><br>
    <p>{{$errors->first('release_date')}}</p>
  </div>
  <div class="">
    <button type="submit">Guardar</button>
  </div>
</form>
