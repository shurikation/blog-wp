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
        <div class="intro template__intro"
             style="background-image: url(<?php echo bloginfo('template_url'); ?>/assets/images/blog-background.webp); background-position: 40% 0;">
            <h1 class="container intro__title template-title">Блог</h1>
        </div>
        <img class="brushstrokes about__brushstrokes"
             src="<?php echo bloginfo('template_url'); ?>/assets/images/brushstrokes.png" alt="brush stroke">
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
                $custom_query_args['paged'] = get_query_var('paged') ? get_query_var('paged') : 1;

                // Instantiate custom query
                $custom_query = new WP_Query($custom_query_args);

                // Pagination fix
                $temp_query = $wp_query;
                $wp_query = NULL;
                $wp_query = $custom_query;

                // Output custom query loop
                if ($custom_query->have_posts()) :
                    while ($custom_query->have_posts()) :
                        $custom_query->the_post(); ?>
                        <!--                POST TEMPLATE-->
                        <article class="blog__single-post single-post">
                            <img class="single-post__image" src="<?php the_field('blog_img'); ?>"
                                 alt="<?php the_field('blog_alt'); ?>">
                            <div class="single-post__info">
                                <a target="_blank" href="<?php echo get_permalink(); ?>">
                                    <h2 class="single-post__title"><?php the_title(); ?></h2>
                                </a>
                                <p class="main-text single-post__text"><?php the_field('blog_text'); ?></p>
                                <a class="single-post__button button" target="_blank"
                                   href="<?php echo get_permalink(); ?>">Далее</a>
                            </div>
                        </article>
                    <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </section>
            <!--            PAGINATION-->
            <?php if ($wp_query->max_num_pages > 1) : // if there's more than one page turn on pagination ?>
                <nav class="template__pagination">
                    <ul class="pagination__list">
                        <li class="pagination__item"><?php previous_posts_link('&lt; Предыдущие посты', $custom_query->max_num_pages) ?></li>
                        <li class="pagination__item"><?php next_posts_link('Следующие посты &#62;') ?></li>
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
