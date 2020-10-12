<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Блог веб-разработчика | Александр Попов</title>
    <?php
        wp_head();
    ?>
</head>
<body>
<aside class="preloader">
    <div class="preloader__row"></div>
</aside>
<header class="main-header">
    <div class="container">
        <nav class="main-header__nav nav">
            <a href="<?php echo home_url();?>"><span class="main-header__logo logo">&lt;&Alpha;&Rho;&#47;&#62;</span></a>
            <div class="main-header__menu menu">
                <div class="container">
                    <?php
                    wp_nav_menu([
                        'menu'            => 'Main', //Название меню в админке
                        'container'       => false, //div или nav или false
                        'menu_class'      => 'menu__list', //class в <ul>
                        'echo'            => true, //вывести на страницу или вернуть (записать в переменную)
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul class="menu__list">%3$s</ul>',
                        'depth'           => 1, //уровень вложенности меню
                    ]);
                    ?>
                </div>
            </div>
            <button type="button" class="header__toggler"></button>
        </nav>
    </div>
</header>
