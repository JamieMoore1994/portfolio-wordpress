<?php

function blogTextBlocksWithTitle($params, $content = null) {

  extract(shortcode_atts(array(
    'heading3' => '',
  ), $params));

  $return = '
    <div class="blog-body blog-container">';

  $return .= '
    <h3 class="blog-body__titles">' . $heading3 . '</h3>
    <p>' . $content . '</p>
  ';

  $return .= '
  </div>';

  return $return;

}

add_shortcode('blog-text-block-with-title','blogTextBlocksWithTitle');
