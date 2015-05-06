<?php

function as_volunteer_record() {
    $labels = array(
        'name'              => _x( '志工記錄', 'taxonomy general name', 'AfterSchool' ),
        'singular_name'     => _x( '志工記錄', 'taxonomy singular name', 'AfterSchool' ),
        'search_items'      => __( '搜尋志工記錄', 'AfterSchool' ),
        'all_items'         => __( '所有志工記錄', 'AfterSchool' ),
        'parent_item'       => __( '上層項目', 'AfterSchool' ),
        'parent_item_colon' => __( '上層項目:', 'AfterSchool' ),
        'edit_item'         => __( '編輯志工記錄', 'AfterSchool' ),
        'update_item'       => __( '更新志工記錄', 'AfterSchool' ),
        'add_new_item'      => __( '新增志工記錄', 'AfterSchool' ),
        'new_item_name'     => __( '新記錄類型', 'AfterSchool' ),
        'menu_name'         => __( '記錄類型', 'AfterSchool' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'rewrite' => array( 'slug' => 'volunteer-record' ),
    );

    register_taxonomy( 'volunteer_record', 'volunteer', $args );
}
add_action( 'init', 'as_volunteer_record', 0 );

function as_volunteer_tag() {
    $labels = array(
        'name'              => _x( '故事標籤', 'taxonomy general name', 'AfterSchool' ),
        'singular_name'     => _x( '故事標籤', 'taxonomy singular name', 'AfterSchool' ),
        'search_items'      => __( '搜尋故事標籤', 'AfterSchool' ),
        'all_items'         => __( '所有故事標籤', 'AfterSchool' ),
        'parent_item'       => __( '上層項目', 'AfterSchool' ),
        'parent_item_colon' => __( '上層項目:', 'AfterSchool' ),
        'edit_item'         => __( '編輯故事標籤', 'AfterSchool' ),
        'update_item'       => __( '更新故事標籤', 'AfterSchool' ),
        'add_new_item'      => __( '新增故事標籤', 'AfterSchool' ),
        'new_item_name'     => __( '新故事標籤', 'AfterSchool' ),
        'menu_name'         => __( '故事標籤', 'AfterSchool' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'show_ui' => true,
        'show_admin_column' => true,
        'rewrite' => array( 'slug' => 'volunteer-tag' ),
    );

    register_taxonomy( 'volunteer_tag', 'volunteer', $args );
}
add_action( 'init', 'as_volunteer_tag', 0 );

?>