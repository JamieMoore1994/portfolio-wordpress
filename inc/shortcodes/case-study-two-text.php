<?php

function caseTwoText($params, $content = null) {

  extract(shortcode_atts(array(
    'textone' => '',
    'texttwo' => ''
  ), $params));

  $return = '
  <section class="doubleText">
		<div class="doubleText__container container">
			<p class="doubleText__text doubleText__text--left bodytext">' . $textone . '</p>
			<p class="doubleText__text doubleText__text--right bodytext">' . $texttwo . '</p>
		</div>
	</section>
  ';

  return $return;

}

add_shortcode('case-study-two-text','caseTwoText');