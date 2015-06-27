<?php
/*
Template Name: Member Register
*/
get_header(); ?>

<?php get_template_part( 'parts/content', 'jumbotron' ); ?>
<div class="row">
  <div class="small-12 large-12 columns" role="main">

  <?php /* Start loop */ ?>
  <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
    </article>
  <?php endwhile; // End the loop ?>

  </div>
</div>

<?php get_footer(); ?>
