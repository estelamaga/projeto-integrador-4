@extends('layouts.master')
@section('content')
  <div class="container">
      <h1>Adicionar Produto</h1><br>
        <form action="/produtos/adicionar" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

             {{method_field('POST')}}
          <div class="col-md-4">

                      <label>Nome</label>
                      <input class="form-control" type="text" name="nome" required><br>

                      <label>Descrição</label>
                      <input class="form-control" type="text" name="descricao"><br>
                      <label for="">Categoria</label>
                      <select name="fk_categoria_id" class="form-control" required>
                        <option disabled selected> Selecione</option>
                        @foreach($listaDeCategorias as $categoria)
                        <option value ="{{$categoria->categoria_id}}">{{$categoria->nome}}</option>
                        @endforeach

                      </select><br>

                      <label>Cor</label>
                      <input class="form-control" type="text" name="cor" required><br>

                      <label>Tamanho</label>
                      <input class="form-control" type="text" name="tamanho" required><br>

                      <label>Preço</label>
                      <input class="form-control" type="text" name="preco"><br>


          </div>
          <div class="col-md-4">
            <label>Data Validade</label>
            <input class="form-control" type="date" name="data_validade"><br>


            <label>Peso</label>
            <input class="form-control" type="text" name="peso"><br>

            <label>Largura</label>
            <input class="form-control" type="text" name="largura"><br>

            <label>Altura</label>
            <input class="form-control" type="text" name="altura"><br>

            <label>Comprimento</label>
            <input class="form-control" type="text" name="comprimento"><br>

            <label>Estoque</label>
            <input class="form-control" type="text" name="estoque"><br>


          </div>
          <div class="col-md-4">

            <label>Lote Numero</label>
            <input class="form-control" type="text" name="lote_num"><br>

            <label>Tipo de Produto</label>
            <input class="form-control" type="text" name="tipo_de_produto"><br>

            <label>Fornecedor</label>
            <input class="form-control" type="text" name="fornecedor"><br>

            <label>SKU</label>
            <input class="form-control" type="text" name="SKU"><br>

            <label>EAN</label>
            <input class="form-control" type="text" name="EAN"><br>

            <label>Foto do produto</label>
            <input type="file" name="fotoUrl">
          </div>

          <div class="col-xs-12 text-right">
            <button class="btn btn-primary btn-lg" type="submit">Enviar</button>
          </div>

        </form>
    </div>
@stop
