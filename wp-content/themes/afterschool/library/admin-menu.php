<?php

/**
 * [as_edit_admin_menus: edit existing menu item name]
 * @return [void] [description]
 */
function as_edit_admin_menus() {
    global $menu;
    global $submenu;
    global $wp_post_types;

    $menu[5][0] = "部落格及新聞稿";
    $menu[20][0] = "獨立頁面";
    $menu[6][0] = "社區活動";
    $menu['35.1337'][0] = "報名表單";

    $menu[10][0] = "文章圖片";
    $submenu['upload.php'][5][0] = "全部文章圖片";
    $submenu['upload.php'][10][0] = "新增文章圖片";

    $labels = $wp_post_types['tribe_events']->labels;
    $labels->name = "社區活動";
    $labels->add_new = "新增社區活動";
    $labels->add_new_item = "建立新社區活動";
    $labels->new_item = "新社區活動";
    $labels->edit_item = "編輯社區活動";
    $labels->search_items = "搜尋社區活動";
    $labels->not_found = "沒有社區活動";
    $labels->not_found_in_trash = "回收桶中沒有社區活動";
    $labels->all_items = "社區活動";
    $labels->name_admin_bar = "社區活動";
    $labels->menu_name = "社區活動";

    // remove_menu_page( $menu_slug );
    // remove_submenu_page( $menu_slug, $submenu_slug );
}

add_action('admin_menu', 'as_edit_admin_menus');

/**
 * [as_custom_menu_order: change the order of admin menu items]
 * @param  [type]  $menu_ord [original menu order list]
 * @return [array]           [the array for menu order list]
 */
function as_custom_menu_order($menu_ord) {
    if (!$menu_ord) return true;

    return array(
        'index.php', // Dashboard
        'edit.php?post_type=page', // Pages
        'edit.php', // Posts
        'separator1', // First separator
        'edit.php?post_type=volunteer', // Volunteer
        'edit.php?post_type=connection', // Connection
        'edit.php?post_type=tribe_events', // Event
        'edit.php?post_type=meeting', // Meeting
        'edit.php?post_type=counsel', // Counsel
        'edit.php?post_type=donation', // Donation
        'edit.php?post_type=gallery', // Gallery
        'ninja-forms', // Ninja Forms
        'separator2', // Second separator
        'upload.php', // Media
        'link-manager.php', // Links
        'edit-comments.php', // Comments
        'separator-last', // Last separator
        'themes.php', // Appearance
        'plugins.php', // Plugins
        'users.php', // Users
        'tools.php', // Tools
        'options-general.php', // Settings
    );
}
add_filter('custom_menu_order', 'as_custom_menu_order'); // Activate custom_menu_order
add_filter('menu_order', 'as_custom_menu_order');

?>