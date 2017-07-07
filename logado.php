<?php

  setcookie("logado", 'sim', time()+3600);

  //header("location: index.php");

  header(sprintf('location: %s', $_SERVER['HTTP_REFERER']));


?>
