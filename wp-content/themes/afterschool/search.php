<?php get_header(); ?>

<?php get_template_part( 'parts/content', 'heading' ); ?>
<div class="row">
	<div class="small-12 large-10 large-push-1 columns" role="main">

		<?php do_action('foundationPress_before_content'); ?>
		<header class="search-header">
			<h2 class="search-title">
				<span class="search-keyword"><?php echo get_search_query(); ?></span>的搜尋結果
			</h2>

			<form role="search" method="get" id="searchform" class="searchform searchbar clearfix" action="<?php echo home_url('/'); ?>">
				<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" class="search-input" placeholder="請輸入搜尋內容">
				<input type="submit" id="searchsubmit" value="搜尋" class="button search-btn">
			</form>
			<span class="search-meta">
				約有<span class="search-count"><?php echo $wp_query->found_posts; ?></span>個結果，
				<?php
					$page = get_query_var('paged');
					$total_pages = $wp_query->max_num_pages;

					echo '這是第' . $page . '頁';
					echo '（共' . $total_pages . '頁）';
				?>
			</span>

		</header>

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
	<!-- <?php get_sidebar(); ?> -->

<?php get_footer(); ?>
