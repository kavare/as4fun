<?php get_header(); ?>

<div class="row main-container">
	<div class="small-12 large-8 columns" role="main">
		<?php do_action('foundationPress_before_content'); ?>
		<?php while (have_posts()) : the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<header>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php get_template_part( 'parts/content', 'meta' ); ?>
				</header>
				<?php do_action('foundationPress_post_before_entry_content'); ?>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
				<div class="entry-meta">
					<div class="row">
						<div class="small-12 medium-6 column">
							<?php $file = get_post_meta($post->ID, 'as_donation_file', true); ?>
							<?php if($file): ?>
								<hr>
								<strong>明細下載：</strong>
							  <a href="<?php echo $file['url'] ?>">
							    <?php echo basename($file['file']) ?>&nbsp;&nbsp;<i class="fa fa-download fa-fx fa-lg"></i>
							  </a>
							<?php endif; ?>
						</div>
						<div class="small-12 medium-6 column">
							<?php get_template_part( 'parts/content', 'share-icons' ); ?>
						</div>
					</div>
				</div>
				<?php // wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
				<?php do_action('foundationPress_post_before_comments'); ?>
				<?php comments_template(); ?>
				<?php do_action('foundationPress_post_after_comments'); ?>
			</article>
		<?php endwhile;?>
		<?php do_action('foundationPress_after_content'); ?>
	</div>
	<?php get_sidebar('donation'); ?>
</div>
<?php get_footer(); ?>
