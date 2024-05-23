<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="Website Icon" type="png" href="images\icon.png">
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
   <link rel="stylesheet" href="css/style2.css">
   <script src="js/script2.js" defer></script>
   <script src="js/scriptCountdown.js" defer></script>
   <script >
   const feedbackForm = document.getElementById("feedback-form");
feedbackForm.addEventListener("submit", (event) => {
  event.preventDefault();

  const rating = document.querySelector('input[name="rating"]:checked').value;
  const feedback = document.getElementById("feedbackText").value;

  const formData = new FormData();
  formData.append("rating", rating);
  formData.append("feedbackText", feedback);

  fetch("feedbackProcess.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.json())
    .then((data) => {
      // Show success message or handle errors
    })
    .catch((error) => {
      console.error(error);
    });
});

         </script>
</head>
<body>
<div id="progress-bar"></div>
<!-- header section starts  -->

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <a href="#home" class="logo">Dental<span>Care</span> GLOWY</a>

         <nav class="nav">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="feedback.php">Reviews</a>
            <a href="#sectionContact">Contact</a>
            <a href="#location">Location</a>
            <a href="logout.php">Logout</a>
         </nav>
        
         <a href="Store.php" class="link-btn">Store</a>
         <a href="feedback.php"><img src="images\feedback.png" width="70px" height="70px"></a>
         <div id="menu-btn" class="fas fa-bars"></div>
         
      </div>

   </div>
   
</header>

   
<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="container">

      <div class="row min-vh-100 align-items-center">
         <div class="content text-center text-md-left">
            <h3>Let us brighten your smile!</h3>
            <p>We look forward to welcoming you to our practice and helping you achieve a healthy, beautiful smile!</p>
            <a href="Appointment.php" class="link-btn">Make An Appointment</a>
         </div>
      </div>

   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">

         <div class="col-md-6 image">
            <img src="images/about-img.jpg" class="w-100 mb-5 mb-md-0" >
         </div>

         <div class="col-md-6 content">
            <span>About Us</span>
            <h3>True Healthcare For Your Family.</h3>
            <p>Welcome to our dental clinic! We are a team of dedicated dental professionals who are committed to providing high-quality dental care to our patients.Our clinic is equipped with the latest technology and equipment to ensure that our patients receive the best possible care. Our services include routine dental exams and cleanings, restorative dentistry, cosmetic dentistry, orthodontics, and more.</p>
            <a href="Appointment.php" class="link-btn">Make An Appointment</a>
         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading">Our Services</h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/icon-1.svg" alt="">
         <h3>Alignment specialist</h3>
         <p>Alignment dentistry is the correct arrangement of teeth in relationship to the adjacent teeth, the dentition opposite to it and the supporting bone.</p>
      </div>

      <div class="box">
         <img src="images/icon-2.svg" alt="">
         <h3>Cosmetic dentistry</h3>
         <p>Cosmetic dentistry not only makes you smile more confidently, but it will make you feel better about yourself. It is a way to boost your self-confidence and get the smile you have always wanted.</p>
      </div>

      <div class="box">
         <img src="images/icon-3.svg" alt="">
         <h3>Oral hygiene experts</h3>
         <p>Oral hygiene is the practice of keeping your mouth clean and disease-free. It involves brushing and flossing your teeth as well as visiting your dentist regularly for dental X-rays, exams and cleanings</p>
      </div>

      <div class="box">
         <img src="images/icon-4.svg" alt="">
         <h3>Root canal specialist</h3>
         <p>Oral hygiene is the practice of keeping your mouth clean and disease-free. It involves brushing and flossing your teeth as well as visiting your dentist regularly for dental X-rays, exams and cleanings</p>
      </div>

      <div class="box">
         <img src="images/icon-5.svg" alt="">
         <h3>Live dental advisory</h3>
         <p>When you go for a dental check-up, your dentist should ask questions about your general health and medications. Many health conditions have an effect on your oral health and vice versa.</p>
      </div>

      <div class="box">
         <img src="images/icon-6.svg" alt="">
         <h3>Cavity inspection</h3>
         <p>Routine teeth inspection is not only good for oral health but overall health as well. The initial symptoms of some common health conditions, such as diabetes, arthritis, and lupus, first appear in the mouth.</p>
      </div>

   </div>

</section>

<!-- services section ends -->
<section class="process">
      <h1 class="heading">Promo</h1>
      <div class="box-container container">
         <div class="container text-center">
            <div class="countdown">
            <span>
               Promo For Tooth Cleaning FROM <strong >"$140.00"</strong> NOW
               <strong >$50.00</strong>
            </span>
            <div id="date-countdown" >
            </div>
            </div>
         </div>
      </div>
   </section>

<!-- process section starts  -->

<section class="process">

   <h1 class="heading">Work Process</h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/process-1.png" alt="">
         <h3>Cosmetic Dentistry</h3>
         <p>Dental services include teeth whitening, dental bonding, veneers, and tooth and gum contouring.</p>
      </div>

      <div class="box">
         <img src="images/process-2.png" alt="">
         <h3>Pediatric Dentistry</h3>
         <p>Performing basic check-ups on patients to assess the health of their teeth and gums. Providing deep cleanings to remove any built-up materials on the teeth.</p>
      </div>

      <div class="box">
         <img src="images/process-3.png" alt="">
         <h3>Dental Implants</h3>
         <p>When you get dental implants, you are replacing the tooth roots with tooth posts made of metal. These dental posts are like screws for artificial teeth.</p>
      </div>

   </div>

</section>

<!-- process section ends -->

<!-- reviews section starts  -->

   
<!-- Feedback section starts  -->

      <section id="feedback" class="reviews">
         <h1 class="heading">Feedback </h1>
         <div class="box-container container">
         <div class="credit">
         <form class="box" method="POST" action="feedbackProcess.php">
         <h3 style="text-align:center"><strong>How do you rate customer support:</strong></h3>

         <div class="rating">
            <input type="radio" name="rating" value="5" id="5-stars">
            <label for="5-stars">&#9733;</label>
            <input type="radio" name="rating" value="4" id="4-stars">
            <label for="4-stars">&#9733;</label>
            <input type="radio" name="rating" value="3" id="3-stars">
            <label for="3-stars">&#9733;</label>
            <input type="radio" name="rating" value="2" id="2-stars">
            <label for="2-stars">&#9733;</label>
            <input type="radio" name="rating" value="1" id="1-star">
            <label for="1-star">&#9733;</label>
         </div>

            <div style="text-align:center" >
         <h3 ><strong>What could we improve?</strong></h3>

         <textarea name="feedback" placeholder="Your Feedback"  id="feedbackText"  ></textarea>
         </div>
         <div class="box" style="text-align:center;">
         <input type="submit" name="Submit" class="link-btn" id="feedback-form" value="Submit" >
      </div>
      </div>
      </div>
         </form>
         
    
      
      </section>
<!-- contact section ends -->

<!-- footer section starts  -->
      <section id="location" class="container2">
      <div class="mx-auto my-5" style="max-width: 60%;">
      <div class="card map-card">
         <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3290.523697721611!2d35.828408174946915!3d34.438851797219016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1521f6abae6fbfe9%3A0x628a984fa6924ed2!2sCity%20Complex!5e0!3m2!1sen!2slb!4v1682444961159!5m2!1sen!2slb" width="600" height="450" style="border:0;" 
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
         </div>
         </div>
      </div>
      </section>



<section class="footer" id="sectionContact">

   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>Phone Number</h3>
         <p>+961 81 656788</p>
         <p>+961 06 890543</p>
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>Our Address</h3>
         <p>Lebanon, Tripoli, City Complex</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>Opening Hours</h3>
         <p>9:00 am to 5:00 pm</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>Email Address</h3>
         <p>NourH@gmail.com</p>
         <p>NourA@gmail.com</p>
         <p>ReemM@gmail.com</p>
      </div>
      
   </div>

   <div class="credit"> 
      <div class="box" >
         
         <!-- Facebook -->
         <a style="color: #3b5998;" href="https://www.bing.com/ck/a?!&&p=02641dd747390cbaJmltdHM9MTY4MjM4MDgwMCZpZ3VpZD0zY2I5YTRkNi02NmFhLTZlMmMtMDkwMC1iNTQ1NjcwMjZmNzkmaW5zaWQ9NTE5Mg&ptn=3&hsh=3&fclid=3cb9a4d6-66aa-6e2c-0900-b54567026f79&psq=facebook&u=a1aHR0cHM6Ly93d3cuZmFjZWJvb2suY29tLw&ntb=1" role="button">
         <i class="fab fa-facebook-f fa-lg"></i></a>

         <!-- Twitter -->
         <a style="color: #55acee;" href="https://www.bing.com/ck/a?!&&p=92405c1e16640a45JmltdHM9MTY4MjM4MDgwMCZpZ3VpZD0zY2I5YTRkNi02NmFhLTZlMmMtMDkwMC1iNTQ1NjcwMjZmNzkmaW5zaWQ9NTE3NA&ptn=3&hsh=3&fclid=3cb9a4d6-66aa-6e2c-0900-b54567026f79&psq=twitter&u=a1aHR0cHM6Ly90d2l0dGVyLmNvbS9sb2dpbg&ntb=1" role="button">
         <i class="fab fa-twitter fa-lg"></i></a>

         <!-- Google -->
         <a style="color: #dd4b39;" href="https://www.bing.com/ck/a?!&&p=a9f4d65724a0b335JmltdHM9MTY4MjM4MDgwMCZpZ3VpZD0zY2I5YTRkNi02NmFhLTZlMmMtMDkwMC1iNTQ1NjcwMjZmNzkmaW5zaWQ9NTE3MQ&ptn=3&hsh=3&fclid=3cb9a4d6-66aa-6e2c-0900-b54567026f79&psq=google&u=a1aHR0cHM6Ly93d3cuZ29vZ2xlLmNvbS5sYi8&ntb=1" role="button">
         <i class="fab fa-google fa-lg"></i></a>

         <!-- Instagram -->
         <a style="color: #ac2bac;" href="https://www.bing.com/ck/a?!&&p=21d045744229e233JmltdHM9MTY4MjM4MDgwMCZpZ3VpZD0zY2I5YTRkNi02NmFhLTZlMmMtMDkwMC1iNTQ1NjcwMjZmNzkmaW5zaWQ9NTE4MA&ptn=3&hsh=3&fclid=3cb9a4d6-66aa-6e2c-0900-b54567026f79&psq=instagram&u=a1aHR0cHM6Ly93d3cuaW5zdGFncmFtLmNvbS8&ntb=1" role="button">
         <i class="fab fa-instagram fa-lg"></i></a>
      </div>

       copyright &copy; <?php echo date('Y'); ?> by <span>NOORS&&REEM</span> 
   </div>

</section>

</body>
</html>