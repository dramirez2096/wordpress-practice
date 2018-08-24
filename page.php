<div class="grid-container front-page-grid">
	<section class="header-section">
		<?php get_header(); ?>
	</section>
	<section class="body-section">
			<!-- section -->
			<section class="page-section">
			<?php
					if (is_front_page() && is_home()) {
						the_title();
						echo 'this is the default home page';
					} elseif (is_front_page()) {
						echo 'this is the static home page';
					} elseif (is_home()) {
						echo 'this is the blog page';
					} else {
						echo 'none of these';
					} 
				?>

				<?php if (have_posts()): while (have_posts()) : the_post();

					get_template_part( 'template-parts/content', 'page' );

				?>

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

				</article>
				<!-- /article -->

			<?php endif; ?>

			</section>
			<!-- /section -->

	</section> <!-- end of body section -->
</div>
<?php //get_footer(); ?>