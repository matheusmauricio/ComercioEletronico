<!doctype html>
<html lang="pt-br">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<title>Comprar Veículo - MmVeículos</title>
		<!-- <link rel="shortcut icon" href="images/favicon.ico"> -->
    <link rel="icon" href="../../favicon.ico">
		<link rel='stylesheet' href='dist/css/bootstrap.min.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='dist/css/swatches-and-photos.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='dist/css/prettyPhoto.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='dist/css/jquery.selectBox.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='dist/css/font-awesome.min.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic%7CCrimson+Text:400,400italic,600,600italic,700,700italic' type='text/css' media='all'/>
		<!-- <link rel='stylesheet' href='dist/css/elegant-icon.css' type='text/css' media='all'/> -->
		<link rel='stylesheet' href='dist/css/style.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='dist/css/commerce.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='dist/css/custom.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='dist/css/magnific-popup.css' type='text/css' media='all'/>

		<!-- Bootstrap core CSS -->
		<link href="dist/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="jumbotron.css" rel="stylesheet">

	</head>
	<body>

		<?php
			include_once("cabecalho.php");
		?>

		<br />
		<br />
		<br />
		<br />
    <?php
      if(isSet($_COOKIE['logado']) && ($_COOKIE['logado'] == 'sim')){

        $usuario = unserialize($_COOKIE['usuario']);



    ?>
    <div class="summary">
      <h1 class="product_title entry-title">Obrigado pela preferência!!</h1>
    </div>

    <p></p>
    <p>Esperamos que esteja satisfeito com a sua compra. Volte sempre!!</p>

    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    <br /><br /><br /><br /><br /><br /><br /><br />
    <?php
    }else{


    ?>







    <?php
    }
    ?>

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

		<script type='text/javascript' src='dist/js/core.min.js'></script>
		<script type='text/javascript' src='dist/js/widget.min.js'></script>
		<script type='text/javascript' src='dist/js/mouse.min.js'></script>
		<script type='text/javascript' src='dist/js/slider.min.js'></script>
		<script type='text/javascript' src='dist/js/jquery-ui-touch-punch.min.js'></script>
		<script type='text/javascript' src='dist/js/price-slider.js'></script>

	</body>
</html>
