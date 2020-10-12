<?php
get_header();
?>
<main class="main-page">
    <section class="intro">
        <div class="container">
            <div class="intro__wrapper">
                <div class="intro__content">
                    <h1 class="intro__title hidden">Блог веб-разработчика | Александр Попов</h1>
                    <h2 class="intro__subtitle hidden">Статьи про фронтенд-разработку, frontend, javascript, html, css, react</h2>
                    <h3 class="intro__title">Александр Попов</h3>
                    <p class="intro__subtitle intro__subtitle--autoText"></p>
                    <div class="dash">|</div>
                    <br>
                    <a class="button intro__button" href="#projects">Мои проекты</a>
                </div>
                <ul class="intro__socials socials">
                    <li><a target="_blank" rel="nofollow noopener" href="https://vk.com/popovalex">
                            <svg class="intro__icon icon vk" viewBox="0 0 192 192">
                                <rect class="icon__circle vk__circle" width="192" height="192" rx="32"/>
                                <path class="icon__symbol vk__symbol"
                                      d="M157.234 66.146c.89-2.966 0-5.146-4.234-5.146h-14c-3.56 0-5.2 1.883-6.09 3.96 0 0-7.12 17.353-17.206 28.625-3.263 3.263-4.746 4.3-6.526 4.3-.89 0-2.178-1.037-2.178-4.003V66.146c0-3.56-1.033-5.146-4-5.146H81c-2.224 0-3.562 1.652-3.562 3.218 0 3.375 5.042 4.153 5.562 13.645V98.48c0 4.52-.816 5.34-2.596 5.34-4.746 0-16.29-17.432-23.138-37.377C55.924 62.566 54.578 61 51 61H37c-4 0-4.8 1.883-4.8 3.96 0 3.708 4.747 22.1 22.1 46.424C65.87 127.994 82.168 137 97 137c8.9 0 10-2 10-5.445V119c0-4 .843-4.798 3.66-4.798 2.078 0 5.637 1.038 13.944 9.047C134.096 132.74 135.66 137 141 137h14c4 0 6-2 4.846-5.947-1.262-3.934-5.794-9.64-11.808-16.406-3.263-3.857-8.158-8.01-9.64-10.086-2.077-2.67-1.484-3.856 0-6.228 0 0 17.056-24.028 18.836-32.186z"/>
                            </svg>
                        </a></li>
                    <li><a target="_blank" rel="nofollow noopener" href="https://t.me/shurikation">
                            <svg class="intro__icon icon tg" viewBox="0 0 240 240">
                                <linearGradient id="tg-intro" x1="46.1" x2="28.8" y1="11.5" y2="51.9"
                                                gradientUnits="userSpaceOnUse">
                                    <stop class="tg__circle tg__circle--grad-blue-1" offset="0"/>
                                    <stop class="tg__circle tg__circle--grad-blue-2" offset="1"/>
                                </linearGradient>
                                <g transform="scale(3.47)">
                                    <circle cy="34.6" cx="34.6" r="34.6" fill="url(#tg-intro)"/>
                                    <path class="tg__symbol tg__symbol--white"
                                          d="M47.8 20.5s3.6-1.4 3.3 2c-.1 1.4-1 6.3-1.7 11.6L47 49.8s-.2 2.3-2 2.7c-1.8.4-4.5-1.4-5-1.8-.4-.3-7.5-4.8-10-7-.7-.6-1.5-1.8.1-3.2l10.5-10c1.2-1.2 2.4-4-2.6-.6l-14 9.5s-1.6 1-4.6.1l-6.5-2s-2.4-1.5 1.7-3c10-4.7 22.3-9.5 33.2-14z"/>
                                </g>
                            </svg>
                        </a></li>
                    <li><a target="_blank" rel="nofollow noopener" href="https://github.com/shurikation">
                            <svg class="intro__icon icon git" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a></li>
                </ul>
            </div>
        </div>
    </section>
<!--    ABOUT-->
    <section class="about main__about" id="about">
        <img class="brushstrokes about__brushstrokes"
             src="<?php echo content_url(); ?>/uploads/brushstrokes.png" alt="brush stroke">
        <div class="post-container">
            <h2 class="about__title main-title"><?php the_field('about_title'); ?></h2>
            <div class="about__content">
                <img class="about__image" src="<?php echo bloginfo('template_url'); ?>/assets/profile.jpg"
                     alt="александр попов веб-разработчик">
                <div class="about__info">
                    <div class="about__description">
                        <p class="about__text">
                            Приветствую, это Александр. Я занимаюсь разработкой фронтенд-приложений.
                            Основной стэк технологий: <code>HTML</code>, <code>CSS</code>, <code>JavaScript</code>, <code>React</code>, <code>Redux</code>.
                            Ознакомиться с моими работами можно в разделе
                            <a class="about__link" target="_blank"
                               href="<?php echo get_permalink(); ?>projects">&laquo;Проекты&raquo;</a>.
                        </p>
                        <p class="about__text">
                            Практикую английский язык примерно на уровне Intermediate. Перевожу
                            понравившиеся статьи на тему фронтенда, иногда пишу собственные.
                            Все публикации в моём
                            <a class="about__link" target="_blank"
                               href="<?php echo get_permalink(); ?>blog">блоге</a>.
                        </p>
                        <p class="about__text">
                           Воспринимаю программирование как дело, требующее серьезного подхода и навыков,
                            в котором стараюсь постоянно совершенствоваться и развиваться.
                           Моя цель - реализовать весь свой потенциал в создании приложений, которые
                           по-настоящему нужны, упрощают жизнь и создают новые возможности.
                        </p>
                        <p class="about__text">Связаться со мной:</p>
                        <address>
                            <ul>
                                <li>
                                    <a class="about__link telegram-link about__text pl-30" target="_blank"
                                       rel="nofollow noopener"
                                       href="https://t.me/shurikation">@shurikation</a>
                                </li>
                                <li>
                                    <a class="about__link email-link about__text pl-30" target="_blank"
                                       rel="nofollow noopener"
                                       href="mailto:rupopovalex@gmail.com">rupopovalex@gmail.com</a>
                                </li>
                            </ul>
                        </address>
                    </div>
                </div>
            </div>
    </section>
    <!--    PROJECTS-->
    <section id="projects" class="projects">
        <img class="brushstrokes projects__brushstrokes--top"
             src="<?php echo content_url(); ?>/uploads/brushstrokes.png" alt="brush stroke">
        <div class="container">
            <h2 class="main-title projects__title">&lt;Проекты&#47;&#62;</h2>
            <div class="projects__content">
                <!--ALL POSTS IN THE LOOP-->
                <?php
                $posts = get_posts(array(
                    'numberposts' => 3, //чтобы вывести последние 3 поста
                    'category_name' => 'projects', //выводим только рубрику blog
                    'orderby' => 'date',
                    'order' => 'DESC', //DESC - прямой порядок, ASC - обратный порядок
                    'post_type' => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ));
                foreach ($posts as $post) {
                    setup_postdata($post);
                    ?>
                    <li class="projects__thumbnail thumbnail">
                        <a class="thumbnail__link sub-title" target="_blank"
                           href="<?php echo get_permalink(); ?>">
                            <h3 class="thumbnail__title sub-title"><?php the_title(); ?></h3>
                        </a>
                        <div class="thumbnail__content">
                            <img class="thumbnail__image" src="<?php the_field('project_img'); ?>"
                                 alt="скриншот проекта">
                            <nav class="thumbnail__overlay">
                                <ul class="thumbnail__list">
                                    <li class="thumbnail__item thumbnail__item--top fromTopToBottom">
                                        <a class="thumbnail__link sub-title" target="_blank"
                                           href="<?php echo get_permalink(); ?>">Описание проекта</a>
                                    </li>
                                    <li class="thumbnail__item">
                                        <a class="thumbnail__link git-href sub-title"
                                           target="_blank" rel="nofollow noopener norefferer"
                                           href="<?php the_field('project_git-link'); ?>">Код на
                                            GitHub</a></li>
                                    <li class="thumbnail__item thumbnail__item--bottom fromBottomToTop">
                                        <a class="thumbnail__link sub-title" target="_blank"
                                           rel="nofollow noopener norefferer"
                                           href="<?php the_field('project_site-link'); ?>">Перейти на сайт</a></li>
                                </ul>
                            </nav>
                        </div>
                    </li>
                    <?php
                }
                wp_reset_postdata();
                ?>
                <!-- THE END OF ALL POSTS-->
            </div>
        </div>
        <img class="brushstrokes projects__brushstrokes--bottom"
             src="<?php echo content_url(); ?>/uploads/brushstrokes.png" alt="brush stroke">    </section>
    <!--    PROJECTS ENDS-->
    <!--    BLOG-->
    <section class="blog">
        <div class="container">
            <h2 class="main-title blog__title">&lt;Блог&#47;&#62;</h2>
            <div class="blog__content">
                <!--ALL POSTS IN LOOP-->
                <?php
                $posts = get_posts(array(
                    'numberposts' => 3, //чтобы вывести последние 3 поста
                    'category_name' => 'blog', //выводим только рубрику blog
                    'orderby' => 'date',
                    'order' => 'DESC', //DESC - прямой порядок, ASC - обратный порядок
                    'post_type' => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ));
                foreach ($posts as $post) {
                    setup_postdata($post);
                    ?>
                    <div class="blog__single-post single-post">
                        <img class="single-post__image" src="<?php the_field('blog_img'); ?>"
                             alt="<?php the_field('blog_alt'); ?>">
                        <div class="single-post__info">
                            <a target="_blank"
                               href="<?php echo get_permalink(); ?>">
                                <h3 class="single-post__title"><?php the_title(); ?></h3>
                            </a>
                            <p class="main-text single-post__text"><?php the_field('blog_text'); ?></p>
                            <a class="single-post__button button"
                               target="_blank"
                               href="<?php echo get_permalink(); ?>">Далее</a>
                        </div>
                    </div>
                    <?php
                }
                wp_reset_postdata();
                ?>
                <!-- THE END OF ALL POSTS-->
                <!-- BUTTON-LINK TO ALL POSTS-->
                <div class="blog__button-wrapper">
                    <a class="blog__button button" target="_blank"
                       href="<?php echo get_permalink(); ?>blog">Все публикации...</a>
                </div>
                <!-- BUTTON ENDS-->
            </div>
        </div>
    </section>
    <!--    BLOG ENDS-->
</main>
<?php
get_footer();
?>


