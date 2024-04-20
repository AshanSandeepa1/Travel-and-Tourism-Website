<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stays</title>
    <link rel="stylesheet" href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href = "style.css">
    <link rel="stylesheet" href = "cardstyles.css">
</head>

<body>

<?php
include 'db_connection.php';
?>

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

      <div class="back-image">
    <h2>STAYS</h2>
    <div class="search-icon">
        <i class="fas fa-search"></i>
        <input type="text" id="searchInput" placeholder="Search...">
    </div>
    <ul id="searchResults" class="hotel-list"></ul>
</div>

    <div class="filter-container">

        <!-- Filter options -->
        <section class="filters">
        <h2>Filters</h2>
        <div class="filter-option">
            <label for="province">Province:</label>
            <select name="province" id="province">
                <option value="">All Provinces</option>
                <?php foreach ($uniqueProvinces as $provinces): ?>
                    <option value="<?php echo $provinces; ?>"><?php echo $provinces; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="filter-option">
        <label for="rating">Rating:</label>
        <select name="rating" id="rating">
            <option value="">All Ratings</option>
            <?php foreach ($standardRatings as $rating): ?>
                <?php
                    // Convert rating text to equivalent decimal number
                    $ratingValue = 0;
                    switch ($rating) {
                        case "Above 4 stars":
                            $ratingValue = 4.0;
                            break;
                        case "Above 3 stars":
                            $ratingValue = 3.0;
                            break;
                        case "Above 2 stars":
                            $ratingValue = 2.0;
                            break;
                        case "Above 1 star":
                            $ratingValue = 1.0;
                            break;
                        default:
                            $ratingValue = 0.0;
                            break;
                    }
                ?>
                <option value="<?php echo $ratingValue; ?>"><?php echo $rating; ?></option>
            <?php endforeach; ?>
        </select>
    </div>


        <div class="filter-option">
            <label for="cost">Cost Range:</label>
            <input type="range" id="cost" name="cost" min="<?php echo $minCost; ?>" max="<?php echo $maxCost; ?>" step="10" value="<?php echo $minCost; ?>">
            <span id="cost-value">Not Filtered</span> <!-- Display the selected value -->
        </div>

        <button id="reset-filters">Reset Filters</button>
    </section>


    <section class="main-content">
    <?php foreach ($stays as $stay): ?>
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
    <?php endforeach; ?>
</section>

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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="cardjs.js"></script>
<script src="script.js"></script>


</body>
</html>