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
            <div class="header__void"></div>
            <div class="list__block">
                <table class="list__table">
                    <tr>
                        <td><strong>Номер нарушителя</strong></td>
                        <td><strong>Описание нарушения</strong></td>
                        <td><strong>Статус</strong></td>
                    </tr>
                    <tr>
                        @foreach($data as $el)
                            <tr>
                                <td>{{ $el->number }}</td>
                                <td>{{ $el->description }}</td>
                                <td>{{ $el->status }}</td>
                            </tr>
                        @endforeach
                    </tr>
                </table>
            </div>
        </div>
    </main>
    <footer>
        <h1 class="header__logo">Нарушениям.Нет</h1>
        <p class="footer__address">проспект Раиса Беляева, 13, Набережные Челны, Республика Татарстан, 423812</p>
    </footer>
</body>
</html>