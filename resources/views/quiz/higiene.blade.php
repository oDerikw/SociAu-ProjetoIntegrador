@extends('layouts.layout', ['title' => 'SociAu'])
@section('content')
<div class="quiz_section" id="categoria4">
   <div class="quiz">
      <div class="topoQuiz">
         <div class="quiz_categoria" id="categoria4">
            <a>
            Dia a Dia
            </a>
         </div>
         <div class="barra" id="categoria4">
         @for ($i = 0; $i < (Session::get('correct_answers') + Session::get('incorrect_answers')); $i++)
               <div class= "step active">
                  <div class= "--number"></div>
               </div>
            @endfor
            @for ($i = 0; $i < 5 - (Session::get('correct_answers') + Session::get('incorrect_answers')); $i++)
               <div class= "step">
                  <div class= "--number"></div>
               </div>
            @endfor 
         </div>
      </div>
      <br><br>
      <div class="pergunta">
         <a>
         {{ $question }}

         </a>
         <img src="{{ $image }}" height="500px">
         <div class="button-grp">
            @foreach ($alternatives as $alternative)
               <span id="{{ $alternative->id }}">
                  <a href=" {{ route('verifyAlternative', ['id' => $alternative->id]) }}">
                     <button type="submit" id="btn1">
                        {{ $alternative->alternative }}
                     </button>
                  </a>
               </span>
            @endforeach
         </div>
      </div>
   </div>
</div>
</div>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
@endsection