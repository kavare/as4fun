<?php
/**
 * The gallery template for displaying gallery layouts in list page.
 *
 * @subpackage AfterSchool
 * @since AfterSchool 1.0
 */
?>

<?php $as_post_class = 'small-12 large-4 columns end' ?>
<article id="post-<?php the_ID(); ?>" <?php post_class($as_post_class); ?>>
  <a href="<?php the_permalink(); ?>" class="gallery-item ">
    <?php
      if ( has_post_thumbnail() ):
        the_post_thumbnail('', array('class' => 'gallery-image') );
      else:
    ?>
      <img src="<?php as_img_src( 'headlines/activity.png' ) ?>"
           alt="放心窩協會" class="gallery-image">
    <?php endif; ?>
    <div class="gallery-info">
      <h2 class="gallery-title"><?php the_title(); ?></h2>
      <div class="gallery-content"><?php the_excerpt(); ?></div>
    </div>
  </a>
</article>
