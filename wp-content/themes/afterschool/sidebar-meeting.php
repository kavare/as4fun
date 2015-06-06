<aside class="sidebar small-12 large-4 columns">
  <?php do_action('foundationPress_before_sidebar'); ?>
  <?php dynamic_sidebar("sidebar-widgets"); ?>
  <?php
    $args = array(
      'taxonomy'     => 'meeting_stage',
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

  <?php
    if (current_user_can( 'view_meeting_minutes' )
      and current_user_can( 'view_meeting_minutes' )):
  ?>
  <article class="widget widget_categorybox">
    <h6>會議進程</h6>
    <ul class="categories-container">
      <?php echo $categorybox; ?>
    </ul>
  </article>

  <?php
    $args = array(
      'taxonomy'     => 'meeting_tag',
      'orderby'      => 'name',
      'show_count'   => 1,
      'pad_counts'   => 0,
      'hierarchical' => 0,
      'echo'         => 0,
      'title_li'     => '',
    );
    $tagbox = wp_list_categories( $args );
    $tagbox = preg_replace('/<\/a> \(([0-9]+)\)/', ' <span class="count">\\1</span></a>', $tagbox);
  ?>
  <article class="widget widget_tagbox show-for-large-up">
    <h6>會議標籤</h6>
    <ul class="tags-container clearfix">
      <?php echo $tagbox; ?>
    </ul>
  </article>

  <article class="widget widget_recently_post">
    <h6>最新會議</h6>
    <?php as_show_recently_post('meeting', 4, true) ?>
  </article>

  <?php endif; ?>
  <?php do_action('foundationPress_after_sidebar'); ?>
</aside>

