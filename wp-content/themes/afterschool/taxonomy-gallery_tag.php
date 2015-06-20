<?php get_header(); ?>

<?php get_template_part( 'parts/content', 'heading' ); ?>
<div class="row">
<!-- Row for main content area -->
	<div class="small-12 large-12 columns" role="main">
		<div class="row gallery-container">
			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'parts/content', 'gallery' ); ?>
				<?php endwhile; ?>

				<?php else : ?>
					<?php get_template_part( 'parts/content', 'none' ); ?>

			<?php endif; // end have_posts() check ?>
		</div>

	<?php /* Display navigation to next/previous pages when applicable */ ?>
	<?php if ( function_exists('FoundationPress_pagination') ) { FoundationPress_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'FoundationPress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'FoundationPress' ) ); ?></div>
		</nav>
	<?php } ?>

	</div>
</div>
<?php get_footer(); ?>