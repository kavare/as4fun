<?php

function as_author_add_custom_types( $query ) {
  if( $query->is_author ) {
    $query->set( 'post_type', array(
     'post',
     'connection',
     'tribe_events',
    ));
    return $query;
  }
}
add_filter( 'pre_get_posts', 'as_author_add_custom_types' );