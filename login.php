<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="Website Icon" type="png" href="images\icon.png">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Login </title>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/style2.css">
   <script src="js/script.js" defer></script>
</head>
<body>

   <?php
      include 'loginProcess.php';
   ?>

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <p class="logo">Dental<span>Care</span> GLOWY</p>
        
      <h1 class="link-btn"> LOGIN YOUR ACCOUNT</h1>
         <div id="menu-btn" class="fas fa-bars"></div>

      </div>

   </div>
</header>

<section class="contact" >
   <h1 class="heading">LOGIN YOUR ACCOUNT </h1>

   <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">

      <span >Please login to your account:</span>

      <div class="field">
         <input type="email" id="email" name="email" autocomplete="off" required>
         <label for="email" class="label-wrapper">
            <span class="label-text">
               Email Address
            </span>
         </label>
      </div>
      <br>
      <div class="field">
         <input id="password" type="password" name="password" autocomplete="off" maxlength="15" minlength="8"  required>
         <label for="password" class="label-wrapper">
            <span class="label-text">
               Password
            </span>
         </label>
      </div>
      <span name="pass" class="error">
         <?php
         if(isset($error)){
            echo $error;
         }
         ?>
      </span>
      <br/>
      
      <input type="submit" value="Login" name="submit" class="link-btn">
      <br/>
      </br>
      <span >
        <h5> Don't have an account?<a href="registeration.php" style="color:red;"> <strong>Sign Up</strong></a></h5>
      </span>
      </br>
      <a href="#!" >Terms of use Privacy policy</a>

   </form>  

</section>

</body>
</html>


