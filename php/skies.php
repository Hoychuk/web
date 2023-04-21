<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Гірськолижні курорти</title>
    <link rel="stylesheet" href="skies-style.css">
</head>
<body>
<header class="flex-container">
    <div>
        <img src="img/Mizhhirya_prapor 1.png" class="prapor">
    </div>
    <div class="hamburger-menu">
        <input id="menu__toggle" type="checkbox" />
        <label class="menu__btn" for="menu__toggle">
            <span></span>
        </label>
        <ul class="menu__box">
            <li><a class="menu__item" href="?name=index">Головна</a></li>
            <li><a class="menu__item" href="?name=container">Список</a></li>
            <li><a class="menu__item" href="?name=comments">Відгуки</a></li>
        </ul>
    </div>
</header>

<div class="middle">
    <img src="img/skies-front.png" class="front-photo">
    <div>
        <h1>
            Гірськолижні курорти
        </h1>
        <h2>Другий за висотою гірськолижний курорт в Україні розташувався біля невеликого селища Пилипець. Втім, невелике воно за мірками країни, а ось у Міжгірському районі — одне з найбільших. Гірськолижні траси обладнані на схилах сусідніх гір. Зона катання починається з 700 метрів над рівнем моря, а найвищі траси спускаються з вершини гори Гимба (1497 метрів).</h2>
    </div>
</div>
<h3>Крім чималої кількості обладнаних спусків для лижників всіх рівнів підготовки, Пилипець відомий своїми вільними схилами. Курорт вважається одним з кращих для фрірайдерів (особливо люблять відпочинок в Пилипці новачки вільного спуску). Також тутешні місця славляться своєю природою — зокрема, звідси починається маршрут до відомого водоспаду Шипот.</h3>
<footer>
    <div class="subscribe">
        <p>Підписуйтесь у соцмережах</p>
        <div class="subscribe-icons">
            <a href="https://www.instagram.com/sasha_hoychuk/">
                <img src="img/instagram.png" class="icons">
            </a>
            <a href="#">
                <img src="img/telegram.png" class="icons">
            </a>
            <a href="https://www.youtube.com/@user-nv9et7yu7s/featured">
                <img src="img/youtube.png" class="icons">
            </a>
        </div>
    </div>
    <div>
        <a href="https://www.google.com.ua/maps/search/%D0%BB%D0%B8%D0%B6%D0%BD%D1%96+%D0%BA%D1%83%D1%80%D0%BE%D1%80%D1%82%D0%B8+%D0%BF%D0%B8%D0%BB%D0%B8%D0%BF%D0%B5%D1%86%D1%8C/@48.6540583,23.2685816,15.22z?hl=ru" class="button">Знайти на Google картах</a>
    </div>
</footer>
</body>
<?php
$site_name = isset($_GET['name']) ? $_GET['name'] : '0';
switch ($site_name){
    case 'index':
        header('Location: index.php');
        break;
    case 'container':
        header('Location: container.php');
        break;
    case 'comments':
        header('Location: comments.php');
        break;
}
?>
</html>