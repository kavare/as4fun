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

/**
 * Get the current Url taking into account Https and Port
 * @link http://css-tricks.com/snippets/php/get-current-page-url/
 * @version Refactored by @AlexParraSilva
 */
if (!function_exists('as_getUrl')):
    function as_getUrl() {
        $url  = isset( $_SERVER['HTTPS'] ) && 'on' === $_SERVER['HTTPS'] ? 'https' : 'http';
        $url .= '://' . $_SERVER['SERVER_NAME'];
        $url .= in_array( $_SERVER['SERVER_PORT'], array('80', '443') ) ? '' : ':' . $_SERVER['SERVER_PORT'];
        $url .= $_SERVER['REQUEST_URI'];
        return $url;
    }
endif;

/**
 * Return the default email content for sharing link
 */
if (!function_exists('as_mailto')) :
  function as_mailto($subject, $body, $mail_address = 'nest4fun@gmail.com') {
    $mail = 'mailto:' . $mail_address . '?subject=' . $subject . '&body=' . $body;

    return $mail;
  }
endif;

/**
 * Return the customize page title if there's no default one
 */
if (!function_exists('as_show_single_title')):
    function as_show_single_title($title) {
        $origin = single_cat_title('' , false);
        echo ($origin == '') ? $title : $origin;
    }
endif;

?>