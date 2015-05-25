<?php
/*
Template Name: Donation Terms
*/
get_header(); ?>
  <?php /* Start loop */ ?>
  <?php while (have_posts()) : the_post(); ?>
  <?php get_template_part( 'parts/content', 'jumbotron' ); ?>
  <div class="row">
    <div class="small-12 large-12 columns" role="main">
      <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
        <footer>
        </footer>
        <?php comments_template() ?>
      </article>
    </div>
  </div>
  <?php endwhile; // End the loop ?>

<?php get_footer(); ?>
