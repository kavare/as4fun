<?php

function as_counsel_tag() {
    $labels = array(
        'name'              => _x( '記錄標籤', 'taxonomy general name', 'AfterSchool' ),
        'singular_name'     => _x( '記錄標籤', 'taxonomy singular name', 'AfterSchool' ),
        'search_items'      => __( '搜尋記錄標籤', 'AfterSchool' ),
        'all_items'         => __( '所有記錄標籤', 'AfterSchool' ),
        'parent_item'       => __( '上層項目', 'AfterSchool' ),
        'parent_item_colon' => __( '上層項目:', 'AfterSchool' ),
        'edit_item'         => __( '編輯記錄標籤', 'AfterSchool' ),
        'update_item'       => __( '更新記錄標籤', 'AfterSchool' ),
        'add_new_item'      => __( '新增記錄標籤', 'AfterSchool' ),
        'new_item_name'     => __( '新記錄標籤', 'AfterSchool' ),
        'menu_name'         => __( '記錄標籤', 'AfterSchool' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'show_ui' => true,
        'show_admin_column' => true,
        'rewrite' => array( 'slug' => 'counsel-tag' ),
    );

    register_taxonomy( 'counsel_tag', 'counsel', $args );
}
add_action( 'init', 'as_counsel_tag', 0 );

function as_counsel_columns( $taxonomies ) {
    $taxonomies[] = 'tag';
    return $taxonomies;
}
add_filter( 'manage_taxonomies_for_counsel_columns', 'as_counsel_columns' );

?>