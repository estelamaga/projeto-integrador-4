<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>

        <h1>Excluir Categoria</h1>

      <div class="container">

      <form action="/categoria/excluir/{{$categoria->id}}" method="POST">

        <!-- Este é um comentário -->
        <!--@csrf-->
        <!--@method('PUT')-->


        {{ csrf_field() }}
        {{method_field('DELETE')}}

          <label>Nome da Categoria</label>
          <input type="text" name="nome" value="{{$categoria->nome}}" readonly>

          <button type="submit">Excluir</button>
        </form>
    </div>
  </body>
</html>
