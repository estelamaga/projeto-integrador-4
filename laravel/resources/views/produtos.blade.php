@extends('layouts.master')
@section('content')

<div class="container-fluid">
    <h2 class="text-center">Produtos Ecologicos</h2>

        <div class="destaque col-xs-12">
            <div class="container">
              @foreach($produtos as $produto)
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="products">
                        <img src="images/palmeiras1.png" alt="">
                        <h4 class="text-center" style="margin-bottom:2px;">{{$produto->nome}}</h4>
                        <span>{{$produto->descricao}}</span>
                        <br>
                        <a href="/produto/{{$produto->produto_id}}" class="btn btn-info ver-mais">Ver mais</a>
                    </div>
                </div>
                @endforeach

            </div>
            {{ $produtos->links() }}
        </div>
    </div>




@stop
