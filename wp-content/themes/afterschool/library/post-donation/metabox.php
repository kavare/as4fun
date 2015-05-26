<?php

/**
 * [as_add_donation_meta_boxes: register metabox to donation post type]
 * @return [void] []
 */
function as_add_donation_meta_boxes() {
  add_meta_box(
    'as-donation-file',                              // Unique ID
    '捐款明細檔案',                                    // Title
    'as_donation_class_meta_box',                    // Callback function
    'donation',                                      // Post type
    'side',                                          // Context (normal, advanced, side)
    'default'                                        // Priority (core, high, low)
  );
}

function as_donation_class_meta_box( $object, $box ) { ?>
  <?php
    wp_nonce_field( basename( __FILE__ ), 'as_donation_class_nonce' );
    $file = get_post_meta($object->ID, 'as_donation_file', true);
  ?>

  <div>
    <label for="as_donation_file">請上在此上傳明細檔案</label>
    <input type="file" name="as_donation_file" value="" size="30" />

    <?php if($file): ?>
      <hr>
      <span>前次上傳的檔案：</span>
      <a href="<?php echo $file['url'] ?>"><?php echo basename($file['file']) ?></a>
    <?php endif; ?>
  </div>
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
            add_post_meta($post_id, 'as_donation_file', $upload);
            update_post_meta($post_id, 'as_donation_file', $upload);
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