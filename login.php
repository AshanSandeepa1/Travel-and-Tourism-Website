<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Website Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href = "style.css">
<style>



</style>
</head>

<body>

<!--header section begins-->
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

<!--header section ends-->


    <section class="login">
    <div class="login-container">
        <h2>Login</h2>
        <form action="#">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button class="submit">Login</button>
            <div class="more-options">
                <a href="forgetpass.php">Forgot Password?</a>
                <a href="createpass.php">Create Account</a>
            </div>
            <div class="social-login">
                <p>Or login with:</p>
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-google"></i></a></li>
                </ul>
            </div>
        </form>
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

  <!--js link-->
  <script src ="script.js"></script>

<!--footer section ends-->
</body>
</html>