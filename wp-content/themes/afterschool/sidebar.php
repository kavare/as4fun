<aside id="post-sidebar" class="sidebar small-12 large-4 columns">
	<?php do_action('foundationPress_before_sidebar'); ?>
	<?php dynamic_sidebar("sidebar-widgets"); ?>
  <?php
    $args = array(
      'taxonomy'     => 'connection_target',
      'orderby'      => 'name',
      'show_count'   => 1,
      'pad_counts'   => 0,
      'hierarchical' => 0,
      'echo'         => 0,
      'title_li'     => '',
    );
    $categorybox = wp_list_categories( $args );
    $categorybox = preg_replace('/<\/a> \(([0-9]+)\)/', ' <span class="count">\\1</span></a>', $categorybox);
  ?>
  <article class="row widget widget_categorybox">
    <div class="small-12 columns">
      <h6>窩友活動</h6>
      <ul>
        <?php echo $categorybox; ?>
      </ul>
    </div>
  </article>
  <?php get_template_part( 'parts/sidebar', 'tagbox' ); ?>
	<?php do_action('foundationPress_after_sidebar'); ?>
</aside>
