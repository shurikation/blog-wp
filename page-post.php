<?php
/*
 Template Name: Статья в блог
*/
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Александр Попов | Блог</title>
    <?php
        wp_head();
    ?>
</head>
<body>
<header class="main-header">
    <div class="container">
        <nav class="main-header__nav nav"><a href="#"><span
                    class="main-header__logo logo">&lt;&Alpha;&Rho;&#47;&#62;</span></a>
            <div class="main-header__menu menu">
                <div class="container">
                    <ul class="menu__list">
                        <li class="menu__item"><a class="menu__link" target="_blank" rel="noopener"
                                                  href="../index.html">Главная</a></li>
                        <li class="menu__item"><a class="menu__link" target="_blank" rel="noopener"
                                                  href="../index.html#about">Обо мне</a></li>
                        <li class="menu__item"><a class="menu__link" target="_blank" rel="noopener"
                                                  href="../index.html#works">Проекты</a></li>
                    </ul>
                </div>
            </div>
            <button type="button" class="header__toggler"></button>
        </nav>
    </div>
</header>
<main>
    <article>
        <div class="intro template__intro" style="background-image: url(<?php echo bloginfo('template_url'); ?>/assets/intro/suppke-large.jpg); background-position: 75% 0;">
            <h1 class="container intro__title template-title">Как использовать Map, Filter и Reduce</h1></div>
        <div class="about main__about"><img class="brushstrokes about__brushstrokes" src="<?php echo bloginfo('template_url'); ?>/assets/brushstrokes-white.png" alt="brush strokes">
            <div class="container"><h2 class="sub-title template__subtitle">Lorem ipsum dolor sit amet, consectetur.</h2>
                <p class="description__text main-text template__text">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Blanditiis eius, impedit labore nulla pariatur quia saepe ut. Adipisci amet
                    aspernatur at consectetur corporis debitis eveniet illo laudantium nulla, odio omnis porro tenetur!
                    A in ipsum obcaecati odit placeat tempore voluptas. Deleniti dolorum fugiat odio tenetur. Adipisci
                    autem, delectus eaque explicabo incidunt ipsam iure molestias nobis obcaecati placeat rem,
                    temporibus, voluptatibus. Dolor maxime mollitia optio vel? Cupiditate, debitis eaque et perferendis
                    possimus quas veniam voluptas voluptatem? Cumque ducimus explicabo harum inventore iure maxime nemo
                    nisi nobis, odio odit quisquam, recusandae similique soluta? Architecto commodi dolor excepturi
                    explicabo facilis libero nobis officia!</p>
            </div>
        </div>
    </article>
</main>
<?php
    get_footer();
?>
