<?php
/*
Template Name: Countact Us
*/
get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part( 'parts/content', 'jumbotron' ); ?>
<div class="row main-content-container">
  <div class="small-12 large-4 columns">
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <div class="row bricks-container">
        <?php the_content(); ?>
      </div>
    </article>
  </div>
  <div class="small-12 large-8 columns contact-form-container" role="main">
    <!-- NOTICE: this form dependens on "Contact Form 7" plugin, the id may change with data migration -->
    <h2 class="contact-form-title">聯絡我們</h2>
    <?php echo do_shortcode( '[contact-form-7 id="257" title="Contact Us Page Message Board"]' ); ?>
  </div>
</div>
<iframe src="<?php echo get_post_meta($post->ID, 'contact-us-map', true); ?>"
        frameborder="0" style="border:0" class="map-container"></iframe>
<?php endwhile; // End the loop ?>

<?php get_footer(); ?>
