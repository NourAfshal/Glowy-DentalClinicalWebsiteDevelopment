<?php
include("database.php");
session_start();

if(isset($_POST['submit'])){
     
    $error="";
    $age = $_POST['age'];
    $gender =  $_POST['gender'];
    $phone_number = $_POST['number'];
    $date_time =  $_POST['date'];
    $note = $_POST['note'];
    $address =  $_POST['address'];
    $user_id = $_SESSION["user_id"];
    
    $sqlTest=mysqli_query($conn,"SELECT * FROM appointments WHERE user_id='$user_id'");

   if($sqlTest){
        $query = "INSERT INTO appointments (user_id,age, gender,appointment_date_time, note, address, contact) VALUES ('$user_id ','$age', '$gender','$date_time', '$note', '$address', '$phone_number')";
        $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
        header("Location: AppointementDetails.php");
    } 
    else{
        $error =die(mysqli_error($conn));
        $error = '<h2>System Error</h2>
        <p class="error">You could not be registered due to a system error. We apologize for any inconvenience.</p>';
    }
}
?>
