<?php

function as_set_counsel_post() {
    $labels = array(
        'name'               => _x( '諮商記錄', 'post type general name', 'AfterSchool' ),
        'singular_name'      => _x( '諮商記錄', 'post type singular name', 'AfterSchool' ),
        'add_new'            => __( '新增諮商記錄', 'AfterSchool' ),
        'add_new_item'       => __( '建立新諮商記錄', 'AfterSchool' ),
        'edit_item'          => __( '編輯諮商記錄', 'AfterSchool' ),
        'new_item'           => __( '新諮商記錄', 'AfterSchool' ),
        'all_items'          => __( '所有諮商記錄', 'AfterSchool' ),
        'view_item'          => __( '檢視諮商記錄', 'AfterSchool' ),
        'search_items'       => __( '搜尋諮商記錄', 'AfterSchool' ),
        'not_found'          => __( '沒有發現任何諮商記錄', 'AfterSchool' ),
        'not_found_in_trash' => __( '沒有在垃圾桶中發現任何諮商記錄', 'AfterSchool' ),
        'parent_item_colon'  => '',
        'menu_name'          => '諮商記錄'
    );

    $supports = array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' );

    $args = array(
        'labels'        => $labels,
        'description'   => '',
        'public'        => true,
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-smiley',
        'supports'      => $supports,
        'has_archive'   => true,
        'rewrite'       => array( 'slug' => 'counsel'),
    );

    register_post_type( 'counsel', $args );
    // flush_rewrite_rules();
}

add_action( 'init', 'as_set_counsel_post' );

?>