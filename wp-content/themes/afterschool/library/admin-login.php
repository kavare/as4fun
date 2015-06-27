<?php

/**
 * [as_custom_login add wp-login specific stylesheet]
 * @return [void]
 */
function as_custom_login() {
    echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/css/backend/login.css"/>';
}
add_action('login_head', 'as_custom_login');

/**
 * [as_login_logo_url change default wp-login logo link]
 * @return [string] [home page url]
 */
function as_login_logo_url() {
  return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'as_login_logo_url' );

/**
 * [as_login_logo_url_title change default wp-login logo title]
 * @return [string] [blog description]
 */
function as_login_logo_url_title() {
  return get_bloginfo( 'description' );
}
add_filter( 'login_headertitle', 'as_login_logo_url_title' );

/**
 * [as_login_error_override override detail error message in wp-login]
 * @return [string] [default error message]
 */
function as_login_error_override()
{
  return '孩子，你確定這是你該來的地方？';
}
add_filter('login_errors', 'as_login_error_override');