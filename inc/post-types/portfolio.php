<?php

function create_portfolio_post_type() {
  register_post_type( 'portfolio',
    array(
      'labels' => array(
        'name' => __( 'Portfolio' ),
        'singular_name' => __( 'portfolio' )
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
        'slug'=>'portfolio'
      ),
    )
  );
}

add_action( 'init', 'create_portfolio_post_type' );
