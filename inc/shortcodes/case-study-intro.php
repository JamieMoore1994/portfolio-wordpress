<?php

function caseStudyIntro($params, $content = null) {

  extract(shortcode_atts(array(
    'heading2' => '',
    'textone' => '',
    'texttwo' => '',
    'textthree' => '',
    'sitelink' => '',
    'arialabel' => '',
    'imgsrc' => ''
  ), $params));

  $return = '
  <section class="caseStudy__intro">
    <div class="caseStudy__container container">
      <div class="caseStudy__introContent">
        <h2 class="caseStudy__introTitle">' . $heading2 . '</h2>
        <p class="caseStudy__text">' . $textone . '</p>';
        if($texttwo) {
          $return .= '
            <p class="caseStudy__text">' . $texttwo . '</p>
          ';
        }
        if($textthree) {
          $return .= '
            <p class="caseStudy__text">' . $textthree . '</p>
          ';
        }
        $return .= '
        <a href="' . $sitelink . '" class="caseStudy__btn caseStudy__introBtn">View live site</a>
        </div>
        
        <span role="img" aria-label="' . $arialabel . '">
          <div class="caseStudy__introImageHolder" style="background-image:url(' . $imgsrc . ')"></div>
        </span>
      </div>
    </section>
    ';

  return $return;

}

add_shortcode('case-study-intro','caseStudyIntro');