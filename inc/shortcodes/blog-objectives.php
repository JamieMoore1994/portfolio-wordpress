<?php

function blogObjectives($params, $content = null) {

  extract(shortcode_atts(array(
    'heading3' => '',
    'listone' => '',
    'listtwo' => '',
    'listthree' => '',
    'listfour' => ''
  ), $params));

  $return = '
  <div class="blog-body blog-container">
    <h3 class="blog-body__titles">' . $heading3 . '</h3>     
      <ul class="blog-body__list">
        <li class="blog-body__list--item">'. $listone . '</li>
        <li class="blog-body__list--item">'. $listtwo . '</li>
        <li class="blog-body__list--item">'. $listthree . '</li>
        <li class="blog-body__list--item">'. $listfour . '</li>
      </ul>
    </div>
    ';

  return $return;

}

add_shortcode('blog-objectives','blogObjectives');
