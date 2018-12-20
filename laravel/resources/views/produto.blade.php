@extends('layouts.master')
@section('content')
<div class="container">
	<div class="card">
		<div class="container-fliud">
			<div class="row">
				<div class="preview col-md-7">
					<div class="row">
						<div class="col-xs-12">
							<div class="content-carousel">
								<div class="owl-carousel">
									<div> <img class="zoom-img" src="/images/camiseta-branca.jpg" data-zoom-image="/images/palmeiras1.png"> </div>
									<div> <img class="zoom-img" src="/images/camiseta-branca.jpg"> </div>
									<div> <img class="zoom-img" src="/images/camiseta-branca.jpg"> </div>
									<div> <img class="zoom-img" src="/images/camiseta-branca.jpg"> </div>
								</div>
							</div>

						</div>

					</div>
				</div>
				<div class="details col-md-5"><br>
					<h3 class="product-title">{{$produto->nome}}</h3>
					<div class="rating">
						<div class="stars">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
						<span class="review-no">0 avaliações</span>
					</div>

					<!-- <p class="product-description">{{$produto->descricao}}</p> -->
					<small class="vote"><strong>0%</strong> de clientes aprovaram este produto <strong>(0 votos)</strong></small>
					<h5 class="sizes">Tamanhos: {{$produto->tamanho}} </h5>
					<h5 class="colors">Cor: {{$produto->cor}} </h5>
					<h4 class="price"><span>R$ {{$produto->preco}}</span></h4>
					<div class="action">
						<a href="/carrinho" class="add-to-cart btn btn-default" type="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> COMPRAR</a>
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
						<div class="row">
							<img src="/images/tamanho.png" alt="tabela com os tamanhos relacionados com altura e largura">
						</div>
						<br><br>
						<p class="product-description">PESO APROXIMADO: 160 g - Tam P (O peso varia de acordo com o tamanho)</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop
