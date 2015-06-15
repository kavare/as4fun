<?php
/*
Template Name: Countact Us
*/
get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part( 'parts/content', 'jumbotron' ); ?>
<div class="row main-content-container">
  <div class="small-12 large-4 columns" role="main">
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <div class="entry-content bricks-container">
        <?php the_content(); ?>
      </div>
    </article>
  </div>
</div>
<?php endwhile; // End the loop ?>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1806.999506331731!2d121.51062689999998!3d25.0680226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a93907c4f2e9%3A0xe07c90a284af9353!2zMTAz5Y-w5YyX5biC5aSn5ZCM5Y2A6L-q5YyW6KGX5LqM5q61MTgx6Jmf!5e0!3m2!1szh-TW!2stw!4v1434381422089" frameborder="0" style="border:0" class="map-container"></iframe>

<?php get_footer(); ?>
