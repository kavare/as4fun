<?php get_header(); ?>

<?php if ( has_post_thumbnail() ): ?>
	<div class="thumbnail-container">
		<?php the_post_thumbnail('', array('class' => 'th')); ?>
	</div>
<?php endif; ?>

<div class="row main-container">
	<div class="small-12 large-12 columns" role="main">
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
				<?php do_action('foundationPress_post_before_comments'); ?>
				<?php comments_template(); ?>
				<?php do_action('foundationPress_post_after_comments'); ?>
				<div class="show-for-large-up">
					<?php as_show_recently_post('gallery', 4, false, '其他相簿') ?>
				</div>
			</article>
		<?php endwhile;?>
		<?php do_action('foundationPress_after_content'); ?>
	</div>
</div>
<?php get_footer(); ?>
