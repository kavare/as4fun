<?php

function as_activity_type() {
    $labels = array(
        'name'              => _x( '活動類型', 'taxonomy general name', 'AfterSchool' ),
        'singular_name'     => _x( '活動類型', 'taxonomy singular name', 'AfterSchool' ),
        'search_items'      => __( '搜尋活動類型', 'AfterSchool' ),
        'all_items'         => __( '所有活動類型', 'AfterSchool' ),
        'parent_item'       => __( '上層項目', 'AfterSchool' ),
        'parent_item_colon' => __( '上層項目:', 'AfterSchool' ),
        'edit_item'         => __( '編輯活動類型', 'AfterSchool' ),
        'update_item'       => __( '更新活動類型', 'AfterSchool' ),
        'add_new_item'      => __( '新增活動類型', 'AfterSchool' ),
        'new_item_name'     => __( '新活動類型', 'AfterSchool' ),
        'menu_name'         => __( '活動類型', 'AfterSchool' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'rewrite' => array( 'slug' => 'activity-type' ),
    );

    register_taxonomy( 'activity_type', 'activity', $args );
}
add_action( 'init', 'as_activity_type', 0 );

function as_activity_columns( $taxonomies ) {
    $taxonomies[] = 'type';
    return $taxonomies;
}
add_filter( 'manage_taxonomies_for_activity_columns', 'as_activity_columns' );

?>