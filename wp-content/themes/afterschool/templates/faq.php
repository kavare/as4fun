<?php
/*
Template Name: FAQ
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
  <div class="small-12 large-4 columns contact-form-container" role="main">
    <!-- NOTICE: this form dependens on "Contact Form 7" plugin, the id may change with data migration -->
    <p>
      找不到你想要的答案嗎？你也可以直接留言給我們，讓我們知道你的疑惑，我們會儘快為您解答。
    </p>
    <h2 class="contact-form-title">聯絡我們</h2>
    <?php echo do_shortcode( '[contact-form-7 id="257" title="Contact Us Page Message Board"]' ); ?>
  </div>
</div>
<?php endwhile; // End the loop ?>
<?php get_footer(); ?>
