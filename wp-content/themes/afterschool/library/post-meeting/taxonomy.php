<?php

function as_meeting_stage() {
    $labels = array(
        'name'              => _x( '會議進程', 'taxonomy general name', 'AfterSchool' ),
        'singular_name'     => _x( '會議進程', 'taxonomy singular name', 'AfterSchool' ),
        'search_items'      => __( '搜尋會議進程', 'AfterSchool' ),
        'all_items'         => __( '所有會議進程', 'AfterSchool' ),
        'parent_item'       => __( '上層項目', 'AfterSchool' ),
        'parent_item_colon' => __( '上層項目:', 'AfterSchool' ),
        'edit_item'         => __( '編輯會議進程', 'AfterSchool' ),
        'update_item'       => __( '更新會議進程', 'AfterSchool' ),
        'add_new_item'      => __( '新增會議進程', 'AfterSchool' ),
        'new_item_name'     => __( '新會議進程', 'AfterSchool' ),
        'menu_name'         => __( '會議進程', 'AfterSchool' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'rewrite' => array( 'slug' => 'meeting-stage' ),
    );

    register_taxonomy( 'meeting_stage', 'meeting', $args );
}
add_action( 'init', 'as_meeting_stage', 0 );

function as_meeting_columns( $taxonomies ) {
    $taxonomies[] = 'stage';
    return $taxonomies;
}
add_filter( 'manage_taxonomies_for_meeting_columns', 'as_meeting_columns' );

?>