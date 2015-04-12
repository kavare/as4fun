<?php
/**
 * The card template for displaying card layouts in list page.
 *
 * @subpackage AfterSchool
 * @since AfterSchool 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header>
    <h2><a href="<?php the_permalink(); ?>">CARDO<?php the_title(); ?></a></h2>
    <?php FoundationPress_entry_meta(); ?>
  </header>
  <div class="entry-content">
    <?php the_content(__('Continue reading...', 'FoundationPress')); ?>
  </div>
  <footer>
    <?php $tag = get_the_tags(); if (!$tag) { } else { ?><p><?php the_tags(); ?></p><?php } ?>
  </footer>
  <hr />
</article>
