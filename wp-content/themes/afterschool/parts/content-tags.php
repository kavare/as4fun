<?php
/**
 * The tags template for tags in single page.
 *
 * @subpackage AfterSchool
 * @since AfterSchool 1.0
 */
?>

<?php the_tags( '<ul class="tags-group-bottom"><li class="tag">', '</li><li class="tag">', '</li></ul>' ); ?>
<?php
  // $terms = get_the_terms( $post->ID, 'connection_target' );
  // foreach ($terms as $term):
  //   echo $term->name . '<br>';
  //   echo $term->count . '<br>';
  // endforeach;
?>