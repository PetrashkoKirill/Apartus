<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/reset.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <title>Вход | Apartus</title>
</head>

<body>
    <header class="header">
        <div class="header__navbar">
            <nav class="navbar">
                <div class="navbar__brand"><a href="/Apartus/index.html">APARTUS</a></div>
                <div class="navbar__list navbar--left">
                    <ul>
                        <li class="active__li"><a href="/Apartus/index.html
  ">Главная</a></li>
                        <li class="active__li">
                            <a href="../pages/catalog.php
    ">Каталог</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar__list">
                    <ul>
                        <li class="current-page">
                            <p>Вход</p>
                        </li>
                        <li class="active__li">
                            <a href="../pages/sign_up.php
    ">Регистрация</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="header__greetings">
            <h1>С возвращением!</h1>
        </div>
        <div class="header__form">
            <form action="" class="form">
                <input type="text" id="email" name="email" placeholder="EMAIL" />
                <input type="password" id="password" name="password" placeholder="ПАРОЛЬ" />
                <input class="form__button" type="submit" value="ВОЙТИ" onclick="window.location.href='/pages/account.php
'" />
                <a href="/pages/sign_up.php">или зарегистрироваться</a>
            </form>
        </div>
    </header>

    <footer class="footer">
        <div class="footer__text">
            <p>2024 Петрашко Кирилл К.105с9-6</p>
        </div>
    </footer>
</body>

</html>