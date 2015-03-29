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

    $args = array(
        'labels'        => $labels,
        'description'   => '',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => true,
    );

    register_post_type( 'activity', $args );
    // flush_rewrite_rules();
}

add_action( 'init', 'as_set_activity_post' );

function as_new_activity_columns($activity_columns) {
    $new_columns['cb'] = '<input type="checkbox" />';
    $new_columns['title'] = __('Title');
    $new_columns['author'] = __('Author');
    $new_columns['categories'] = __('Categories');
    $new_columns['tags'] = __('Tags');
    $new_columns['comments'] = __('Comments');
    $new_columns['date'] = __('Date');

    return $new_columns;
}
add_filter('manage_edit-activity_columns', 'as_new_activity_columns');

function as_activity_counseling() {
    $labels = array(
        'name'              => _x( '諮商', 'taxonomy general name' ),
        'singular_name'     => _x( '諮商', 'taxonomy singular name' ),
        'search_items'      => __( '搜尋諮商項目' ),
        'all_items'         => __( '諮商項目' ),
        'parent_item'       => __( '上層項目' ),
        'parent_item_colon' => __( '上層項目:' ),
        'edit_item'         => __( '編輯諮商項目' ),
        'update_item'       => __( '更新諮商項目' ),
        'add_new_item'      => __( '新增諮商項目' ),
        'new_item_name'     => __( '新諮商項目' ),
        'menu_name'         => __( '諮商' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
    );

    register_taxonomy( 'activity_counseling', 'activity', $args );
}
add_action( 'init', 'as_activity_counseling', 0 );

function as_activity_talk() {
    $labels = array(
        'name'              => _x( '講座', 'taxonomy general name' ),
        'singular_name'     => _x( '講座', 'taxonomy singular name' ),
        'search_items'      => __( '搜尋講座' ),
        'all_items'         => __( '講座項目' ),
        'parent_item'       => __( '上層項目' ),
        'parent_item_colon' => __( '上層項目:' ),
        'edit_item'         => __( '編輯講座' ),
        'update_item'       => __( '更新講座' ),
        'add_new_item'      => __( '新增講座' ),
        'new_item_name'     => __( '新講座' ),
        'menu_name'         => __( '講座' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
    );

    register_taxonomy( 'activity_talk', 'activity', $args );
}
add_action( 'init', 'as_activity_talk', 0 );

function as_activity_campaign() {
    $labels = array(
        'name'              => _x( '活動', 'taxonomy general name' ),
        'singular_name'     => _x( '活動', 'taxonomy singular name' ),
        'search_items'      => __( '搜尋活動' ),
        'all_items'         => __( '活動項目' ),
        'parent_item'       => __( '上層項目' ),
        'parent_item_colon' => __( '上層項目:' ),
        'edit_item'         => __( '編輯活動項目' ),
        'update_item'       => __( '更新活動項目' ),
        'add_new_item'      => __( '新增活動項目' ),
        'new_item_name'     => __( '新活動項目' ),
        'menu_name'         => __( '活動' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
    );

    register_taxonomy( 'activity_campaign', 'activity', $args );
}
add_action( 'init', 'as_activity_campaign', 0 );

?>