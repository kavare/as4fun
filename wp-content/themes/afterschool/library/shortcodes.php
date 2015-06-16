<?php
/**
 * [as_shortcode_home_section generate front-page sections]
 * @param  [array]  $atts    [attributes from shortcodes]
 * @param  [string] $content [content inside shortcode tags]
 * @return [string]          [html tags that will be printed on the page]
 */
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

/**
 * [as_shortcode_community_link generate links cards for community-list page]
 * @param  [array]  $atts    [attributes from shortcodes]
 * @param  [string] $content [content inside shortcode tags]
 * @return [string]          [html tags that will be printed on the page]
 */
function as_shortcode_community_link($atts, $content = null) {
  $signature = array(
    'title' => '',
    'url' => '',
    'src' => '',
  );
  extract(shortcode_atts($signature, $atts));

  $link =
  '<article class="small-12 large-6 columns end">' .
    '<a class="brick-item clearfix" href="' . $url . '">' .
      '<div class="brick-image-container">' .
        '<img class="brick-image" src="' . $src . '" alt="' . $title . '">' .
      '</div>' .
      '<div class="brick-content">' .
        '<h2 class="brick-title">' . $title . '</h2>' .
        '<p class="brick-text">' . $content . '</p>' .
      '</div>' .
    '</a>' .
  '</article>';

  return $link;
}

/**
 * [as_shortcode_contact_card generate links cards for community-list page]
 * @param  [array]  $atts    [attributes from shortcodes]
 * @param  [string] $content [content inside shortcode tags]
 * @return [string]          [html tags that will be printed on the page]
 */
function as_shortcode_contact_card($atts, $content = null) {
  $signature = array(
    'title' => '',
    'address1' => '',
    'address2' => '',
    'note' => '',
    'img' => '',
    'round' => false,
    'icon1' => false,
    'icon2' => false,
    'icon3' => false,
  );
  extract(shortcode_atts($signature, $atts));

  $img = get_template_directory_uri() . '/assets/img/' . $img;
  $shape = ($round) ? 'round' : 'square';

  $link =
  '<div class="small-12 columns">' .
    '<div class="brick-item clearfix">' .
      '<div class="brick-image-container">' .
        '<img class="brick-image ' . $shape . '" src="' . $img . '" alt="' . $title . '">' .
      '</div>' .
      '<div class="brick-content">' .
        '<h3 class="brick-title">' . $title . '</h3>' .
        '<p class="brick-text"><i class="fa fa-fw fa-' . $icon1 . '"></i>' . $address1 . '</p>' .
        '<p class="brick-text"><i class="fa fa-fw fa-' . $icon2 . '"></i>' . $address2 . '</p>' .
        '<p class="brick-text"><i class="fa fa-fw fa-' . $icon3 . '"></i>' . $note . '</p>' .
      '</div>' .
    '</div>' .
  '</div>';

  return $link;
}


/**
 * [Afterschool shortcodes registration list]
 */
function as_register_shortcodes(){
   add_shortcode('home-section', 'as_shortcode_home_section');
   add_shortcode('community-link', 'as_shortcode_community_link');
   add_shortcode('contact-card', 'as_shortcode_contact_card');
}

add_action('init', 'as_register_shortcodes');

/**
 * [Afterschool shortcodes supporting area]
 * @support [the_content, the_excerpt, widget, comments]
 */
add_filter('the_excerpt', 'do_shortcode');
add_filter('widget_text', 'do_shortcode');
add_filter('comment_text', 'do_shortcode');