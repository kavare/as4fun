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
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => true,
    );

    register_post_type( 'donation', $args );
    // flush_rewrite_rules();
}

add_action( 'init', 'as_set_donation_post' );

function as_new_donation_columns($donation_columns) {
    $new_columns['cb'] = '<input type="checkbox" />';
    $new_columns['title'] = __('Title');
    $new_columns['author'] = __('Author');
    $new_columns['categories'] = __('Categories');
    $new_columns['tags'] = __('Tags');
    $new_columns['comments'] = __('Comments');
    $new_columns['date'] = __('Date');

    return $new_columns;
}
add_filter('manage_edit-donation_columns', 'as_new_donation_columns');

function as_donation_campaign() {
    $labels = array(
        'name'              => _x( '捐款活動', 'taxonomy general name' ),
        'singular_name'     => _x( '捐款活動', 'taxonomy singular name' ),
        'search_items'      => __( '搜尋捐款活動' ),
        'all_items'         => __( '所有捐款活動' ),
        'parent_item'       => __( '上層項目' ),
        'parent_item_colon' => __( '上層項目:' ),
        'edit_item'         => __( '編輯捐款活動' ),
        'update_item'       => __( '更新捐款活動' ),
        'add_new_item'      => __( '新增捐款活動' ),
        'new_item_name'     => __( '新捐款活動' ),
        'menu_name'         => __( '捐款活動' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
    );

    register_taxonomy( 'donation_campaign', 'donation', $args );
}
add_action( 'init', 'as_donation_campaign', 0 );

function as_donation_statement() {
    $labels = array(
        'name'              => _x( '捐款明細', 'taxonomy general name' ),
        'singular_name'     => _x( '捐款明細', 'taxonomy singular name' ),
        'search_items'      => __( '搜尋捐款明細' ),
        'all_items'         => __( '捐款活動明細' ),
        'parent_item'       => __( '上層項目' ),
        'parent_item_colon' => __( '上層項目:' ),
        'edit_item'         => __( '編輯捐款明細' ),
        'update_item'       => __( '更新捐款明細' ),
        'add_new_item'      => __( '新增捐款明細' ),
        'new_item_name'     => __( '新捐款明細' ),
        'menu_name'         => __( '捐款明細' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
    );

    register_taxonomy( 'donation_statement', 'donation', $args );
}
add_action( 'init', 'as_donation_statement', 0 );

?>