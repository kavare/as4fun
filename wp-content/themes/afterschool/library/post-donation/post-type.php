<?php

function as_set_donation_post() {
    $labels = array(
        'name'               => _x( '捐款明細', 'post type general name', 'AfterSchool' ),
        'singular_name'      => _x( '捐款明細', 'post type singular name', 'AfterSchool' ),
        'add_new'            => _x( '新增捐款明細', 'donations', 'AfterSchool' ),
        'add_new_item'       => __( '建立新捐款明細', 'AfterSchool' ),
        'edit_item'          => __( '編輯捐款明細', 'AfterSchool' ),
        'new_item'           => __( '新捐款明細', 'AfterSchool' ),
        'all_items'          => __( '所有捐款明細', 'AfterSchool' ),
        'view_item'          => __( '檢視捐款明細', 'AfterSchool' ),
        'search_items'       => __( '搜尋捐款明細', 'AfterSchool' ),
        'not_found'          => __( '沒有發現任何捐款明細項目', 'AfterSchool' ),
        'not_found_in_trash' => __( '沒有在垃圾桶中發現任何捐款明細項目', 'AfterSchool' ),
        'parent_item_colon'  => '',
        'menu_name'          => '捐款明細'
    );

    $supports = array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' );

    $args = array(
        'labels'        => $labels,
        'description'   => '',
        'public'        => true,
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-heart',
        'supports'      => $supports,
        'has_archive'   => true,
        'rewrite'       => array( 'slug' => 'donation'),
        // 'taxonomies'    => array( 'post_tag' ),
        'map_meta_cap'  => true,
        'capability_type' => 'donation'
    );

    register_post_type( 'donation', $args );
    // flush_rewrite_rules();
}

add_action( 'init', 'as_set_donation_post' );

?>