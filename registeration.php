<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
   <link rel="Website Icon" type="png" href="images\icon.png">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Registration Form </title>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" href="css/style2.css">
   <script src="js/script.js" defer></script>
</head>
<body >
<!-- header section starts  -->
<?php

   include("registrationProcess.php");
   ?>
<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <p class="logo">Dental<span>Care</span> GLOWY</p>
         <h1 class="link-btn">REGISTRATION FORM</h1>
         <div id="menu-btn" class="fas fa-bars"></div>

      </div>

   </div>
</header>
<section class="contact" id="contact">

   <h1 class="heading">SIGN UP </h1>
   <form action="registeration.php" method="POST" enctype="multipart/form-data">
      
   <span>Create Your Account:</span>
   <br>
   <div class="field">
         <input type="text" id="first_name "name="first_name" autocomplete="off" required>
         <label for="name" class="label-wrapper">
            <span class="label-text">
               First Name
            </span>
        </div>
         </label>
         <div class="field">
         <input type="text" id="last_name "name="last_name" autocomplete="off" required>
         <label for="name" class="label-wrapper">
            <span class="label-text">
              Last Name
            </span>
         </label>

      </div>
      <div class="field">
         <input type="text" id="email" name="email" autocomplete="off" required>
         <label for="email" class="label-wrapper">
            <span class="label-text">
               Email Address
            </span>
         </label>
      </div>
      <span class="error">
         <?php
            if(isset($error)){
               echo $error;
            }
         ?>
      </span>

      <div class="field">
         <input id="password" type="password" name="password" autocomplete="off" maxlength="15" minlength="8"  required>
         <label for="password" class="label-wrapper">
            <span class="label-text">
               Password
            </span>
         </label>
      </div>
      <div class="field">
         <input  type="password" id="Confirmpassword" name="Confirmpassword"  autocomplete="off" maxlength="15" minlength="8"  required>
         <label for="Confirmpassword" class="label-wrapper">
            <span class="label-text">
               Confirm Password
            </span>
         </label>
      </div>
      <span class="error">
         <?php
            if(isset($error3)){
               echo $error3;
            }
         ?>
      </span>
      <br>
      <h5>
         <input  type="checkbox" value="" id="terms" required/>
         <label  for="terms">
         I agree all statements in <a href="#!">Terms of service</a>
         </label>
      </h5>
      <button type="submit" value="submit" name="submit" class="link-btn">Save</button>
      
      <span >
        <h5><br> Already have an account?<a href="login.php" style="color:red;"><strong> Login here</strong></a></h5>
      </span>      
   </form>  

</section>

</body>
</html>
