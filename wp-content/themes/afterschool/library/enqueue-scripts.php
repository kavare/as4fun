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
        // wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', array(), '2.1.0', false );

        // Self hosted jQuery placed in the footer. (Comment the script above and uncomment the script below if you want to switch).
        wp_register_script( 'jquery', get_template_directory_uri() . '/js/vendor/jquery.js', array(), '2.1.3', true );

        // If you'd like to cherry-pick the foundation components you need in your project, head over to Gruntfile.js and see lines 67-88
        // It's a good idea to do this, performance-wise. No need to load everything if you're just going to use the grid anyway, you know :)
        wp_register_script( 'foundation', get_template_directory_uri() . '/js/foundation.js', array( 'jquery' ), '5.5.1', true );

        // Enqueue all registered scripts
        wp_enqueue_script( 'modernizr' );
        wp_enqueue_script( 'fastclick' );
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'foundation' );
        wp_enqueue_script( 'facebook', get_template_directory_uri() . '/js/core/facebook.js', array('jquery'), '2.3.0', false );
        wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', array('jquery'), '2.3.0', false );

    }

    add_action( 'wp_enqueue_scripts', 'FoundationPress_scripts' );
endif;

if (!function_exists('page_specific_scripts')):
    function page_specific_scripts() {
        global $post;

        if ( is_front_page() || is_home() ) {
            wp_enqueue_script('front-page', get_template_directory_uri() . '/js/front-page.js', array(), '1.0.0', true );
            wp_enqueue_style('front-page', get_template_directory_uri() . '/css/pages/front-page.css', array(), '1.0.0' );
        }

        if ( is_page() ) {
            global $template;
            $template_name = basename($template, '.php');

            switch( $template_name ):
            case 'about':
            case 'about-plans':
                wp_enqueue_script( 'about', get_template_directory_uri() . '/js/about.js', array('jquery'), '1.0.0', true );
                wp_enqueue_style( 'about', get_template_directory_uri() . '/css/pages/about.css', array(), '1.0.0' );
                break;
            case 'contact-us':
                wp_enqueue_style( 'contact-us', get_template_directory_uri() . '/css/pages/contact-us.css', array(), '1.0.0' );
                break;
            case 'faq':
                wp_enqueue_style( 'faq', get_template_directory_uri() . '/css/pages/faq.css', array(), '1.0.0' );
                break;
            case 'community-links':
                wp_enqueue_script( 'links', get_template_directory_uri() . '/js/links.js', array('jquery'), '1.0.0', true );
                wp_enqueue_style( 'links', get_template_directory_uri() . '/css/pages/community-links.css', array(), '1.0.0' );
                break;
            case 'counsel-contacts':
            case 'counsel-terms':
            case 'form-counsel':
                wp_enqueue_script( 'counsel-terms', get_template_directory_uri() . '/js/counsel.js', array('jquery'), '1.0.0', true );
                wp_enqueue_style( 'counsel-terms', get_template_directory_uri() . '/css/pages/counsel.css', array(), '1.0.0' );
                break;
            case 'donation-receipts':
                wp_enqueue_script( 'donation-receipts', get_template_directory_uri() . '/js/donation-receipts.js', array('jquery'), '1.0.0', true );
                wp_enqueue_style( 'donation-receipts', get_template_directory_uri() . '/css/pages/donation-receipts.css', array(), '1.0.0' );
                break;
            case 'donation-terms':
                wp_enqueue_script( 'donation-terms', get_template_directory_uri() . '/js/donation-terms.js', array('jquery'), '1.0.0', true );
                wp_enqueue_style( 'donation-terms', get_template_directory_uri() . '/css/pages/donation-terms.css', array(), '1.0.0' );
                break;
            case 'gallery':
                wp_enqueue_style( 'gallery', get_template_directory_uri() . '/css/pages/gallery.css', array(), '1.0.0' );
                break;
            case 'member-register':
            case 'member-login':
            case 'member-profile':
                wp_enqueue_style( 'member', get_template_directory_uri() . '/css/pages/member.css', array(), '1.0.0' );
                break;
            case 'volunteer-join':
                wp_enqueue_style( 'volunteer', get_template_directory_uri() . '/css/pages/volunteer-join.css', array(), '1.0.0' );
                break;

            default:

            endswitch;
        }

        if ( is_search() ) {
            wp_enqueue_style('search-result', get_template_directory_uri() . '/css/pages/search-result.css', array(), '1.0.0');
            wp_enqueue_script( 'archive', get_template_directory_uri() . '/js/archive.js', array('jquery'), '1.0.0', true );
        }

        if ( is_archive() and !is_tax() ) {

            if (is_post_type_archive( 'connection' ) or is_post_type_archive( 'volunteer' ) or is_post_type_archive( 'activity' )):
                wp_enqueue_style('archive-card', get_template_directory_uri() . '/css/pages/archive-card.css', array(), '1.0.0' );
            elseif (is_post_type_archive( 'donation' )):
                wp_enqueue_style('archive-table', get_template_directory_uri() . '/css/pages/archive-table.css', array(), '1.0.0');
            elseif (is_post_type_archive( 'gallery' )):
                wp_enqueue_style('archive-gallery', get_template_directory_uri() . '/css/pages/archive-gallery.css', array(), '1.0.0');
            else:
                wp_enqueue_style('archive-list', get_template_directory_uri() . '/css/pages/archive-list.css', array(), '1.0.0');
            endif;

            wp_enqueue_script( 'archive', get_template_directory_uri() . '/js/archive.js', array('jquery'), '1.0.0', true );
        }

        if ( is_tax() ) {

            if (is_tax( 'connection_target' ) or is_tax( 'volunteer_record' ) or is_tax( 'volunteer_tag' ) or is_tax( 'activity_type' ) or is_tax( 'meeting_stage', 'progress' )):
                wp_enqueue_style('archive-card', get_template_directory_uri() . '/css/pages/archive-card.css', array(), '1.0.0' );
            elseif (is_tax( 'donation_type' )):
                wp_enqueue_style('archive-table', get_template_directory_uri() . '/css/pages/archive-table.css', array(), '1.0.0' );
            elseif (is_tax( 'gallery_tag' )):
                wp_enqueue_style('archive-gallery', get_template_directory_uri() . '/css/pages/archive-gallery.css', array(), '1.0.0');
            else:
                wp_enqueue_style('archive-list', get_template_directory_uri() . '/css/pages/archive-list.css', array(), '1.0.0' );
            endif;

            wp_enqueue_script( 'archive', get_template_directory_uri() . '/js/archive.js', array('jquery'), '1.0.0', true );
        }

        if ( is_single() ) {
            switch( $post->post_type ):
            // case 'activity':
            //     wp_enqueue_style('single-activity', get_template_directory_uri() . '/css/pages/single-activity.css', array(), '1.0.0' );
            //     break;
            // case 'connection':
            //     wp_enqueue_style('single-connection', get_template_directory_uri() . '/css/pages/single-connection.css', array(), '1.0.0' );
            //     break;
            // case 'counsel':
            //     wp_enqueue_style('single-counsel', get_template_directory_uri() . '/css/pages/single-counsel.css', array(), '1.0.0' );
            //     break;
            // case 'donation':
            //     wp_enqueue_style('single-donation', get_template_directory_uri() . '/css/pages/single-donation.css', array(), '1.0.0' );
            //     break;
            // case 'volunteer':
            //     wp_enqueue_style('single-volunteer', get_template_directory_uri() . '/css/pages/single-volunteer.css', array(), '1.0.0' );
            //     break;
            default:
                wp_enqueue_style('post', get_template_directory_uri() . '/css/pages/post.css', array(), '1.0.0' );
            endswitch;

            wp_register_script( 'post', get_template_directory_uri() . '/js/post.js', array('jquery'), '1.0.0', true );
        }

    }

    add_action( 'wp_enqueue_scripts', 'page_specific_scripts' );

endif;

if (!function_exists('as_admin_style')):
    function as_admin_style() {
        if( is_admin() ):
            wp_enqueue_style('backend_ui', get_template_directory_uri() . '/css/backend/admin.css', array(), '1.0.0' );
        endif;
    }

    add_action( 'admin_print_styles', 'as_admin_style' );
endif;

?>