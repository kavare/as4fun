<?php
/*
Template Name: Form Counsel
*/
get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part( 'parts/content', 'jumbotron' ); ?>
<div class="row main-content-container">
  <div class="small-12 large-10 large-push-1 columns" role="main">
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
    </article>

    <?php comments_template(); ?>
  </div>
</div>
<?php endwhile; // End the loop ?>


<?php get_footer(); ?>
