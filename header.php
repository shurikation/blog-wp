<!doctype html>
<html lang="ru">
<head>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
      (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
      (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

      ym(68162149, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
      });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/68162149" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php $ID = get_the_ID();
        $full_title = 'Блог веб-разработчика | Александр Попов';
        $short_title = ' | Блог веб-разработчика';
        if($ID == 2) {
            echo $full_title;
        } else if( $ID == 51 || $ID == 53) {
            echo get_the_title() . $short_title;
        } else {
            echo get_the_title($ID);
        }
        ?>
    </title>
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
