<?php
  //include_once("pegaNome.php");
//function pegaProdutoPorTipo($i){


    $conexaoBanco = new PDO('sqlite:banco.sqlite') or die ("Não Conectou!");
    $SQL = "SELECT COUNT(*), `tipoVeiculo` FROM `Venda` ORDER BY `tipoVeiculo` GROUP BY `codigoVeiculo`";
    $resultado = $conexaoBanco->query($SQL);
    $prod = $resultado->fetchAll();


    //return $prod;


//}

  ?>
