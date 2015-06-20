<div class="page-heading-container">
  <!-- <h1 class="page-title"><?php as_show_single_title($pageTitle); ?></h1> -->
  <h1 class="page-title">
    <?php
      if (is_archive() and !is_tax()):
        post_type_archive_title();
      else:
        single_cat_title();
      endif;
    ?>
  </h1>
  <!-- <h2 class="page-subtitle"></h2> -->
</div>