<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!--Swiper link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!--font awesome link-->
    <link rel="stylesheet" href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!--css link-->
    <link rel="stylesheet" href = "style.css">

    <link rel="stylesheet" href="path/to/swiper-bundle.min.css">

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href = "cardstyles.css">
    


    <?php
    session_start();
    ?>


</head>

<body>
<?php
include 'db_connection.php';
?>
      <!--header section begins-->
      <section class="header">

        <a href="home.php" class ="logo">TripiFy.com</a>

        <nav class="navbar">
          <a href="home.php">home</a>
          <a href="about.php">about</a>
          <a href="todo.php">to-do list</a>
          <!-- Check if user is logged in -->
        <?php if(isset($_SESSION['username'])): ?>
            <button class="btnlogin"><?php echo $_SESSION['username']; ?></button>
        <?php else: ?>
            <button class="btnlogin">Log in</button>
        <?php endif; ?>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>


      </section>


      <!--header section ends-->
    
      <!--home section -->

      <section class="home">

        <div class="swiper home-slider">

          <div class="swiper-wrapper">

            <div class="swiper-slide " style="background:url(images/homeslide1.jpg) no-repeat">
              <div class="content">
                <span>explore, discover,travel</span>
                <h3>Travel around the world</h3>
                <a href="package.php" class="btn">discover more </a>
              </div>
            </div>

            <div class="swiper-slide " style="background:url(images/homeslide2.jpg) no-repeat">
              <div class="content">
                <span>explore, discover,travel</span>
                <h3>Travel around the world</h3>
                <a href="package.php" class="btn">discover more </a>
              </div>
            </div>

            <div class="swiper-slide " style="background:url(images/homeslide3.jpg) no-repeat">
              <div class="content">
                <span>explore, discover,travel</span>
                <h3>Travel around the world</h3>
                <a href="package.php" class="btn">discover more </a>
              </div>
            </div>

            <div class="swiper-slide " style="background:url(images/homeslide4.jpg) no-repeat">
              <div class="content">
                <span>explore, discover,travel</span>
                <h3>Travel around the world</h3>
                <a href="package.php" class="btn">discover more </a>
              </div>
            </div>


          </div>
    
        </div>


      </section>

      <!--home section -->

    

     <!--Service section-->
      
     <section class="services">

      <h1 class="heading-title"> Our Services</h1>

      <div class="box-container">

        <a href="stays.php" class="box">
          <img src ="images/stays.png" alt="">
          <h3>Stays</h3>
</a>

        <div class="box">
          <img src ="images/restaurant.png" alt="">
          <h3>Restaurants</h3>
        </div>

        <div class="box">
          <img src ="images/adventures.png" alt="">
          <h3>Adventures</h3>
        </div>

        <div class="box">
          <img src ="images/camping.png" alt="">
          <h3>Camping</h3>
        </div>

        <div class="box">
          <img src ="images/beach.png" alt="">
          <h3>Beaches</h3>
        </div>

      </div>

     </section>

   <!--Service section-->

<!--top rated section-->

<h1 class="heading-title"> TOP RATED Destinations</h1>

<section class="main-content">
    <?php $counter = 0; ?>
    <?php foreach ($stays as $stay): ?>
        <?php if ($counter < 5): ?>
            <a href="hotel_details.php?id=<?php echo $stay['id']; ?>" class="card" data-province="<?php echo $stay['Province']; ?>" data-rating="<?php echo $stay['rating']; ?>" data-cost="<?php echo $stay['price']; ?>">
                <div class="image">
                    <img src="<?php echo $stay['thumbnail']; ?>" alt="<?php echo $stay['name']; ?>">
                </div>
                <div class="caption">
                    <p class="rate">
                        <?php
                        $rating = $stay['rating'];
                        for ($i = 1; $i <= 5; $i++) {
                            if ($i <= $rating) {
                                echo '<i class="fas fa-star"></i>';
                            } else {
                                echo '<i class="far fa-star"></i>';
                            }
                        }
                        ?>
                    </p>
                    <p class="product_name"><?php echo $stay['name']; ?></p>
                    <p class="description"><?php echo $stay['shortDescription']; ?></p>
                    <p class="location"><?php echo $stay['location']; ?></p>
                    <p class="price">Rs. <?php echo $stay['price']; ?> per night</p>
                </div>
            </a>
            <?php $counter++; ?>
        <?php endif; ?>
    <?php endforeach; ?>
</section>



  <!--home about section-->

<section class="home-about">
  
<div class="image">
  <img src="images/about-us.jpeg" alt="" >
</div>

<div class="content">
  <h3>About Us</h3>
  <p>Welcome to our Travel and Tourism platform, where wanderlust meets seamless exploration. Embark on a journey with us as we traverse the globe, unlocking the wonders of the world and creating unforgettable experiences along the way.</p>
  <a href="about.php" class="btn">read more</a>
</div>


</section>

  <!--home about section-->



<!--review section begins-->
<section class="reviews">

<div class="swiper reviews-slider">

  <div class="swiper-wrapper">

        <div class="swiper-slider slide">

          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>

          </div>
          <p>TripiFy.com made planning my trip a breeze! The website's user-friendly interface allowed me to easily search for accommodations in my desired location, 
            compare prices, and read reviews from other travelers. I appreciated the flexibility of being able to filter my search based on my preferences, 
            whether it was price range, amenities, or location.
</p>

        <h3>Emily Johnson</h3>
        <span>traveller</span>
        <img src="images/pic1.jpg" alt="" alt="">
        
      </div>

      <div class="swiper-slider slide">

          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            

          </div>
          <p>TripiFy.com has become my go-to resource whenever I'm planning a trip. The wealth of information available on the website, 
            from reviews and ratings to photos and insider tips, has been invaluable in helping me make informed decisions 
            about where to stay, where to eat, and what activities to do. I love how I can easily compare options and get a sense of what to 
            expect before making any bookings.
</p>

        <h3>Nirmal Fernando</h3>
        <span>traveller</span>
        <img src="images/pic2.jpg" alt="" alt="">
        
      </div>

      <div class="swiper-slider slide">

          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            

          </div>
          <p>I've been using TripiFy.com for years, and it never disappoints! Whether I'm booking a stays and hotels TripiFy.com comprehensive search functionality and competitive 
            prices always come through for me. I appreciate how I can easily bundle my bookings to save even more money, and the loyalty program offers great perks for frequent travelers.
</p>

        <h3>Samantha Chen</h3>
        <span>traveller</span>
        <img src="images/pic3.jpg" alt="" alt="">
        
      </div>

      <div class="swiper-slider slide">

          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>

          </div>
          <p>Staying in an TripiFy.com property has completely transformed the way I travel! I love the personalized touch and unique experiences that TripiFy.com hosts offer, 
            whether it's a cozy apartment in the heart of a city or a 
            charming countryside cottage. The website's interface is user-friendly, 
            allowing me to easily browse listings, read detailed descriptions, and view photos of potential accommodations.
</p>

        <h3>Michael Rodriguez</h3>
        <span>traveller</span>
        <img src="images/pic4.jpg" alt="" alt="">
        
      </div>

      <div class="swiper-slider slide">

          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>

          </div>
          <p>TripiFy.com is my go-to tool for finding the best travel deals! Whether I'm searching for flights, hotels, 
          TripiFy.com's powerful search engine scours the web to find me the most competitive prices. 
            I love how I can easily compare options from multiple providers and filter my search based on my preferences, whether it's price, duration, or airline.. 
</p>

        <h3>Sarah Patel</h3>
        <span>traveller</span>
        <img src="images/pic5.jpg" alt="" alt="">
        
      </div>

      <div class="swiper-slider slide">

          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>

          </div>
          <p> Travel Srilanka
</p>

        <h3>ABC</h3>
        <span>traveller</span>
        <img src="images/pic6.jpg" alt="" alt="">
        
      </div>
      
        
  </div>

</div>























  <!--footer section starts-->

  <section class="footer">

    <div class="box-container">

      <div class="box">

          <h3>quick links</h3>
          <a href="home.php"> <i class ="fas fa-angle-right"></i> home</a>
          <a href="about.php"> <i class ="fas fa-angle-right"></i> about</a>
          <a href="package.php"> <i class ="fas fa-angle-right"></i> packages</a>
          <a href="book.php"> <i class ="fas fa-angle-right"></i> book</a>

      </div>

      <div class="box">

        <h3>extra links</h3>

          <a href="#"> <i class ="fas fa-angle-right"></i> ask questions</a>
          <a href="#"> <i class ="fas fa-angle-right"></i> about us</a>
          <a href="#"> <i class ="fas fa-angle-right"></i> privacy policy</a>
          <a href="#"> <i class ="fas fa-angle-right"></i> terms of use</a>

      </div>

      <div class="box">

        <h3>contact info</h3>

          <a href="#"> <i class ="fas fa-phone"></i> +9411 2223334</a>
          <a href="#"> <i class ="fas fa-phone"></i> +9411 2345567</a>
          <a href="#"> <i class ="fas fa-envelope"></i> wetravel@gmail.com</a>
          <a href="#"> <i class ="fas fa-map"></i> Colombo 10, Sri Lanka</a>

      </div>

      <div class="box">

        <h3>follow us</h3>

          <a href="#"> <i class ="fab fa-facebook"></i> facebook</a>
          <a href="#"> <i class ="fab fa-twitter"></i> twitter</a>
          <a href="#"> <i class ="fab fa-instagram"></i> instagram</a>
          <a href="#"> <i class ="fab fa-linkedin"></i> facebook</a>

          

      </div>
 

    </div>

    <div class="credit"> all rights reserved!</div>


  </section>



  <!--footer section ends-->


  <!--swiper js link-->


  <!--js link-->
<script src ="script.js"></script>


</body>
</html>