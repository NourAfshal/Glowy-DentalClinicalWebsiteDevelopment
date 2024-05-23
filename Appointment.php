<!DOCTYPE html>
<html>
    <head>
    <link rel="Website Icon" type="png" href="images\icon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Appointment </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- bootstrap cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/styleAppointment.css">
    <script src="js/scriptAppointment.js" defer></script>
    </head>
    <body>
        
    <?php
        include 'AppointmentProcess.php';
    ?>
    <header class="header fixed-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
            <a href="DENTALCLINC.php" class="logo">Dental<span>care</span> GLOWY</a>
            <div id="menu-btn" class="fas fa-bars"></div>
    </div>
    </div>
    </header>
        <section class="contact" id="contact">
        <h1 class="heading">Make An Appointment</h1>

            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">

            <span><h3><strong>
                Fill the following form: 
            </strong></h3></span>

            <input type="text" name="fullName" placeholder="FullName" class="box"  required>

            <div style="display: flex;">
                <select class="box" name="gender" required style="margin-right: 10px;">
                    <option>Gender</option>
                    <option>Female</option>
                    <option>Male</option>
                    <option>Other</option>
                </select>

                <input type="number" name="age"  placeholder="Age" class="box" required>
            </div>
            <textarea name="address" class="box" id="address" placeholder="Address" required></textarea>
            
            <input type="number" name="number" placeholder="Contact Number" class="box" required>
            
            <span>Choose a date:</span>
            <input type="datetime-local" name="date" class="box" required>

            <span>Leave a note:</span><br>
            <textarea name="note" class="box" id="note" placeholder="Notes"></textarea>
            <span>
                <?php
                    if(isset($error)){
                    echo $error;
                    }
                ?>
            </span>
            <br>
            <input type="submit" name="submit" class="link-btn" value="Save">
            <input type="submit" class="reset" name="reset" value="reset">
            <br>
            </form>              
        </section>
    </body>
</html>