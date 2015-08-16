<?php

/**
 * [as_new_donation_columns: adding new columns in admin panel]
 * @param  [array] $columns [the original columns array]
 * @return [array]          [new ordered array]
 */
function as_new_donation_columns($columns) {
    $new_columns = array();
    foreach($columns as $key => $title) :
      if ($key == 'comments'):
        $new_columns['author'] = __('Author');
        $new_columns['receipt'] = __('捐款明細', 'AfterSchool' );
      endif;

      $new_columns[$key] = $title;
    endforeach;

    return $new_columns;
}
add_filter('manage_donation_posts_columns', 'as_new_donation_columns', 10);

/**
 * [as_donation_columns_content: show receipt download link]
 * @param  [type] $column_name [the target receipt column]
 * @param  [type] $post_ID     [the post ID]
 */
function as_donation_columns_content($column_name, $post_ID) {
    if ($column_name == 'receipt') {
        $file = get_post_meta($post_ID, 'as_donation_file', true);
        if ($file) {
            $link =
              '<a href="' . $file['url'] . '">' . basename($file['file']) . '</a>';
            echo $link;
        }
    }
}
add_action('manage_donation_posts_custom_column', 'as_donation_columns_content', 10, 2);

?>
