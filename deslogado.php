<?php

  setcookie("logado", 'nao', time()+3600);
  header("location: index.php");
  
?>
