<article class="template__wrapper">
    <div class="intro template__intro"
         style="background-image: url(<?php echo content_url(); ?><?php the_field('blog_bg-link'); ?>); background-position: 50% 50%;">
        <h1 class="container intro__title template-title"><?php the_title(); ?></h1>
    </div>
    <img class="brushstrokes about__brushstrokes"
         src="<?php echo bloginfo('template_url'); ?>/assets/brushstrokes.png" alt="brush stroke">
    <div class="post-container">
        <div id="post-<?php the_ID(); ?>" class="template__content">
            <?php
            the_content( //позволяет выводить текст из редактора админки на страницу
                sprintf(
                    wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                        __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'blog-theme'),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    wp_kses_post(get_the_title())
                )
            );

            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'blog-theme'),
                    'after' => '</div>',
                )
            );
            ?>
        </div>
    </div>
</article>
