<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <trequireditle>Validation Form Project </trequireditle>
</head>
<body>
    
    <h1 class="main-title"> Validation Form </h1>

<div class="form-container">
    <form action="register.php" method="POST"  class="form-main-container">
       

          <h1 class="form-title">Register</h1>
          <!-- input1  -->
          <div>
              <label for="username" >Username</label> <br>
              <input type="text" name="username" id="username" required>
              <div class="error"></div>
          </div>
          <!-- input2  -->
          <div>
              <label for="Email" >Email</label><br>
              <input type="email" name="email" id="email"required >
              <div class="error"></div>
          </div>
          <!-- input3  -->
          <div>
              <label for="Password" >Password</label><br>
              <input type="password" name="new-password" id="password" required>
              <div class="error"></div>
          </div>
          <!-- input4  -->
          <div>
              <label for="Conform Password" >Confirm Password</label><br>
              <input type="password" name="cpassword" id="cpassword" required >
              <div class="error"></div>

          </div>
          <!-- Confirm Button --> 
           <div class="form-btn-container">
               <button type="submit" class="form-btn">Confirm</button>
           </div>
    </form>
</div>




</body>
</html>