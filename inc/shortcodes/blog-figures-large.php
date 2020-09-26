<?php

function blogFiguresBlock($params, $content = null) {

  extract(shortcode_atts(array(
    'imgsrc' => '',
    'alt' => ''
  ), $params));

  $return = '
    <div class="blog-container--large blog-body__examples">
        <figure class="blog-body__figures wireframes">
        <img src="'. $imgsrc . '" alt="' . $alt . '">
        <figcaption class="blog-body__captions">
            <span>' . $content . '</span>
        </figcaption>
        </figure>';

  return $return;

}

add_shortcode('blog-figures-block','blogFiguresBlock');