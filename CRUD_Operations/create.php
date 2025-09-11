<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="style.css">
    <title>Create Data</title>
  </head>
  <body>

  <?php

  require "db.php";

  if(isset($_POST["submit"])){

    $name=$_POST["name"];
    $email=$_POST["email"];
    

    $sql= "INSERT INTO users (name, email) VALUES ('$name','$email')";

    if(mysqli_query($conn,$sql)){
      echo "New Record is Created Successfully";
    }
    else{
      echo "Error: " .mysqli_error($conn);
    }
  }
  

  ?>
    <form method="POST">

    <h1>Create Data </h1>
      Name: <input type="text" name="name" required /><br /><br />
      Email: <input type="email" name="email" required /><br /><br />

      <button type="submit" name="submit" >Save</button>
    </form>


    <a href="read.php">Check you all data</a>



  </body>
</html>




