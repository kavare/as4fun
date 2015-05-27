<?php

function as_set_activity_post() {
    $labels = array(
        'name'               => _x( '活動', 'post type general name', 'AfterSchool' ),
        'singular_name'      => _x( '活動', 'post type singular name', 'AfterSchool' ),
        'add_new'            => __( '新增活動', 'AfterSchool' ),
        'add_new_item'       => __( '建立新活動', 'AfterSchool' ),
        'edit_item'          => __( '編輯活動', 'AfterSchool' ),
        'new_item'           => __( '新活動', 'AfterSchool' ),
        'all_items'          => __( '所有活動', 'AfterSchool' ),
        'view_item'          => __( '檢視活動', 'AfterSchool' ),
        'search_items'       => __( '搜尋活動', 'AfterSchool' ),
        'not_found'          => __( '沒有發現任何活動', 'AfterSchool' ),
        'not_found_in_trash' => __( '沒有在垃圾桶中發現任何活動', 'AfterSchool' ),
        'parent_item_colon'  => '',
        'menu_name'          => '社區活動'
    );

    $supports = array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' );

    $args = array(
        'labels'        => $labels,
        'description'   => '',
        'public'        => true,
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-megaphone',
        'supports'      => $supports,
        'has_archive'   => true,
        'rewrite'       => array( 'slug' => 'activity'),
        'taxonomies'    => array( 'post_tag' ),
    );

    register_post_type( 'activity', $args );
    // flush_rewrite_rules();
}

add_action( 'init', 'as_set_activity_post' );

?>