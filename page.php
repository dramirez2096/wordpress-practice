<?php get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section class="page-section">

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
	</main>
<?php get_footer(); ?>