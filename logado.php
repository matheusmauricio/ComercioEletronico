<?php

  setcookie("logado", 'sim', time()+3600);

  header("location: index.php");

?>
