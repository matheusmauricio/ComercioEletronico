<?php

  setcookie("logado", 'nao', time()+3600);
  setcookie("administrador", null, time()+3600);
  //header("location: index.php");
  header("location: index.php");

?>
