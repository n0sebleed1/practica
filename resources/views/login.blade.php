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
            <li class="header__button">Вход</li>
            <li class="header__button">Регистрация</li>
        </ul>
    </header>
    <main>
        <div class="reg">
            <h1 class="reg__tittle"></h1>
            <form class="reg__form" id="auth__form" method="POST" action="{{ route('login-form') }}">
                @csrf
                <p class="reg__form-tittle">Вход</p>
                <input class="reg__input" name="login" type="text" required placeholder="Логин">
                <input class="reg__input" name="password" type="text" required placeholder="Пароль">
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