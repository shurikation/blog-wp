<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Александр Попов | Фронтенд-разработчик</title>
    <?php
        wp_head();
    ?>
</head>
<body class="main-page">
<aside class="preloader">
    <div class="preloader__row"></div>
</aside>
<div id="loader" class="loader hide"></div>
<header class="main-header">
    <div class="container">
        <nav class="main-header__nav nav">
            <span class="main-header__logo logo">&lt;&Alpha;&Rho;&#47;&#62;</span>
            <div class="main-header__menu menu">
                <div class="container">
                    <?php
                    wp_nav_menu( [
                        'menu'            => 'Main', //Название меню в админке
                        'container'       => false, //div или nav или false
                        'menu_class'      => 'menu__list', //class в <ul>
                        'echo'            => true, //вывести на страницу или вернуть (записать в переменную)
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul class="menu__list">%3$s</ul>',
                        'depth'           => 1, //уровень вложенности меню
                    ] );
                    ?>
<!--                    <ul class="menu__list">-->
<!--                        <li class="menu__item"><a class="menu__link" href="#">Главная</a></li>-->
<!--                        <li class="menu__item"><a class="menu__link" href="#about">Пост в блог</a></li>-->
<!--                        <li class="menu__item"><a class="menu__link" href="#works">Проекты</a></li>-->
<!--                    </ul>-->
                </div>
            </div>
            <button type="button" class="header__toggler"></button>
        </nav>
    </div>
</header>
