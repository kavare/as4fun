<?php
function as_shortcode_home_section($atts, $content = null) {
  $signature = array(
    'id' => 2,
    'side' => 'left',
    'url' => '#',
    'title' => '',
    'cta' => ''
  );
  extract(shortcode_atts($signature, $atts));

  $section =
  '<section id="fp-section-' . $id . '" class="as-section-container fp-' . $side . '">' .
    '<div class="row">' .
      '<div class="small-12 columns" role="main">' .
        '<header class="section-header">' .
          '<h2 class="section-title">' . $title . '</h2>' .
          '<div id="fp-img-' . $id . '" class="section-image"></div>' .
        '</header>' .
        '<div class="section-content">' . $content . '</div>' .
        '<div class="section-action-group">' .
          '<a href="" id="cta-' . $id . '" class="button">' . $cta .'</a>' .
        '</div>' .
      '</div>' .
    '</div>' .
  '</section>';

  return $section;
}

function as_shortcode_community_links($atts, $content = null) {
  $signature = array(
    'url' => '',
    'img' => '',
    'title' => ''
  );
  extract(shortcode_atts($signature, $atts));

  $link =
  '<a href="' . $url . '">' .
    '<img src="' . $img . '" alt="' . $title . '">' .
    '<h3 class="section-title">' . $title . '</h3>' .
    '<div class="section-content">' . $content . '</div>' .
  '</a>';

  var_dump($url);
  var_dump($img);
  die;

  return $link;
}

function as_register_shortcodes(){
   add_shortcode('home-section', 'as_shortcode_home_section');
   add_shortcode('community-link', 'as_shortcode_community_links');
}

add_action('init', 'as_register_shortcodes');
add_filter('the_excerpt', 'do_shortcode');
add_filter('widget_text', 'do_shortcode');
add_filter('comment_text', 'do_shortcode');