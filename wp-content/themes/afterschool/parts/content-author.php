<?php
/**
 * The card template for displaying author meta information.
 *
 * @subpackage AfterSchool
 * @since AfterSchool 1.0
 */
?>

<div class="author-card">
  <span class="byline author">
    <?php echo get_avatar( get_the_author_meta( 'ID' )); ?>
    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn">
      <?php echo get_the_author(); ?>
    </a>
    <?php echo get_the_author_meta('description'); ?>
  </span>

  <time class="updated" datetime="<?php echo get_the_time('c'); ?>">
    <?php // echo sprintf(__('%s', 'FoundationPress'), get_the_date('Y/m/d')); ?>
  </time>
</div>