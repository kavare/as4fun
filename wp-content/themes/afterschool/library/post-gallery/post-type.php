<?php

function as_set_gallery_post() {
    $labels = array(
        'name'               => _x( '相簿', 'post type general name', 'AfterSchool' ),
        'singular_name'      => _x( '相簿', 'post type singular name', 'AfterSchool' ),
        'add_new'            => __( '新增相簿', 'AfterSchool' ),
        'add_new_item'       => __( '建立新相簿', 'AfterSchool' ),
        'edit_item'          => __( '編輯相簿', 'AfterSchool' ),
        'new_item'           => __( '新相簿', 'AfterSchool' ),
        'all_items'          => __( '所有相簿', 'AfterSchool' ),
        'view_item'          => __( '檢視相簿', 'AfterSchool' ),
        'search_items'       => __( '搜尋相簿', 'AfterSchool' ),
        'not_found'          => __( '沒有發現任何相簿', 'AfterSchool' ),
        'not_found_in_trash' => __( '沒有在垃圾桶中發現任何相簿', 'AfterSchool' ),
        'parent_item_colon'  => '',
        'menu_name'          => '社區相簿'
    );

    $supports = array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' );

    $args = array(
        'labels'        => $labels,
        'description'   => '',
        'public'        => true,
        'menu_position' => 10,
        'menu_icon'     => 'dashicons-camera',
        'supports'      => $supports,
        'has_archive'   => true,
        'rewrite'       => array( 'slug' => 'gallery'),
    );

    register_post_type( 'gallery', $args );
    // flush_rewrite_rules();
}

add_action( 'init', 'as_set_gallery_post' );

?>