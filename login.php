<?php
session_start();

include "Database.php";
include "Classhandle.php";

$data = new DatabaseConnection();
$classhandle = new Classhandle($data);

if (isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($classhandle->validateUser($username, $password)){
        $_SESSION['user'] = $username;
        header("Location: index.php");
        exit();
    } else {
        $error = "Username or password is incorrect";
    }
}


if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="style.css"> <!-- Link to the Halloween theme CSS -->
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Silahkan Masuk Ke Akun Anda!</h1>
            <img src="foto.jpg" class="gambar" alt="gambarr" >
        </div>

        <div class="content">
            <form method="post" action="login.php">
                <label for="username">Username :</label>
                <input type="text" id="username" name="username" class="input-field" required>

                <label for="password">Password :</label>
                <input type="password" id="password" name="password" class="input-field" required>

                <button type="submit" class="button">Masuk</button>
            </form>

            <p class="footer-text">Sudah punya akun? <a href="regis.php">Daftar disini</a></p>
        </div>
    </div>
</body>

</html>