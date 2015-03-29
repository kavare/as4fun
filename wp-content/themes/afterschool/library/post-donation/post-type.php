<?php

function as_set_donation_post() {
    $labels = array(
        'name'               => _x( '捐款', 'post type general name' ),
        'singular_name'      => _x( '捐款', 'post type singular name' ),
        'add_new'            => _x( '新增捐款', 'donations' ),
        'add_new_item'       => __( '建立新捐款' ),
        'edit_item'          => __( '編輯捐款' ),
        'new_item'           => __( '新捐款' ),
        'all_items'          => __( '所有捐款' ),
        'view_item'          => __( '檢視捐款' ),
        'search_items'       => __( '搜尋捐款' ),
        'not_found'          => __( '沒有發現任何捐款項目' ),
        'not_found_in_trash' => __( '沒有在垃圾桶中發現任何捐款項目' ),
        'parent_item_colon'  => '',
        'menu_name'          => '捐款'
    );

    $args = array(
        'labels'        => $labels,
        'description'   => '',
        'public'        => true,
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-heart',
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => true,
        'rewrite'       => array( 'slug' => 'donation'),
    );

    register_post_type( 'donation', $args );
    // flush_rewrite_rules();
}

add_action( 'init', 'as_set_donation_post' );

?>