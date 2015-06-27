<?php
/**
 * [as_set_default_admin_color: set default admin panel theme]
 * @param  [int]  $user_id [description]
 * @return [void]          [description]
 */
function as_set_default_admin_color($user_id) {
    $args = array(
        'ID' => $user_id,
        'admin_color' => 'blue'
    );
    wp_update_user( $args );
}
add_action('user_register', 'as_set_default_admin_color');