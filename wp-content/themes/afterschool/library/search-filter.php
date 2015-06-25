<?php

/**
 * [as_search_filter: limit the search result for accessing unauthorized post types]
 * @param  [array] $query [the original query object]
 * @return [array] $query [the access filtered query object]
 */
function as_search_filter($query) {
    if (!is_search()) return $query;

    $full_access = array(
        'page', 'post', 'attachment', 'nav_menu_item',
        'connection', 'donation', 'meeting', 'volunteer', 'counsel',
        'tribe_events',
    );

    $least_access = array(
        'page', 'post', 'attachment', 'nav_menu_item',
        'connection', 'donation',
        'tribe_events',
    );

    $role_access = array(
        'administrator' => $full_access,
        'editor' => $full_access,
        'contributor' => $least_access,
        'subscriber' => $least_access,
        'author' => array(
            'page', 'post', 'attachment', 'nav_menu_item',
            'connection', 'donation', 'meeting', 'volunteer',
            'tribe_events',
        ),
        'volunteer' => array(
            'page', 'post', 'attachment', 'nav_menu_item',
            'connection', 'donation', 'meeting', 'volunteer',
            'tribe_events',
        ),
        'counselor' => array(
            'page', 'post', 'attachment', 'nav_menu_item',
            'connection', 'donation', 'meeting', 'counsel',
            'tribe_events',
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

/**
 * [as_search_results_perpage customized search results per page for Relevanssi]
 * @param  [type] $limits [the original query object]
 * @return [type] $limits [the paginated query object]
 */
function as_search_results_perpage($limits) {
    if (is_search()) {
        global $wp_query;
        $wp_query->query_vars['posts_per_page'] = 10;
    }
    return $limits;
}
add_filter('post_limits', 'as_search_results_perpage');
