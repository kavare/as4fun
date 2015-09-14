<?php
/*
Template Name: Top News
*/
get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part( 'parts/content', 'jumbotron' ); ?>
<div class="row main-content-container">
  <div class="small-12 large-8 columns">
    <article <?php post_class('entry-content') ?> id="post-<?php the_ID(); ?>">
      <?php the_content(); ?>
    </article>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php endwhile; // End the loop ?>

<?php get_footer(); ?>
