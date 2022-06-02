<?php
  $lang = $_GET['lang'];
  $ref = $_SERVER['HTTP_REFERER'];
  $_SESSION['lang'] = $lang;

  header('Location: ' .$ref);
?>