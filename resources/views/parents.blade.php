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

  <!-- Text -->
  <section class="portfolio_section" id="help">
    <div class="container">
      <div class="custom_heading-container">
        <h2>
          Para os pais...
        </h2>
        <hr>
      </div>
      <p>
        Algumas informações básicas que em caso de uso do sistema sem supervisão profissional, podem ser adquiridas.
      </p>
    </div>
  </section>

  <!-- Info 1 -->
  <section class="parents_section layout_padding">
    <div class="container">
      <div class="d-flex flex-column align-items-end">
        <div class="col-md-6">
          <div class="detail-box">
            <h6>
              Sobre
            </h6>
            <div class="custom_heading-container">
              <h2>
                Transtorno do Espectro Autista
              </h2>
              <hr>
            </div>
            <p>
               O Transtorno do Espectro Autista é definido como uma desordem do neurodesenvolvimento, 
              tendo como uma de suas características principais a dificuldade na comunicação social. 
              Dessa forma, um dos aspectos mais comuns apresentados por pessoas no espectro é um déficit, 
              em maior ou menor grau, nesse conjunto de comportamentos sociais.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Info 2 -->
  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <h6>
              Sobre
            </h6>
            <div class="custom_heading-container">
              <h2>
                Supervisão
              </h2>
              <hr>
            </div>
            <p>
              É de extrema importância a supervisão de um adulto responsável durante as atividades 
              propostas, para que a criança se mantenha focada durante o exercício, assim como o 
              incentivo, para gerar interesse, advertir recompensas como doces e comidas favoritas, 
              brincadeiras e brinquedos ou sair junto a ela posteriormente para tomar sorvete ou 
              lugares os quais ela goste, caso ela consiga uma pontuação razoável.
            </p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Info 3 -->
  <section class="parents_section layout_padding">
    <div class="container">
      <div class="d-flex flex-column align-items-end">
        <div class="col-md-6">
          <div class="detail-box">
            <h6>
              Sobre
            </h6>
            <div class="custom_heading-container">
              <h2>
                TOD
              </h2>
              <hr>
            </div>
            <p>
              O Transtorno Desafiador de Oposição é uma condição caracterizada por padrões recorrentes de 
              comportamento negativo. Normalmente, são direcionados a figuras de autoridade na vida da criança, 
              como pais, professores, familiares e outros adultos. A criança com esse transtorno tem 
              temperamento volátil e conduta desafiante, portanto não é indicado o uso dos quizzes, para não 
              gerar uma má conduta.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

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
