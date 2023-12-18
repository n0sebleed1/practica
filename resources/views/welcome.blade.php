<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;800&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header>
        <h1 class="header__logo">Нарушениям.Нет</h1>
        <ul class="header__list">
            <li class="header__button"><a href="list/all">Лист</a></li>
            <li class="header__button"><a href="home">Жалоба</a></li>
        </ul>
    </header>
    <main>
        <div class="banner">
            <h1 class="banner__tittle">Сообщите о нарушении и примите участие в создании сознательной общества!</h1>
            <div class="banner__line"></div>
            <p class="banner__description">Присоединяйтесь к порталу сознательных граждан «Нарушениям.Нет» и станьте активным участником борьбы за порядок на дорогах! Наша система позволяет каждому гражданину составить заявление, указав номер автомобиля и подробное описание нарушения. Заявления хранятся в системе, отображая статус каждой заявки. Совместными усилиями мы создаем безопасные и ответственные дорожные условия для всех участников движения. Присоединяйтесь к нам и вносите свой вклад в улучшение дорожной культуры в вашем городе!</p>
        </div>
        <div class="reg">
            <h1 class="reg__tittle">Прими участие уже сейчас!</h1>
            <form class="reg__form" action="{{ route('register-form') }}" method="post">
                @csrf
                <p class="reg__form-tittle">Регистрация</p>
                <input class="reg__input" name="name" type="text" id="name" placeholder="Имя">
                <input class="reg__input" name="phone" type="text" id="phone" placeholder="Номер телефона">
                <input class="reg__input" name="email" type="text" id="email" placeholder="Эл. почта">
                <input class="reg__input" name="login" type="text" id="login" placeholder="Логин">
                <input class="reg__input" name="password" type="text" id="password" placeholder="Пароль">
                <input class="reg__button" type="submit" text="Регистрация">
                @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            </form>
        </div>
    </main>
    <footer>
        <h1 class="header__logo">Нарушениям.Нет</h1>
        <p class="footer__address">проспект Раиса Беляева, 13, Набережные Челны, Республика Татарстан, 423812</p>
    </footer>
</body>
</html>