<?php

function create_blogs_post_type() {
  register_post_type( 'blogs',
    array(
      'labels' => array(
        'name' => __( 'Blogs' ),
        'singular_name' => __( 'blog' )
      ),
      'public' => true,
      'has_archive' => true,
      'exclude_from_search'=>false,
      'publicly_queryable'=>true,
      'show_ui'=>true,
      'supports'=>array(
        'title',
        'editor',
        'excerpt',
        'thumbnail',
        'author',
      ),
      'rewrite'=>array(
        'slug'=>'blogs'
      ),
    )
  );
}

add_action( 'init', 'create_blogs_post_type' );
