<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Відкрий для себе Міжгірщину</title>
    <link href="{{ asset('/css/style.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
<header class="flex-container">
    <div>
        <img src="/img/Mizhhirya_prapor 1.png" class="prapor">
    </div>
    <div class="hamburger-menu">
        <input id="menu__toggle" type="checkbox" />
        <label class="menu__btn" for="menu__toggle">
            <span></span>
        </label>
        <ul class="menu__box">
            <!-- <li><a class="menu__item" href="#">Головна</a></li> -->
            <li><a class="menu__item" href="/container">Список</a></li>
            <li><a class="menu__item" href="/comments">Відгуки</a></li>
        </ul>
    </div>
</header>

<div class="h1">
    Відкрий для себе Міжгірщину
</div>

<div class="h2">
    Онлайн подорож по місцевим пам'яткам
</div>

<a href="/container" class="button">Місцеві пам'ятки тут</a>

<footer class="site-footer">
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
    <div class="fast-icons">
        <a href="/sinevyr">
            <img src="img/sinevyr.png" class="image" alt="sinevyr_img">
        </a>
        <a href="/shypit">
            <img src="img/shypit.png" class="image">
        </a>
        <a href="/skies">
            <img src="img/skies.png" class="image hide">
        </a>
    </div>
</footer>

</body>
</html>
