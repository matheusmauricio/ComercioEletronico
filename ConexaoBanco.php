<?php
  //include_once("pegaNome.php");
function pegaProdutoPorTipo($id){
    $conexaoBanco = new PDO('sqlite:banco.sqlite') or die ("Não Conectou!");
    $SQL = "SELECT * FROM `Produto` WHERE `tipoVeiculo` = '$id' AND `quantidadeEstoque` > 0";
    $resultado = $conexaoBanco->query($SQL);
    $prod = $resultado->fetchAll();

    return $prod;
  }

function pegaProdutoPorCodigo($codigo){
    $conexaoBanco = new PDO('sqlite:banco.sqlite') or die ("Não Conectou!");
    $SQL = "SELECT * FROM `Produto` WHERE `codigo` = '$codigo'";
    $resultado = $conexaoBanco->query($SQL);
    $prod = $resultado->fetch();

    return $prod;
  }

  function pegaProdutoEstoqueZero(){
    $conexaoBanco = new PDO('sqlite:banco.sqlite') or die ("Não Conectou!");
    $SQL = "SELECT * FROM `Produto` WHERE `quantidadeEstoque` < 1";
    $resultado = $conexaoBanco->query($SQL);
    $prod = $resultado->fetchAll();

    return $prod;
  }

  ?>
