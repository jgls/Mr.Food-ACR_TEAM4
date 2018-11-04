<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Mr.Food</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='http://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css'>
<link rel='stylesheet prefetch' href='http://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css'>

      <link rel="stylesheet" href="css/style.css">
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
  
</head>
  <body id="page-active">

    {{-- cabecalho --}}
    @include('layout.cabecalho')

    @include('layout.menubar')


    {{-- Conteudo --}}
    @yield('conteudo')


    {{-- Rodape --}}
    @include('layout.rodape')

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" ></script>
    
  </body>
</html>