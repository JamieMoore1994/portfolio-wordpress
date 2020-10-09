<?php

function textLeft($params, $content = null) {

  extract(shortcode_atts(array(
    'heading2' => '',
    'content' => ''
  ), $params));

  $return = '
  <section class="textLeft">
    <div class="container">
      <div class="textLeft__content">';
      if($heading2) {
        $return .= '<h2 class="textLeft__title">' . $heading2 . '</h2>';
      }
      $return .= '
        <p class="bodytext">' . $content . '</p>
      </div>
    </div>
  </section>
  ';

  return $return;

}

add_shortcode('case-study-text-left','textLeft');