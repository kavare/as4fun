<?php
/**
 * The list template for displaying list layouts in list page.
 *
 * @subpackage AfterSchool
 * @since AfterSchool 1.0
 */
?>

<?php $as_post_class = 'list-item small-12 large-6 columns end' ?>
<article id="post-<?php the_ID(); ?>" <?php post_class($as_post_class); ?>>
  <header>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <span class="meta-title"><i class="fa fa-clock-o fa-lg"></i></span>
    <time class="meta-updated" datetime="<?php echo get_the_time('c'); ?>">
      <?php the_date('Y/m/d'); ?>
    </time>
    <?php the_terms( $post->ID, 'donation_type', '<span class="donation-type">', '', '</span>' ) ?>
  </header>
  <div class="entry-content">
    <?php the_excerpt(); ?>
  </div>
</article>

