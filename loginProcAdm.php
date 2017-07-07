<?php

    $conexaoBanco = new PDO('sqlite:banco.sqlite') or die ("Não Conectou!");

    if(isset($_POST['login'])){
      $login = $_POST['login'];
    }

    if(isset($_POST['senha'])){
      $senha = md5($_POST['senha']);
    }

    $SQL = "SELECT * FROM `administrador` WHERE `login` = '$login' AND `senha` = '$senha'";
    $resultado = $conexaoBanco->query($SQL);
    $pessoa = $resultado->fetchAll();


    //echo $pessoa[0]['nome'];

    if($pessoa != null){
      header("location: logadoAdm.php");
      setcookie("aministrador", serialize($pessoa), time()+3600);
    } else {
      //header("location: index.php");
      header(sprintf('location: %s', $_SERVER['HTTP_REFERER']));
    }

  ?>
