<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>
    <form class="" action="" method="get">
      @csrf
      <div class="">
      <input type="text" name="q" value="{{request('q')}}" placeholder="Buscar">
      </div>
      <div class="">
        <input type="submit" value='Buscar'></input>
      </div>
    </form>
      @foreach ($events as $event)
      <a href="/events/{{$event->id}}">{{$event->name}}</a><br>
     @endforeach
     {{$events->links()}}
  </body>
</html>
