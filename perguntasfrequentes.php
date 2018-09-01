<!DOCTYPE html>
<html>
<!-- linnks necessarios do head -->
		<?php include("head.php") ?>

<!-- corpo do site -->
<body>
	<header>
		<!-- navbar -->
	<?php include("navbar.php") ?>
	</header>
	<div class="container-fluid">

<div class="outter container-fluid">


	<div class="pf"> <h1> Perguntas Frequentes</h2></div>

	  <div class="subtitulo">
	  <h2>  Sobre a loja </h2>
	    <div class="pergunta">
	      <h3>
	        <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#confiavel">  I) Esta loja é confiável?</button>
	      </h3>
	      <h4>
	    <div id="confiavel" class="collapse">    É sim. Embora sejamos uma loja nova, possuímos CNPJ ativa e endereço físico. </div>
	      </h4>
	    </div>

	    <div class="pergunta">
	      <h3>
	    <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#fisica">    II) Vocês possuem loja física?</button>
	      </h3>
	      <h4>
	    <div id="fisica" class="collapse">    Não temos um ponto comercial. Nosso espaço físico é exclusivamente para depósito do estoque e área de trabalho. </div>
	      </h4>
	    </div>

	  </div>


	  <div class="subtitulo">
	  <h2>  Pedidos  </h2>
	    <div class="pergunta">
	      <h3>
	      <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#abc">  III) Como faço um pedido na loja? </button>
	      </h3>
	      <h4>
	        <div id="abc" class="collapse">Basta criar uma conta no site, adicionar produtos ao carrinho de compras e finalizar o pedido informando uma opção de compra, tudo feito no ambiente de site.</div>
	      </h4>
	    </div>

	    <div class="pergunta">
	      <h3>
	        <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#def">  IV) Quanto tempo demora para entregar a compra?</button>
	      </h3>
	      <h4>
	      <div id="def" class="collapse">  O prazo de entrega dependerá da opção de frete escolhida e do CEP, o prazo estimado irá aparecer no fechamento da compra. </div>
	      </h4>
	    </div>

	    <div class="pergunta">
	      <h3>
	    <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#ghi">    V) Quais as opções de frete?</button>
	      </h3>
	      <h4>
	    <div id="ghi" class="collapse">   Em geral usamos Sedex e Pac dos Correios, mas dependendo da localidade podemos optar por transportadora particular, esta opção apenas quando cliente não seleciona a opção de entrega (quando ocorre frete grátis). </div>
	      </h4>
	    </div>


	    <div class="pergunta">
	      <h3>
	    <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#jkl">    VI) Tem frete grátis?</button>
	      </h3>
	      <h4>
	    <div id="jkl" class="collapse">   Sim! A partir de R$300,00 o frete é grátis </div>
	      </h4>
	    </div>

	  </div>


	  <div class="subtitulo">
	  <h2>  Trocas e devoluções  </h2>
	      <div class="pergunta">
	      <h3>
	        <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#lmn">  VII) Como faço para trocar um produto?</button>
	      </h3>
	      <h4>
	      <div id="lmn" class="collapse">  Toda solicitação de troca, devolução, arrependimento e avaria do produto deverá ser comunicado por email. Responderemos em até 5 dias úteis com o procedimento de troca. </div>
	      <h4>

	        <h3>

	        <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#opq">  VIII) Se não gostei ou me arrependi do produto posso devolver?</button>

	        </h3>
	        <h4>
	        <div id="opq" class="collapse">  Sim. Conforme o código de defesa do consumidor você tem até 7 dias corridos (incluído finais de semana e feriados) a partir do recebimento do produto para efetuar a devolução. Basta realizar o comunicado via email dentro do prazo, que passaremos as instruções.</div>
	        <h4>
	      </div>



		</div>
	</div>







<!-- /*essa div abaixo eh o fechamento do container todo*/ -->
</div>

<!-- inclusao da navbar do footer -->
<?php include("footer-navbar.php") ?>
<!-- inclusao dos links necessarios do fim da pagina -->
<?php include("links-footer.php") ?>
</body>
</html>
