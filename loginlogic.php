<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['username']) && isset($_POST['password'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        $pdo = new PDO('mysql:host=localhost;dbname=travelbookingsystem', 'root', '');

        $stmt = $pdo->prepare("SELECT * FROM login WHERE username = ? AND password = ?");
        $stmt->execute([$username, $password]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {

            $_SESSION['username'] = $username;

            header("Location: home.php");
            exit;
        } else {
            echo '<script>alert("Invalid username or password");</script>';
            $error = "Invalid username or password";
        }
    } else {
        $error = "Please enter both username and password";
    }
}
?>
<html>
<script>
function showAlert() {
    alert("This is an alert!");
}
</script>
</html>