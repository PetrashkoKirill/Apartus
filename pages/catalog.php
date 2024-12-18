<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/reset.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <script src="/scripts/accordion.js"></script>
    <title>Каталог | Apartus</title>
</head>

<body>
    <header class="header">
        <div class="header__navbar">
            <nav class="navbar">
                <div class="navbar__brand"><a href="/index.html">APARTUS</a></div>
                <div class="navbar__list navbar--left">
                    <ul>
                        <li class="active__li"><a href="/index.html">Главная</a></li>
                        <li class="current-page">
                            <p>Каталог</p>
                        </li>
                    </ul>
                </div>
                <div class="navbar__list">
                    <ul>
                        <li class="active__li"><a href="../pages/login.php">Вход</a></li>
                        <li class="active__li">
                            <a href="../pages/sign_up.php">Регистрация</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="content">
            <div class="content__filter-box">
                <div class="filter__panel">
                    <div class="filter-content">
                        <h2>Фильтры:</h2>
                        <div class="accordion-header">
                            <h3>Кол-во комнат ▼</h3>
                        </div>
                        <div class="accordion-content">
                            <div class="accordion-item">
                                <input type="checkbox" id="room1" />
                                <label for="room1">1 Комната</label>
                            </div>
                            <div class="accordion-item">
                                <input type="checkbox" id="room2" />
                                <label for="room2">2 Комнаты</label>
                            </div>
                            <div class="accordion-item">
                                <input type="checkbox" id="room3" />
                                <label for="room3">3 Комнаты</label>
                            </div>
                            <div class="accordion-item">
                                <input type="checkbox" id="room4" />
                                <label for="room4">4 Комнаты</label>
                            </div>
                            <div class="accordion-item">
                                <input type="checkbox" id="room5" />
                                <label for="room5">5 Комнат</label>
                            </div>
                        </div>
                        <div class="accordion-header">
                            <h3>Квадратные метры ▼</h3>
                        </div>
                        <div class="accordion-content">
                            <div class="accordion-placeholder">
                                <input type="number" placeholder="От 10" />
                                <input type="number" placeholder="До 1000" />
                            </div>
                        </div>
                        <div class="filter__button">
                            <div class="apply-button">
                                <button type="submit" name="apply-filters">Применить</button>
                            </div>
                        </div>
                        <div class="filter__button">
                            <div class="reset-button">
                                <button type="submit" name="reset-filters">
                                    <p>Сбросить</p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content__main-box">
                <div class="sort__panel">
                    <div class="sort-content">
                        <h2>Сортировка:</h2>
                        <div class="dropdown-header">
                            <h3>СНАЧАЛА НЕДОРОГИЕ ▼</h3>
                            <div class="dropdown-content">
                                <a href="#">Сначала Дорогие</a>
                                <a href="#">Сначала Популярные</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="scroll-area">
                    <div class="aparts__panel">
                        <div class="aparts-content">
                            <div class="aparts-info">
                                <div class="image-block">
                                    <img src="/_images/login-background.png" alt="apart1" />
                                </div>
                                <div class="text-block">
                                    <h3>Студия, 18 м², 2/3 эт.</h3>
                                    <p class="location-text">
                                        Барнаул, Центральный р-н, улица Сталина, 666
                                    </p>
                                    <p class="info-text">
                                        Уникальная студия с видом на живописный парк,
                                        расположенная в центре города. Эта современная квартира
                                        включает в себя стильный интерьер, функционально
                                        оборудованную кухню и просторную гостиную зону. Идеальный
                                        выбор для тех, кто ценит комфорт и уют в сердце городской
                                        суеты.
                                    </p>
                                </div>
                                <div class="favorites-button"></div>
                            </div>
                            <div class="aparts-button">
                                <button onclick="window.location.href='../pages/apartment.php'">
                                    Арендовать
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="aparts__panel">
                        <div class="aparts-content">
                            <div class="aparts-info">
                                <div class="image-block">
                                    <img src="/_images/login-background.png" alt="apart1" />
                                </div>
                                <div class="text-block">
                                    <h3>Студия, 18 м², 2/3 эт.</h3>
                                    <p class="location-text">
                                        Барнаул, Центральный р-н, улица Сталина, 666
                                    </p>
                                    <p class="info-text">
                                        Уникальная студия с видом на живописный парк,
                                        расположенная в центре города. Эта современная квартира
                                        включает в себя стильный интерьер, функционально
                                        оборудованную кухню и просторную гостиную зону. Идеальный
                                        выбор для тех, кто ценит комфорт и уют в сердце городской
                                        суеты.
                                    </p>
                                </div>
                                <div class="favorites-button"></div>
                            </div>
                            <div class="aparts-button">
                                <button onclick="window.location.href='../pages/apartment.php'">
                                    Арендовать
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="aparts__panel">
                        <div class="aparts-content">
                            <div class="aparts-info">
                                <div class="image-block">
                                    <img src="/_images/login-background.png" alt="apart1" />
                                </div>
                                <div class="text-block">
                                    <h3>Студия, 18 м², 2/3 эт.</h3>
                                    <p class="location-text">
                                        Барнаул, Центральный р-н, улица Сталина, 666
                                    </p>
                                    <p class="info-text">
                                        Уникальная студия с видом на живописный парк,
                                        расположенная в центре города. Эта современная квартира
                                        включает в себя стильный интерьер, функционально
                                        оборудованную кухню и просторную гостиную зону. Идеальный
                                        выбор для тех, кто ценит комфорт и уют в сердце городской
                                        суеты.
                                    </p>
                                </div>
                                <div class="favorites-button"></div>
                            </div>
                            <div class="aparts-button">
                                <button onclick="window.location.href='../pages/apartment.php'">
                                    Арендовать
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="aparts__panel">
                        <div class="aparts-content">
                            <div class="aparts-info">
                                <div class="image-block">
                                    <img src="/_images/login-background.png" alt="apart1" />
                                </div>
                                <div class="text-block">
                                    <h3>Студия, 18 м², 2/3 эт.</h3>
                                    <p class="location-text">
                                        Барнаул, Центральный р-н, улица Сталина, 666
                                    </p>
                                    <p class="info-text">
                                        Уникальная студия с видом на живописный парк,
                                        расположенная в центре города. Эта современная квартира
                                        включает в себя стильный интерьер, функционально
                                        оборудованную кухню и просторную гостиную зону. Идеальный
                                        выбор для тех, кто ценит комфорт и уют в сердце городской
                                        суеты.
                                    </p>
                                </div>
                                <div class="favorites-button"></div>
                            </div>
                            <div class="aparts-button">
                                <button onclick="window.location.href='../pages/apartment.php'">
                                    Арендовать
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="aparts__panel">
                        <div class="aparts-content">
                            <div class="aparts-info">
                                <div class="image-block">
                                    <img src="/_images/login-background.png" alt="apart1" />
                                </div>
                                <div class="text-block">
                                    <h3>Студия, 18 м², 2/3 эт.</h3>
                                    <p class="location-text">
                                        Барнаул, Центральный р-н, улица Сталина, 666
                                    </p>
                                    <p class="info-text">
                                        Уникальная студия с видом на живописный парк,
                                        расположенная в центре города. Эта современная квартира
                                        включает в себя стильный интерьер, функционально
                                        оборудованную кухню и просторную гостиную зону. Идеальный
                                        выбор для тех, кто ценит комфорт и уют в сердце городской
                                        суеты.
                                    </p>
                                </div>
                                <div class="favorites-button"></div>
                            </div>
                            <div class="aparts-button">
                                <button onclick="window.location.href='../pages/apartment.php'">
                                    Арендовать
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="aparts__panel">
                        <div class="aparts-content">
                            <div class="aparts-info">
                                <div class="image-block">
                                    <img src="/_images/login-background.png" alt="apart1" />
                                </div>
                                <div class="text-block">
                                    <h3>Студия, 18 м², 2/3 эт.</h3>
                                    <p class="location-text">
                                        Барнаул, Центральный р-н, улица Сталина, 666
                                    </p>
                                    <p class="info-text">
                                        Уникальная студия с видом на живописный парк,
                                        расположенная в центре города. Эта современная квартира
                                        включает в себя стильный интерьер, функционально
                                        оборудованную кухню и просторную гостиную зону. Идеальный
                                        выбор для тех, кто ценит комфорт и уют в сердце городской
                                        суеты.
                                    </p>
                                </div>
                                <div class="favorites-button"></div>
                            </div>
                            <div class="aparts-button">
                                <button onclick="window.location.href='../pages/apartment.php'">
                                    Арендовать
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="aparts__panel">
                        <div class="aparts-content">
                            <div class="aparts-info">
                                <div class="image-block">
                                    <img src="/_images/login-background.png" alt="apart1" />
                                </div>
                                <div class="text-block">
                                    <h3>Студия, 18 м², 2/3 эт.</h3>
                                    <p class="location-text">
                                        Барнаул, Центральный р-н, улица Сталина, 666
                                    </p>
                                    <p class="info-text">
                                        Уникальная студия с видом на живописный парк,
                                        расположенная в центре города. Эта современная квартира
                                        включает в себя стильный интерьер, функционально
                                        оборудованную кухню и просторную гостиную зону. Идеальный
                                        выбор для тех, кто ценит комфорт и уют в сердце городской
                                        суеты.
                                    </p>
                                </div>
                                <div class="favorites-button"></div>
                            </div>
                            <div class="aparts-button">
                                <button onclick="window.location.href='../pages/apartment.php'">
                                    Арендовать
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="aparts__panel">
                        <div class="aparts-content">
                            <div class="aparts-info">
                                <div class="image-block">
                                    <img src="/_images/login-background.png" alt="apart1" />
                                </div>
                                <div class="text-block">
                                    <h3>Студия, 18 м², 2/3 эт.</h3>
                                    <p class="location-text">
                                        Барнаул, Центральный р-н, улица Сталина, 666
                                    </p>
                                    <p class="info-text">
                                        Уникальная студия с видом на живописный парк,
                                        расположенная в центре города. Эта современная квартира
                                        включает в себя стильный интерьер, функционально
                                        оборудованную кухню и просторную гостиную зону. Идеальный
                                        выбор для тех, кто ценит комфорт и уют в сердце городской
                                        суеты.
                                    </p>
                                </div>
                                <div class="favorites-button"></div>
                            </div>
                            <div class="aparts-button">
                                <button onclick="window.location.href='../pages/apartment.php'">
                                    Арендовать
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="aparts__panel">
                        <div class="aparts-content">
                            <div class="aparts-info">
                                <div class="image-block">
                                    <img src="/_images/login-background.png" alt="apart1" />
                                </div>
                                <div class="text-block">
                                    <h3>Студия, 18 м², 2/3 эт.</h3>
                                    <p class="location-text">
                                        Барнаул, Центральный р-н, улица Сталина, 666
                                    </p>
                                    <p class="info-text">
                                        Уникальная студия с видом на живописный парк,
                                        расположенная в центре города. Эта современная квартира
                                        включает в себя стильный интерьер, функционально
                                        оборудованную кухню и просторную гостиную зону. Идеальный
                                        выбор для тех, кто ценит комфорт и уют в сердце городской
                                        суеты.
                                    </p>
                                </div>
                                <div class="favorites-button"></div>
                            </div>
                            <div class="aparts-button">
                                <button onclick="window.location.href='../pages/apartment.php'">
                                    Арендовать
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <footer class="footer">
        <div class="footer__text">
            <p>2024 Петрашко Кирилл К.105с9-6</p>
        </div>
    </footer>
</body>

</html>