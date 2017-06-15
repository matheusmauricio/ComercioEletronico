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

        <form name="form1" method="post" action="telaCadastroUsuarioProc.php">
          <p> Nome: <input name="nome" type="text" value="" required /> </p>
          <p> Login: <input name="login" type="text" value="" required /> </p>
          <p> Senha: <input name="senha" type="password" value="" required /> </p>
          <p> Sexo: <input name="sexo" type="text" value="" required /> </p>
          <p> E-mail: <input name="email" type="text" value="" required /> </p>
          <p> Telefone: <input name="telefone" type="text" value="" required /> </p>
          <p> CPF: <input name="cpf" type="text" value="" required /> </p>
          <input name="enviar" value="Cadastrar" type="submit" />
        </form>
        <form name="form2" method="post" action="index.php">
            <input name="voltar" value="Voltar" type="submit" />
        </form>
      </div>
    </div>

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
