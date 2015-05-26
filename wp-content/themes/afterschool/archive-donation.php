<?php get_header(); ?>

<div class="page-heading-container">
  <h1 class="page-title">放心窩協會 捐款明細</h1>
</div>
<div class="row filter-container">
	<div class="small-12 medium-6 large-3 large-push-6 columns filter-item">
		<label for="tabel_search">明細搜尋：</label>
		<input type="text" name="tabel_search" id="filter">
	</div>
	<div class="small-12 medium-6 large-3 columns filter-item">
		<label for="table_filter">明細類型：</label>
		<select name="table_filter" class="footable-filter">
			<option value=""></option>
			<?php
				$terms = get_terms( 'donation_type' );
				 if ( ! empty( $terms ) && ! is_wp_error( $terms ) ):
				    foreach ( $terms as $term ):
				       echo '<option value="' . $term->name . '">' . $term->name . '</option>';
				    endforeach;
				 endif;
			?>
		</select>
	</div>
</div>

<div class="row">
	<div class="small-12 columns" role="main">
		<?php if ( have_posts() ) : ?>
			<table class="donation-table footable"
						 data-page-size="20"
						 data-filter="#filter"
						 data-filter-text-only="true">
				<thead>
					<tr>
						<th>捐款名目</th>
						<th>捐款類型</th>
						<th>公佈日期</th>
						<th data-sort-ignore="true" data-hide="phone">捐款摘要</th>
						<th data-sort-ignore="true" data-hide="phone">明細下載</th>
					</tr>
				</thead>
				<tbody>
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'parts/content', 'table' ); ?>
				<?php endwhile; ?>
				</tbody>
				<tfoot class="hide-if-no-paging">
					<tr>
						<td colspan="5">
						<div>
							<ul class="pagination pagination-centered"></ul>
						</div>
						</td>
					</tr>
				</tfoot>
			</table>

		<?php else : ?>
			<?php get_template_part( 'parts/content', 'none' ); ?>

		<?php endif; // end have_posts() check ?>
	</div>
</div>
<?php get_footer(); ?>
