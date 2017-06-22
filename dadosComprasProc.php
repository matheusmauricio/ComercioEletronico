<?php
  //include_once("pegaNome.php");

  if(isSet($_COOKIE['logado']) && ($_COOKIE['logado'] == 'sim')){

    $usuario = unserialize($_COOKIE['usuario']);
    $codigoUsuario = $usuario[0]['codigo'];
}

    $conexaoBanco = new PDO('sqlite:banco.sqlite') or die ("Não Conectou!");



      $SQL = "SELECT * FROM Venda v, Usuario u, Produto p WHERE v.codigoUsuario = '$codigoUsuario' AND v.codigoUsuario = u.codigo AND v.codigoVeiculo = p.codigo";
      $resultado = $conexaoBanco->query($SQL);

      $prod = $resultado->fetchAll();
/*
      $i=0;
      foreach($prod as $prodss) {
        if($prod[$i]['tipoVeiculo'] == 'carro'){
          $SQL = "SELECT * FROM Venda v, Usuario u, Carro c WHERE v.codigoUsuario = '$codigoUsuario' AND v.codigoUsuario = u.codigo AND v.codigoVeiculo = c.codigo";
          $resultado = $conexaoBanco->query($SQL);

          $prod = $resultado->fetchAll();
        } else if($prod[$i]['tipoVeiculo'] == 'moto'){
          $SQL = "SELECT * FROM Venda v, Usuario u, Moto m WHERE v.codigoUsuario = '$codigoUsuario' AND v.codigoUsuario = u.codigo AND v.codigoVeiculo = m.codigo";
          $resultado = $conexaoBanco->query($SQL);

          $prod = $resultado->fetchAll();
        } else if($prod[$i]['tipoVeiculo'] == 'caminhao'){
          $SQL = "SELECT * FROM Venda v, Usuario u, Caminhao d WHERE v.codigoUsuario = '$codigoUsuario' AND v.codigoUsuario = u.codigo AND v.codigoVeiculo = d.codigo";
          $resultado = $conexaoBanco->query($SQL);

          $prod = $resultado->fetchAll();
        } else if($prod[$i]['tipoVeiculo'] == 'onibus'){
          $SQL = "SELECT * FROM Venda v, Usuario u, Onibus o WHERE v.codigoUsuario = '$codigoUsuario' AND v.codigoUsuario = u.codigo AND v.codigoVeiculo = o.codigo";
          $resultado = $conexaoBanco->query($SQL);

          $prod = $resultado->fetchAll();
        }

        $i++;
      }
*/
      //echo $prod[0]['tipoVeiculo'];

      //header("location: dadosCompras.php");

  ?>
