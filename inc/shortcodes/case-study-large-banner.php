<?php

function largeBanner($params, $content = null) {

  extract(shortcode_atts(array(
    'imgsrc' => ''
  ), $params));

  $return = '
    <section class="largeBanner">
      <div class="largeBanner__imgHolder container container--large">
        <div class="largeBanner__img" style="background-image:url(' . $imgsrc . ')"></div>
      </div>
    </section>
    ';

  return $return;

}

add_shortcode('case-study-large-banner','largeBanner');