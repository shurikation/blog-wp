<?php
get_header();
?>
    <main>
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; // End of the loop.
		?>
	</main>
<?php
get_footer();
