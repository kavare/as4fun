<?php
/**
 * The card template for displaying card layouts in list page.
 *
 * @subpackage AfterSchool
 * @since AfterSchool 1.0
 */
?>

<?php $as_post_class = 'card-item small-12 large-6 columns' ?>
<article id="post-<?php the_ID(); ?>" <?php post_class($as_post_class); ?>>
  <a href="<?php the_permalink(); ?>">
    <header class="card-header">
      <div class="card-image-container">
        <?php the_post_thumbnail('', array('class' => 'card-image') ); ?>
      </div>
      <h2 class="card-title"><?php the_title(); ?></h2>
    </header>
  </a>

  <?php FoundationPress_entry_meta(); ?>
  <div class="card-content">
    <?php the_content(__('繼續閱讀', 'FoundationPress')); ?>
  </div>
  <footer class="card-footer">
    <a href="<?php the_permalink(); ?>" class="button primary">繼續閱讀</a>
  </footer>
  <hr />
</article>
