<?php
include 'db_connection.php';

// Check if the hotel ID is provided in the URL
if (isset($_GET['id'])) {
    // Sanitize the input to prevent SQL injection
    $hotel_id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    // Fetch hotel details from the database based on the provided ID
    $stmt = $pdo->prepare("SELECT * FROM stays WHERE id = :id");
    $stmt->bindParam(':id', $hotel_id);
    $stmt->execute();
    $hotel = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($hotel) {
        // Hotel details found, display them
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $hotel['name']; ?> - Hotel Details</title>
    <!-- Include CSS stylesheets, JavaScript, etc. -->
    <!--font awesome link-->
    <link rel="stylesheet" href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!--css link-->
    <link rel="stylesheet" href = "style.css">

    <link rel="stylesheet" href="path/to/swiper-bundle.min.css">

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
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
    <h1><?php echo $hotel['name']; ?> - Hotel Details</h1>
    <!-- Display hotel details -->
    <p>Location: <?php echo $hotel['location']; ?></p>
    <p>Description: <?php echo $hotel['longDescription']; ?></p>
    <p>Rating: <?php echo $hotel['rating']; ?></p>
    <!-- Add more details as needed -->

    <!-- Include footer, navigation, etc. -->

</body>
</html>
<?php
    } else {
        // Hotel not found with the provided ID
        echo "Hotel not found!";
    }
} else {
    // No hotel ID provided in the URL
    echo "No hotel ID provided!";
}
?>
