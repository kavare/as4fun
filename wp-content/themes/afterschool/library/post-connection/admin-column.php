<?php

/**
 * [as_new_connection_columns: adding new columns in admin panel]
 * @param  [array] $columns [the original columns array]
 * @return [array]          [new ordered array]
 */
function as_new_connection_columns($columns) {
    $columns['author'] = __('author');
    return $columns;
}
add_filter('manage_edit-connection_columns', 'as_new_connection_columns');


/**
 * [as_connection_table_content: print meta data to new columns]
 * @param  [string] $column_name [the name of the added column]
 * @param  [int]    $post_id     [the post id from hook]
 * @return [void]                []
 */
function as_connection_table_content($column_name, $post_id) {
    switch ($column_name) {
        case 'name':
            $connection_name = get_post_meta( $post_id, 'as_post_class', true);
            echo $connection_name;
            break;

        default:
            break;
    }
}
add_action( 'manage_connection_posts_custom_column', 'as_connection_table_content', 10, 2 );

/**
 * [as_connection_table_sorting]
 * @param  [array] $columns [original columns]
 * @return [array] $columns [columns with sorting ability]
 */
function as_connection_table_sorting($columns) {
  $columns['name'] = 'as_post_class';
  return $columns;
}
add_filter( 'manage_edit-connection_sortable_columns', 'as_connection_table_sorting' );

/**
 * [as_connection_name_column_orderby]
 * @param  [array] $vars [original list]
 * @return [array] $vars [list sorting by selected meta key]
 */
function as_connection_name_column_orderby( $vars ) {
    if ( isset( $vars['orderby'] ) && 'as_post_class' == $vars['orderby'] ) {
        $vars = array_merge( $vars, array(
            'meta_key' => 'as_post_class',
            'orderby' => 'meta_value'
        ) );
    }

    return $vars;
}
add_filter( 'request', 'as_connection_name_column_orderby' );

?>