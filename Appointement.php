

<?php
include("database.php");
extract($_POST);
if(isset($_POST['submit'])){
    session_start(); 
    $error="";
    $age = $_POST['age'];
    $gender =  $_POST['gender'];
    $phone_number = $_POST['number'];
    $date_time =  $_POST['date'];
    $note = $_POST['note'];
    $address =  $_POST['address'];
    $user_id = $_SESSION["id"] ;
  $email= $_SESSION["email"] ;
   $sqlTest=mysqli_query($conn,"SELECT * FROM  users where email=".$email);
    
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

<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> DENTALCARE GLOWY</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- bootstrap cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    </head>
    <body >
    <header class="header fixed-top">

    <div class="container">

    <div class="row align-items-center justify-content-between">

        <a href="#" class="logo">Dental<span>care</span> GLOWY</a>
        
    <h1 class="link-btn">Appointment Form</h1>
        <div id="menu-btn" class="fas fa-bars"></div>

    </div>

    </div>
    </header>
        <!-- reviews section ends -->

        <!-- contact section starts  -->
        
        <section class="contact" id="contact">

        <h1 class="heading">Make Appointment</h1>

            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">

            <span>FullName:</span>
            <input type="text" name="fullName" placeholder="FullName" class="box"  required>


            <span>Gender :</span>
            <select class="box" name="gender" required>
            <option>Gender</option>
            <option>Female</option>
            <option>Male</option>
            <option>Other</option>
            </select>
            <br>
            <span>Contact:</span>
            <input type="number" name="number" placeholder="Number:" class="box" required>

            <span>Age :</span>
            <input type="number" name="age"  placeholder="Age" class="box" required>

            <span>Choose a date:</span>
            <input type="datetime-local" name="date" class="box" required>

            <span>Address:</span><br>
            <textarea name="address" class="box" id="address" placeholder="Adress" required>></textarea>

            <span>Leave a note:</span><br>
            <textarea name="note" class="box" id="note" placeholder="Notes" required></textarea>
            <span>
                <?php
                    if(isset($error)){
                    echo $error;
                    }
                ?>
            </span>
            <br>
            <a href="AppointementDetails.php" >
                <input type="submit" value="Make Appointment" name="submit" class="link-btn">
            </a>
            </form>  
            
        </section>

    </body>
</html>
