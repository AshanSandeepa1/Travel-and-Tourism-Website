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


</head>

<body>
   
      <section class="header">

        <a href="home.php" class ="logo">TripiFy.com</a>

        <nav class="navbar">
          <a href="home.php">home</a>
          <a href="about.php">about</a>
          <a href="todo.php">to-do list</a>
          <button class="btnlogin">log in</button>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>


      </section>

      <section class="todo-container">
      <div class="container">
               <div class="todo-app">
                <h2> To-Do List <img src="images/todo.png"> </h2>
                <div class="row">
                    <input type="text" id="input-box" placeholder="Add your text">
                    <button onclick="addTask()">Add</button>
                </div>
                <ul id="list-container">
                  <!--   <li class="checked">Task 1</li>
                    <li>Task 2</li>
                    <li>Task 3</li> --> 
                </ul>
               </div>

        </div>
      </section>




     
      






























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

          <a href="#"> <i class ="fas fa-phone"></i> +"9411 2223334</a>
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
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!--js link-->
<script src ="script.js"></script>


</body>
</html>