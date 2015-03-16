<?php 

function as_set_partner_post() {
    $labels = array(
        'name'               => _x( '夥伴', 'post type general name' ),
        'singular_name'      => _x( '夥伴', 'post type singular name' ),
        'add_new'            => _x( '新增夥伴', 'partners' ),
        'add_new_item'       => __( '建立新夥伴' ),
        'edit_item'          => __( '編輯夥伴' ),
        'new_item'           => __( '新夥伴' ),
        'all_items'          => __( '所有夥伴' ),
        'view_item'          => __( '檢視夥伴' ),
        'search_items'       => __( '搜尋夥伴' ),
        'not_found'          => __( '沒有發現任何夥伴' ),
        'not_found_in_trash' => __( '沒有在垃圾桶中發現任何夥伴' ), 
        'parent_item_colon'  => '',
        'menu_name'          => '加入我們'
    );

    $args = array(
        'labels'        => $labels,
        'description'   => '',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => true,
    );

    register_post_type( 'partner', $args ); 
}

add_action( 'init', 'as_set_partner_post' );

function as_new_partner_columns($partner_columns) {
    $new_columns['cb'] = '<input type="checkbox" />';             
    $new_columns['title'] = __('Title');    
    $new_columns['author'] = __('Author');     
    $new_columns['categories'] = __('Categories');
    $new_columns['tags'] = __('Tags');    
    $new_columns['comments'] = __('Commentss');    
    $new_columns['date'] = __('Date');
 
    return $new_columns;
}
add_filter('manage_edit-partner_columns', 'as_new_partner_columns');

function as_partner_members() {
    $labels = array(
        'name'              => _x( '會員', 'taxonomy general name' ),
        'singular_name'     => _x( '會員', 'taxonomy singular name' ),
        'search_items'      => __( '搜尋會員' ),
        'all_items'         => __( '所有會員' ),
        'parent_item'       => __( '上層項目' ),
        'parent_item_colon' => __( '上層項目:' ),
        'edit_item'         => __( '編輯會員' ), 
        'update_item'       => __( '更新會員' ),
        'add_new_item'      => __( '新增會員' ),
        'new_item_name'     => __( '新會員' ),
        'menu_name'         => __( '會員' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
    );

    register_taxonomy( 'partner_members', 'partner', $args );
}
add_action( 'init', 'as_partner_members', 0 );

function as_partner_volunteers() {
    $labels = array(
        'name'              => _x( '志工', 'taxonomy general name' ),
        'singular_name'     => _x( '志工', 'taxonomy singular name' ),
        'search_items'      => __( '搜尋志工' ),
        'all_items'         => __( '所有志工' ),
        'parent_item'       => __( '上層項目' ),
        'parent_item_colon' => __( '上層項目:' ),
        'edit_item'         => __( '編輯志工' ), 
        'update_item'       => __( '更新志工' ),
        'add_new_item'      => __( '新增志工' ),
        'new_item_name'     => __( '新志工' ),
        'menu_name'         => __( '志工' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
    );
    
    register_taxonomy( 'partner_volunteers', 'partner', $args );
}
add_action( 'init', 'as_partner_volunteers', 0 );

?>