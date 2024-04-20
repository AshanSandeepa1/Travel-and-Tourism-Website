<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password']; 

    $pdo = new PDO('mysql:host=localhost;dbname=travelbookingsystem', 'root', '');

    $stmt = $pdo->prepare("INSERT INTO login (username, email, password) VALUES (?, ?, ?)");

    $stmt->execute([$username, $email, $password]);

    header("Location: login.php"); 
    exit; 
}
?>
