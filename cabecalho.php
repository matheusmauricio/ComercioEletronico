
<html>
<body>
  <style media="screen">
  .dropdown:hover .dropdown-menu {
    display: block;
  }

  </style>

<?php
  include_once("funcaoLogar.php");

  $logado = estaLogado();

?>

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

                        <li class="active"><a href="index.php">Página Inicial</a></li>

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
                              <li><a href="http://wancharle.com.br/ce/ludivan/">Lud-iFit</a></li>
                              <li><a href="http://wancharle.com.br/ce/oberdan/">Site do Oberdan</a></li>
                            </ul>

                            <?php
                              if($_COOKIE["logado"] == "sim"){
                                //$x = $_POST['pessoa'];
                            ?>

                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Olá <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                  <li>Bem vindo, fulano <?php //echo $pessoa['nome']; ?></li>
                                  <br />
                                  <li> <form name="form1" method="post" action="deslogado.php"><input type="submit" value="Sair"></form></li>
                                </ul>

                            <?php
                              } else {
                            ?>
                            <li class="dropdown" ><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Log in <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <form name="form1" method="post" action="loginProc.php">
                                  <fieldset >
                                    <input type="text" name="Login" placeholder="Digite seu login" required>
                                    <input type="password" name="Senha" placeholder="Digite sua senha" required>
                                  </fieldset>
                                  <fieldset >
                                    <input type="submit" value="Log in">
                                  </fieldset>
                                </form>
                                <form name="form2" method="post" action="telaCadastro.php">
                                  <fieldset >
                                    <input type="submit" value="Cadastre-se" href="telaCadastro.php">
                                  </fieldset>
                                </form>
                              </ul>
                            </li>
                            <?php
                              }
                             ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</nav>
</body>
<html>

<?php

/*<nav>
	<ul>
		<li id="login">
			<a id="login-trigger" href="#">
				Log in <span>&#x25BC;</span>
			</a>
			<div id="login-content">
				<form>
					<fieldset id="inputs">
						<input id="username" type="email" name="Email" placeholder="Your email address" required>
						<input id="password" type="password" name="Password" placeholder="Password" required>
					</fieldset>
					<fieldset id="actions">
						<input type="submit" id="submit" value="Log in">
						<label><input type="checkbox" checked="checked"> Keep me signed in</label>
					</fieldset>
				</form>
			</div>
		</li>
		<li id="signup">
			<a href="">Sign up FREE</a>
		</li>
	</ul>
</nav>*/
?>
