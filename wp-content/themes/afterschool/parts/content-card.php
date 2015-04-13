<?php
/**
 * The card template for displaying card layouts in list page.
 *
 * @subpackage AfterSchool
 * @since AfterSchool 1.0
 */
?>

<?php $as_post_class = 'card-item small-12 large-6 columns end' ?>
<article id="post-<?php the_ID(); ?>" <?php post_class($as_post_class); ?>>
  <a href="<?php the_permalink(); ?>">
    <header class="card-header">
      <div class="card-image-container">
        <?php
          if ( has_post_thumbnail() ):
            the_post_thumbnail('', array('class' => 'card-image') );
          else:
        ?>
          <img src="<?php as_img_src( 'ballon.png' ) ?>"
               alt="放心窩協會" class="card-image">
        <?php endif; ?>
      </div>
      <h2 class="card-title"><?php the_title(); ?></h2>
    </header>
  </a>

  <?php FoundationPress_entry_meta(); ?>
  <div class="card-content">
    <?php the_excerpt(); ?>
    <?php // the_content(__('繼續閱讀', 'FoundationPress')); ?>
  </div>
  <footer class="card-footer">
    <a href="<?php the_permalink(); ?>" class="button primary">繼續閱讀</a>
  </footer>
</article>
