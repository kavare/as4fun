<?php

/**
 * [as_edit_admin_menus: edit existing menu item name]
 * @return [void] [description]
 */
function as_edit_admin_menus() {
    global $menu;
    global $submenu;

    $menu[5][0] = "公開文章";
    $menu[20][0] = "公告頁面";

    $menu[10][0] = "相簿";
    $submenu['upload.php'][5][0] = "全部照片";
    $submenu['upload.php'][10][0] = "新增照片";


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
        'edit.php?post_type=activity', // Acticity
        'edit.php?post_type=meeting', // Meeting
        'edit.php?post_type=donation', // Donation
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