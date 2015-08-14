<div class="page-heading-container">
  <!-- <h1 class="page-title"><?php as_show_single_title($pageTitle); ?></h1> -->
  <h1 class="page-title">
    <?php
      /**
       * [The Title for The Event Calendar]
       */
      if (tribe_is_event() && !is_search()):
        if( tribe_is_month() && !is_tax() ): // The Main Calendar Page
            echo '社區活動時間表';
        elseif( tribe_is_month() && is_tax() ): // Calendar Category Pages
            echo '社區活動時間表' . ' &raquo; ' . single_term_title('', false);
        elseif( tribe_is_event() && !is_single() ): // The Main Events List
            echo '社區活動';
        elseif( tribe_is_event() && is_single() ): // Single Events
            echo '社區活動 - ' . get_the_title();
        endif;

      /**
       * [The Original Title]
       */
      else:
        if (is_search()):
          echo '搜尋結果';
        elseif (is_category( 'blog' ) or is_category( 'news' )):
          single_cat_title();
        elseif (is_archive() and !is_tax()):
          post_type_archive_title();
        else:
          single_cat_title();
        endif;
      endif;

    ?>
  </h1>
  <!-- <h2 class="page-subtitle"></h2> -->
</div>