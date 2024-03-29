<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel = "shortcut icon" type = "imagem/x-icon" href = "images/icon.png"/>

  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>SociAu</title>

  <!-- Refs / styles -->
  <link rel="stylesheet" type="text/css"/>
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
</head>

<body>
  <div class="hero_area">
    <!-- Header -->
    <header class="header_section menu-urls">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">

          <a class="navbar-brander">
            <img src="images/logo.png" width="150px">
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('index') }}">Início</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('index') }}">Sobre </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('index') }}">Serviços </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('index') }}"> Ajuda </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('index') }}">Contato</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <br><br>

  <!-- Home -->
  <section class="home_section" id="help">
    <div class="container">
      <div class="custom_heading-container">
        <h2>
          Modalidades
        </h2>
        <hr>
      </div>
      <p>
        Escolha a modalidade para jogar:
      </p>
      <div class="layout_padding2-top">
        <div class="rowq">
          <div class="col-md-4">
            <div class="img-box">
              <a href="{{ route('blue') }}">
                <img src="images/blocoAzul.png" alt="">
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="img-box">
              <a href="{{ route('yellow') }}">
                <img src="images/blocoAmarelo.png" alt="">
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="img-box">
              <a href="{{ route('pink') }}">
                <img src="images/blocoRosa.png" alt="">
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="img-box">
              <a href="{{ route('green') }}">
                <img src="images/blocoVerde.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <br><br>

  <!-- Infos -->
  <section class="info_section layout_padding">
    <div class="container">
      <div class="info_social">
        <div>
          <a href="">
            <img src="images/fb.png" alt="">
          </a>
        </div>
        <div>
          <a href="">
            <img src="images/twitter.png" alt="">
          </a>
        </div>
        <div>
          <a href="">
            <img src="images/insta.png" alt="">
          </a>
        </div>
      </div>
      <div>
        <p>
            O sistema desenvolvido tem como o objetivo auxiliar pessoas com TEA no aprendizado de
           habilidades sociais e superação desses déficits por meio de quizzes, onde serão 
           representadas histórias sociais em formato de ilustração, perguntas e respostas.
        </p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <section class="container-fluid footer_section">
    <p>
      <a href="{{ route('index') }}">SociAu</a>
    </p>
  </section>

  <!-- Scripts -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>
