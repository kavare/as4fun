<?php
/**
 * This is the front page
 */
get_header(); ?>

<section id="fp-section-1" class="as-section-container fp-first">
  <div class="row">
  <div class="small-12 columns" role="main">
    <h1 class="page-title">
      <span class="main-msg"><?php echo bloginfo('name'); ?></span>
      <span class="sub-msg"><?php echo bloginfo('description'); ?></span>
    </h1>
  </div>
  </div>
</section>
<?php
  while (have_posts()) : the_post();
    the_content();
  endwhile;
?>
<?php get_footer(); ?>
