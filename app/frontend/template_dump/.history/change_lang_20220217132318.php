<?php
  $lang = $_GET['lang'];
  $ref = $_SERVER['HTTP_REFERER'];
  $_SESSION['lang'] = $lang;

  setcookie('name', $lang, time()+3600*24*30);

//   header('Location: ' .$ref);
?>