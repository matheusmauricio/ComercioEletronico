<?php

  setcookie("logado", 'nao', time()+3600);
  setcookie("usuario", null, time()+3600);
  //header("location: index.php");
  header(sprintf('location: %s', $_SERVER['HTTP_REFERER']));

?>
