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
<!-- INICIO DOS 3 CARROSSEIS -->
<div class="outter container-fluid">

	<h1>Lorem Ipsum</h1>

		<div class="outter first-row row">

			<!-- <h1 class="subtitle">Education</h1> -->

			<div class="col-md-1">

			</div>

			<div class="col-md-10">

				<!-- <div class="container"> -->

<!-- <h2>Carousel Example</h2> -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner">
		<div class="item active">
			<img src="images/organic-clothing.jpeg" alt="" style="width:100%;">
		</div>
		<div class="item">
			<img src="images/bg-cotton.jpg" alt="" style="width:100%;">
		</div>

		<div class="item">
			<img src="images/organic-food.jpeg" alt="" style="width:100%;">
		</div>

		<div class="item">
			<img src="images/recycled-notebooks.jpg" alt="" style="width:100%;">
		</div>
	</div>

	<!-- Left and right controls -->
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
</div>


			</div>

			<!-- <div class="col-md-4">
				<img src="images/chr-afr-sch-comp.jpg" alt="">
				<div><p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
			</div>

			<div class="col-md-4">
				<img src="images/chr-afr-sch-comp.jpg" alt="">
			</div>

					<div class="col-md-4">
					<img src="images/chr-afr-cult.jpeg" alt="">
				</div>
			</div>
		</div> -->


		<!-- <div class="outter first-row row">
			<div class="col-md-7">
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="col-md-5">
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			</div>
		</div>


		<div class="outter first-row row">
			<div class="col-md-7">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="col-md-5">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div> -->
		</div>
<!-- FIM DOS 3 CARROSSEIS -->

<img src="bg.png" alt="">







<!-- /*essa div abaixo eh o fechamento do container todo*/ -->
</div>

<!-- inclusao da navbar do footer -->
<?php include("footer-navbar.php") ?>
<!-- inclusao dos links necessarios do fim da pagina -->
<?php include("links-footer.php") ?>
</body>
</html>
