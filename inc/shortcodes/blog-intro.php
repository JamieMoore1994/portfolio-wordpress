<?php

function blogIntro($params, $content = null) {

  extract(shortcode_atts(array(
    'heading2' => '',
    'imgsrc' => '',
    'alt' => ''
  ), $params));

  $return = '
    <section class="blog-content blog-container">';

  $return .= '
    <div class = "blog__author">
        <img src="' . $imgsrc . '" class = "blog__author--img" alt="' . $alt . '">
        <span class = "blog__author-name">By ' . get_the_author() . '</span>
        <span class = "blog__author-date">Posted on: ' .  get_the_date() . ' </span>
    </div>
  ';

  $return .= '
    <div class="blog-content__intro">
        <h2 class="blog-content__title"> ' . $heading2 . ' </h2>
        <p> ' . $content .  '</p>
    </div>
  ';

  $return .= '
  </section>';

  return $return;

}

add_shortcode('blog-intro-block','blogIntro');
