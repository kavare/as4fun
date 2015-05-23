<?php

function as_donation_type() {
    $labels = array(
        'name'              => _x( '捐款類別', 'taxonomy general name', 'AfterSchool' ),
        'singular_name'     => _x( '捐款類別', 'taxonomy singular name', 'AfterSchool' ),
        'search_items'      => __( '搜尋捐款類別', 'AfterSchool' ),
        'all_items'         => __( '所有捐款類別', 'AfterSchool' ),
        'parent_item'       => __( '上層項目', 'AfterSchool' ),
        'parent_item_colon' => __( '上層項目:', 'AfterSchool' ),
        'edit_item'         => __( '編輯捐款類別', 'AfterSchool' ),
        'update_item'       => __( '更新捐款類別', 'AfterSchool' ),
        'add_new_item'      => __( '新增捐款類別', 'AfterSchool' ),
        'new_item_name'     => __( '新捐款類別', 'AfterSchool' ),
        'menu_name'         => __( '捐款類別', 'AfterSchool' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'rewrite' => array( 'slug' => 'donation-type' ),
    );

    register_taxonomy( 'donation_type', 'donation', $args );
}
add_action( 'init', 'as_donation_type', 0 );

function as_donation_columns( $taxonomies ) {
    $taxonomies[] = 'type';
    return $taxonomies;
}
add_filter( 'manage_taxonomies_for_donation_columns', 'as_donation_columns' );

?>