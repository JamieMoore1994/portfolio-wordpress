<?php

function textRight($params, $content = null) {

  extract(shortcode_atts(array(
    'heading2' => '',
    'content' => ''
  ), $params));

  $return = '
  <section class="textRight">
  <div class="container">
    <div class="textRight__content">';
    if($heading2) {
      $return .= '<h2 class="textRight__title">' . $heading2 . '</h2>';
    }
    $return .= '
      <p class="bodytext">' . $content . '</p>
    </div>
  </div>
  </section>
  ';

  return $return;

}

add_shortcode('case-study-text-right','textRight');