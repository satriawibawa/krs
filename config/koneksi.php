<?php

  $host = "localhost";
  $user = "root";
  $password = "";
  $database = "krs";
  $koneksi = new mysqli($host, $user, $password, $database);
  
  // Check connection
  if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      exit();
  }

?>