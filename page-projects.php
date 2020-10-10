<?php
/*
 Template name: Проекты
 */
?>
<?php
get_header();
?>
<main>
    <section class="template__wrapper">
        <div class="intro template__intro"
             style="background-image: url(<?php echo bloginfo('template_url'); ?>/themes/blog-theme/assets/projects-background.webp); background-position: 40% 0;">
            <h1 class="container intro__title template-title">Проекты</h1>
        </div>
        <img class="brushstrokes about__brushstrokes"
             src="<?php echo bloginfo('template_url'); ?>/assets/brushstrokes.png" alt="brush stroke">
        <div class="container">
            <ul class="projects__content">
                <?php
                $custom_query_args = array(
                    'numberposts' => 0,
                    'category_name' => 'projects',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'post_type' => 'post',
                    'suppress_filters' => true,
                );

                $custom_query_args['paged'] = get_query_var('paged') ? get_query_var('paged') : 1;

                // Instantiate custom query
                $custom_query = new WP_Query($custom_query_args);

                // Pagination fix
                $temp_query = $wp_query;
                $wp_query = NULL;
                $wp_query = $custom_query;

                if ($custom_query->have_posts()) :
                    while ($custom_query->have_posts()) :
                        $custom_query->the_post(); ?>

                        <li class="projects__thumbnail thumbnail">
                            <a class="thumbnail__link sub-title" target="_blank"
                               href="<?php echo get_permalink(); ?>">
                                <h2 class="sub-title"><?php the_title(); ?></h2>
                            </a>
                            <div class="thumbnail__content">
                                <img class="thumbnail__image" src="<?php the_field('project_img'); ?>" alt="проект">
                                <nav class="thumbnail__overlay">
                                    <ul class="thumbnail__list">
                                        <li class="thumbnail__item thumbnail__item--top fromTopToBottom"><a
                                                    class="thumbnail__link sub-title" target="_blank" rel="noopener"
                                                    href="<?php echo get_permalink(); ?>">Описание проекта</a></li>
                                        <li class="thumbnail__item">
                                            <a class="thumbnail__link git-href sub-title"
                                               target="_blank" rel="nofollow noopener"
                                               href="<?php the_field('project_git-link'); ?>">Код на
                                                GitHub</a></li>
                                        <li class="thumbnail__item thumbnail__item--bottom fromBottomToTop">
                                            <a class="thumbnail__link sub-title" target="_blank"
                                               rel="nofollow noopener"
                                               href="<?php the_field('project_site-link'); ?>">Перейти на сайт</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </li>
                    <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </ul>
            <?php if ($wp_query->max_num_pages > 1) : // if there's more than one page turn on pagination ?>
                <nav class="template__pagination">
                    <ul class="pagination__list">
                        <li class="pagination__item"><?php previous_posts_link('&lt; Предыдущие проекты', $custom_query->max_num_pages) ?></li>
                        <li class="pagination__item"><?php next_posts_link('Следующие проекты &#62;') ?></li>
                    </ul>
                </nav>
            <?php endif; ?>
            <?php
            $wp_query = NULL;
            $wp_query = $temp_query;
            ?>
        </div>
    </section>
</main>
<?php
get_footer();
?>
