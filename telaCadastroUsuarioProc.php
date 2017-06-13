<?php
  //include_once ("conn/conexao.php");

  $conexaoBanco = new PDO('sqlite:banco.sqlite') or die ("Não Conectou!");

  if ($_POST) {
    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $senha = md5($_POST['senha']);
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];


    $SQL = "INSERT INTO 'Usuario' (nome, telefone, sexo, cpf, email, login, senha) VALUES ('$nome', '$telefone', '$sexo', '$cpf', '$email', '$login', '$senha')";
    $resultado = $conexaoBanco->query($SQL);



    header("location: index.php");

  }


?>
