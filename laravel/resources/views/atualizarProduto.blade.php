@extends('layouts.master')
@section('content')
  <div class="container">
      <h1>Atualizar Produto</h1><br>
        <form action="/produtos/atualizar/{{ $produtos->produto_id }}" method="POST"  enctype="multipart/form-data">

            {{ csrf_field() }}
            {{method_field('PUT')}}

          <label>Cor</label>
          <input class="form-control" type="text" name="cor" value='{{ $produtos->cor }}'><br>

          <label>Tamanho</label>
          <input class="form-control" type="text" name="tamanho" value='{{ $produtos->tamanho }}'><br>

          <label>SKU</label>
          <input class="form-control" type="text" name="SKU" value='{{ $produtos->SKU }}'><br>

          <label>EAN</label>
          <input class="form-control" type="text" name="EAN" value='{{ $produtos->EAN }}'><br>

          <label>Preço</label>
          <input class="form-control" type="text" name="preco" value='{{ $produtos->preco }}'><br>

          <label>Estoque</label>
          <input class="form-control" type="text" name="estoque" value='{{ $produtos->estoque }}'><br>

          <label>Nome</label>
          <input class="form-control" type="text" name="nome" value="{{ $produtos->nome }}"><br>

          <label>Descrição</label>
          <input class="form-control" type="text" name="descricao" value='{{ $produtos->descricao }}'><br>

          <label>Peso</label>
          <input class="form-control" type="text" name="peso" value='{{ $produtos->peso }}'><br>

          <label>Largura</label>
          <input class="form-control" type="text" name="largura" value='{{ $produtos->largura }}'><br>

          <label>Altura</label>
          <input class="form-control" type="text" name="altura" value='{{ $produtos->altura }}'><br>

          <label>Comprimento</label>
          <input class="form-control" type="text" name="comprimento" value='{{ $produtos->comprimento }}'><br>

          <label>Data Validade</label>
          <input class="form-control" type="text" name="data_validade" value='{{ $produtos->data_validade }}'><br>

          <label>Lote Numero</label>
          <input class="form-control" type="text" name="lote_num" value='{{ $produtos->lote_num }}'><br>

          <label>Tipo de Produto</label>
          <input class="form-control" type="text" name="tipo_de_produto" value='{{ $produtos->tipo_de_produto }}'><br>

          <label>Fornecedor</label>
          <input class="form-control" type="text" name="fornecedor" value='{{ $produtos->fornecedor }}'><br>

          <label for="">Categoria</label>
          <select name="fk_categoria_id" class="form-control" required>
            <option disabled selected>Selecione</option>
            @foreach($listaDeCategorias as $categoria)
            <option value ="{{$categoria->categoria_id}}"
                @if($categoria->categoria_id == $produtos->fk_categoria_id)
                     selected="selected"
                 @endif
              >{{$categoria->nome}}</option>
            @endforeach

          </select><br>

          <label>Foto do produto</label>
          <input type="file" name="fotoUrl">
          <img src="/{{$produtos->fotoUrl ? : 'storage/fotoProduto/noimage.jpg'}}" alt="">


          <button class="btn btn-primary" type="submit">Alterar</button>
        </form>
    </div>
@stop
