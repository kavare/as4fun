<?php 

function as_set_mission_post() {
    $labels = array(
        'name'               => _x( '任務', 'post type general name' ),
        'singular_name'      => _x( '任務', 'post type singular name' ),
        'add_new'            => _x( '新增任務', 'missions' ),
        'add_new_item'       => __( '建立新任務' ),
        'edit_item'          => __( '編輯任務' ),
        'new_item'           => __( '新任務' ),
        'all_items'          => __( '所有任務' ),
        'view_item'          => __( '檢視任務' ),
        'search_items'       => __( '搜尋任務' ),
        'not_found'          => __( '沒有發現任何任務' ),
        'not_found_in_trash' => __( '沒有在垃圾桶中發現任何任務' ), 
        'parent_item_colon'  => '',
        'menu_name'          => '社區任務'
    );

    $args = array(
        'labels'        => $labels,
        'description'   => '',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => true,
    );

    register_post_type( 'mission', $args ); 
}

add_action( 'init', 'as_set_mission_post' );

function as_new_mission_columns($mission_columns) {
    $new_columns['cb'] = '<input type="checkbox" />';             
    $new_columns['title'] = __('Title');    
    $new_columns['author'] = __('Author');     
    $new_columns['categories'] = __('Categories');
    $new_columns['tags'] = __('Tags');    
    $new_columns['comments'] = __('Commentss');    
    $new_columns['date'] = __('Date');
 
    return $new_columns;
}
add_filter('manage_edit-mission_columns', 'as_new_mission_columns');

function as_mission_children() {
    $labels = array(
        'name'              => _x( '放學窩小學部', 'taxonomy general name' ),
        'singular_name'     => _x( '放學窩小學部', 'taxonomy singular name' ),
        'search_items'      => __( '搜尋放學窩小學部' ),
        'all_items'         => __( '放學窩小學部活動項目' ),
        'parent_item'       => __( '上層活動項目' ),
        'parent_item_colon' => __( '上層活動項目:' ),
        'edit_item'         => __( '編輯放學窩小學部活動項目' ), 
        'update_item'       => __( '更新放學窩小學部活動項目' ),
        'add_new_item'      => __( '新增放學窩小學部活動項目' ),
        'new_item_name'     => __( '放學窩小學部新活動項目' ),
        'menu_name'         => __( '放學窩小學部' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
    );

    register_taxonomy( 'mission_children', 'mission', $args );
}
add_action( 'init', 'as_mission_children', 0 );

function as_mission_teens() {
    $labels = array(
        'name'              => _x( '放學窩國高部', 'taxonomy general name' ),
        'singular_name'     => _x( '放學窩國高部', 'taxonomy singular name' ),
        'search_items'      => __( '搜尋放學窩國高部' ),
        'all_items'         => __( '放學窩國高部活動項目' ),
        'parent_item'       => __( '上層活動項目' ),
        'parent_item_colon' => __( '上層活動項目:' ),
        'edit_item'         => __( '編輯放學窩國高部活動項目' ), 
        'update_item'       => __( '更新放學窩國高部活動項目' ),
        'add_new_item'      => __( '新增放學窩國高部活動項目' ),
        'new_item_name'     => __( '放學窩國高部新活動項目' ),
        'menu_name'         => __( '放學窩國高部' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
    );
    
    register_taxonomy( 'mission_teens', 'mission', $args );
}
add_action( 'init', 'as_mission_teens', 0 );

function as_mission_elderly() {
    $labels = array(
        'name'              => _x( '銀髮族', 'taxonomy general name' ),
        'singular_name'     => _x( '銀髮族', 'taxonomy singular name' ),
        'search_items'      => __( '搜尋銀髮族' ),
        'all_items'         => __( '銀髮族活動項目' ),
        'parent_item'       => __( '上層活動項目' ),
        'parent_item_colon' => __( '上層活動項目:' ),
        'edit_item'         => __( '編輯銀髮族活動項目' ), 
        'update_item'       => __( '更新銀髮族活動項目' ),
        'add_new_item'      => __( '新增銀髮族活動項目' ),
        'new_item_name'     => __( '銀髮族新活動項目' ),
        'menu_name'         => __( '銀髮族' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
    );
    
    register_taxonomy( 'mission_elderly', 'mission', $args );
}
add_action( 'init', 'as_mission_elderly', 0 );

?>