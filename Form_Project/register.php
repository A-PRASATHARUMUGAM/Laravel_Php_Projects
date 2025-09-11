<?php

require_once "db.php";


if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["new-password"];
    $confirmPassword = $_POST["cpassword"];

  //Hash Password 

  $password_hash= password_hash($password, PASSWORD_DEFAULT);

  $sql = "INSERT INTO prasathdbtable (username, email, password,cpassword)
   VALUE ('$username','$email','$password','$password_hash')";

   if(mysqli_query($conn,$sql)){

      echo "Stored Successfully";   
      echo $username;
      echo $email;
      echo $password;
   }else{
    echo "Error" .mysqli_error($conn);
   }
}


