<div class="grid-container" <?php (is_front_page() && is_home()) ? 'front-page-grid' : 'page-grid' ?>>
	<section class="header-section">
		<?php get_header(); ?>
	</section>
	<?php
		if (!is_front_page() && !is_home()) { ?>
			<?php $thumbnail = get_the_post_thumbnail_url(); ?>
			<section class="hero-section" style="background-image: url('<?php echo $thumbnail;?>')">
				<?php echo 'this is right'; ?>
			</section>
		<?php }
			?>
	<section class="body-section">
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

	</section> <!-- end of body section -->
</div>
<?php //get_footer(); ?>