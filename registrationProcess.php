<?php
extract($_POST);
   include("database.php");
   if(isset($_POST['submit'])){
      session_start();
      $email=$_POST['email'];
      $pass=$_POST['password'];
      $first_name=$_POST['first_name'];
      $last_name=$_POST['last_name'];
      $Confirmpassword=$_POST['Confirmpassword'];

      $sql=mysqli_query($conn,"SELECT *FROM  users where email='$email'");
      if(mysqli_num_rows($sql)>0){
         $error= "Email already exist.";
      }
      else{
         if($Confirmpassword!=$pass){
            $error3= "Passwords do not match";
         }
         else{
            $query="INSERT INTO users ( email,password,first_name,last_name) VALUES('$email','$password','$first_name','$last_name') ";
            $sql=mysqli_query($conn,$query) or die("Could not perform the query");
            
            $sql2=mysqli_query($conn,"SELECT * FROM users where email='$email' and password='$pass'");
            $row = mysqli_fetch_array($sql2);
               if(is_array($row)){

                  $_SESSION["user_id"]= $row['user_id'];
                  header("Location: DENTALCLINC.php"); 
                  exit();
               }

            header("Location: DENTALCLINC.php");
         }
   }
   }
?>