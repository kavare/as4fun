<?php
/**
 * The list template for displaying list layouts in list page.
 *
 * @subpackage AfterSchool
 * @since AfterSchool 1.0
 */
?>

<?php $as_post_class = 'list-item small-12 columns end' ?>
<article id="post-<?php the_ID(); ?>" <?php post_class($as_post_class); ?>>
  <div class="list-image-container">
    <?php
      if ( has_post_thumbnail() ):
        the_post_thumbnail('', array('class' => 'list-image') );
      else:
    ?>
      <img src="<?php as_img_src( 'ballon.png' ) ?>"
           alt="放心窩協會" class="list-image">
    <?php endif; ?>
  </div>
  <div class="list-content">
    <h2 class="list-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php FoundationPress_entry_meta(); ?>
    <div class="entry-content"><?php the_excerpt(); ?></div>
    <?php the_tags( '<ul class="tags-group-bottom"><li class="tag">', '</li><li class="tag">', '</li></ul>' ); ?>
  </div>
</article>

