<?php
session_start();
include("database.php");
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

// Get form data
if(isset($_POST['Submit'])){
$rating = $_POST["rating"];
$feedback = $_POST["feedback"];

mysqli_query($conn, "INSERT INTO `poll`(user_id, stars, feedback) VALUES('$user_id', '$rating','$feedback')") or die('query failed');


// Close database connection
$conn->close();

// Send response
header("Content-type: application/json");
echo json_encode(["success" => true]);}
?>