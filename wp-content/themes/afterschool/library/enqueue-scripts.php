<?php

if (!function_exists('FoundationPress_scripts')) :
    function FoundationPress_scripts() {

        // Deregister the jquery version bundled with wordpress
        wp_deregister_script( 'jquery' );

        // Modernizr is used for polyfills and feature detection. Must be placed in header. (Not required)
        wp_register_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr.js', array(), '2.8.3', false );

        // Fastclick removes the 300ms delay on click events in mobile environments. Must be placed in header. (Not required)
        wp_register_script( 'fastclick', get_template_directory_uri() . '/js/vendor/fastclick.js', array(), '1.0.0', false );

        // CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
        wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', array(), '2.1.0', false );

        // Self hosted jQuery placed in the footer. (Comment the script above and uncomment the script below if you want to switch).
        //wp_register_script( 'jquery', get_template_directory_uri() . '/js/vendor/jquery.js', array(), '2.1.3', true );

        // If you'd like to cherry-pick the foundation components you need in your project, head over to Gruntfile.js and see lines 67-88
        // It's a good idea to do this, performance-wise. No need to load everything if you're just going to use the grid anyway, you know :)
        wp_register_script( 'foundation', get_template_directory_uri() . '/js/foundation.js', array( 'jquery' ), '5.5.1', true );

        // Enqueue all registered scripts
        wp_enqueue_script('modernizr');
        wp_enqueue_script('fastclick');
        wp_enqueue_script('jquery');
        wp_enqueue_script('foundation');

    }

    add_action( 'wp_enqueue_scripts', 'FoundationPress_scripts' );
endif;

if (!function_exists('page_specific_scripts')):
    function page_specific_scripts() {
        global $post;

        if (is_front_page() || is_home()) {
            wp_enqueue_script('front-page', get_template_directory_uri() . '/js/front-page.js', array(), '1.0.0', true );
            wp_enqueue_style('front-page', get_template_directory_uri() . '/css/pages/front-page.css', array(), '1.0.0' );
        }

        if( is_page() || is_single() ) {
            switch($post->post_name) {
            case 'post':
                wp_register_script( 'post', get_template_directory_uri() . '/js/post.js', array('jquery'), true );
                wp_enqueue_style('post', get_template_directory_uri() . '/css/pages/post.css', array(), '1.0.0' );
                break;
            case 'about':
                wp_register_script( 'about', get_template_directory_uri() . '/js/about.js', array('jquery'), true );
                wp_enqueue_style('about', get_template_directory_uri() . '/css/pages/about.css', array(), '1.0.0' );
                break;
            case 'some-post':
                wp_register_script( 'some-post', get_template_directory_uri() . '/js/some-post.js', array('jquery'), true );
                wp_enqueue_style('some-post', get_template_directory_uri() . '/css/pages/some-post.css', array(), '1.0.0' );
                break;
            }
        } 

    }

    add_action( 'wp_enqueue_scripts', 'page_specific_scripts' );

endif;

?>