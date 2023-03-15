<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>


      <!-- swiper css link  -->
      <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

      <!-- font awesome cdn link  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   
      <!-- custom css file link  -->
      <link rel="stylesheet" href="css/style.css">



      <style>
        html,
        body {
          position: relative;
          height: 100%;
        }
  
        body {
          background: var(--white);
          font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
          font-size: 7px;
          color: #000;
          margin: 0;
          padding: 0;
        }
  
        .swiper {
          width: 100%;
          padding-top: 50px;
          padding-bottom: 50px;
        }
  
        .swiper-slide {
          background-position: center;
          background-size: cover;
          width: 1000px;
          height: 500px;
        }
  
        .swiper-slide img {
          display: block;
          width: 100%;
        }
      </style>



</head>
<body>


    <div id="loader">
        <div class="body-load">
            <div class="face">
                <div class="circle"></div>
            </div>
            <div class="face">
                <div class="circle"></div>
            </div>
        </div>
    </div>





    <div id="main-body">
    
    <section class="header">
        
        
        <a href="home.php" class="logo">TripKar</a>
        
        
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
            <a href="map.php">Map</a>
        </nav>
        
        <div id="menu-btn" class="fas fa-bars"></div>

        <img src="images/moon.png"  id="dark-icon">
        
    </section>



    <section class="map">
        <h3>Spot Your destination here !</h3>
        <div class="mapimage">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d374241.72324034444!2d77.13948948583366!3d28.625092997287762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!5e0!3m2!1sen!2sin!4v1672399232201!5m2!1sen!2sin" width="1500" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
    </section>
   




        <section class="footer">
        <div class ="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"><i class="fas fa-angle-right"></i> package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i> book</a>
        </div>


        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"><i class="fas fa-angle-right"></i> about us</a>
            <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
        </div>


        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i> +123-456-7980</a>
            <a href="#"><i class="fas fa-phone"></i> +111-222-3333</a>
            <a href="#"><i class="fas fa-envelope"></i> j26122003@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i> Delhi, India</a>
        </div>


        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
            <a href="#"><i class="fab fa-twitter"></i> twitter</a>
            <a href="#"><i class="fab fa-instagram"></i> instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
        </div>
    </div>


    <div class="credit"> created by <span>Joy</span> | all rights reserved! </div>
    </section>


</div>



        <!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>