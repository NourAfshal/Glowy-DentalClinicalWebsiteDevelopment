<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="Website Icon" type="png" href="images\icon.png">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Feedback</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/style2.css">
   <script src="js/script2.js" defer></script>
  
</head>
<body>

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <a href="DENTALCLINC.php" class="logo">Dental<span>Care</span> GLOWY</a>

         <button class="link-btn">Reviews</button>
         
      </div>

   </div>
   
</header>

    <!-- reviews section starts  -->

<section class="reviews" id="reviews">

<h1 class="heading">Satisfied Clients </h1>

<div class="box-container container">

   <div class="box">
      <img src="images/Noorphoto.jpg" alt="">
      <p>Dr. Meena is very professional, she takes the time to explain what needs to be done and provides valuable advice , It's not easy to find a good dentist for your kids, I highly recommend Dr. Meena and her staff for kids and adults.</p>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
      </div>
      <h3>Nour Hamdach</h3>
      <span>Satisfied Client</span>
   </div>

   <div class="box">
      <img src="images/Reem.jpeg" alt="">
      <p> Excellent doctor!!!Very thorough and caring. I'm terribly afraid of the dentist and she's very sensitive to that and goes the extra mile to make you feel comfortable. Love her</p>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
      </div>
      <h3>Reem Merheb</h3>
      <span>Satisfied Client</span>
   </div>

   <div class="box">
      <img src="images/NourAf.jpeg" alt="">
      <p>Very pleasant indeed! Dr. Meena is a great doctor who listens to the patient and takes care of him/her with great attention</p>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
      </div>
      <h3>Nour El Afchal</h3>
      <span>Satisfied Client</span>
   </div>


 <?php
                include('database.php');
                session_start();
                    $user_id = $_SESSION['user_id'];

        if(!isset($user_id)){
        header('location:login.php');
             };
                $sql="SELECT user_id,feedback,stars FROM poll WHERE user_id='$user_id'";
                $queries="SELECT first_name,last_name FROM users  WHERE user_id='$user_id'";
                $rst=$conn->query($queries);
                  while($rw=$rst->fetch_assoc()){
                      $firstN=$rw['first_name'];
                      $latN=$rw['last_name'];
                  }
                $result=$conn->query($sql);
                if($result->num_rows>0){
                                    
                    while($row=$result->fetch_assoc()){
                        $stars=$row['stars']; ?> 
                        <div class="box">
                        <?php
                        echo' <img src="images/unknown.jpeg" alt="">';
                         echo "<p> ".$row['feedback']."</p>";?>
                         <div class="stars">
                         <?php
                        if (isset($row['stars']) && $row['stars'] !== null) {
    
    // Output the stars using the value from the array
    for ($i = 0; $i < $row['stars']; $i++) {
        echo "<i class='fa fa-star checked'></i>";
    }?>
    </div> <?php
                        }
                                                              
                       
                       echo'<h3>'.$firstN.' '.$latN.'</h3>';
                      echo'<span>Satisfied Client</span>'; 
                        echo'</div>';
                    }
                 
                } 
                ?>
            
             </div>

</section>


</body>
</html>