<?php

function as_set_connection_post() {
    $labels = array(
        'name'               => _x( '窩友活動', 'post type general name', 'AfterSchool' ),
        'singular_name'      => _x( '窩友活動', 'post type singular name', 'AfterSchool' ),
        'add_new'            => __( '新增窩友活動', 'AfterSchool' ),
        'add_new_item'       => __( '建立新窩友活動', 'AfterSchool' ),
        'edit_item'          => __( '編輯活動', 'AfterSchool' ),
        'new_item'           => __( '新窩友活動', 'AfterSchool' ),
        'all_items'          => __( '所有活動', 'AfterSchool' ),
        'view_item'          => __( '檢視活動', 'AfterSchool' ),
        'search_items'       => __( '搜尋活動', 'AfterSchool' ),
        'not_found'          => __( '沒有發現任何窩友活動', 'AfterSchool' ),
        'not_found_in_trash' => __( '沒有在垃圾桶中發現任何窩友活動', 'AfterSchool' ),
        'parent_item_colon'  => '',
        'menu_name'          => '窩友活動'
    );

    $supports = array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' );

    $args = array(
        'labels'        => $labels,
        'description'   => '',
        'public'        => true,
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-admin-home',
        'supports'      => $supports,
        'has_archive'   => true,
        'rewrite'       => array( 'slug' => 'connection' ),
    );

    register_post_type( 'connection', $args );
    // flush_rewrite_rules();
}

add_action( 'init', 'as_set_connection_post' );

function as_new_connection_columns($default) {
    $default['author'] = __('Author');
    $default['name'] = __('Namae');

    return $default;
}
add_filter('manage_edit-connection_columns', 'as_new_connection_columns');


function as_connection_table_content($column_name, $post_id) {
    switch ($column_name) {
        case 'name':
            $connection_name = get_post_meta( $post_id, 'smashing_post_class', true);
            echo $connection_name;
            break;

        default:
            break;
    }
}
add_action( 'manage_connection_posts_custom_column', 'as_connection_table_content', 10, 2 );






/* Fire our meta box setup function on the post editor screen. */
add_action( 'load-post.php', 'smashing_post_meta_boxes_setup' );
add_action( 'load-post-new.php', 'smashing_post_meta_boxes_setup' );

function smashing_post_meta_boxes_setup() {

  /* Add meta boxes on the 'add_meta_boxes' hook. */
  add_action( 'add_meta_boxes', 'smashing_add_post_meta_boxes' );

    /* Save post meta on the 'save_post' hook. */
  add_action( 'save_post', 'smashing_save_post_class_meta', 10, 2 );
}

function smashing_add_post_meta_boxes() {

  add_meta_box(
    'as-connection-name',      // Unique ID
    esc_html__( 'Connection name', 'AfterSchool' ),    // Title
    'smashing_post_class_meta_box',   // Callback function
    'connection',         // Admin page (or post type)
    'side',         // Context
    'default'         // Priority
  );
}

/* Display the post meta box. */
function smashing_post_class_meta_box( $object, $box ) { ?>

  <?php wp_nonce_field( basename( __FILE__ ), 'smashing_post_class_nonce' ); ?>

  <p>
    <label for="smashing-post-class"><?php _e( "Add a custom CSS class, which will be applied to WordPress' post class.", 'example' ); ?></label>
    <br />
    <input class="widefat" type="text" name="smashing-post-class" id="smashing-post-class" value="<?php echo esc_attr( get_post_meta( $object->ID, 'smashing_post_class', true ) ); ?>" size="30" />
  </p>
<?php }

/* Save the meta box's post metadata. */
function smashing_save_post_class_meta( $post_id, $post ) {

  /* Verify the nonce before proceeding. */
  if ( !isset( $_POST['smashing_post_class_nonce'] ) || !wp_verify_nonce( $_POST['smashing_post_class_nonce'], basename( __FILE__ ) ) )
    return $post_id;

  /* Get the post type object. */
  $post_type = get_post_type_object( $post->post_type );

  /* Check if the current user has permission to edit the post. */
  if ( !current_user_can( $post_type->cap->edit_post, $post_id ) )
    return $post_id;

  /* Get the posted data and sanitize it for use as an HTML class. */
  $new_meta_value = ( isset( $_POST['smashing-post-class'] ) ? sanitize_html_class( $_POST['smashing-post-class'] ) : '' );

  /* Get the meta key. */
  $meta_key = 'smashing_post_class';

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


?>