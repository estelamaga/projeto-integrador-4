@extends('layouts.master')
@section('content')
  <div class="container">
        <h1>Excluir Produto</h1><br>

      <form action="/produtos/excluir/{{$produtos->produto_id}}" method="post">

        {{ csrf_field() }}
        {{method_field('DELETE')}}

        <div class="col-md-4">

                    <label>Nome</label>
                    <input class="form-control" type="text" name="nome" value='{{ $produtos->nome}}' readonly><br>

                    <label>Descrição</label>
                    <input class="form-control" type="text" name="descricao" value='{{ $produtos->descricao}}' readonly><br>

                    <label for="">Categoria</label>
                    <select name="fk_categoria_id" class="form-control" disabled>
                      <option disabled selected> Selecione</option>
                      @foreach($listaDeCategorias as $categoria)
                      <option value ="{{$categoria->categoria_id}}"
                        @if($categoria->categoria_id == $produtos->fk_categoria_id)
                             selected="selected"
                         @endif
                        >{{$categoria->nome}}</option>
                      @endforeach

                    </select><br>


                    <label>Cor</label>
                    <input class="form-control" type="text" name="cor" value='{{ $produtos->cor }}' readonly><br>

                    <label>Tamanho</label>
                    <input class="form-control" type="text" name="tamanho" value='{{ $produtos->tamamnho}}' readonly><br>

                    <label>Preço</label>
                    <input class="form-control" type="text" name="preco" value='{{ $produtos->preco}}' readonly><br>

        </div>
        <div class="col-md-4">

          <label>Data Validade</label>
          <input class="form-control" type="text" name="data_validade" value='{{ $produtos->data_validade}}' readonly><br>

          <label>Peso</label>
          <input class="form-control" type="text" name="peso" value='{{ $produtos->peso}}' readonly><br>

          <label>Largura</label>
          <input class="form-control" type="text" name="largura" value='{{ $produtos->largura}}' readonly><br>

          <label>Altura</label>
          <input class="form-control" type="text" name="altura" value='{{ $produtos->altura}}' readonly><br>

          <label>Comprimento</label>
          <input class="form-control" type="text" name="comprimento" value='{{ $produtos->comprimento}}' readonly><br>

          <label>Estoque</label>
          <input class="form-control" type="text" name="estoque" value='{{ $produtos->estoque}}' readonly><br>

        </div>
        <div class="col-md-4">

          <label>Lote Numero</label>
          <input class="form-control" type="text" name="lote_num" value='{{ $produtos->lote_num}}' readonly><br>

          <label>Tipo de Produto</label>
          <input class="form-control" type="text" name="tipo_de_produto" value='{{ $produtos->tipo_de_produto}}' readonly><br>

          <label>Fornecedor</label>
          <input class="form-control" type="text" name="fornecedor" value='{{ $produtos->fornecedor}}' readonly><br>

          <label>SKU</label>
          <input class="form-control" type="text" name="SKU" value='{{ $produtos->SKU}}' readonly><br>

          <label>EAN</label>
          <input class="form-control" type="text" name="EAN"value='{{ $produtos->EAN}}' readonly><br>

          <label>Foto do produto</label><br><br>
          <img src="/{{$produtos->fotoUrl ? : 'storage/fotoProduto/noimage.jpg'}}" alt="Imagem de qualquer produto escolhido." readonly><br>

        </div>

          <div class="col-md-4 pull-right text-center">
          <button class="btn btn-primary" type="submit">Excluir</button><br><br>
        </form>
        </div>
      </div>

@stop
