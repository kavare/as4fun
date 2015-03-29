<?php

/**
 * [as_new_meeting_columns: adding new columns in admin panel]
 * @param  [array] $columns [the original columns array]
 * @return [array]          [new ordered array]
 */
function as_new_meeting_columns($columns) {
    $columns['author'] = __('author');
    return $columns;
}
add_filter('manage_edit-meeting_columns', 'as_new_meeting_columns');


?>