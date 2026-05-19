<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    mysqli_query($conn,
    "INSERT INTO users(username,email,password)
    VALUES('$username','$email','$password')");

    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Регистрация</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="auth-box">

<div class="auth-card">

<h1>Регистрация</h1>

<form action="register.php" method="POST" class="auth-form">

<input type="text" name="username" placeholder="Имя" required>
<input type="email" name="email" placeholder="Почта" required>
<input type="password" name="password" placeholder="Пароль" required>

<button type="submit">Создать аккаунт</button>

</form>

</div>

</div>

</body>
</html>