<?php
get_header();
?>
<main class="main">
    <section class="intro main__intro">
        <div class="container">
            <div class="intro__wrapper">
                <div>
                    <h1 class="intro__title hidden">Блог веб-разработчика</h1>
                    <h2 class="intro__subtitle hidden">Фронтенд-разработчик Александр Попов</h2>
                    <h3 class="intro__title">Александр Попов</h3>
                    <p class="intro__subtitle intro__subtitle--autoText"></p>
                    <div class="dash">|</div>
                    <br><a class="button intro__button" href="#works">Мои проекты</a></div>
                <ul class="intro__socials socials">
                    <li><a target="_blank" rel="nofollow noopener" href="https://facebook.com/shurikation">
                            <svg class="intro__icon icon fb" viewBox="0 0 291.319 291.319">
                                <path class="icon__circle fb__circle"
                                      d="M145.659,0c80.45,0,145.66,65.219,145.66,145.66c0,80.45-65.21,145.659-145.66,145.659S0,226.109,0,145.66C0,65.219,65.21,0,145.659,0z"/>
                                <path class="icon__symbol fb__symbol"
                                      d="M163.394,100.277h18.772v-27.73h-22.067v0.1c-26.738,0.947-32.218,15.977-32.701,31.763h-0.055v13.847h-18.207v27.156h18.207v72.793h27.439v-72.793h22.477l4.342-27.156h-26.81v-8.366C154.791,104.556,158.341,100.277,163.394,100.277z"/>
                            </svg>
                        </a></li>
                    <li><a target="_blank" rel="nofollow noopener" href="#">
                            <svg class="intro__icon icon twitter" viewBox="0 0 112.197 112.197">
                                <circle class="icon__circle twitter__circle" cx="56.099" cy="56.098" r="56.098"/>
                                <path class="icon__symbol twitter__symbol"
                                      d="M90.461,40.316c-2.404,1.066-4.99,1.787-7.702,2.109c2.769-1.659,4.894-4.284,5.897-7.417c-2.591,1.537-5.462,2.652-8.515,3.253c-2.446-2.605-5.931-4.233-9.79-4.233c-7.404,0-13.409,6.005-13.409,13.409c0,1.051,0.119,2.074,0.349,3.056c-11.144-0.559-21.025-5.897-27.639-14.012c-1.154,1.98-1.816,4.285-1.816,6.742c0,4.651,2.369,8.757,5.965,11.161c-2.197-0.069-4.266-0.672-6.073-1.679c-0.001,0.057-0.001,0.114-0.001,0.17c0,6.497,4.624,11.916,10.757,13.147c-1.124,0.308-2.311,0.471-3.532,0.471c-0.866,0-1.705-0.083-2.523-0.239c1.706,5.326,6.657,9.203,12.526,9.312c-4.59,3.597-10.371,5.74-16.655,5.74c-1.08,0-2.15-0.063-3.197-0.188c5.931,3.806,12.981,6.025,20.553,6.025c24.664,0,38.152-20.432,38.152-38.153c0-0.581-0.013-1.16-0.039-1.734C86.391,45.366,88.664,43.005,90.461,40.316L90.461,40.316z"/>
                            </svg>
                        </a></li>
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
    <section class="about main__about" id="about">
        <img class="brushstrokes about__brushstrokes"
             src="<?php echo bloginfo('template_url'); ?>/assets/brushstrokes-white.png" alt="brush strokes">
        <div class="container">
            <h2 class="about__title main-title"><?php the_field('about_title'); ?></h2>
            <div class="about__content">
                <img class="about__image" src="<?php the_field('about_img'); ?>" alt="shurikation">
                <div class="about__info">
                    <div class="about__description">
                        <p class="description__text main-text">
                            <?php the_field('about_descr'); ?>
                        </p>
                        <h3 class="description__text main-text">Контакты:</h3>
                        <address>
                            <ul>
                                <li><a class="description__link email-link main-text" target="_blank"
                                       rel="nofollow noopener"
                                       href="mailto:rupopovalex@gmail.com"><?php the_field('mail', 2); ?></a></li>
                                <li><a class="description__link telegram-link main-text" target="_blank"
                                       rel="nofollow noopener" href="https://t.me/shurikation">@shurikation</a></li>
                            </ul>
                        </address>
                    </div>
                    <a class="button about__button" target="_blank" rel="noopener"
                       href="assets/docs/resume_popov_as.pdf">Открыть резюме</a></div>
            </div>
        </div>
    </section>
<!--    PROJECTS-->
    <section class="projects main__projects">
        <img class="brushstrokes projects__brushstrokes--top"
             src="<?php echo bloginfo('template_url'); ?>/assets/brushstrokes-white.png" alt="краска">
        <div class="container">
            <a target="_blank" rel="noopener" href="<?php echo get_permalink();?>projects">
                <h2 class="main-title projects__title">&lt;Проекты&#47;&#62;</h2>
            </a>
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
                        <h3 class="thumbnail__title sub-title"><?php the_title();?></h3>
                        <div class="thumbnail__content">
                            <img class="thumbnail__image" src="<?php the_field('project_img');?>" alt="скриншот проекта">
                            <nav class="thumbnail__overlay">
                                <ul class="thumbnail__list">
                                    <li class="thumbnail__item thumbnail__item--top fromTopToBottom"><a
                                                class="thumbnail__link sub-title" target="_blank" rel="noopener"
                                                href="<?php echo get_permalink();?>">Описание проекта</a></li>
                                    <li class="thumbnail__item">
                                        <a class="thumbnail__link git-href sub-title"
                                           target="_blank" rel="nofollow noopener"
                                           href="<?php the_field('project_git-link'); ?>">Код на
                                            GitHub</a></li>
                                    <li class="thumbnail__item thumbnail__item--bottom fromBottomToTop">
                                        <a class="thumbnail__link sub-title" target="_blank"
                                           rel="nofollow noopener"
                                           href="<?php the_field('project_site-link');?>">Перейти на сайт</a></li>
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
             src="<?php echo bloginfo('template_url'); ?>/assets/brushstrokes-white.png" alt="краска">
    </section>
<!--    PROJECTS END-->
<!--    BLOG-->
<section class="blog">
    <div class="container">
        <a target="_blank" rel="noopener" href="<?php echo get_permalink();?>blog">
            <h2 class="main-title">&lt;Блог&#47;&#62;</h2>
        </a>
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
                    <img class="single-post__image" src="<?php the_field('blog_img');?>"
                                                    alt="<?php the_field('blog_alt');?>">
                    <div class="single-post__info">
                        <h3 class="single-post__title"><?php the_title();?></h3>
                        <p class="main-text single-post__text"><?php the_field('blog_text');?></p>
                        <a class="single-post__button button" target="_blank" rel="noopener"
                           href="<?php echo get_permalink();?>">Далее</a>
                    </div>
                </div>
                <?php
            }
                wp_reset_postdata();
            ?>
            <!-- THE END OF ALL POSTS-->
            <!-- BUTTON-LINK TO ALL POSTS-->
            <div class="blog__button-wrapper">
                <a class="blog__button button" target="_blank" rel="noopener"
                   href="<?php echo get_permalink();?>blog">Все публикации...</a>
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


