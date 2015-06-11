<?php
/**
 * Customize ninja-form default settings
 */
function prefix_move_ninja_forms_messages() {
    remove_action( 'ninja_forms_display_before_form', 'ninja_forms_display_response_message', 10 );
    add_action( 'ninja_forms_display_after_form', 'ninja_forms_display_response_message', 10 );
}
add_action( 'wp_head', 'prefix_move_ninja_forms_messages' );