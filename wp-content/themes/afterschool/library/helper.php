<?php

/**
 * Checks if a particular user has a role.
 * Returns true if a match was found.
 *
 * @param string $role Role name.
 * @param int $user_id (Optional) The ID of a user. Defaults to the current user.
 * @return bool
 */
if (!function_exists('check_user_role')):
    function check_user_role( $role, $user_id = null ) {

        if ( is_numeric( $user_id ) ) {
          $user = get_userdata( $user_id );
        } else {
            $user = wp_get_current_user();
        }

        if ( empty( $user ) ) return false;

        return in_array( $role, (array) $user->roles );
    }
endif;


/**
 * [as_img_src: get the image path for html and css src]
 * @param  [string] $name [the filename of the image]
 * @return [void]         [echo the path of the image]
 */
if (!function_exists('as_img_src')):
    function as_img_src( $name ) {
        $path = get_template_directory_uri();
        $src = $path . '/assets/img/' . $name;

        echo $src;
    }
endif;

?>