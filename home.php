<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>


      <!-- swiper css link  -->
      <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
      <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/> -->

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




    <section class="home">

        <div class="swiper home-slider">
     
           <div class="swiper-wrapper">
     
              <div class="swiper-slide slide" style="background:url(images/home-slide-1.avif) no-repeat">
                 <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel around the world</h3>
                    <a href="package.php" class="btn">discover more</a>
                 </div>
              </div>
     
              <div class="swiper-slide slide" style="background:url(images/home-slide-2.avif) no-repeat">
                 <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>discover the new places</h3>
                    <a href="package.php" class="btn">discover more</a>
                 </div>
              </div>
     
              <div class="swiper-slide slide" style="background:url(images/home-slide-3.avif) no-repeat">
                 <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>make your tour worthwhile</h3>
                    <a href="package.php" class="btn">discover more</a>
                 </div>
              </div>
              
           </div>
<!--      
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> -->
     
        </div>

     </section>





    <section class="services">
        <h1 class="heading-title">Our Services</h1>

        <div class="box-container">

            <div class="box">
                
                <img src="images/icon-1.png" alt="">
                <h3>Adventure</h3>
            </div>
            
            
            
            <div class="box">
                <img src="images/icon-2.png" alt="">
                <h3>Tour Guide</h3>
            </div>

            <div class="box">
                <img src="images/icon-3.png" alt="">
                <h3>Trekking</h3>
            </div>


            <div class="box">
                <img src="images/icon-4.png" alt="">
                <h3>Camp Fire</h3>
            </div>


            <div class="box">
                <img src="images/icon-5.png" alt="">
                <h3>Off Road</h3>
            </div>


            <div class="box">
                <img src="images/icon-6.png" alt="">
                <h3>Camping</h3>
            </div>
        </div>
    </section>







    <section class="features">
        <h1 class="heading-title">Why Choose Us..?</h1>
        <div class="container">
            <div class="box">
              <span></span>
              <div class="content">
                <h2>Card one</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a href="#">Read More</a>
              </div>
            </div>
            <div class="box">
              <span></span>
              <div class="content">
                <h2>Card two</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a href="#">Read More</a>
              </div>
            </div>
            <div class="box">
              <span></span>
              <div class="content">
                <h2>Card Three</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a href="#">Read More</a>
              </div>
            </div>
          </div>
    </section>






    <section class="home-about">

        <div class="image">
            <img src="images/about-image.jpg.jpg" alt="">
        </div>

        <div class="content">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis iusto assumenda corrupti quisquam voluptates aperiam excepturi facere iste alias voluptas! Quidem error amet nisi mollitia distinctio, perferendis sapiente minus culpa!</p>
            <a href="about.php" class="btn">Read More</a>
        </div>

    </section>


    





    <section class="home-packages">

        <h1 class="heading-title">Our Packages</h1>

        <div class="box-container">

            <div class="box">

                <div class="image">
                    <img src="images/img-1.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, optio?</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>


            <div class="box">

                <div class="image">
                    <img src="images/img-2.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, optio?</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>


            <div class="box">

                <div class="image">
                    <img src="images/img-3.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, optio?</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>

        </div>
        
        <div class="load-more"><a href="package.php" class="btn">Load More</a></div>
    </section>


    <section class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias officiis laborum atque harum qui quibusdam. Delectus magnam suscipit ut ex?</p>
            <a href="book.php" class="btn">Book Now</a>
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

    



    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- swiper js link  -->
    <!-- <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script> -->

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
    
    



</body>
</html>