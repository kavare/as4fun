<?php

/**
 * [Edit the default [...] excerpt string when export]
 * @param  [string] $more [the default string] 
 */
function edit_excerpt_text( $more )  {  
    return ' ...... ';
}
add_filter( 'excerpt_more', 'edit_excerpt_text' );

/**
 * [Append Read More link after each post]
 * @param  [string] $output [the string sent from excerpt_more] 
 */
function add_readmore_link_after_excerpt( $output ) {
    global $post;
    return $output . ' <a href="' . get_permalink( $post->ID ) . '" class="more-link" title="Read More">Read More</a>';
}
add_filter( 'the_excerpt', 'add_readmore_link_after_excerpt' );

?>