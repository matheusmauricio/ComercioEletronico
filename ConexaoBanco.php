<?php
  //include_once("pegaNome.php");

    $conexaoBanco = new PDO('sqlite:banco.sqlite') or die ("Não Conectou!");

    if(isset($_GET['id'])){
      $id = $_GET['id'];
    }

    if(isset($_GET['codigo'])){
      $codigo = $_GET['codigo'];
    }



    $SQL = "SELECT * FROM `Produto` WHERE `tipoVeiculo` = '$id'";
    $resultado = $conexaoBanco->query($SQL);

    $prod = $resultado->fetchAll();


  ?>
