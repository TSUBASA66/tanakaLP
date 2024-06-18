<?php
  // Thumbnail
  add_theme_support( 'post-thumbnails' );

  // News
  function set_posts_per_page_for_works_cpt( $query ) {
    if ( !is_admin() && $query->is_main_query() && is_post_type_archive( 'works' ) ) {
      $query->set( 'posts_per_page', '5' );
    }
  }
  add_action( 'pre_get_posts', 'set_posts_per_page_for_works_cpt' );
?>