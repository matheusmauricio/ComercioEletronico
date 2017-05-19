<?php

  include ("conexaoBanco.php");

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

    <title>Carros - MmVeículos</title>

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

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Mm Veículos - Nunca te deixando na mão (ou a pé)</a>
        </div>

        <div class="container">
            <!-- The justified navigation menu is meant for single line per list item.
                 Multiple lines will require custom code not provided by Bootstrap. -->
            <div class="masthead">
                <nav>
                    <ul class="nav nav-justified">
                        <li class="active"><a href="index.html">Página Inicial</a></li>
                        <li><a href="#">Sobre nós</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</nav>

<div class="jumbotron">
    <div class="container">
        <h1>CARROS</h1>
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
                            <div class="masonry-filter">
                                <div class="filter-action filter-action-center">
                                    <ul data-filter-key="filter">
                                        <li>
                                            <a class="selected" href="#" data-filter-value="*">Todos</a>
                                        </li>
                                        <li>
                                            <a href="#" data-filter-value=".aliquam">Aliquam</a>
                                        </li>
                                        <li>
                                            <a href="#" data-filter-value=".donec">Donec</a>
                                        </li>
                                        <li>
                                            <a href="#" data-filter-value=".maecenas">Maecenas</a>
                                        </li>
                                        <li>
                                            <a href="#" data-filter-value=".nulla">Nulla</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <?php for($i=0; $prod[$i] != null; $i++ ) {

                             // echo $prod[$i]['nome'];

                            //}

                            ?>
                            <div class="products-masonry-wrap">
                                <ul class="products masonry-products row masonry-wrap">
                                    <li class="product product-no-border style-2 masonry-item col-md-3 col-sm-6 aliquam nulla">
                                        <div class="product-container">
                                            <figure>
                                                <div class="product-wrap">
                                                    <div class="product-images">
                                                        <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                            <a href="shop-detail-1.html"><img width="450" height="450" src=<?php echo $prod[$i]["imagem1"]; ?> alt=""/></a>
                                                        </div>
                                                        <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                            <a href="shop-detail-1.html"><img width="450" height="450" src=<?php echo $prod[$i]["imagem2"]; ?> alt=""/></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <figcaption>
                                                    <div class="shop-loop-product-info">
                                                        <div class="info-meta clearfix">

                                                            <div class="loop-add-to-wishlist">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <div class="yith-wcwl-add-button">
                                                                        <a href="#" class="add_to_wishlist">
                                                                            Adicionar à Lista de Desejos
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="info-content-wrap">
                                                            <h3 class="product_title">
                                                                <a href="shop-detail-1.html"><?php echo $prod[$i]["nome"]; ?></a>
                                                            </h3>
                                                            <div class="info-price">
																		<span class="price">
																			<span class="amount"><?php echo $prod[$i]["preco"]; ?></span>
																		</span>
                                                            </div>
                                                            <div class="loop-action">
                                                                <div class="loop-add-to-cart">
                                                                    <a href="#" class="add_to_cart_button">
                                                                        Adicionar ao carrinho
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </li>


                                </ul>
                            </div>
                            <?php
                             }
                             ?>
                            <div class="loadmore-action">
                                <a class="btn btn-default-outline btn-outline" href="#">
                                    <span>Load More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<div class="minicart-side">
    <div class="minicart-side-title">
        <h4>Shopping Cart</h4>
    </div>
    <div class="minicart-side-content">
        <div class="minicart">
            <div class="minicart-header no-items show">
                Your shopping bag is empty.
            </div>
            <div class="minicart-footer">
                <div class="minicart-actions clearfix">
                    <a class="button no-item-button" href="#">
                        <span class="text">Go to the shop</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <p>&copy; 2017 Company, Inc.</p>
</footer>

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
