<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Відгуки</title>
    <link href="{{ asset('/css/comments-style.css')}}" rel="stylesheet" type="text/css">
</head>
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
            <li><a class="menu__item" href="/">Головна</a></li>
            <li><a class="menu__item" href="/container">Список</a></li>
            <!-- <li><a class="menu__item" href="/comments">Відгуки</a></li> -->
        </ul>
    </div>
</header>
<body>
<div class="content">
    <div>
        <h1>Додати відгук</h1>
        <div class="add_comment">
            <form method="POST" action="/add_comment">
                @csrf
                <label class="name_label" for="name">Ім'я:</label>
                <input class="input_name" type="text" name="name" required><br><br>
                <label class="comment_label" for="comment">Коментар:</label><br>
                <textarea name="comment" rows="5" cols="55" required></textarea><br><br>
                <input class="button" type="submit" value="Додати коментар">
            </form>
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
    </div>
    <div>
        <h1>Відгуки</h1>
        <div>
            @foreach($reversedUsers as $user)
                <h3>{{$user->name}}</h3>
                <h4>{{$user->comment}}</h4>
            @endforeach
        </div>
    </div>
</div>
</body>
</html>
