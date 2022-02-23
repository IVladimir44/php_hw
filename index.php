<?php
$login = false;
$ads = [];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/main.css">
    <title>Document</title>
</head>

<header>
    <div class="nav_menu">
        <div class="wrapper">
            <div class="header_logo">
                <img src="../../assets/header_logo.png" alt="header_logo">
            </div>
            <div class="languages">
                <a>язык / мова</a>
            </div>
            <div class="messages">
                <a>Сообщения</a>
            </div>
            <div class="like">
                <a>Избранные</a>
            </div>
            <div class="login">
                <?php if ($login) : ?>
                <button class="button">
                    Войти
                </button>
                <?php else : ?>
                <button class="button">
                    Выйти
                </button>
                <?php endif; ?>
            </div>
            <?php if ($login == false) : ?>
            <div class="add_product">
                <a>Подать объявление</a>
            </div>
            <?php endif; ?>
        </div>
    </div>
</header>

<body>
    <div class="background">
        <div class="wrapper">
            <div class="search">
                <form>
                    <input type="text" placeholder="Поиск...">
                    <button type="submit"></button>
                </form>
            </div>
        </div>
        <div class="wrapper">

            <div class="products">
                <ul class="products_list">
                    <li>
                        <img class="products_img" src="../../assets/noname.png" alt="product_1">
                        <p>Объявление_1</p>
                    </li>
                    <li>
                        <img class="products_img" src="../../assets/noname.png" alt="product_2">
                        <p>Объявление_2</p>
                    </li>
                    <li>
                        <img class="products_img" src="../../assets/noname.png" alt="product_3">
                        <p>Объявление_3</p>
                    </li>
                    <li>
                        <img class="products_img" src="../../assets/noname.png" alt="product_4">
                        <p>Объявление_4</p>
                    </li>
                    <li>
                        <img class="products_img" src="../../assets/noname.png" alt="product_5">
                        <p>Объявление_5</p>
                    </li>
                    <li>
                        <img class="products_img" src="../../assets/noname.png" alt="product_6">
                        <p>Объявление_6</p>
                    </li>
                    <li>
                        <img class="products_img" src="../../assets/noname.png" alt="product_7">
                        <p>Объявление_7</p>
                    </li>
                    <li>
                        <img class="products_img" src="../../assets/noname.png" alt="product_8">
                        <p>Объявление_8</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>

<footer>
    <div class="copyright">©2020 - 2022 «vortex». Все права защищены
        <br>This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.
    </div>
</footer>

</html>