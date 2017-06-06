<?php
  include_once("pegaNome.php");
  include_once ("conexaoBanco.php");

	$x = $_GET['codigo'];

  ?>

<!doctype html>
<html lang="pt-br">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<title>Produto Detalhado - MmVeículos</title>
		<link rel="shortcut icon" href="images/favicon.ico">

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

		<div id="wrapper" class="wide-wrap">

			<div class="content-container no-padding">
				<div class="container-full">
					<div class="row">
						<div class="col-md-12">
							<div class="main-content">
								<div class="commerce">
									<div class="style-1 product">
										<div class="container">
											<div class="row summary-container">
												<div class="col-md-7 col-sm-6 entry-image">
													<div class="single-product-images">
														<div class="single-product-images-slider">
															<div class="caroufredsel product-images-slider" data-synchronise=".single-product-images-slider-synchronise" data-scrollduration="500" data-height="variable" data-scroll-fx="none" data-visible="1" data-circular="1" data-responsive="1">
																<div class="caroufredsel-wrap">
																	<ul class="caroufredsel-items">
																		<li class="caroufredsel-item">
																			<a href="images/products/detail/detail_800x800.jpg" data-rel="magnific-popup-verticalfit">
																				<img width="600" height="685" src="images/products/detail/detail_800x800.jpg" alt=""/>
																			</a>
																		</li>
																	</ul>
																	<a href="#" class="caroufredsel-prev"></a>
																	<a href="#" class="caroufredsel-next"></a>
																</div>
															</div>
														</div>
														<div class="single-product-thumbnails">
															<div class="caroufredsel product-thumbnails-slider" data-visible-min="2" data-visible-max="4" data-scrollduration="500" data-direction="up" data-height="100%" data-circular="1" data-responsive="0">
																<div class="caroufredsel-wrap">
																	<ul class="single-product-images-slider-synchronise caroufredsel-items">
																		<?php
																			//$x = $prod[$i]['codigo'];
																			//$i=0;

																			//foreach($prod as $prods) {
																				for($j = 1; $j <= 4; $j++){
																		?>
																		<li class="caroufredsel-item selected">
																			<div class="thumb">
																				<a href="#" data-rel="0">
																					<img width="300" height="300" src=<?php echo $prod[$x-1]['imagem'.$j]; ?> alt=""/>
																				</a>
																			</div>
																		</li>
																			<?php
																				}
																			 ?>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-5 col-sm-6 entry-summary">
													<div class="summary">
														<h1 class="product_title entry-title"><?php echo $prod[$x-1]['nome']; ?></h1>
														<p class="price">
															<ins>
																<span class="amount">R$ <?php echo $prod[$x-1]['preco']; ?></span>
															</ins>
														</p>
														<div class="product-excerpt">
															<p>
																<!--DESCRIÇÃO.-->
																<?php
																	if($id == "carro"){
																		echo "Nome: " . $prod[$x-1]['nome'];
																		echo "<br /> Marca: " . $prod[$x-1]['marca'];
																		echo "<br /> Modelo: " . $prod[$x-1]['modelo'];
																		echo "<br /> Ano: " . $prod[$x-1]['ano'];
																		echo "<br /> Cor: " . $prod[$x-1]['cor'];
																		echo "<br />" . $prod[$x-1]['portas'] . " portas";
																		echo "<br /> Câmbio: " . $prod[$x-1]['cambio'];
																		echo "<br /> Potência: " . $prod[$x-1]['potencia'];
																		echo "<br /> Combustível: " . $prod[$x-1]['combustivel'];
																		if(strtolower($prod[$x-1]['arCondicionado']) == "true"){
																			echo "<br /> Com Ar-Condicionado";
																		} else{
																			echo "<br /> Sem Ar-Condicionado";
																		}
																		if(strtolower($prod[$x-1]['vidroEletrico']) == "true"){
																			echo "<br /> Com Vidro Elétrico";
																		} else {
																			echo "<br /> Sem Vidro Elétrico";
																		}

																	} else if($id == "moto"){
																		echo "Nome: " . $prod[$x-1]['nome'];
																		echo "<br /> Marca: " . $prod[$x-1]['marca'];
																		echo "<br /> Cilindradas: " . $prod[$x-1]['cilindradas'];
																		echo "<br /> Ano: " . $prod[$x-1]['ano'];
																		echo "<br /> Cor: " . $prod[$x-1]['cor'];
																		if(strtolower($prod[$x-1]['partidaEletrica']) == "true"){
																			echo "<br /> Com Partida Elétrica";
																		} else{
																			echo "<br /> Sem Partida Elétrica";
																		}
																	} else if($id == "caminhao"){
																		echo "Nome: " . $prod[$x-1]['nome'];
																		echo "<br /> Marca: " . $prod[$x-1]['marca'];
																		echo "<br /> Ano: " . $prod[$x-1]['ano'];
																	} else if($id == "onibus"){
																		echo "Nome: " . $prod[$x-1]['nome'];
																		echo "<br /> Marca: " . $prod[$x-1]['marca'];
																		echo "<br /> Ano: " . $prod[$x-1]['ano'];
																	}

																?>

															</p>
														</div>
														<form class="cart">
															<div class="add-to-cart-table">

																<button type="submit" class="button">Comprar</button>
															</div>
															<?php
																//$i++;
																//}
															?>
														</form>
													</div>
												</div>
											</div>
										</div>
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

		<script type='text/javascript' src='dist/js/core.min.js'></script>
		<script type='text/javascript' src='dist/js/widget.min.js'></script>
		<script type='text/javascript' src='dist/js/mouse.min.js'></script>
		<script type='text/javascript' src='dist/js/slider.min.js'></script>
		<script type='text/javascript' src='dist/js/jquery-ui-touch-punch.min.js'></script>
		<script type='text/javascript' src='dist/js/price-slider.js'></script>

	</body>
</html>