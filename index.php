<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Premium PC Club</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div class="logo">PC CLUB</div>

    <nav>
        <a href="#about">О нас</a>
        <a href="#booking">Бронирование</a>
        <a href="#contacts">Контакты</a>
        <a href="register.php">Регистрация</a>
        <a href="login.php">Вход</a>
    </nav>
</header>

<section class="hero">
    <h1>PREMIUM <span>GAMING</span></h1>

    <p>
        Премиальный компьютерный клуб нового поколения.
        RTX компьютеры, 240Hz мониторы, PS5 зоны,
        турниры и максимальный комфорт.
    </p>

    <a href="#booking">
        <button class="hero-btn">Забронировать ПК</button>
    </a>
</section>

<section id="about">

<div class="title">
        <h2>О <span>КЛУБЕ</span></h2>
        <p>Cyber arena нового поколения</p>
    </div>

    <div class="about-grid">

        <div class="card">
            <h3>RTX ПК</h3>
            <p>
                Игровые компьютеры на RTX серии
                с высокой производительностью.
            </p>
        </div>

        <div class="card">
            <h3>240Hz Мониторы</h3>
            <p>
                Максимальная плавность и комфорт
                для киберспортивных игр.
            </p>
        </div>

        <div class="card">
            <h3>VIP Зоны</h3>
            <p>
                Отдельные premium комнаты
                с максимальным комфортом.
            </p>
        </div>

    </div>
</section>

<section class="prices">

<div class="prices-container">

<h2>Тарифы клуба</h2>
<p class="prices-subtitle">
Выберите свой игровой уровень
</p>

<div class="price-cards">

<div class="price-card">
<h3>Общий ПК</h3>

<div class="price">
150₽ <span>/ час</span>
</div>

<ul>
<li>RTX 3060</li>
<li>144Hz монитор</li>
<li>Игровая зона</li>
<li>Discord + Steam</li>
</ul>


</div>

<div class="price-card vip">

<div class="vip-badge">
VIP
</div>

<h3>VIP Комната</h3>

<div class="price">
300₽ <span>/ час</span>
</div>

<ul>
<li>RTX 4080</li>
<li>240Hz монитор</li>
<li>Отдельная комната</li>
<li>PlayStation 5</li>
<li>Премиум кресла</li>
</ul>


</div>

<div class="price-card">
<h3>Bootcamp</h3>

<div class="price">
500₽ <span>/ час</span>
</div>

<ul>
<li>Команда до 5 игроков</li>
<li>Тренировки</li>
<li>Турнирная зона</li>
<li>Стрим оборудование</li>
</ul>


</div>

</div>

</div>

</section>

<section id="booking">

    <div class="title">
        <h2>БРОНИРОВАНИЕ <span>ПК</span></h2>
        <p>Выберите компьютер и время</p>
    </div>

    <div class="booking-wrapper">

        <div class="booking-card">

           <form action="booking.php" method="POST" class="booking-form">

                <input type="text" name="username" placeholder="Ваше имя" required>

                <select name="pc_number">
                    <option>ПК 1</option>
                    <option>ПК 2</option>
                    <option>ПК 3</option>
                    <option>ПК 4</option>
                    <option>ПК 5</option>
                    <option>VIP ПК 1</option>
                    <option>VIP ПК 2</option>
                </select>

                <input type="datetime-local" name="booking_time" required>

                <button type="submit">ЗАБРОНИРОВАТЬ</button>

            </form>

        </div>

    </div>
</section>

<section class="contacts">

<h2>КОНТАКТЫ</h2>
<p>Челябинск, Комсомольская 13</p>

<div class="contacts-wrapper">

<div class="contacts-info">

<div class="contact-item">
<h3>Телефон</h3>
<p>+7 (900) 123-45-67</p>
</div>

<div class="contact-item">
<h3>Telegram</h3>
<p>@pcclub74</p>
</div>

<div class="contact-item">
<h3>VK</h3>
<p>vk.com/pcclub74</p>
</div>

<div class="contact-item">
<h3>Режим работы</h3>
<p>24/7 Без выходных</p>
</div>

</div>

<div class="contacts-map">

<iframe
src="https://www.google.com/maps?q=Челябинск+Комсомольская+13&output=embed"
allowfullscreen=""
loading="lazy">
</iframe>

</div>

</div>

</section>

<footer>
    © PREMIUM PC CLUB 2025
</footer>

</body>
</html>