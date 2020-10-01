<?php
/*
 Template Name: Блог
*/
?>
<?php
    get_header();
?>
<main>
    <div class="intro template__intro"
         style="background-image: url(<?php echo bloginfo('template_url'); ?>/assets/intro/suppke-large.jpg);
                 background-position: 75% 0;">
        <h1 class="container intro__title template-title">Блог</h1>
    </div>
    <div class="about main__about">
        <img class="brushstrokes about__brushstrokes" src="<?php echo bloginfo('template_url'); ?>/assets/brushstrokes-white.png"
             alt="brush strokes">
        <div class="container">
            <div class="blog__wrapper">
                <!--                    POST-->
                <div class="blog__post post">
                    <img class="post__image" src="<?php echo bloginfo('template_url'); ?>/assets/blog/picture_1.jpg" alt="picture">
                    <div class="post__info">
                        <h2 class="post__title">Как использовать методы map, filter, reduce</h2>
                        <p class="main-text">Если вы спросите разработчика «Какие методы для работы с массивами в JavaScript наиболее важны?», то Вы, скорее всего, услышите упоминание о map, filter и reduce. Эти 3 мощных метода позволяют вам перебирать содержимое массива...
                        </p>
                        <a class="post__button button" target="_blank" rel="noopener" href="blog/post-template.html">Далее...</a>
                    </div>
                </div>
                <!--                    POST END-->
            </div>
        </div>
    </div>
</main>
<?php
    get_footer();
?>
