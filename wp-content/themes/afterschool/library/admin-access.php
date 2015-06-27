<?php

/**
 * [as_remove_admin_bar hide admin bar from non-admin users]
 * @return [void] [description]
 */
function as_remove_admin_bar() {
    if (!current_user_can('administrator') and
        !current_user_can('editor')):
      show_admin_bar(false);
    endif;
}
add_action('after_setup_theme', 'as_remove_admin_bar');

/**
 * [as_hide_dashboard hide wp-admin from non-admin users]
 * @return [void] [description]
 */
function as_hide_dashboard() {
    if ( is_admin() and
      ! current_user_can( 'administrator' ) &&
      ! current_user_can( 'editor' ) &&
      ! current_user_can( 'volunteer' ) &&
      ! current_user_can( 'counselor' ) &&
      ! ( defined( 'DOING_AJAX' ) && DOING_AJAX ) ):
        wp_redirect( home_url() );
      exit;
    endif;
}
add_action( 'init', 'as_hide_dashboard' );