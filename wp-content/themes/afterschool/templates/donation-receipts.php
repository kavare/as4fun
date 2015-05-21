<?php
/*
Template Name: Donation Receipts
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
          <?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
          <p><?php the_tags(); ?></p>
        </footer>
      </article>
    </div>
  </div>
  <?php endwhile; // End the loop ?>


<?php get_footer(); ?>
