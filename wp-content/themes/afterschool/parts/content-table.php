<?php
/**
 * The list template for displaying list layouts in list page.
 *
 * @subpackage AfterSchool
 * @since AfterSchool 1.0
 */
?>

<?php $as_post_class = '' ?>
<tr id="post-<?php the_ID(); ?>" <?php post_class($as_post_class); ?>>
  <td>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </td>
  <td>
    <?php the_terms( $post->ID, 'donation_type', '<span class="donation-type">', '', '</span>' ) ?>
  </td>
  <td>
    <time class="meta-updated" datetime="<?php echo get_the_time('c'); ?>">
      <?php the_date('Y/m/d'); ?>
    </time>
  </td>
  <td>
    <?php the_excerpt(); ?>
  </td>
  <td>
    <a href="#"><i class="fa fa-download fa-lg"></i></a>
  </td>
</tr>

