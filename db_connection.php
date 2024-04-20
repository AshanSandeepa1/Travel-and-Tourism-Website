<?php 

//  create a seperate connetion
$pdo = new PDO('mysql:host=localhost;dbname=travelbookingsystem', 'root', '');
// Fetch hotels data
$query = $pdo->query("SELECT * FROM stays");
$stays = $query->fetchAll(PDO::FETCH_ASSOC);

// Query to fetch the maximum cost value
$maxCostQuery = $pdo->query("SELECT MAX(price) AS max_price FROM stays");
$maxCost = $maxCostQuery->fetch(PDO::FETCH_ASSOC)['max_price'];
// Query to fetch the minimum cost value
$minCostQuery = $pdo->query("SELECT MIN(price) AS min_price FROM stays");
$minCost = $minCostQuery->fetch(PDO::FETCH_ASSOC)['min_price'];

// Fetch unique Province
$provinceQuery = $pdo->query("SELECT DISTINCT Province FROM stays");
$provinces = $provinceQuery->fetchAll(PDO::FETCH_COLUMN);

// Remove duplicate Province
$uniqueProvinces = array_unique($provinces);

// Define standard rating filter options
$standardRatings = ["Above 4 stars", "Above 3 stars", "Above 2 stars","Above 1 star" ];

?>

