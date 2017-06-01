
<html>
<body>
  <style media="screen">
  .dropdown:hover .dropdown-menu {
    display: block;
  }
  </style>

<<<<<<< HEAD
<?php
  include_once("funcaoLogar.php");

  $logado = estaLogado();

?>
=======
>>>>>>> e1219c2b1186a676330388fee5f917759ae57fb1

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Mm Veículos - Nunca te deixando na mão (ou a pé)</a>
        </div>

        <div class="container">
            <!-- The justified navigation menu is meant for single line per list item.
                 Multiple lines will require custom code not provided by Bootstrap. -->
            <div class="masthead">
                <nav>
                    <ul class="nav nav-justified">
<<<<<<< HEAD
                        <li class="active"><a href="index.php">Página Inicial</a></li>
=======
                        <li class="active"><a href="index.html">Página Inicial</a></li>
>>>>>>> e1219c2b1186a676330388fee5f917759ae57fb1
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Veículos <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                              <li><a href="veiculos.php?id=carro">Carros</a></li>
                              <li><a href="veiculos.php?id=moto">Motos</a></li>
                              <li><a href="veiculos.php?id=caminhao">Caminhões</a></li>
                              <li><a href="veiculos.php?id=onibus">Ônibus</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Sobre nós</a></li>
                        <li><a href="#">Contato</a></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Parceiros <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                              <li><a href="http://wancharle.com.br/ce/eduardo/">Undead Skin</a></li>
                              <li><a href="http://wancharle.com.br/ce/erick/">SSCSGO</a></li>
                              <li><a href="http://wancharle.com.br/ce/joao/">Geek Store</a></li>
                              <li><a href="http://wancharle.com.br/ce/andre/">+ Seguro</a></li>
                              <li><a href="http://wancharle.com.br/ce/ludivan/">Site do Ludivan</a></li>
                              <li><a href="http://wancharle.com.br/ce/oberdan/">Site do Oberdan</a></li>
                            </ul>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</nav>
</body>
<html>
