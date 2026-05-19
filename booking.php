<?php
include 'config.php';

$username = $_POST['username'];
$pc_number = $_POST['pc_number'];
$booking_time = $_POST['booking_time'];

mysqli_query($conn,
"INSERT INTO bookings(username,pc_number,booking_time)
VALUES('$username','$pc_number','$booking_time')");

header('Location: index.php');
?>