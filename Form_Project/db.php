<?php

  $host ="localhost";
  $username = "root";
  $password = "";
  $dbname = "prasathdb";

//   Create Connection 
  $conn = mysqli_connect($host ,$username,$password,$dbname);

//   Check Connection
  if(!$conn){
    die("Connection failed: ".$connect_error );
  }
  echo "Connection Successfully";


?>