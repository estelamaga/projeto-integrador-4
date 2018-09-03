<!--INICIO DA NAVBAR-->
<div class="container-fluid">
	<nav class="my-navbar navbar navbar-default navbar-fixed-top">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class=" my-navbar collapse navbar-collapse cor-texto" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav ">
					 <li class=logo-img><a href="index.php"></a><img src="images/logo.png" alt=""></li>
		        <!-- <li class=" my-navbar2"><a href="#">Home <span class="sr-only">(current)</span></a></li> -->
		        <li><a href="about.php">About</a></li>
						<li><a href="comingsoon.php">Produtos Reciclados</a></li>
						<li><a href="contato.php">Alimentos Organicos</a></li>
						<!-- <li><a href="perguntasfrequentes.php">FAQ</a></li> -->
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Roupas Organicas<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="comingsoon.php">Feminina</a></li>
	            <li><a href="comingsoon.php">Masculina</a></li>
	            <li><a href="comingsoon.php">Infantil</a></li>
							<li><a href="comingsoon.php">Pets</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="comingsoon.php">Sobre nossos produtos</a></li>
	            <li role="separator" class="divider"></li>
	            <!-- <li><a href="helping.hands.php">Helping Others</a></li> -->
	          </ul>
	        </li>
	      </ul>
	      <form class="navbar-form navbar-right">
	        <a type="submit" class="btn my-btn" href="login.php">Login</a>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="I am looking for">
					</div>
					<button type="submit" class="btn my-btn">Search</button>


					<div class="navbar-form navbar-right">
					<ul class="nav navbar-nav">
						 <li class=cart-img><a href="comingsoon.php"></a><img src="images/shopping-cart-img2.png" alt=""></li>
		        </ul>
					</div>
	      </form>
	     <!-- <ul class="nav navbar-nav navbar-right">
	        		<li><a href="#">Link</a></li>
	        		<li class="dropdown">
	          		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
	          		<ul class="dropdown-menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	          </ul> -->
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
		</nav>
	  </div><!-- /.container-fluid -->

<!--FIM DA NAVBAR  -->


<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="estilo.css" rel="stylesheet">
  </head>
  <body>
  <div class="container">
    <form class="text-center">
    <h1> Fazer Login</h1>
    <label for="">Email:</label>
    <input type="text" name="Email" placeholder="Ex:pedro@hotmail.com" class="form-control">
    <label for="">Senha:</label>
    <input type="text" name="senha" value="******" class="form-control">
    <button class="btn" type="button">Entrar</button>
    <br>
    <button  class="btn Facebook" type="button">Entrar com Facebook</button>
    <p>Não tem cadastro? <a href="#">Cadastre-se</a></p>
    </form>
  </div>
  </body>
  </html>





  <!--INICIO DO FOOTER -->
  <div class="container-fluid footer-container">
  <footer>
  	<div class="row footer">
  	<div class="col-md-3">
  		<ul>
  	    <li><a href="index.php">Home</a></li>
  	    <li><a href="about.php">About</li>
  	    <li><a href="contato.php">Contact</li>
  			<li><a href="helping-hands.php">Helping Others</li>
  	    <li><a href="perguntasfrequentes.php">FAQ</li>
  	  </ul>
  	</div>

  	<div class="col-md-3">
  		<ul>
  			<li><a href="comingsoon.php">Your Account</li>
  			<li><a href="comingsoon.php">Your Orders</li>
  			<li><a href="comingsoon.php">Shipping Rates & Poilicies</li>
  			<li><a href="comingsoon.php">Return and Replacements</li>
  			<li><a href="comingsoon.php">Help</li>
  		</ul>
  	</div>
  		<div class="col-md-3">
  	<ul>
  		<li><a href="comingsoon.php">Sell on Green Heart</li>
  		<li><a href="comingsoon.php">Sell your services on Green Heart</li>
  		<li><a href="comingsoon.php">Sell your apps on Green Heart</li>
  		<li><a href="comingsoon.php">Advertise on Green Heart</li>
  		<li><a href="comingsoon.php">Learn More</li>
  	</ul>
  		</div>
  	<div class="col col-md-3">
  		<ul>
  			<li><a href="comingsoon.php">Payment Options</li>
  				<img class=payment-img src="images/payment.png" alt="">
  		</ul>

  	</div>
  	</div>
  	</footer>
  </div>

  <!-- FIM DO FOOTER -->
