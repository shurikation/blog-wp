<?php
/*
 Template name: Блог
 */
?>
<?php
get_header();
?>
<main>
    <section class="template__wrapper">
        <div class="intro template__intro" style="background-image: url(<?php echo bloginfo('template_url'); ?>/assets/blog/blog-wallpaper-1920-768-3.jpg); background-position: 40% 0;">
            <h1 class="container intro__title template-title">Блог</h1>
        </div>
        <img class="brushstrokes about__brushstrokes" src="<?php echo bloginfo('template_url'); ?>/assets/brushstrokes-white.png" alt="brush stroke">
        <div class="container">
            <section class="template__content blog">
<?php
                // Define custom query parameters
                $custom_query_args = array(
                    'numberposts' => 0, //чтобы вывести последние 3 поста
                    'category_name' => 'blog', //выводим только рубрику blog
                    'orderby' => 'date',
                    'order' => 'DESC', //DESC - прямой порядок, ASC - обратный порядок
                    'post_type' => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса);
                );
                // Get current page and append to custom query parameters array
                $custom_query_args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

                // Instantiate custom query
                $custom_query = new WP_Query( $custom_query_args );

                // Pagination fix
                $temp_query = $wp_query;
                $wp_query   = NULL;
                $wp_query   = $custom_query;

                // Output custom query loop
                if ( $custom_query->have_posts() ) :
                while ( $custom_query->have_posts() ) :
                $custom_query->the_post(); ?>
                <article class="blog__single-post single-post">
                    <img class="single-post__image" src="<?php the_field('blog_img'); ?>"
                         alt="<?php the_field('blog_alt'); ?>">
                    <div class="single-post__info">
                        <h3 class="single-post__title"><?php the_title(); ?></h3>
                        <p class="main-text single-post__text"><?php the_field('blog_text'); ?></p>
                        <a class="single-post__button button" target="_blank" rel="noopener"
                           href="<?php echo get_permalink(); ?>">Далее</a>
                    </div>
                </article>
                <?php
                endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </section>
            <!--            PAGE NAVIGATION-->
            <?php if ( $wp_query->max_num_pages > 1 ) : // if there's more than one page turn on pagination ?>
                <nav id="page-nav">
                    <h1 class="hide">Page Navigation</h1>
                    <ul class="clear-fix">
                        <li class="prev-link"><?php next_posts_link('« Previous 10 Page') ?></li>
                        <li class="next-link"><?php previous_posts_link('Next 10 Page »', $custom_query->max_num_pages) ?></li>
                    </ul>
                </nav>

            <?php endif; ?>
            <?php
            // Reset main query object
            $wp_query = NULL;
            $wp_query = $temp_query;
            ?>
        </div>
    </section>
</main>
<?php
get_footer();
?>
