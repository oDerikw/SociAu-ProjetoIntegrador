@extends('layouts.layout', ['title' => 'SociAu'])
@section('content')
  

  <!-- Header Desc -->
  <div class="difficultes_section">
    <div class="container">
      <div class="custom_heading-container-green">
        <h2>
          Dificuldades 
        </h2>
        <hr>
      </div>
      <p>
        Escolha a dificuldade que deseja jogar:
      </p>
    </div>
  </div>
  
  <!-- Bottons -->
  <div class="quiz_section_green">
    <div class="quiz">
            <div class="button-grp-diff">
<<<<<<< HEAD:resources/views/dificuldades/diffVerde.blade.php
              <a href="{{ route('getCategoryDifficulty', ['category' => 'higiene', 'difficulty' => 'facil']) }}" id="btn1">Fácil</a>
              <a href="{{ route('getCategoryDifficulty', ['category' => 'higiene', 'difficulty' => 'medio']) }}" id="btn2">Médio</a>
              <a href="{{ route('getCategoryDifficulty', ['category' => 'higiene', 'difficulty' => 'dificil']) }}" id="btn3">Difícil</a>
=======
<<<<<<< HEAD
              <a href="{{ route('getCategoryDifficulty', ['category' => 'higiene', 'difficulty' => 'facil']) }}" id="btn1">Fácil</a>
              <a href="{{ route('getCategoryDifficulty', ['category' => 'higiene', 'difficulty' => 'medio']) }}" id="btn2">Médio</a>
              <a href="{{ route('getCategoryDifficulty', ['category' => 'higiene', 'difficulty' => 'dificil']) }}" id="btn3">Difícil</a>
=======
              <a href="{{ route('quiz4') }}" id="btn13">Fácil</span></a>
              <a href="{{ route('quiz4') }}" id="btn14">Médio</span></a>
              <a href="{{ route('quiz4') }}" id="btn15">Difícil</span></a>
>>>>>>> d9541fa0589c9bbf81373a05088acdb5fcff854c
>>>>>>> 3c3a4367aabc27750f0643c30376cc6275948533:resources/views/diffVerde.blade.php
            </div>
            <div class="diff-gif">
              <img src="/images/a-verdinho.png" height="500px">
            </div>
        </div>
    </div>
</div>



  <!-- Infos -->
  <section class="info_section layout_padding">
    <div class="container">
      <div class="info_social">
        <div>
          <a href="">
            <img src="/images/fb.png" alt="">
          </a>
        </div>
        <div>
          <a href="">
            <img src="/images/twitter.png" alt="">
          </a>
        </div>
        <div>
          <a href="">
            <img src="/images/insta.png" alt="">
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