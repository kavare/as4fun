<?php

function as_meeting_stage() {
    $labels = array(
        'name'              => _x( '會議進程', 'taxonomy general name', 'AfterSchool' ),
        'singular_name'     => _x( '會議進程', 'taxonomy singular name', 'AfterSchool' ),
        'search_items'      => __( '搜尋會議進程', 'AfterSchool' ),
        'all_items'         => __( '所有會議進程', 'AfterSchool' ),
        'parent_item'       => __( '上層項目', 'AfterSchool' ),
        'parent_item_colon' => __( '上層項目:', 'AfterSchool' ),
        'edit_item'         => __( '編輯會議進程', 'AfterSchool' ),
        'update_item'       => __( '更新會議進程', 'AfterSchool' ),
        'add_new_item'      => __( '新增會議進程', 'AfterSchool' ),
        'new_item_name'     => __( '新會議進程', 'AfterSchool' ),
        'menu_name'         => __( '會議進程', 'AfterSchool' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'rewrite' => array( 'slug' => 'meeting-stage' ),
    );

    register_taxonomy( 'meeting_stage', 'meeting', $args );
}
add_action( 'init', 'as_meeting_stage', 0 );

function as_meeting_tag() {
    $labels = array(
        'name'              => _x( '會議標籤', 'taxonomy general name', 'AfterSchool' ),
        'singular_name'     => _x( '會議標籤', 'taxonomy singular name', 'AfterSchool' ),
        'search_items'      => __( '搜尋會議標籤', 'AfterSchool' ),
        'all_items'         => __( '所有會議標籤', 'AfterSchool' ),
        'parent_item'       => __( '上層項目', 'AfterSchool' ),
        'parent_item_colon' => __( '上層項目:', 'AfterSchool' ),
        'edit_item'         => __( '編輯會議標籤', 'AfterSchool' ),
        'update_item'       => __( '更新會議標籤', 'AfterSchool' ),
        'add_new_item'      => __( '新增會議標籤', 'AfterSchool' ),
        'new_item_name'     => __( '新會議標籤', 'AfterSchool' ),
        'menu_name'         => __( '會議標籤', 'AfterSchool' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'show_ui' => true,
        'show_admin_column' => true,
        'rewrite' => array( 'slug' => 'meeting-tag' ),
    );

    register_taxonomy( 'meeting_tag', 'meeting', $args );
}
add_action( 'init', 'as_meeting_tag', 0 );

?>