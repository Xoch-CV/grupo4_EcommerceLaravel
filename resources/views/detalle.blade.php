<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Detalle del evento {{$event->name}}</h1>
    <form class="" action="/events/{{$event->id}}" method="post">
      @method('DELETE')
      @csrf
      <input type="hidden" name="id" value="{{$event->id}}">
      <input type="submit" name="" value="Borrar Evento">

    </form>
    <a href="/events/{{$event->id}}/edit">Editar</a>
  </body>
</html>
