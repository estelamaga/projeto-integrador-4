<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>
    <link
    rel="stylesheet" href="/css/app.css">
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

    <h1>Adicionar Produto</h1>

      <div class="container">

      <form action="/produtos/adicionar" method="POST">

        {{ csrf_field() }}

          <label>Cor</label>
          <input type="text" name="cor">

          <label>Tamanho</label>
          <input type="text" name="tamanho">

          <label>SKU</label>
          <input type="text" name="SKU">

          <label>EAN</label>
          <input type="text" name="EAN"><br><br>

          <label>Preço</label>
          <input type="text" name="preco">

          <label>Estoque</label>
          <input type="text" name="estoque">

          <label>Nome</label>
          <input type="text" name="nome">

          <label>Descrição</label>
          <input type="text" name="descricao"><br><br>

          <label>Peso</label>
          <input type="text" name="peso">

          <label>Largura</label>
          <input type="text" name="largura">

          <label>Altura</label>
          <input type="text" name="altura">

          <label>Comprimento</label>
          <input type="text" name="comprimento"><br><br>

          <label>Data Validade</label>
          <input type="text" name="data_validade">

          <label>Lote Numero</label>
          <input type="text" name="lote_num">

          <label>Tipo de Produto</label>
          <input type="text" name="tipo_de_produto">

          <label>Fornecedor</label>
          <input type="text" name="fornecedor"><br><br>

          <label>Fk categoria_id</label>
          <input type="text" name="fk_categoria_id"><br><br>


          <button type="submit">Enviar</button>
        </form>
    </div>
  </body>
</html>
