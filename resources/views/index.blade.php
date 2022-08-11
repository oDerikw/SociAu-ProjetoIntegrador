@extends('layouts.layout')

@section('content')
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
                  <a class="nav-link" href="{{ url('/#about') }}">Sobre </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/#services') }}">Serviços </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/#help') }}"> Ajuda </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/#contact') }}">Contato</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <!-- Start -->
    <section class=" start_section position-relative">
      <div class="meio"> 
        <div class="texto">
          <h1>Treine suas habilidades sociais</h1>
          <h2>Quizzes para auxiliar pessoas com TEA 
            no desenvolvimento de habilidades sociais.</h2>
        </div>

        <div class="btn-wrap">
          <img class="homep" width="100%" src="images/Home.png">
          <a href="{{ route('jogar') }}">
          <button class="homeb"><img class="homebb" src="images/play.png" height="">PLAY</button></a>
        </div>
        
      </div>
      <svg id="wave" viewBox="0 0 1440 210">
        <path fill="#42cefe" fill-opacity="1" d="M0,21L14.1,31.5C28.2,42,56,63,85,
        59.5C112.9,56,141,28,169,38.5C197.6,49,226,98,254,108.5C282.4,119,311,91,
        339,73.5C367.1,56,395,49,424,59.5C451.8,70,480,98,508,112C536.5,126,565,
        126,593,112C621.2,98,649,70,678,49C705.9,28,734,14,762,14C790.6,14,819,
        28,847,42C875.3,56,904,70,932,70C960,70,988,56,1016,73.5C1044.7,91,1073,
        140,1101,133C1129.4,126,1158,63,1186,63C1214.1,63,1242,126,1271,133C1298.8,
        140,1327,91,1355,70C1383.5,49,1412,56,1440,66.5C1468.2,77,1496,91,1525,
        80.5C1552.9,70,1581,35,1609,38.5C1637.6,42,1666,84,1694,91C1722.4,98,1751,
        70,1779,59.5C1807.1,49,1835,56,1864,80.5C1891.8,105,1920,147,1948,140C1976.5,
        133,2005,77,2019,49L2032.9,21L2032.9,210L2018.8,210C2004.7,210,1976,210,1948,
        210C1920,210,1892,210,1864,210C1835.3,210,1807,210,1779,210C1750.6,210,1722,210,
        1694,210C1665.9,210,1638,210,1609,210C1581.2,210,1553,210,1525,210C1496.5,210,
        1468,210,1440,210C1411.8,210,1384,210,1355,210C1327.1,210,1299,210,1271,
        210C1242.4,210,1214,210,1186,210C1157.6,210,1129,210,1101,210C1072.9,210,1045,
        210,1016,210C988.2,210,960,210,932,210C903.5,210,875,210,847,210C818.8,210,791,
        210,762,210C734.1,210,706,210,678,210C649.4,210,621,210,593,210C564.7,210,536,
        210,508,210C480,210,452,210,424,210C395.3,210,367,210,339,210C310.6,210,282,210,
        254,210C225.9,210,198,210,169,210C141.2,210,113,210,85,210C56.5,210,28,210,14,
        210L0,210Z"></path>
      </svg>
    </section>
  </div>

  <!-- Sobre -->
  <section class="about_section layout_padding" id="about">
    <div class="container">
      <div class="row">
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
            <div>
              <a href="{{ route('parents') }}">
                Para os pais...
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/about-img.png" alt="">
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Serviços -->
  <section class="service_section layout_padding" id="services">
    <div class="container">
      <div class="d-flex flex-column align-items-end">
        <div class="custom_heading-container">
          <hr>
          <h2>
            Serviços
          </h2>

        </div>
        <p>
          Modalidades de exercícios propostos em nosso site.
        </p>
      </div>
    </div>
    <div class="container">
      <div class="service_container layout_padding2">
        <a href="">
          <div class="box">
            <div class="img-box">
              <img src="images/s-5.png" alt="" class="img-1">
              <img src="images/s5-blue.png" alt="" class="img-2">
            </div>
            <div class="name">
              <h6>
                Quizz 1
              </h6>
            </div>
          </div>
        </a>
        <a href="">
          <div class="box">
            <div class="img-box">
              <img src="images/s-4.png" alt="" class="img-1">
              <img src="images/s4-blue.png" alt="" class="img-2">
            </div>
            <div class="name">
              <h6>
                Quizz 2
              </h6>
            </div>
          </div>
        </a>
        <a href="">
          <div class="box">
            <div class="img-box">
              <img src="images/s-5.png" alt="" class="img-1">
              <img src="images/s5-blue.png" alt="" class="img-2">
            </div>
            <div class="name">
              <h6>
                Quizz 3
              </h6>
            </div>
          </div>
        </a>
        <a href="">
          <div class="box">
            <div class="img-box">
              <img src="images/s-4.png" alt="" class="img-1">
              <img src="images/s4-blue.png" alt="" class="img-2">
            </div>
            <div class="name">
              <h6>
                Quizz 4
              </h6>
            </div>
          </div>
        </a>

      </div>
    </div>
    <div class="read-btn">
      <a href="{{ route('jogar') }}">
        Começar
      </a>
    </div>
  </section>

  <!-- Especialistas -->
  <section class="pro_section layout_padding" id="help">
    <div class="container">
      <div class="d-flex flex-column">
        <div class="custom_heading-container">
          <h2>
            Especialistas
          </h2>
          <hr>

        </div>
        <p>
          Alguns dos profissionais que supervisionaram e ajudaram no projeto:
        </p>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="box">
            <div class="img-box">
              <img src="images/n-2.jpg" alt="">
            </div>
            <div class="action-box">
              <div class="action">
                <a href="">
                  <img src="images/share.png" alt="">
                </a>
              </div>
            </div>
            <div class="detail-box">
              <h4>
                Rosemeire S. P.
              </h4>
              <p>
                Rhoncus adipiscing dictumst quisque venenatis senectus congue vehicula sociosqu viverra et, 
                netus ultricies nulla ullamcorper volutpat tempus elit proin aenean.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box">
            <div class="img-box">
              <img src="images/n-3.png" alt="">
            </div>
            <div class="action-box">
              <div class="action">
                <a href="">
                  <img src="images/share.png" alt="">
                </a>
              </div>
            </div>
            <div class="detail-box">
              <h4>
                Karina G.
              </h4>
              <p>
                Fermentum morbi consectetur amet est aliquam habitasse varius suscipit id, 
                bibendum velit libero placerat non tincidunt tristique nisi.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contato -->
  <section class="contact_section layout_padding-bottom" id="contact">
    <div class="container">
      <div class="d-flex flex-column align-items-end">
        <div class="custom_heading-container">
          <hr>
          <h2>
            Contatos
          </h2>
        </div>
      </div>
      <div class="layout_padding-top layout_padding2-bottom">
        <div class="row">
          <div class="col-md-7">
            <form action="">
              <div class="contact_form-container">
                <div>
                  <h2>
                    Nome YYY
                  </h2>
                    <a>
                      <br>
                      <img src="images/telephone.png" width="25px"> : 43 99123456789
                      <br> <br>
                      <img src="images/location.png" width="20px"> : R. Antonio Saturno, 150
                    </a>
                    <br><br>
                </div>
                <div>
                  <h2>
                    Nome ZZZ
                  </h2>
                    <a>
                      <br>
                      <img src="images/telephone.png" width="25px"> : 45 99123456789
                      <br> <br>
                      <img src="images/location.png" width="20px"> : R. Andrade Marquis, 320
                    </a>
                </div>
              </div>

            </form>
          </div>
          <div class="col-md-5">
            <div class="map-box">
              <div id="map">
                <div class="map-responsive">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.6203917386133!2d-51.4944483849867!3d-25.384035983809596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ef362a96428765%3A0x3508ff16b1db8aaa!2sUniversidade%20Estadual%20do%20Centro%20Oeste%20-%20Campus%20Cedeteg!5e0!3m2!1spt-BR!2sbr!4v1656186944806!5m2!1spt-BR!2sbr"
                    width="600" height="300" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="contact_items">

        <a>
          <div class="item ">
            <div class="img-box box-2">

            </div>
            <div class="detail-box">
              <p>
                +43 1234567890
              </p>
            </div>
          </div>
        </a>

        <a>
          <div class="item ">
            <div class="img-box box-3">

            </div>
            <div class="detail-box">
              <p>
                SociAu@gmail.com
              </p>
            </div>
          </div>
        </a>

        <a href="https://goo.gl/maps/gP5yH2E24nxQRqQH9">
          <div class="item ">
            <div class="img-box box-1">

            </div>
            <div class="detail-box">
              <p>
                Endereço
              </p>
            </div>
          </div>
        </a>
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
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
        </p>
      </div>
    </div>
  </section>
@endsection

</html>