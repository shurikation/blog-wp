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
        <img class="brushstrokes about__brushstrokes"
             src="<?php echo bloginfo('template_url'); ?>/assets/brushstrokes-white.png"
             alt="brush strokes">
        <div class="container">
            <div class="blog__wrapper">
                <?php
                    $posts = get_posts(array(
                        'numberposts' => 0, //чтобы вывести ВСЕ посты
                        'category_name' => 'blog_main', //выводим только рубрику projects
                        'orderby' => 'date',
                        'order' => 'ASC', //DESC - прямой порядок
                        'post_type' => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ));

                foreach ($posts as $post) {
                    setup_postdata($post);
                ?>
                <!--                POST-->
                <div class="blog__post post"><img class="post__image"
                                                  src="<?php the_field('blog_img');?>"
                                                  alt="picture">
                    <div class="post__info">
                        <h2 class="post__title"><?php the_title();?></h2>
                        <p class="main-text"><?php the_field('blog_text');?></p>
                        <a class="post__button button" target="_blank" rel="noopener"
                           href="blog/post-template.html">Далее...</a>
                    </div>
                </div>
                    <!--             POSTS END-->
                    <?php
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</main>
<?php
get_footer();
?>
