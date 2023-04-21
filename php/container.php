<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Пам'ятки Міжгірщини</title>
    <link rel="stylesheet" href="container-style.css">
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
            <!-- <li><a class="menu__item" href="#">Список</a></li> -->
            <li><a class="menu__item" href="?name=comments">Відгуки</a></li>
        </ul>
    </div>
</header>

<h1>
    Місцеві пам'ятки Міжгірщини
</h1>

<h2>
    Онлайн подорож по місцевим пам'яткам
</h2>

<div class="fast-icons">
    <a href="?name=sinevyr">
        <img src="img/bigger sinevyr.png" class="image">
    </a>
    <a href="?name=shypit">
        <img src="img/bigger shypit.png" class="image">
    </a>
    <a href="?name=skies">
        <img src="img/bigger skies.png" class="image">
    </a>
    <a href="?name=skansen">
        <img src="img/bigger skansen.png" class="image">
    </a>
</div>

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

</body>
<?php
$site_name = isset($_GET['name']) ? $_GET['name'] : '0';
switch ($site_name){
    case 'sinevyr':
        header('Location: sinevyr.php');
        break;
    case 'shypit':
        header('Location: shypit.php');
        break;
    case 'skies':
        header('Location: skies.php');
        break;
    case 'skansen':
        header('Location: skansen.php');
        break;
    case 'index':
        header('Location: index.php');
        break;
    case 'comments':
        header('Location: comments.php');
        break;
    }
?>
</html>