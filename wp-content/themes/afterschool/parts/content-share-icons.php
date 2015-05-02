<?php
/**
 * The tags template for social share icons in single page.
 *
 * @subpackage AfterSchool
 * @since AfterSchool 1.0
 */
?>

<div class="share-icons-container">
  <h3 class="share-icons-title">分享文章：</h3>
  <ul class="share-icons clearfix">
    <li><a href="http://twitter.com/share?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>&hashtags=放心窩,<?php the_title(); ?>" target="_blank">
      <i class="icon-twitter"></i>
    </a></li>
    <li><a href="#" class="share-facebook">
      <i class="icon-facebook"></i>
    </a></li>
    <li class="hide-for-large-up"><a href="http://line.me/R/msg/text/?<?php the_title(); ?>%0D%0A<?php the_permalink(); ?>">
      <i class="icon-line"></i>
    </a></li>
    <li><a href="mailto:nest4fun@gmail.com?subject=[分享]<?php echo the_title(); ?>&body=<?php the_content(); ?>" class="share-email">
      <i class="icon-email"></i>
    </a></li>
  </ul>
</div>