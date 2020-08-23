<?php

function blogTextBlocks($params, $content = null) {

  extract(shortcode_atts(array(
    'linktitle' => '',
  ), $params));

  $return = '
    <div class="blog-body blog-container">';

  $return .= '
    <p>' . $content . '</p>
  ';

  $return .= '
  </div>';

  return $return;

}

add_shortcode('blog-text-blocks','blogTextBlocks');
