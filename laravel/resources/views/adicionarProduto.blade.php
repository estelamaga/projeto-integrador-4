<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>

        @if ($errors->count())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li> {{$error}}</li>
            @endforeach
          </ul>
        </div>
        @endif

    <h1>Adicionar Categoria</h1>

      <div class="container">

      <form action="/categoria/adicionar" method="POST">

        {{ csrf_field() }}

          <label>Nome da Categoria</label>
          <input type="text" name="nome">

          <button type="submit">Enviar</button>
        </form>
    </div>
  </body>
</html>
