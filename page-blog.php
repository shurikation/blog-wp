<?php
/*
 Template name: Блог
 */
?>
<?php
    get_header();
?>
<section class="blog">
    <div class="container">
        <h1 class="main-title">&lt;Блог&#47;&#62;</h1>
        <div class="blog__wrapper">
            <?php
            $posts = get_posts(array(
                'numberposts' => 0, //чтобы вывести ВСЕ посты
                'category_name' => 'blog', //выводим только рубрику projects
                'orderby' => 'date',
                'order' => 'DESC', //DESC - прямой порядок, ASC - обратный порядок
                'post_type' => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ));

            foreach ($posts as $post) {
                setup_postdata($post);
                ?>
                <div class="blog__post post"><img class="post__image"
                                                  src="<?php the_field('blog_img');?>"
                                                  alt="picture">
                    <div class="post__info">
                        <h2 class="post__title"><?php the_title();?></h2>
                        <p class="main-text"><?php the_field('blog_text');?></p>
                        <a class="post__button button" target="_blank" rel="noopener"
                           href="<?php echo get_permalink();?>">Далее...</a>
                    </div>
                </div>
                <?php
            }
            wp_reset_postdata();
            ?>
        </div>
</section>
<?php
    get_footer();
?>
