


@extends('layout.app')

@section('conteudo')

  <div class="slider-wrapper">
  <div class="slider">

    <div class="slider--item" align="center">
      <image class="imgs_slider" src="images/mfood.jpg" width=1500 height=500 aligh="center">
      
    </div>
    <div class="slider--item" >
      <a href="finalizarLocal"><image class="imgs_slider" src="images/ovo_a_chefe.jpeg" height=500 width=1500></a>
    </div>
    <div class="slider--item">
      <a href="finalizarLocal"><image class="imgs_slider" src="images/n1.jpg" width=1500 height=500 ></a>
      

    </div>

    <div class="slider--item">
     <a href="finalizarLocal">  <image class="imgs_slider" src="images/pizza.jpg" width=1500 height=500 ></a>
    </div>

  </div>
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js'></script>

    <script src="js/index.js"></script>

@endsection

