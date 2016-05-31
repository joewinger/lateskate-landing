<?php
  $file = fopen("emaillist.txt", "a");
  
  if(isset($_GET['name'])){ $name = $_GET['name']; }
  if(isset($_GET['email'])){ $email = $_GET['email']; }
  
  fwrite($file, ",\n" . $name . " <" . $email . ">");
  fclose($file); 
  print_r(error_get_last());

  header('Location: http://lateskatelights.com/');
?>