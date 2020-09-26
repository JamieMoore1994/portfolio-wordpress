<?php

function blogFigcaptionBlock($params, $content = null) {

  extract(shortcode_atts(array(
    'imgsrc' => '',
    'alt' => '',
    'heading3' => ''
  ), $params));

  $return = '
    <div class="blog-container--large">';
    if($heading3) {
      $return .= '<h3 class="blog-body__titles">' . $heading3 . '</h3>';
    }
    $return .= '
        <figure class="blog-body__figures blog-body__examples--item large-image">
        <img src="'. $imgsrc . '" alt="' . $alt . '" class="industry__job-img-2">
        <figcaption class="blog-body__captions">
            <span>' . $content . '</span>
        </figcaption>';

  $return .= '
  </div>';

  return $return;

}

add_shortcode('blog-figcaption-block','blogFigcaptionBlock');
