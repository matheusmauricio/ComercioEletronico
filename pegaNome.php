<?php

  if(isset($_GET['id'])){
    $id = $_GET['id'];
  }

  if($id == "carro"){
    $nome = "Carros";
  } else if($id == "moto"){
    $nome = "Motos";
  } else if($id == "caminhao"){
    $nome = "Caminhões";
  } else if($id == "onibus"){
    $nome = "Ônibus";
  }


?>
