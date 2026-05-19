<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn,
    "SELECT * FROM users WHERE email='$email'");

    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {

        $_SESSION['user'] = $user;

        if ($user['role'] == 'admin') {
            header('Location: admin.php');
        } else {
            header('Location: index.php');
        }

    } else {
        echo 'Неверный логин или пароль';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Вход</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="auth-box">

<div class="auth-card">

<h1>Вход</h1>

<form action="login.php" method="POST" class="auth-form">

<input type="email" name="email" placeholder="Почта" required>
<input type="password" name="password" placeholder="Пароль" required>

<button type="submit">ВОЙТИ</button>

</form>

</div>

</div>

</body>
</html>