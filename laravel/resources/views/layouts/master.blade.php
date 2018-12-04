<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">
  <link rel="stylesheet" href="/css/styles.css">
  <link rel="shortcut icon" type="image/png" href="/favicon/Imagem1.png"/>
  <link href="/thumbnailSlider/3/thumbnail-slider.css" rel="stylesheet" type="text/css" />

  <title>Eco Green</title>
</head>

<body>

  <div class="mynav">
    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header col-md-3 col-sm-3">
          <a href="#" class="cart-mobile visible-xs">
            <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mNav">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/home">
            <img src="/images/logoalgosust.png" alt="algosust-logo" id="navlogo">
          </a>
        </div>
        <div class="col-md-5 col-sm-5 hidden-xs">
          <form class="search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="O que deseja procurar?">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
              </span>
            </div>
          </form>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 pull-right">
          <div id="mNav" class="navbar-collapse collapse ">
            <ul class="nav navbar-nav navbar-right">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Cadastro') }}</a>
                            @endif
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->username }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
              <li class="hidden-xs">
                <a href="/carrinho" class="cart"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar visible-xs">
            <li class="dropdown">
              <a href="#" id="dropcolor" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Roupas
                <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/produtos">Camisetas</a></li>
                <li><a href="/produtos">Agasalhos</a></li>
                <li><a href="/produtos">Vestidos</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Pets</li>
                <li><a href="#">Roupas</a></li>
                <li><a href="#">Alimentos</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" id="dropcolor" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Alimentos
                <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Em breve</a></li>
                <li><a href="#">Em breve</a></li>
                <li><a href="#">Em breve</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" id="dropcolor" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Em
                breve <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Em breve</a></li>
                <li><a href="#">Em breve</a></li>
                <li><a href="#">Em breve</a></li>
              </ul>
            </li>
          </ul>
          </div>
        </div>
        <!--/.nav-collapse -->
      </div>
      <!--/.container-fluid -->
    </nav>
  </div>

  <nav class="navbar navbar-inverse navbar-static-top example6 hidden-xs" id="nav2">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#secNav">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="secNav" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar">
            <li class="dropdown">
              <a href="#" id="dropcolor" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Roupas
                <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="produtos">Camisetas</a></li>
                <li><a href="produtos">Agasalhos</a></li>
                <li><a href="produtos">Vestidos</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Pets</li>
                <li><a href="#">Roupas</a></li>
                <li><a href="#">Alimentos</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" id="dropcolor" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Alimentos
                <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Em breve</a></li>
                <li><a href="#">Em breve</a></li>
                <li><a href="#">Em breve</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" id="dropcolor" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Em
                breve <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Em breve</a></li>
                <li><a href="#">Em breve</a></li>
                <li><a href="#">Em breve</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
      <!--/.container-fluid -->
    </nav>


       @yield('content')


    <footer id="myFooter" class="fixed-bottom">
        <div class="container">
          <div class="row">
            <div class="col-sm-3">
              <a href="#"><img src="/images/logoalgosust.png"></a>
              <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" id="tema-normal">tema normal</button>
                <button type="button" class="btn btn-default" id="tema-dark">tema dark</button>
              </div>
            </div>
            <div class="col-sm-2">
              <h5>Início</h5>
              <ul>
                <li><a href="/home">Home</a></li>
                <li><a href="/register">Cadastro</a></li>
                <li><a href="/produtos">Produtos</a></li>
              </ul>
            </div>
            <div class="col-sm-2">
              <h5>Sobre Nós</h5>
              <ul>
                <li><a href="#">Trabalhe Conosco</a></li>
                <li><a href="/about">Nossa História</a></li>
              </ul>
            </div>
            <div class="col-sm-2">
              <h5>Suporte</h5>
              <ul>
                <li><a href="faq">FAQ</a></li>
                <li><a href="faq">Centro de Ajuda</a></li>
                <!-- <li><a href="#">Forums</a></li> -->
              </ul>
            </div>
            <div class="col-sm-3">
              <div class="social-networks">
                <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
                <a href="#" class="google"><i class="fab fa-google-plus"></i></a>
              </div>
              <button type="button" class="btn btn-default">Contate-nos</button>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <p>© 2018 Eco Green Todos os direitos Reservados </p>
        </div>
      </footer>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
        <script src="/js/main.js"></script>
        <!-- ZOOM JQUERY -->
        <script  type="text/javascript" src="/elevatezoom-master/jquery.js"></script>
        <script src="/elevatezoom-master/jquery.elevatezoom.js" type="text/javascript"></script>
        <script type="text/javascript">
          $("#zoom_01").elevateZoom();
        </script>

        <!--Vertical Tumbnails  -->
        <script src="/thumbnailSlider/3/thumbnail-slider.js" type="text/javascript"></script>

      </body>
    </html>
