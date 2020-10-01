<?php
/*
 Template Name: Проекты
*/
?>
<?php
    get_header();
?>
<main>
    <div class="intro template__intro"
         style="background-image: url(<?php echo bloginfo('template_url'); ?>/assets/intro/suppke-large.jpg);
                 background-position: 75% 0;">
        <h1 class="container intro__title template-title">Проекты</h1>
    </div>
    <div class="about main__about">
        <img class="brushstrokes about__brushstrokes" src="<?php echo bloginfo('template_url'); ?>/assets/brushstrokes-white.png"
             alt="brush strokes">
        <div class="container">
            <div class="projects__content">
                <!--                THUMBNAIL - I -->
                <div class="projects__thumbnail thumbnail">
                    <h2 class="thumbnail__title sub-title">Notebook App</h2>
                    <div class="thumbnail__content">
                        <img class="thumbnail__image" src="<?php echo bloginfo('template_url'); ?>/assets/works/notebook_app-small.jpg" alt="приложение">
                        <nav class="thumbnail__overlay">
                            <ul class="thumbnail__list">
                                <li class="thumbnail__item thumbnail__item--top fromTopToBottom">
                                    <a class="thumbnail__link sub-title"
                                       target="_blank"
                                       href="../pages/notebook-app.html">
                                        Описание проекта
                                    </a>
                                </li>
                                <li class="thumbnail__item">
                                    <a class="thumbnail__link git-href sub-title"
                                       target="_blank"
                                       rel="nofollow noopener"
                                       href="https://github.com/shurikation/notebook-app">
                                        Код на GitHub
                                    </a>
                                </li>
                                <li class="thumbnail__item thumbnail__item--bottom fromBottomToTop">
                                    <a class="thumbnail__link sub-title"
                                       target="_blank"
                                       rel="nofollow noopener"
                                       href="https://notebook-js-app.web.app/">
                                        Перейти на сайт
                                    </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!--                THUMBNAIL END-->
                <!--                THUMBNAIL - II -->
                <div class="projects__thumbnail thumbnail">
                    <h2 class="thumbnail__title sub-title">Landing-page &laquo;Suppke&raquo;</h2>
                    <div class="thumbnail__content">
                        <img class="thumbnail__image" src="<?php echo bloginfo('template_url'); ?>/assets/works/suppke-small.jpg" alt="сайт">
                        <nav class="thumbnail__overlay">
                            <ul class="thumbnail__list">
                                <li class="thumbnail__item thumbnail__item--top fromTopToBottom">
                                    <a class="thumbnail__link sub-title"
                                       target="_blank" rel="nofollow noopener" href="../pages/suppke.html">
                                        Описание проекта
                                    </a>
                                </li>
                                <li class="thumbnail__item">
                                    <a class="thumbnail__link git-href sub-title"
                                       href="https://github.com/shurikation/suppke-landing" target="_blank"
                                       rel="nofollow noopener">
                                        Код на GitHub
                                    </a>
                                </li>
                                <li class="thumbnail__item thumbnail__item--bottom fromBottomToTop">
                                    <a class="thumbnail__link sub-title"
                                       href="https://shurikation.github.io/suppke-landing/dist/index.html"
                                       target="_blank"
                                       rel="nofollow noopener">
                                        Перейти на сайт
                                    </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!--                THUMBNAIL END-->
            </div>
        </div>
    </div>
</main>
<?php
    get_footer();
?>