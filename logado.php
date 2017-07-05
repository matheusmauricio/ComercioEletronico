<?php

  setcookie("logado", 'sim', time()+3600);

  //header("location: index.php");

  if(sprintf('location: %s', $_SERVER['HTTP_REFERER']) == "location: http://127.0.0.1/ComercioEletronico/loginAdm.php"
  || "location: http://wancharle.com.br/ce/matheus/loginAdm.php"){
    header(sprintf('location: homeAdm.php'));
  }else{
  header(sprintf('location: %s', $_SERVER['HTTP_REFERER']));
  }

?>
