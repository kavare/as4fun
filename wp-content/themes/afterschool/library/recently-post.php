<?php
if(!function_exists('as_show_recently_post')) :
    function as_show_recently_post($post_type, $num) {
      $queryObject = new WP_Query( 'post_type=' . $post_type . '&posts_per_page=' . $num );

      if ($queryObject->have_posts()) :
          echo '<ul>';

          while ($queryObject->have_posts()) :
              $queryObject->the_post();
              echo '<li><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
          endwhile;

          echo '</ul>';
      endif;

    }
endif;
?>