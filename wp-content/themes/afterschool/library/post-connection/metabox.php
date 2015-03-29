<?php

/**
 * [as_add_connection_meta_boxes: register metabox to connection post type]
 * @return [void] []
 */
function as_add_connection_meta_boxes() {
  add_meta_box(
    'as-connection-name',                              // Unique ID
    esc_html__( 'Connection name', 'AfterSchool' ),    // Title
    'as_connection_class_meta_box',                    // Callback function
    'connection',                                      // Post type
    'side',                                            // Context (normal, advanced, side)
    'default'                                          // Priority (core, high, low)
  );
}

function as_connection_class_meta_box( $object, $box ) { ?>
  <?php wp_nonce_field( basename( __FILE__ ), 'as_post_class_nonce' ); ?>

  <p>
    <label for="as-post-class"><?php _e( "Add a custom CSS class, which will be applied to WordPress' post class.", 'example' ); ?></label>
    <br />
    <input class="widefat" type="text" name="as-post-class" id="as-post-class" value="<?php echo esc_attr( get_post_meta( $object->ID, 'as_post_class', true ) ); ?>" size="30" />
  </p>
<?php }

/**
 * [as_save_connection_class_meta: verify and authenticate meta data]
 * @param  [string] $post_id [the post_id from save_post hook]
 * @param  [object] $post    [the post object from save_post hook]
 * @return [type]          [description]
 */
function as_save_connection_class_meta( $post_id, $post ) {

  /* Verify the nonce before proceeding. */
  if ( !isset( $_POST['as_post_class_nonce'] ) || !wp_verify_nonce( $_POST['as_post_class_nonce'], basename( __FILE__ ) ) )
    return $post_id;

  /* Get the post type object. */
  $post_type = get_post_type_object( $post->post_type );

  /* Check if the current user has permission to edit the post. */
  if ( !current_user_can( $post_type->cap->edit_post, $post_id ) )
    return $post_id;

  /* Get the posted data and sanitize it for use as an HTML class. */
  $new_meta_value = ( isset( $_POST['as-post-class'] ) ? sanitize_html_class( $_POST['as-post-class'] ) : '' );

  /* Get the meta key. */
  $meta_key = 'as_post_class';

  /* Get the meta value of the custom field key. */
  $meta_value = get_post_meta( $post_id, $meta_key, true );

  /* If a new meta value was added and there was no previous value, add it. */
  if ( $new_meta_value && '' == $meta_value )
    add_post_meta( $post_id, $meta_key, $new_meta_value, true );

  /* If the new meta value does not match the old value, update it. */
  elseif ( $new_meta_value && $new_meta_value != $meta_value )
    update_post_meta( $post_id, $meta_key, $new_meta_value );

  /* If there is no new meta value but an old value exists, delete it. */
  elseif ( '' == $new_meta_value && $meta_value )
    delete_post_meta( $post_id, $meta_key, $meta_value );
}

/**
 * [as_post_meta_boxes_setup: init function for metabox settings]
 * @return [void] []
 */
function as_post_meta_boxes_setup() {
  add_action( 'add_meta_boxes', 'as_add_connection_meta_boxes' );
  add_action( 'save_post', 'as_save_connection_class_meta', 10, 2 );
}
// add_action( 'load-post.php', 'as_post_meta_boxes_setup' );
// add_action( 'load-post-new.php', 'as_post_meta_boxes_setup' );

?>