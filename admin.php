<?php
include 'config.php';

if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 'admin') {
    die('Доступ запрещен');
}

if (isset($_GET['approve'])) {

    $id = $_GET['approve'];

    mysqli_query($conn,
    "UPDATE bookings SET status='Подтверждено' WHERE id=$id");
}

if (isset($_GET['reject'])) {

    $id = $_GET['reject'];

    mysqli_query($conn,
    "UPDATE bookings SET status='Отклонено' WHERE id=$id");
}

$users = mysqli_query($conn, "SELECT * FROM users");
$bookings = mysqli_query($conn, "SELECT * FROM bookings");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Админ панель</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="admin-wrapper">

<h1>Админ панель</h1>

<a href="logout.php">
<button>Выйти</button>
</a>

<br><br>

<h2>Пользователи</h2>

<table>
<tr>
<th>ID</th>
<th>Имя</th>
<th>Email</th>
<th>Роль</th>
</tr>

<?php while($user = mysqli_fetch_assoc($users)) { ?>

<tr>
<td><?= $user['id'] ?></td>
<td><?= $user['username'] ?></td>
<td><?= $user['email'] ?></td>
<td><?= $user['role'] ?></td>
</tr>

<?php } ?>

</table>

<h2>Бронирования</h2>

<table>

<tr>
<th>ID</th>
<th>Пользователь</th>
<th>ПК</th>
<th>Время</th>
<th>Статус</th>
<th>Действие</th>
</tr>

<?php while($booking = mysqli_fetch_assoc($bookings)) { ?>

<tr>

<td><?= $booking['id'] ?></td>
<td><?= $booking['username'] ?></td>
<td><?= $booking['pc_number'] ?></td>
<td><?= $booking['booking_time'] ?></td>

<td>
<?= $booking['status'] ?>
</td>

<td>

<a href="?approve=<?= $booking['id'] ?>">
<button style="background:lime;">
Подтвердить
</button>
</a>

<a href="?reject=<?= $booking['id'] ?>">
<button style="background:red;color:white;">
Отклонить
</button>
</a>

</td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>