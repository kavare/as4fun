<?php

/**
 * Checks if a particular user has a role. 
 * Returns true if a match was found.
 *
 * @param string $role Role name.
 * @param int $user_id (Optional) The ID of a user. Defaults to the current user.
 * @return bool
 */
function check_user_role( $role, $user_id = null ) {
 
    if ( is_numeric( $user_id ) ) {
      $user = get_userdata( $user_id );      
    } else {
        $user = wp_get_current_user();
    }

    if ( empty( $user ) ) return false;
 
    return in_array( $role, (array) $user->roles );
}

?>