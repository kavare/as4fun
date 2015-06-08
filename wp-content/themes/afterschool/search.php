<?php get_header(); ?>

<?php get_template_part( 'parts/content', 'heading' ); ?>
<div class="row">
	<div class="small-12 large-8 columns" role="main">

		<?php do_action('foundationPress_before_content'); ?>

		<h2 class="search-title">
			<span class="search-keyword"><?php echo get_search_query(); ?> </span>
			的搜尋結果
			<span class="search-meta">約有<span class="search-count"><?php echo $wp_query->found_posts; ?></span>個結果</span>
		</h2>

		<div class="row list-container">
			<?php if ( have_posts() ) : ?>
				<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'parts/content', 'list' ); ?>
					<?php endwhile; ?>
			<?php else : ?>
				<?php get_template_part( 'parts/content', 'none' ); ?>
			<?php endif; // end have_posts() check ?>
		</div>

	<?php do_action('foundationPress_before_pagination'); ?>

	<?php if ( function_exists('FoundationPress_pagination') ) { FoundationPress_pagination(); } else if ( is_paged() ) { ?>

		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'FoundationPress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'FoundationPress' ) ); ?></div>
		</nav>
	<?php } ?>

	<?php do_action('foundationPress_after_content'); ?>

	</div>
	<?php get_sidebar(); ?>

<?php get_footer(); ?>
