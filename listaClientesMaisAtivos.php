<?php
  //include_once("pegaNome.php");
  //include_once ("conexaoBanco.php");
  include_once("listasProc.php");
  $prod = clientesMaisAtivos();
  ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <!--  <link rel="shortcut icon" href="images/favicon.ico"> Ícone do site -->

  <link rel='stylesheet' href='dist/css/bootstrap.min.css' type='text/css' media='all'/>
  <link rel='stylesheet' href='dist/css/swatches-and-photos.css' type='text/css' media='all'/>
  <link rel='stylesheet' href='dist/css/prettyPhoto.css' type='text/css' media='all'/>
  <link rel='stylesheet' href='dist/css/jquery.selectBox.css' type='text/css' media='all'/>
  <link rel='stylesheet' href='dist/css/font-awesome.min.css' type='text/css' media='all'/>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic%7CCrimson+Text:400,400italic,600,600italic,700,700italic' type='text/css' media='all'/>
  <link rel='stylesheet' href='dist/css/elegant-icon.css' type='text/css' media='all'/>

  <link rel='stylesheet' href='dist/css/style.css' type='text/css' media='all'/>

  <link rel='stylesheet' href='dist/css/commerce.css' type='text/css' media='all'/>
  <link rel='stylesheet' href='dist/css/custom.css' type='text/css' media='all'/>
  <link rel='stylesheet' href='dist/css/magnific-popup.css' type='text/css' media='all'/>

  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <!-- Bootstrap core CSS -->
  <link href="dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="jumbotron.css" rel="stylesheet">

  <title><?php echo "CLIENTES MAIS ATIVOS"; ?> - MmVeículos</title>

</head>

<body>

<?php
  include_once("cabecalho.php");
?>

<div class="jumbotron">
    <div class="container">
        <h1><?php echo "CLIENTES MAIS ATIVOS"; ?> </h1>
        <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Saiba mais! &raquo;</a></p>     BOTÃO SAIBA MAIS       -->
    </div>
</div>

<div id="wrapper" class="wide-wrap">
    <div class="offcanvas-overlay"></div>
    <header class="header-container header-type-classic header-navbar-classic header-scroll-resize">
    </header>

    <div class="content-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-content">
                        <div data-layout="masonry" data-masonry-column="4" class="commerce products-masonry masonry">
                            <div class="products-masonry-wrap">
                                <ul class="products masonry-products row masonry-wrap">
                                  <?php
                                    $i=0;
                                    foreach($prod as $prods) {
                                  ?>
                                    <li class="product product-no-border style-2 masonry-item col-md-3 col-sm-6 aliquam nulla">
                                        <div class="product-container">
                                            <figure>
                                              <div class="product-wrap">
                                                  <div class="product-images">
                                                      <img width="200" height="200" src=<?php if($i+1 == 1){ echo "imagens/trofeu_ouro.jpg"; }
                                                      else if ($i+1 == 2){ echo "imagens/trofeu_prata.jpg"; }
                                                      else if ($i+1 == 3){ echo "imagens/trofeu_bronze.jpg"; }
                                                      else{ echo "imagens/medalha.jpg"; } ?> alt=""/>
                                                  </div>
                                              </div>
                                                <figcaption>
                                                    <div class="shop-loop-product-info">
                                                      <h3 class="product_title">
                                                          <?php echo "TOP ".($i+1); echo "<br />";  echo $prod[$i]['nome']; ?>
                                                      </h3>
                                                      <div class="info-price">
                                                      <span class="price">
                                                      <span class="amount"><?php if($prod[$i]['COUNT(*)'] > 1){echo $prod[$i]['COUNT(*)']; echo " COMPRAS";} else{echo $prod[$i]['COUNT(*)']; echo " COMPRA";} ?></span>
                                                      </span>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                    <?php
                                      $i++;
                                       }
                                     ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
  include_once("rodape.php");
?>

<script type='text/javascript' src='dist/js/jquery.js'></script>
<script type='text/javascript' src='dist/js/jquery-migrate.min.js'></script>
<script type='text/javascript' src='dist/js/easing.min.js'></script>
<script type='text/javascript' src='dist/js/imagesloaded.pkgd.min.js'></script>
<script type='text/javascript' src='dist/js/bootstrap.min.js'></script>
<script type='text/javascript' src='dist/js/superfish-1.7.4.min.js'></script>
<script type='text/javascript' src='dist/js/jquery.appear.min.js'></script>
<script type='text/javascript' src='dist/js/script.js'></script>
<script type='text/javascript' src='dist/js/swatches-and-photos.js'></script>
<script type='text/javascript' src='dist/js/jquery.cookie.min.js'></script>
<script type='text/javascript' src='dist/js/jquery.prettyPhoto.js'></script>
<script type='text/javascript' src='dist/js/jquery.prettyPhoto.init.min.js'></script>
<script type='text/javascript' src='dist/js/jquery.selectBox.min.js'></script>
<script type='text/javascript' src='dist/js/jquery.touchSwipe.min.js'></script>
<script type='text/javascript' src='dist/js/jquery.transit.min.js'></script>
<script type='text/javascript' src='dist/js/jquery.carouFredSel.js'></script>
<script type='text/javascript' src='dist/js/jquery.magnific-popup.js'></script>
<script type='text/javascript' src='dist/js/isotope.pkgd.min.js'></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="dist/js/bootstrap.min.js"></script>

</body>
</html>
