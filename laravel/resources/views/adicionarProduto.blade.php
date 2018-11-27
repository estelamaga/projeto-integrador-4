@extends('layouts.master')
@section('content')
  <div class="container">
      <h1>Adicionar Produto</h1>
        <form action="/produtos/adicionar" method="POST">
            {{ csrf_field() }}

             {{method_field('POST')}}

          <label>Cor</label>
          <input class="form-control" type="text" name="cor">

          <label>Tamanho</label>
          <input class="form-control" type="text" name="tamanho">

          <label>SKU</label>
          <input class="form-control" type="text" name="SKU">

          <label>EAN</label>
          <input class="form-control" type="text" name="EAN"><br><br>

          <label>Preço</label>
          <input class="form-control" type="text" name="preco">

          <label>Estoque</label>
          <input class="form-control" type="text" name="estoque">

          <label>Nome</label>
          <input class="form-control" type="text" name="nome">

          <label>Descrição</label>
          <input class="form-control" type="text" name="descricao"><br><br>

          <label>Peso</label>
          <input class="form-control" type="text" name="peso">

          <label>Largura</label>
          <input class="form-control" type="text" name="largura">

          <label>Altura</label>
          <input class="form-control" type="text" name="altura">

          <label>Comprimento</label>
          <input class="form-control" type="text" name="comprimento"><br><br>

          <label>Data Validade</label>
          <input class="form-control" type="text" name="data_validade">

          <label>Lote Numero</label>
          <input class="form-control" type="text" name="lote_num">

          <label>Tipo de Produto</label>
          <input class="form-control" type="text" name="tipo_de_produto">

          <label>Fornecedor</label>
          <input class="form-control" type="text" name="fornecedor"><br><br>

          <label for="">Categoria</label>
          <select name="fk_categoria_id" class="form-control">
            <option disabled selected> Selecione</option>
            @foreach($listaDeCategorias as $categoria)
            <option value ="{{$categoria->categoria_id}}">{{$categoria->nome}}</option>
            @endforeach

          </select>


          <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
    </div>
@stop
