<?php
/**
 * The card template for displaying author meta information.
 *
 * @subpackage AfterSchool
 * @since AfterSchool 1.0
 */
?>
<div class="post-meta-container row">
  <div class="small-6 medium-3 columns meta-author">
    <span class="meta-title"><i class="fa fa-user fa-lg"></i></span>
    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author">
      <?php the_author(); ?>
    </a>
  </div>
  <div class="small-6 medium-3 columns meta-time">
    <span class="meta-title"><i class="fa fa-clock-o fa-lg"></i></span>
    <time class="meta-updated" datetime="<?php echo get_the_time('c'); ?>">
      <?php the_date('Y/m/d'); ?>
    </time>
  </div>
  <div class="small-12 medium-6 columns meta-share-icons">
    <?php get_template_part( 'parts/content', 'share-icons' ); ?>
  </div>
  <!-- <div class="small-12 medium-6 columns meta-tags">
    <span class="meta-title"><i class="fa fa-bookmark fa-lg"></i></span>
    <?php the_tags( '<ul class="tags-group-top"><li class="tag">', '</li><li class="tag">', '</li></ul>' ); ?>
  </div> -->
</div>