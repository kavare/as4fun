<?php
/*
Template Name: Community Links
*/
get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part( 'parts/content', 'jumbotron' ); ?>
<div class="row bricks-container">

<?php // the_content(); ?>
<article class="brick-item small-12 medium-6 large-4 columns end">
  <a href="http://as4fun.dev/wp-content/themes/afterschool/assets/img/ballon.png">
    <div class="brick-image-container">
      <img class="brick-image" src="http://as4fun.dev/wp-content/themes/afterschool/assets/img/ballon.png" alt="">
    </div>
    <h2 class="brick-title">友善連結一</h2>
    <p class="brick-content">友善連結一友善連結一友善連結一友善連結一友善連結一</p>
  </a>
</article>
<article class="brick-item small-12 medium-6 large-4 columns end">
  <a href="http://as4fun.dev/wp-content/themes/afterschool/assets/img/ballon.png">
    <div class="brick-image-container">
      <img class="brick-image" src="http://as4fun.dev/wp-content/themes/afterschool/assets/img/ballon.png" alt="">
    </div>
    <h2 class="brick-title">友善連結二</h2>
    <p class="brick-content">友善連結二友善連結二友善連結二友善連結二友善連結二</p>
  </a>
</article>
<article class="brick-item small-12 medium-6 large-4 columns end">
  <a href="http://as4fun.dev/wp-content/themes/afterschool/assets/img/ballon.png">
    <div class="brick-image-container">
      <img class="brick-image" src="http://as4fun.dev/wp-content/themes/afterschool/assets/img/ballon.png" alt="">
    </div>
    <h2 class="brick-title">友善連結三</h2>
    <p class="brick-content">友善連結三友善連結三友善連結三友善連結三友善連結三</p>
  </a>
</article>

</div>
<?php endwhile; // End the loop ?>

<?php get_footer(); ?>
