<?php

function as_set_meeting_post() {
    $labels = array(
        'name'               => _x( '會議', 'post type general name', 'AfterSchool' ),
        'singular_name'      => _x( '會議', 'post type singular name', 'AfterSchool' ),
        'add_new'            => __( '新增會議', 'AfterSchool' ),
        'add_new_item'       => __( '建立新會議', 'AfterSchool' ),
        'edit_item'          => __( '編輯會議', 'AfterSchool' ),
        'new_item'           => __( '新會議', 'AfterSchool' ),
        'all_items'          => __( '所有會議', 'AfterSchool' ),
        'view_item'          => __( '檢視會議', 'AfterSchool' ),
        'search_items'       => __( '搜尋會議', 'AfterSchool' ),
        'not_found'          => __( '沒有發現任何會議', 'AfterSchool' ),
        'not_found_in_trash' => __( '沒有在垃圾桶中發現任何會議', 'AfterSchool' ),
        'parent_item_colon'  => '',
        'menu_name'          => '社區會議'
    );

    $args = array(
        'labels'        => $labels,
        'description'   => '',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => true,
    );

    register_post_type( 'meeting', $args );
    // flush_rewrite_rules();
}

add_action( 'init', 'as_set_meeting_post' );

function as_new_meeting_columns($meeting_columns) {
    $new_columns['cb'] = '<input type="checkbox" />';
    $new_columns['title'] = __('Title');
    $new_columns['author'] = __('Author');
    $new_columns['categories'] = __('Categories');
    $new_columns['tags'] = __('Tags');
    $new_columns['comments'] = __('Comments');
    $new_columns['date'] = __('Date');

    return $new_columns;
}
add_filter('manage_edit-meeting_columns', 'as_new_meeting_columns');

function as_meeting_announcement() {
    $labels = array(
        'name'              => _x( '會議公告', 'taxonomy general name' ),
        'singular_name'     => _x( '會議公告', 'taxonomy singular name' ),
        'search_items'      => __( '搜尋會議公告' ),
        'all_items'         => __( '會議公告項目' ),
        'parent_item'       => __( '上層項目' ),
        'parent_item_colon' => __( '上層項目:' ),
        'edit_item'         => __( '編輯會議公告' ),
        'update_item'       => __( '更新會議公告' ),
        'add_new_item'      => __( '新增會議公告' ),
        'new_item_name'     => __( '新會議公告' ),
        'menu_name'         => __( '會議公告' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
    );

    register_taxonomy( 'meeting_announcement', 'meeting', $args );
}
add_action( 'init', 'as_meeting_announcement', 0 );

function as_meeting_minute() {
    $labels = array(
        'name'              => _x( '會議記錄', 'taxonomy general name' ),
        'singular_name'     => _x( '會議記錄', 'taxonomy singular name' ),
        'search_items'      => __( '搜尋會議記錄' ),
        'all_items'         => __( '會議記錄活動項目' ),
        'parent_item'       => __( '上層記錄' ),
        'parent_item_colon' => __( '上層記錄:' ),
        'edit_item'         => __( '編輯會議記錄' ),
        'update_item'       => __( '更新會議記錄' ),
        'add_new_item'      => __( '新增會議記錄' ),
        'new_item_name'     => __( '新會議記錄' ),
        'menu_name'         => __( '會議記錄' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
    );

    register_taxonomy( 'meeting_minute', 'meeting', $args );
}
add_action( 'init', 'as_meeting_minute', 0 );

function as_meeting_progression() {
    $labels = array(
        'name'              => _x( '會議進度', 'taxonomy general name' ),
        'singular_name'     => _x( '會議進度', 'taxonomy singular name' ),
        'search_items'      => __( '搜尋會議進度' ),
        'all_items'         => __( '會議進度' ),
        'parent_item'       => __( '上層進度' ),
        'parent_item_colon' => __( '上層進度:' ),
        'edit_item'         => __( '編輯會議進度' ),
        'update_item'       => __( '更新會議進度' ),
        'add_new_item'      => __( '新增會議進度' ),
        'new_item_name'     => __( '新會議進度' ),
        'menu_name'         => __( '會議進度' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
    );

    register_taxonomy( 'meeting_progression', 'meeting', $args );
}
add_action( 'init', 'as_meeting_progression', 0 );

?>