
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Mm Veículos</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

  </head>

  <style>

    div.btn btn-lg btn-primary{
      text-align: center;
      color: lime;
    }

    div.item{
      width: 100%;
      height: 100%; /* 400px */
      data-bgposition: "center center";
      data-bgfit: "cover";
      data-bgrepeat: "no repeat";
    }

    div.item active{
      width: 100%;
      height: 100%;
      data-bgposition: "center center";
      data-bgfit: "cover";
      data-bgrepeat: "no repeat";
    }

    div.col-md-3 p{
      text-align: justify;
    }

  </style>

  <body>

    <?php

      include("cabecalho.php");

      if($logado == true){
        echo "<a href='logout.php'>Log Out </a>";
      } else{
        echo "<a href='login.php'>Log In </a>";
      }

    ?>

    <div class="jumbotron">
      <div class="container">
        <h1>Mm Veículos</h1>
        <p>A loja de venda de veículos - Mm Veículos - é uma loja nova no mercado de vendas eletrônicas, e trabalha com a venda de diversos tipos de veículos motorizados: motocicletas, carros, caminhões e ônibus.</p>
        <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Saiba mais! &raquo;</a></p>     BOTÃO SAIBA MAIS       -->
      </div>
    </div>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox" align="center">
        <div class="item active">
          <img class="primeiro-slide" src="imagens/carroPaginaInicial.jpg" alt="Primeiro slide">
          <div class="container">
            <div class="carousel-caption">

              <p><a class="btn btn-lg btn-primary" href="veiculos.php?id=carro" role="button">Ver Carros</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="segundo-slide" src="imagens/motoPaginaInicial.jpg" alt="Segundo slide">
          <div class="container">
            <div class="carousel-caption">

              <p><a class="btn btn-lg btn-primary" href="veiculos.php?id=moto" role="button">Ver Motos</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="terceiro-slide" src="imagens/caminhaoPaginaInicial.png" alt="Terceiro slide">
          <div class="container">
            <div class="carousel-caption">

              <p><a class="btn btn-lg btn-primary" href="veiculos.php?id=caminhao" role="button">Ver Caminhões</a></p>
            </div>
          </div>
        </div>
      <div class="item">
        <img class="quarto-slide" src="imagens/onibusPaginaInicial.png" alt="Quarto slide">
        <div class="container">
          <div class="carousel-caption">

            <p><a class="btn btn-lg btn-primary" href="veiculos.php?id=onibus" role="button">Ver Ônibus</a></p>
          </div>
        </div>
      </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div><!-- /.carousel -->

    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-3">
          <img src="imagens/carroPaginaInicial.jpg" alt="Imagem carro" class="img-rounded" width="256px" height="166px">
          <h2>Carros</h2>
          <p>Veja nossos CARROS aqui!! </p>
          <p><a class="btn btn-default" href="veiculos.php?id=carro" role="button">Ver todos os Carros &raquo;</a></p>
        </div>
        <div class="col-md-3">
          <img src="imagens/motoPaginaInicial.jpg" alt="Imagem moto" class="img-rounded" width="256px" height="166px">
          <h2>Motos</h2>
          <p>Veja nossas MOTOS aqui!! </p>
          <p><a class="btn btn-default" href="veiculos.php?id=moto" role="button">Ver todas as Motos &raquo;</a></p>
       </div>
        <div class="col-md-3">
          <img src="imagens/caminhaoPaginaInicial.png" alt="Imagem caminhão" class="img-rounded" width="256px" height="166px">
          <h2>Caminhões</h2>
          <p>Veja nossos CAMINHÕES aqui!!</p>
          <p><a class="btn btn-default" href="veiculos.php?id=caminhao" role="button">Ver todos os Caminhões &raquo;</a></p>
        </div>
		<div class="col-md-3">
          <img src="imagens/onibusPaginaInicial.png" alt="Imagem ônibus" class="img-rounded" width="256px" height="166px">
          <h2>Ônibus</h2>
          <p>Veja nossos ÔNIBUS aqui!!</p>
          <p><a class="btn btn-default" href="veiculos.php?id=onibus" role="button">Ver todos os Ônibus &raquo;</a></p>
        </div>
      </div>



    </div> <!-- /container -->

    <?php
      include("rodape.php");
    ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>

  </body>
</html>
