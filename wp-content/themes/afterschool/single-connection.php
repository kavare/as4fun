<?php get_header(); ?>

<?php if ( has_post_thumbnail() ): ?>
	<div class="thumbnail-container">
		<?php the_post_thumbnail('', array('class' => 'th')); ?>
	</div>
<?php endif; ?>

<div class="row main-container">
	<div class="small-12 large-8 columns" role="main">

	<?php do_action('foundationPress_before_content'); ?>

	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php // FoundationPress_entry_meta(); ?>
			</header>
			<?php do_action('foundationPress_post_before_entry_content'); ?>
			<div class="entry-content">

			<?php the_content(); ?>
			</div>

			<div class="entry-meta">
				<div class="row">
					<div class="small-12 medium-6 column">
						<div class="author-card">

						</div>
					</div>
					<div class="small-12 medium-6 column">
						<div class="tag-group">

						</div>
					</div>
				</div>
			</div>
			<footer class="entry-meta">
				<?php get_template_part( 'parts/content', 'author' ); ?>
				<?php get_template_part( 'parts/content', 'tags' ); ?>
				<?php // wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
			</footer>
			<?php do_action('foundationPress_post_before_comments'); ?>
			<?php comments_template(); ?>
			<?php do_action('foundationPress_post_after_comments'); ?>
		</article>
	<?php endwhile;?>

	<?php do_action('foundationPress_after_content'); ?>

	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
