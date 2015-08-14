<?php
/*
Template Name: Volunteer Join
*/
get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part( 'parts/content', 'jumbotron' ); ?>
<div class="row main-content-container">
  <div class="small-12 large-6 columns">
    <article <?php post_class('entry-content') ?> id="post-<?php the_ID(); ?>">
      <?php the_content(); ?>
    </article>
  </div>
  <div class="small-12 large-6 columns join-us-container" role="main">
    <!-- NOTICE: this form dependens on "Contact Form 7" plugin, the id may change with data migration -->
    <h2 class="join-us-title">加入志工</h2>
    <?php echo do_shortcode( '[contact-form-7 id="400" title="Join Us Page Form"]' ); ?>
  </div>
  <div class="small-12 columns">
    <?php comments_template(); ?>
  </div>
</div>
<?php endwhile; // End the loop ?>
<?php get_footer(); ?>
