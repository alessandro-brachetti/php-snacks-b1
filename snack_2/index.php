<?php
  $name = $_GET['name'];
  $mail = $_GET['mail'];
  $age = $_GET['age'];

  // echo $name;
  // echo $mail;
  // echo $age;

  if (strlen($name) > 3 && strpos($mail, '@') && strpos($mail, '.') && is_numeric($age)) {
    echo 'Accesso Consentito!';
  }  else {
    echo 'Accesso Negato!';
  };


 ?>
