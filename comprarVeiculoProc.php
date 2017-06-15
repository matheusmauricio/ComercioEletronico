<?php
  //include_once ("conn/conexao.php");

  $conexaoBanco = new PDO('sqlite:banco.sqlite') or die ("Não Conectou!");

  if ($_POST) {
    $codigoUsuario = $_POST['codigoUsuario'];
    $valorVenda = $_POST['valorVenda'];
    $data = date('d/m/y');
    $codigoVeiculo = $_POST['codigoVeiculo'];
    $tipoVeiculo = $_POST['tipoVeiculo'];

    $SQL = "INSERT INTO 'Venda' (codigoUsuario, valorVenda, data, codigoVeiculo, tipoVeiculo) VALUES ('$codigoUsuario', '$valorVenda', '$data', '$codigoVeiculo', '$tipoVeiculo')";
    $resultado = $conexaoBanco->query($SQL);



    header("location: compraConfirmada.php");

  }


?>
