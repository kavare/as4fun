<?php
/**
 * The table template for displaying table layouts in list page.
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
  <td class="donation-download">
    <?php $file = get_post_meta($post->ID, 'as_donation_file', true); ?>
    <?php if($file): ?>
      <a href="<?php echo $file['url'] ?>"><i class="fa fa-download fa-lg"></i>
        <?php echo basename($file['file']) ?>
      </a>
    <?php endif; ?>
  </td>
</tr>

