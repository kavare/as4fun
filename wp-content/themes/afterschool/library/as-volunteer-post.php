<?php

function as_set_volunteer_post() {
    $labels = array(
        'name'               => _x( '記錄', 'post type general name', 'AfterSchool' ),
        'singular_name'      => _x( '記錄', 'post type singular name', 'AfterSchool' ),
        'add_new'            => __( '新增記錄', 'AfterSchool' ),
        'add_new_item'       => __( '建立新記錄', 'AfterSchool' ),
        'edit_item'          => __( '編輯記錄', 'AfterSchool' ),
        'new_item'           => __( '新記錄', 'AfterSchool' ),
        'all_items'          => __( '所有記錄', 'AfterSchool' ),
        'view_item'          => __( '檢視記錄', 'AfterSchool' ),
        'search_items'       => __( '搜尋記錄', 'AfterSchool' ),
        'not_found'          => __( '沒有發現任何記錄', 'AfterSchool' ),
        'not_found_in_trash' => __( '沒有在垃圾桶中發現任何記錄', 'AfterSchool' ),
        'parent_item_colon'  => '',
        'menu_name'          => '志工專區'
    );

    $args = array(
        'labels'        => $labels,
        'description'   => '',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => true,
    );

    register_post_type( 'volunteer', $args );
    // flush_rewrite_rules();
}

add_action( 'init', 'as_set_volunteer_post' );

function as_new_volunteer_columns($volunteer_columns) {
    $new_columns['cb'] = '<input type="checkbox" />';
    $new_columns['title'] = __('Title');
    $new_columns['author'] = __('Author');
    $new_columns['categories'] = __('Categories');
    $new_columns['tags'] = __('Tags');
    $new_columns['comments'] = __('Comments');
    $new_columns['date'] = __('Date');

    return $new_columns;
}
add_filter('manage_edit-volunteer_columns', 'as_new_volunteer_columns');


?>