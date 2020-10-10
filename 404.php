<main id="primary" class="site-main">
    <section class="error-404 not-found">
        <header class="page-header">
            <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'blog-theme' ); ?></h1>
        </header><!-- .page-header -->
        <div class="page-content">
            <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'blog-theme' ); ?></p>

			<?php
			the_widget( 'WP_Widget_Recent_Posts' );
			?>

        </div><!-- .page-content -->
    </section><!-- .error-404 -->
</main><!-- #main -->

