<?php
  $username = "hastyar";
  $password = "Hastyar123";
  $host = "localhost";
  $database_name = "peshangai_danyar";

  $connection = new mysqli($host,$username,$password,$database_name) or die("error".mysqli_connect_error());
  $connection->set_charset("utf8");
  $connection->query("SET NAMES 'utf8'");
  $connection->query('SET CHARACTER SET utf8');
  mysqli_set_charset( $connection,'utf8');
?>