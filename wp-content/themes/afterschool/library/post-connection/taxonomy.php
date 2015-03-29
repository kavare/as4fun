<?php

function as_connection_target() {
    $labels = array(
        'name'              => _x( '活動對象', 'taxonomy general name', 'AfterSchool' ),
        'singular_name'     => _x( '活動對象', 'taxonomy singular name', 'AfterSchool' ),
        'search_items'      => __( '搜尋活動對象', 'AfterSchool' ),
        'all_items'         => __( '所有活動對象', 'AfterSchool' ),
        'parent_item'       => __( '上層項目', 'AfterSchool' ),
        'parent_item_colon' => __( '上層項目:', 'AfterSchool' ),
        'edit_item'         => __( '編輯活動對象', 'AfterSchool' ),
        'update_item'       => __( '更新活動對象', 'AfterSchool' ),
        'add_new_item'      => __( '新增活動對象', 'AfterSchool' ),
        'new_item_name'     => __( '新活動對象', 'AfterSchool' ),
        'menu_name'         => __( '活動對象', 'AfterSchool' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'rewrite' => array( 'slug' => 'connection-target' ),
    );

    register_taxonomy( 'connection_target', 'connection', $args );
}
add_action( 'init', 'as_connection_target', 0 );

function as_connection_columns( $taxonomies ) {
    $taxonomies[] = 'target';
    return $taxonomies;
}
add_filter( 'manage_taxonomies_for_connection_columns', 'as_connection_columns' );

?>