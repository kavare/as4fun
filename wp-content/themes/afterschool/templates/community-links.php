<?php
/*
Template Name: Community Links
*/
get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part( 'parts/content', 'jumbotron' ); ?>
<div class="row bricks-container">
  <?php the_content(); ?>
</div>
<?php endwhile; // End the loop ?>

<?php get_footer(); ?>
