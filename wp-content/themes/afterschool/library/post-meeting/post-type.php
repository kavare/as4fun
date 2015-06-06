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

    $supports = array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' );

    $args = array(
        'labels'        => $labels,
        'description'   => '',
        'public'        => true,
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-clipboard',
        'supports'      => $supports,
        'has_archive'   => true,
        'rewrite'       => array( 'slug' => 'meeting'),
    );

    register_post_type( 'meeting', $args );
    // flush_rewrite_rules();
}

add_action( 'init', 'as_set_meeting_post' );

?>