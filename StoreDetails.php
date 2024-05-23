<html>
<head>
    <link rel="Website Icon" type="png" href="images\icon.png">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Order Details</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body style="background-color: var(--light-bg);">
<header class="header fixed-top">

    <div class="container">

        <div class="row align-items-center justify-content-between">

            <a href="DENTALCLINC.php" class="logo">Dental<span>care</span> GLOWY</a>

            <h1 class="link-btn">Order Details</h1>
            <div id="menu-btn" class="fas fa-bars"></div>

        </div>

    </div>
</header>
<!-- reviews section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading">Order Details</h1>
    <div class="services">
        <div class="box-container container">

            <div class="box" style="text-align:left;">
                <ul type="none" style="font-size:20px;">
                <?php error_reporting(0); ?>
                    <?php
                        include('database.php');
                        session_start();
                        $user_id = $_SESSION["user_id"];
                        $grand_total= $_SESSION["grand_total"];

                        $sql = "SELECT name, price, quantity FROM cart WHERE user_id = '$user_id'";
                        $result=$conn->query($sql);
                        
                        if($result->num_rows>0){
                            while($row=$result->fetch_assoc()){
                                echo "<li>Product Name: ".$row['name']."</li>";
                                echo "<li>Price Of the product: ".$row['price']."</li>";
                                echo "<li>Quantity: ".$row['quantity']."</li>";
                                echo "<br>";
                            }
                        }
                        echo "Your total Price is : ".$grand_total;
                    ?>
                </ul>
            </div>

        </div>
</section>
<div style="text-align:center;">
    <a href="DENTALCLINC.php"><button type="submit" value="submit" name="submit" class="link-btn" >Return Home</button></a>
</div>
</body>
</html>
