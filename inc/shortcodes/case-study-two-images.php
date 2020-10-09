<?php

function caseTwoImages($params, $content = null) {

  extract(shortcode_atts(array(
    'imgsrcone' => '',
    'imgsrctwo' => '',
    'altone' =>  '',
    'alttwo' => ''
  ), $params));

  $return = '
  <section class="caseImages">
		<div class="caseImages__container container container--large">
			<div class="caseImages__imageHolder">
				<img src="' . $imgsrcone . '" class="caseImages__image" alt="' . $altone . '">
			</div>

			<div class="caseImages__imageHolder">
				<img src="' . $imgsrctwo . '" class="caseImages__image" alt="' . $alttwo . '">
			</div>
		</div>
	</section>
  ';

  return $return;

}

add_shortcode('case-study-two-images','caseTwoImages');