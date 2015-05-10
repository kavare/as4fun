<?php

function fb_opengraph() {
    global $post;

    $img_src = get_stylesheet_directory_uri() . '/assets/img/logos/logo.png';
    $excerpt = get_bloginfo('name') . get_bloginfo('description');

    if ( is_single() ) {
        if ( has_post_thumbnail( $post->ID ) ) {
            $img_src = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'medium')[0];
        }

        if ( $post->post_excerpt ) {
            $excerpt = strip_tags( $post->post_excerpt );
        } else {
            $content = $post->post_content;
            $excerpt_length = 140;
            $excerpt = mb_substr( $content, 0, $excerpt_length, 'utf-8' );
        }
    }

    echo '<meta property="og:title" content="' . get_the_title() . '"/>';
    echo '<meta property="og:description" content="' . $excerpt . '"/>';
    echo '<meta property="og:type" content="article"/>';
    echo '<meta property="og:url" content="' . get_permalink() . '"/>';
    echo '<meta property="og:site_name" content="' . get_bloginfo() . '"/>';
    echo '<meta property="og:image" content="' . $img_src . '"/>';
}

add_action('wp_head', 'fb_opengraph', 5);
?>