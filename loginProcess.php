<?php
session_start();
include 'database.php';

if(isset($_POST['submit']))
{
   $email=$_POST['email'];
   $pass=$_POST['password'];
    
    $sql=mysqli_query($conn,"SELECT * FROM users where email='$email' and password='$pass'");
    $row = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["user_id"]= $row['user_id'];
        header("Location: DENTALCLINC.php"); 
        exit();
    }
    else
    {
        $error='invalid Username or Password';
    }
}
?>
