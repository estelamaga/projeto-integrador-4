<!DOCTYPE html>
<html>
<!-- linnks necessarios do head -->
		<?php include("head.php") ?>

<header>
	<!-- navbar -->
<?php include("navbar.php") ?>
</header>

<!-- corpo do site -->
<body>
	<div class="container-fluid">
<!-- INICIO DOS 3 CARROSSEIS -->
<div class="container-fluid container-carrossel">
	<div class="row">
	<div class="car1 fundo-color col-md-12">
		carrossel 1
	</div>
	<div class="car2 fundo-color col-md-12">
		carrossel 2
	</div>
	<div class="car3 fundo-color col-md-12">
		carrossel 3
	</div>
</div>
</div>
<!-- FIM DOS 3 CARROSSEIS -->

<img src="bg.png" alt="">





<!-- inclusao da navbar do footer -->
<?php include("footer-navbar.php") ?>

<!-- /*essa div abaixo eh o fechamento do container todo*/ -->
</div>
<!-- inclusao dos links necessarios do fim da pagina -->
<?php include("links-footer.php") ?>
</body>
</html>