<?php
if (!function_exists('foundationpress_sidebar_widgets')) :
function foundationpress_sidebar_widgets() {
  register_sidebar(array(
      'id' => 'sidebar-widgets',
      'name' => __('Sidebar widgets', 'FoundationPress'),
      'description' => __('會顯示在頁面側欄的小工具', 'FoundationPress'),
      'before_widget' => '<article id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
      'after_widget' => '</div></article>',
      'before_title' => '<h6>',
      'after_title' => '</h6>'
  ));

  register_sidebar(array(
      'id' => 'footer-widgets',
      'name' => __('Footer widgets', 'FoundationPress'),
      'description' => __('會顯示在頁尾的網站地圖區塊', 'FoundationPress'),
      'before_widget' => '<article id="%1$s" class="large-3 columns widget %2$s">',
      'after_widget' => '</article>',
      'before_title' => '<h6 class="widget-title">',
      'after_title' => '</h6>'
  ));
}

add_action( 'widgets_init', 'foundationpress_sidebar_widgets' );
endif;

?>