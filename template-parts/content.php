


<div class="container">
    <!--        Выводим название поста - заголовк соответсвует названию запсии-->
    <h2 class="main-title"><?php the_title();?></h2>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
		the_content( //позволяет выводить текст из редактора админки на страницу
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'blog-theme' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blog-theme' ),
				'after'  => '</div>',
			)
		);
		?>
</article><!-- #post-<?php the_ID(); ?> -->
</div>
