<?php

function blogTextBlocksWithFigure($params, $content = null) {

  extract(shortcode_atts(array(
    'imgsrc' => '',
    'alt' => '',
    'caption' => ''
  ), $params));

  $return = '
    <div class="blog-body blog-container">';

  $return .= '
  <figure class = "skills-report">
    <img src="' . $imgsrc . '" alt="' . $alt . '">
  </figure>
  ';

  $return .= '
    <p>' . $content . '</p>
  ';

  $return .= '
  </div>';

  return $return;

}

add_shortcode('blog-text-block-with-figure','blogTextBlocksWithFigure');
