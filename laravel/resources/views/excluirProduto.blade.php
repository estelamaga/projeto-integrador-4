@extends('layouts.master')
@section('content')
  <div class="container">
        <h1>Excluir Produto</h1>

      <form action="/produtos/excluir/{{$produtos->produto_id}}" method="post">

        {{ csrf_field() }}
        {{method_field('DELETE')}}


          <label>Cor</label>
          <input class="form-control" type="text" name="cor" value='{{ $produtos->cor }}' readonly>

          <label>Tamanho</label>
          <input class="form-control" type="text" name="tamanho" value='{{ $produtos->tamamnho}}' readonly>

          <label>SKU</label>
          <input class="form-control" type="text" name="SKU" value='{{ $produtos->SKU}}' readonly>

          <label>EAN</label>
          <input class="form-control" type="text" name="EAN"value='{{ $produtos->EAN}}' readonly><br><br>

          <label>Preço</label>
          <input class="form-control" type="text" name="preco" value='{{ $produtos->preco}}' readonly>

          <label>Estoque</label>
          <input class="form-control" type="text" name="estoque" value='{{ $produtos->estoque}}' readonly>

          <label>Nome</label>
          <input class="form-control" type="text" name="nome" value='{{ $produtos->nome}}' readonly>

          <label>Descrição</label>
          <input class="form-control" type="text" name="descricao" value='{{ $produtos->descricao}}' readonly><br><br>

          <label>Peso</label>
          <input class="form-control" type="text" name="peso" value='{{ $produtos->peso}}' readonly>

          <label>Largura</label>
          <input class="form-control" type="text" name="largura" value='{{ $produtos->largura}}' readonly>

          <label>Altura</label>
          <input class="form-control" type="text" name="altura" value='{{ $produtos->altura}}' readonly>

          <label>Comprimento</label>
          <input class="form-control" type="text" name="comprimento" value='{{ $produtos->comprimento}}' readonly><br><br>

          <label>Data Validade</label>
          <input class="form-control" type="text" name="data_validade" value='{{ $produtos->data_validade}}' readonly>

          <label>Lote Numero</label>
          <input class="form-control" type="text" name="lote_num" value='{{ $produtos->lote_num}}' readonly>

          <label>Tipo de Produto</label>
          <input class="form-control" type="text" name="tipo_de_produto" value='{{ $produtos->tipo_de_produto}}' readonly>

          <label>Fornecedor</label>
          <input class="form-control" type="text" name="fornecedor" value='{{ $produtos->fornecedor}}' readonly><br><br>

          <label for="">Categoria</label>
          <select name="fk_categoria_id" class="form-control">
            <option disabled selected> Selecione</option>
            @foreach($listaDeCategorias as $categoria)
            <option value ="{{$categoria->categoria_id}}">{{$categoria->nome}}</option>
            @endforeach

          </select>


          <button class="btn btn-primary" type="submit">Excluir</button>
        </form>
        </div>
@stop
