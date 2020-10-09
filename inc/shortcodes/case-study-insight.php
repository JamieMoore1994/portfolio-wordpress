<?php

function insightSection($params, $content = null) {

  extract(shortcode_atts(array(
    'heading2' => '',
    'textone' => '',
    'texttwo' => '',
    'textthree' => '',
    'imgsrc' => ''
  ), $params));

  $return = '
  <section class="insight">
    <div class="insight__container container">
      <div class="insight__content">
        <h2 class="insight__title">' . $heading2 . '</h2>
        <p class="insight__text bodytext bodytext--white">' . $textone . '</p>
        ';
        if($texttwo) {
          $return .= '
            <p class="insight__text bodytext bodytext--white">' . $texttwo . '</p>
          ';
        }
        if($textthree) {
          $return .= '
            <p class="insight__text bodytext bodytext--white">' . $textthree . '</p>
          ';
        }
      $return .= '
      </div>
      <div class="insight__imageHolder">
        <div class="insight__image" style="background-image:url(' . $imgsrc . ')"></div>
      </div>
    </div>
  </section>
    ';

  return $return;

}

add_shortcode('case-study-insight','insightSection');