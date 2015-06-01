<?php
function as_search_filter($query) {
    if (!is_search()) return $query;

    $full_access = array(
        'page', 'post', 'attachment',
        'connection', 'activity', 'donation', 'meeting', 'volunteer', 'counsel',
    );

    $least_access = array(
        'page', 'post', 'attachment',
        'connection', 'activity', 'donation',
    );

    $role_access = array(
        'administrator' => $full_access,
        'editor' => $full_access,
        'contributor' => $least_access,
        'subscriber' => $least_access,
        'author' => array(
            'page', 'post', 'attachment',
            'connection', 'activity', 'donation', 'meeting', 'volunteer',
        ),
        'volunteer' => array(
            'page', 'post', 'attachment',
            'connection', 'activity', 'donation', 'meeting', 'volunteer',
        ),
        'counselor' => array(
            'page', 'post', 'attachment',
            'connection', 'activity', 'donation', 'meeting', 'counsel',
        ),
    );

    if (!is_user_logged_in()) {
      $query->set('post_type', $least_access);
      return $query;
    }

    foreach ($role_access as $role => $types) {
        if (current_user_can($role)) {
            $query->set('post_type', $types);
            return $query;
        }
    }
}

add_filter('pre_get_posts','as_search_filter');