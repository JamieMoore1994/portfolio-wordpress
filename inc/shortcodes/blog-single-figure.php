<?php

function blogSingleFigure($params, $content = null) {

  extract(shortcode_atts(array(
    'imgsrc' => '',
    'alt' => '',
  ), $params));

  $return = '
    <div class="blog-container--large blog-body__examples">';

  $return .= '
    <figure class="blog-body__figures blog-body__examples--item large-image">
        <img src="' . $imgsrc . '" alt="' . $alt . '" class="blog__brexit-img">
    </figure>
  ';

  $return .= '
  </div>';

  return $return;

}

add_shortcode('blog-single-figure','blogSingleFigure');
