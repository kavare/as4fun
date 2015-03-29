<?php

function as_set_connection_post() {
    $labels = array(
        'name'               => _x( '窩友活動', 'post type general name', 'AfterSchool' ),
        'singular_name'      => _x( '窩友活動', 'post type singular name', 'AfterSchool' ),
        'add_new'            => __( '新增窩友活動', 'AfterSchool' ),
        'add_new_item'       => __( '建立新窩友活動', 'AfterSchool' ),
        'edit_item'          => __( '編輯活動', 'AfterSchool' ),
        'new_item'           => __( '新窩友活動', 'AfterSchool' ),
        'all_items'          => __( '所有活動', 'AfterSchool' ),
        'view_item'          => __( '檢視活動', 'AfterSchool' ),
        'search_items'       => __( '搜尋活動', 'AfterSchool' ),
        'not_found'          => __( '沒有發現任何窩友活動', 'AfterSchool' ),
        'not_found_in_trash' => __( '沒有在垃圾桶中發現任何窩友活動', 'AfterSchool' ),
        'parent_item_colon'  => '',
        'menu_name'          => '窩友活動'
    );

    $args = array(
        'labels'        => $labels,
        'description'   => '',
        'public'        => true,
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-admin-home',
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => true,
    );

    register_post_type( 'connection', $args );
    // flush_rewrite_rules();
}

add_action( 'init', 'as_set_connection_post' );

function as_new_connection_columns($connection_columns) {
    $new_columns['cb'] = '<input type="checkbox" />';
    $new_columns['title'] = __('Title');
    $new_columns['author'] = __('Author');
    $new_columns['categories'] = __('Categories');
    $new_columns['tags'] = __('Tags');
    $new_columns['comments'] = __('Comments');
    $new_columns['date'] = __('Date');

    return $new_columns;
}
add_filter('manage_edit-connection_columns', 'as_new_connection_columns');



?>