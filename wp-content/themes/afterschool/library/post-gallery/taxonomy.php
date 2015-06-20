<?php

function as_gallery_tag() {
    $labels = array(
        'name'              => _x( '相簿標籤', 'taxonomy general name', 'AfterSchool' ),
        'singular_name'     => _x( '相簿標籤', 'taxonomy singular name', 'AfterSchool' ),
        'search_items'      => __( '搜尋相簿標籤', 'AfterSchool' ),
        'all_items'         => __( '所有相簿標籤', 'AfterSchool' ),
        'parent_item'       => __( '上層項目', 'AfterSchool' ),
        'parent_item_colon' => __( '上層項目:', 'AfterSchool' ),
        'edit_item'         => __( '編輯相簿標籤', 'AfterSchool' ),
        'update_item'       => __( '更新相簿標籤', 'AfterSchool' ),
        'add_new_item'      => __( '新增相簿標籤', 'AfterSchool' ),
        'new_item_name'     => __( '新相簿標籤', 'AfterSchool' ),
        'menu_name'         => __( '相簿標籤', 'AfterSchool' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'show_ui' => true,
        'show_admin_column' => true,
        'rewrite' => array( 'slug' => 'gallery-tag' ),
    );

    register_taxonomy( 'gallery_tag', 'gallery', $args );
}
add_action( 'init', 'as_gallery_tag', 0 );

function as_gallery_columns( $taxonomies ) {
    $taxonomies[] = 'tag';
    return $taxonomies;
}
add_filter( 'manage_taxonomies_for_gallery_columns', 'as_gallery_columns' );

?>