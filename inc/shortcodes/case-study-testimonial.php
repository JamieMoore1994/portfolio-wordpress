<?php

function caseTestimonial($params, $content = null) {

  extract(shortcode_atts(array(
    'headingone' => '',
    'headingtwo' => '',
    'imgsrc' => '',
    'alt' => '',
    'text' =>  '',
    'person' => ''
  ), $params));

  $return = '
  <section class="caseTestimonial">
    <div class="caseTestimonial__container container">
      <h2 class="caseTestimonial__title">
        ' . $headingone . ' 
        <span class="caseTestimonial__lineTwo">' . $headingtwo . '...</span>
      </h2>
      <div class="caseTestimonial__contentHolder">
        <div class="caseTestimonial__imageHolder">
          <img class="caseTestimonial__image" src="' . $imgsrc . '" alt="' . $alt . '">
        </div>
        <blockquote class="caseTestimonial__quoteHolder">
          <p class="caseTestimonial__quote bodytext">' . $text . '</p>
          <cite class="caseTestimonial__person bodytext">' . $person . '</cite>
        </blockquote>
      </div>
    </div>
  </section>
  ';

  return $return;

}

add_shortcode('case-study-testimonial','caseTestimonial');