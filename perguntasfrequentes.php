<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

 <link href="..\projeto-integrador-4\cssfaq.css" rel="stylesheet">

</head>
<body>
  <div class="container">
<header>

  <?php include("navbar.php") ?>


</header>


<div class="pf"> <h1> Perguntas Frequentes</h2></div>

  <div class="subtitulo">
  <h2>  Sobre a loja </h2>
    <div class="pergunta">
      <h3>
        <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#confiavel">  I) Esta loja é confiável?</button>
      </h3>
      <h4>
    <div id="confiavel" class="collapse">    É sim </div>
      </h4>
    </div>

    <div class="pergunta">
      <h3>
    <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#fisica">    II) Vocês possuem loja física?</button>
      </h3>
      <h4>
    <div id="fisica" class="collapse">    Não </div>
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
        <div id="abc" class="collapse">Basta criar uma conta no site, adicionar produtos ao carrinho de compras e finalizar o pedido informando uma opção de compra, tudo feito no site.</div>
      </h4>
    </div>

    <div class="pergunta">
      <h3>
        <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#def">  IV) Quanto tempo demora para entregar a compra?</button>
      </h3>
      <h4>
      <div id="def" class="collapse">  O prazo de entrega dependerá da opção de frete escolhida e do CEP, o prazo irá aparecer no fechamento da compra. </div>
      </h4>
    </div>

    <div class="pergunta">
      <h3>
    <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#ghi">    V) Quais as opções de frete?</button>
      </h3>
      <h4>
    <div id="ghi" class="collapse">    Trabalhamos com Sedex e Pac, ou transportadora particular </div>
      </h4>
    </div>


    <div class="pergunta">
      <h3>
    <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#jkl">    VI) Tem frete grátis?</button>
      </h3>
      <h4>
    <div id="jkl" class="collapse">   A partir de R$300,00 o frete é grátis </div>
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
      <div id="lmn" class="collapse">  Toda solicitação de troca, devolução, arrependimento e avaria do produto deverá ser comunicado por email </div>
      <h4>

        <h3>

        <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#opq">  VIII) Se não gostei ou me arrependi do produto posso devolver?</button>

        </h3>
        <h4>
        <div id="opq" class="collapse">  Sim. Conforme o código de defesa do consumidor você tem até 7 dias corridos (incluído finais de semana e feriados) a partir do recebimento do produto para efetuar a devolução.</div>
        <h4>
      </div>


  </div>
</div>
<?php include("footer-navbar.php") ?>
<?php include("links-footer.php") ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
