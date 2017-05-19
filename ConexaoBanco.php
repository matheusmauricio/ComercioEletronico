<?php
    $conexaoBanco = new PDO('sqlite:banco.sqlite') or die ("Não Conectou!");

    $SQL = "SELECT * FROM Carro";
    $resultado = $conexaoBanco->query($SQL);

    $prod = $resultado->fetchAll();

  ?>
