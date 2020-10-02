<?php
/*
 Template name: Шаблона для Проекты
 Template Post Type: post, projects
 */
?>
<?php
get_header();
?>

    <main id="primary" class="site-main">
        <?php
        while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/content', get_post_type() );

        endwhile; // End of the loop.
        ?>
    </main><!-- #main -->

    <!--Вывод других простов на этой странице-->
    <div class="container">
    <h1 class="main-title">Kek</h1>
    <div class="blog__wrapper">
        <?php
        $posts = get_posts(array(
            'numberposts' => 3, //чтобы вывести последние 3 поста
            'category_name' => 'projects', //выводим только рубрику projects
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
<?php
get_footer();


