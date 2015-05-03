
<?php
  $args = array(
    'taxonomy'     => 'post_tag',
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
<article class="widget widget_tagbox">
  <h6>標籤</h6>
  <ul class="tags-container clearfix">
    <?php echo $tagbox; ?>
  </ul>
</article>