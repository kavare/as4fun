<?php get_header(); ?>

<div class="page-heading-container">
  <h1 class="page-title">放心窩協會 捐款明細</h1>
</div>
<div class="row">
<!-- Row for main content area -->
	<!-- <div class="small-12 columns" role="main">
		<?php get_template_part( 'searchform' ); ?>
	</div> -->
	<div class="small-12 columns" role="main">
		<?php if ( have_posts() ) : ?>
			<table class="responsive donation-table">
				<thead>
					<tr>
						<th>捐款名目</th>
						<th>捐款類型</th>
						<th>公佈日期</th>
						<th>捐款摘要</th>
						<th>明細下載</th>
					</tr>
				</thead>
				<tbody>
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'parts/content', 'table' ); ?>
				<?php endwhile; ?>
				</tbody>
			</table>

			<?php else : ?>
				<?php get_template_part( 'parts/content', 'none' ); ?>

		<?php endif; // end have_posts() check ?>

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
