<?php
if(!function_exists('as_show_recently_post')) :
    function as_show_recently_post($post_type, $num, $excerpt = false, $title = '相關文章') {
      $queryObject = new WP_Query( 'post_type=' . $post_type . '&posts_per_page=' . $num );

      if ($queryObject->have_posts()) :
          echo '<div class="recently-post">';

          if(!$excerpt):
            echo '<h2 class="section-title">' . $title . '</h2>';
          endif;

          echo '<ul class="post-list">';
          while ($queryObject->have_posts()) :
              $queryObject->the_post();
              echo '<li class="post-item"><a href="' . get_the_permalink() . '">';

                // Showing the thumbnail image
                echo '<div class="post-image-container">';
                  if ( has_post_thumbnail() ):
                    the_post_thumbnail('', array('class' => 'post-image') );
                  else:
                    echo '<img src="' . get_template_directory_uri() .'/assets/img/headlines/family.png" alt="放心窩協會" class="post-image">';
                  endif;
                echo '</div>';

                // Showing the title
                echo '<h4 class="post-title">' . get_the_title() . '</h4>';

                // Showing the exceprt
                if(!$excerpt):
                  echo '<div class="post-content">' . get_the_excerpt() . '</div>';
                endif;
              echo '</a></li>';
          endwhile;
          echo '</ul>';
          echo '</div>';
      endif;

    }
endif;
?>