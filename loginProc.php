<?php
  //include_once("pegaNome.php");
    $conexaoBanco = new PDO('sqlite:banco.sqlite') or die ("Não Conectou!");

    if(isset($_POST['login'])){
      $login = $_POST['login'];
    }

    if(isset($_POST['senha'])){
      $senha = $_POST['senha'];
    }

    $SQL = "SELECT * FROM 'administrador' WHERE 'login' = $login AND 'senha' = $senha";
    $resultado = $conexaoBanco->query($SQL);

    //$pessoa = $resultado->fetchAll();

    //$prod = $resultado->fetchAll();
    header("location: logado.php");
  ?>
