<?php

function as_set_connection_post() {
    $labels = array(
        'name'               => _x( '社區連結', 'post type general name', 'AfterSchool' ),
        'singular_name'      => _x( '社區連結', 'post type singular name', 'AfterSchool' ),
        'add_new'            => __( '新增社區連結', 'AfterSchool' ),
        'add_new_item'       => __( '建立新社區連結', 'AfterSchool' ),
        'edit_item'          => __( '編輯連結', 'AfterSchool' ),
        'new_item'           => __( '新社區連結', 'AfterSchool' ),
        'all_items'          => __( '所有連結', 'AfterSchool' ),
        'view_item'          => __( '檢視連結', 'AfterSchool' ),
        'search_items'       => __( '搜尋連結', 'AfterSchool' ),
        'not_found'          => __( '沒有發現任何社區連結', 'AfterSchool' ),
        'not_found_in_trash' => __( '沒有在垃圾桶中發現任何社區連結', 'AfterSchool' ),
        'parent_item_colon'  => '',
        'menu_name'          => '社區連結'
    );

    $supports = array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' );

    $args = array(
        'labels'        => $labels,
        'description'   => '',
        'public'        => true,
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-admin-home',
        'supports'      => $supports,
        'has_archive'   => true,
        'rewrite'       => array( 'slug' => 'connection' ),
        'taxonomies'    => array( 'post_tag' ),
    );

    register_post_type( 'connection', $args );
    // flush_rewrite_rules();
}

add_action( 'init', 'as_set_connection_post' );

?>