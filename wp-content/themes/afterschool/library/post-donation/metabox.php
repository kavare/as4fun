<?php

/**
 * [as_add_donation_meta_boxes: register metabox to donation post type]
 * @return [void] []
 */
function as_add_donation_meta_boxes() {
  add_meta_box(
    'as-donation-name',                              // Unique ID
    '捐款明細檔案',                                    // Title
    'as_donation_class_meta_box',                    // Callback function
    'donation',                                      // Post type
    'side',                                          // Context (normal, advanced, side)
    'default'                                        // Priority (core, high, low)
  );
}

function as_donation_class_meta_box( $object, $box ) { ?>
  <?php wp_nonce_field( basename( __FILE__ ), 'as_donation_class_nonce' ); ?>

  <p>
    <label for="as_donation_file"><?php _e( "Add a custom CSS class, which will be applied to WordPress' post class.", 'example' ); ?></label>
    <br />
    <input type="file" name="as_donation_file" value="" size="30" />
  </p>
<?php }

/**
 * [as_save_donation_class_meta: verify and authenticate meta data]
 * @param  [string] $post_id [the post_id from save_post hook]
 * @param  [object] $post    [the post object from save_post hook]
 * @return [type]          [description]
 */
function as_save_donation_class_meta( $post_id, $post ) {

  /* Verify the nonce before proceeding. */
  if ( !isset( $_POST['as_donation_class_nonce'] ) || !wp_verify_nonce( $_POST['as_donation_class_nonce'], basename( __FILE__ ) ) )
    return $post_id;

  /* Get the post type object. */
  $post_type = get_post_type_object( $post->post_type );

  /* Check if the current user has permission to edit the post. */
  if ( !current_user_can( $post_type->cap->edit_post, $post_id ) )
    return $post_id;

  /* Get the posted data and sanitize it for use as an HTML class. */
  $new_meta_value = ( isset( $_POST['as_donation_class'] ) ? sanitize_html_class( $_POST['as_donation_class'] ) : '' );

  /* Get the meta key. */
  $meta_key = 'as_donation_class';

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

function as_donation_file_save( $post_id, $post ) {
  if(!empty($_FILES['as_donation_file']['name'])) {

    // Setup the array of supported file types. In this case, it's just PDF.
    $supported_types = array('application/pdf');

    // Get the file type of the upload
    $arr_file_type = wp_check_filetype(basename($_FILES['as_donation_file']['name']));
    $uploaded_type = $arr_file_type['type'];

    // Check if the type is supported. If not, throw an error.
    if(in_array($uploaded_type, $supported_types)) {

        // Use the WordPress API to upload the file
        $upload = wp_upload_bits($_FILES['as_donation_file']['name'], null, file_get_contents($_FILES['as_donation_file']['tmp_name']));

        if(isset($upload['error']) && $upload['error'] != 0) {
            wp_die('There was an error uploading your file. The error is: ' . $upload['error']);
        } else {
            add_post_meta($id, 'as_donation_file', $upload);
            update_post_meta($id, 'as_donation_file', $upload);
        } // end if/else

    } else {
        wp_die("The file type that you've uploaded is not a PDF.");
    } // end if/else

  } // end if
}

function as_update_donation_form() {
  echo ' enctype="multipart/form-data"';
}

/**
 * [as_post_meta_boxes_setup: init function for metabox settings]
 * @return [void] []
 */
function as_donation_meta_boxes_setup() {
  add_action( 'add_meta_boxes', 'as_add_donation_meta_boxes' );
  add_action( 'save_post', 'as_save_donation_class_meta', 10, 2 );
  add_action( 'post_edit_form_tag', 'as_update_donation_form' );
}
add_action( 'load-post.php', 'as_donation_meta_boxes_setup' );
add_action( 'load-post-new.php', 'as_donation_meta_boxes_setup' );

?>