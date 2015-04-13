<?php
if(!function_exists('FoundationPress_entry_meta')) :
    function FoundationPress_entry_meta() {
        echo '<div class="meta-container">';
        echo '<span class="byline author">'. __('作者：', 'FoundationPress') .' <a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .'</a></span>';
        echo '<time class="updated" datetime="'. get_the_time('c') .'">'. sprintf(__('%s', 'FoundationPress'), get_the_date('Y/m/d')) .'</time>';
        echo '</div>';
    }
endif;
?>
