<?php

function blogSingleStudyFigure($params, $content = null) {

  extract(shortcode_atts(array(
    'imgsrc' => '',
    'alt' => ''
  ), $params));

  $return = '
        <figure class="blog-body__figures wireframes">
          <img src="'. $imgsrc . '" alt="' . $alt . '">
          <figcaption class="blog-body__captions">
              <span>' . $content . '</span>
          </figcaption>
        </figure>';

  $return .= '</div>';

  return $return;

}

add_shortcode('blog-single-study-figure','blogSingleStudyFigure');