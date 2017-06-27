<?php
  //include_once("pegaNome.php");
    function itensMaisVendidos(){

    $conexaoBanco = new PDO('sqlite:banco.sqlite') or die ("Não Conectou!");
    $SQL = "SELECT COUNT(*), p.nome, v.tipoVeiculo, v.codigoVeiculo, p.imagem1, p.imagem2, v.valorVenda FROM Venda v, Produto p WHERE v.codigoVeiculo = p.codigo GROUP BY p.nome ORDER BY COUNT(*) DESC LIMIT 10";
    $resultado = $conexaoBanco->query($SQL);
    $prod = $resultado->fetchAll();

    return $prod;

    }

    function clientesMaisAtivos(){

    $conexaoBanco = new PDO('sqlite:banco.sqlite') or die ("Não Conectou!");
    $SQL = "SELECT COUNT(*), u.nome FROM Venda v, Usuario u WHERE v.codigoUsuario = u.codigo GROUP BY u.nome ORDER BY COUNT(*) DESC LIMIT 10";
    $resultado = $conexaoBanco->query($SQL);
    $prod = $resultado->fetchAll();

    return $prod;

    }

  ?>
