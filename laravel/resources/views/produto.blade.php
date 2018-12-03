@extends('layouts.master')
@section('content')

<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="/{{$produto->fotoUrl ? : 'storage/fotoProduto/noimage.jpg'}}" alt=""></div>
						  <div class="tab-pane" id="pic-2"><img src="/images/palmeiras1.png" /></div>
						  <div class="tab-pane" id="pic-3"><img src="/images/palmeiras1.png" /></div>
						  <div class="tab-pane" id="pic-4"><img src="/images/palmeiras1.png" /></div>
						  <div class="tab-pane" id="pic-5"><img src="/images/palmeiras1.png" /></div>
						</div>


						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="/{{$produto->fotoUrl ? : 'storage/fotoProduto/noimage.jpg'}}" alt=""></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="/images/palmeiras1.png" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="/images/palmeiras1.png" /></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="/images/palmeiras1.png" /></a></li>
						  <li><a data-target="#pic-5" data-toggle="tab"><img src="/images/palmeiras1.png" /></a></li>
						</ul>
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">{{$produto->nome}}</h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
							</div>
							<span class="review-no">41 avaliações</span>
						</div>
						<!-- <p class="product-description">{{$produto->descricao}}</p> -->
						<h4 class="price">Preço atual: <span>R$ {{$produto->preco}}</span></h4>
						<p class="vote"><strong>91%</strong> de clientes aprovaram este produto <strong>(87 votos)</strong></p>
						<h5 class="sizes">Tamanhos:
							<span class="size" data-toggle="tooltip" title="small">P</span>
							<span class="size" data-toggle="tooltip" title="medium">M</span>
							<span class="size" data-toggle="tooltip" title="large">G</span>
						</h5>
						<h5 class="colors">Cor: {{$produto->cor}}	</h5>
						<div class="action">
							<button class="add-to-cart btn btn-default" type="button"><i class="fa fa-plus"></i>Carrinho</button>
							<button class="like btn btn-default" type="button" id="fav"><span class="fa fa-heart"></span></button>
						</div>


					</div>
				</div>
				<div class="wrapper row">
					<div class="col-xs-12">
						<div class="informacoes col-md-12 text-justify">
							<hr>
							<h3 class="">Informações do Produto</h3><br>
							<p class="product-description">{{$produto->descricao}}</p>
							<hr>
							<h3 class="">Dimensões e Peso</h3>
							<p class="product-description">PESO APROXIMADO: 160 g - Tam P (O peso varia de acordo com o tamanho)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>

@stop
