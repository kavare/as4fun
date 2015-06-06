<aside id="sidebar-post" class="sidebar small-12 large-4 columns">
	<?php do_action('foundationPress_before_sidebar'); ?>
	<?php dynamic_sidebar("sidebar-widgets"); ?>
  <?php
    $args = array(
      'taxonomy'     => 'category',
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
  <article class="widget widget_categorybox">
    <h6>放心窩部落格</h6>
    <ul class="categories-container">
      <?php echo $categorybox; ?>
    </ul>
  </article>

  <?php get_template_part( 'parts/sidebar', 'tagbox' ); ?>

  <article class="widget widget_recently_post">
    <h6>相關文章</h6>
    <?php as_show_recently_post('post', 4, true) ?>
  </article>

	<?php do_action('foundationPress_after_sidebar'); ?>
</aside>
