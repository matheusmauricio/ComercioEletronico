<?php
  //include_once("pegaNome.php");

    $conexaoBanco = new PDO('sqlite:banco.sqlite') or die ("Não Conectou!");

    if(isset($_GET['id'])){
      $id = $_GET['id'];
    }


    $SQL = "SELECT * FROM Produto WHERE tipoVeiculo = '$id'";
    $resultado = $conexaoBanco->query($SQL);

    $prod = $resultado->fetchAll();
    

  ?>
