<?php
/*
 Template name: Блог
 */
?>
<?php
get_header();
?>
<main>
    <div class="intro template__intro"
         style="background-image: url(<?php echo bloginfo('template_url'); ?>/assets/blog/blog-wallpaper-1920-768-3.jpg); background-position: 40% 0;">
        <h1 class="container intro__title template-title">Блог</h1>
    </div>
    <div class="template__wrapper">
        <img class="brushstrokes about__brushstrokes" src="<?php echo bloginfo('template_url'); ?>/assets/brushstrokes-white.png">
        <div class="container">
            <div class="template__content blog">
                <!--ALL POSTS IN LOOP-->
                <?php
                $posts = get_posts(array(
                    'numberposts' => 0, //чтобы вывести последние 3 поста
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
                            <h3 class="single-post__title"><?php the_title(); ?></h3>
                            <p class="main-text single-post__text"><?php the_field('blog_text'); ?></p>
                            <a class="single-post__button button" target="_blank" rel="noopener"
                               href="<?php echo get_permalink(); ?>">Далее</a>
                        </div>
                    </div>
                    <?php
                }
                wp_reset_postdata();
                ?>
                <!-- THE END OF ALL POSTS-->
                <!-- BUTTON-LINK TO ALL POSTS-->
                <div class="blog__button-wrapper"><a class="blog__button button" target="_blank" rel="noopener"
                       href="<?php echo get_permalink(); ?>blog">Все публикации...</a>
                </div>
                <!-- BUTTON ENDS-->
            </div>
        </div>
    </div>
</main>
<?php
get_footer();
?>
