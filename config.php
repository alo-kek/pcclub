<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "premiumclub";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Ошибка подключения");
}

session_start();
?>