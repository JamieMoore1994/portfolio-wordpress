<?php

function blogExternalResourcesLink($params, $content = null) {

  extract(shortcode_atts(array(
    'heading3' => '',
    'linkone' => '',
    'textone' => '',
    'titleone' => '',
    'linktwo' => '',
    'texttwo' => '',
    'titletwo' => '',
    'linkthree' => '',
    'textthree' => '',
    'titlethree' => '',
    'linkfour' => '',
    'textfour' => '',
    'titlefour' => ''
  ), $params));

  $return = '

  <div class="blog-body blog-container">';
    if($heading3) {
      $return .= '<h3 class="blog-body__titles">Want to learn more on SVG and SVG animations?</h3>';
    }
    $return .= '<ul class="blog-body__resources">
              <li><a href="' . $linkone . '" title = "' . $titleone . '">' . $textone .'</a></li>';
    if($linktwo) {
    $return .= '
              <li><a href="' . $linktwo . '" title = "' . $titletwo . '">' . $texttwo .'</a></li>';
    }
    if($linkthree) {
      $return .= '
                <li><a href="' . $linkthree . '" title = "' . $titlethree . '">' . $textthree .'</a></li>';
    }
    if($linkfour) {
      $return .= '
                <li><a href="' . $linkfour . '" title = "' . $titlefour . '">' . $textfour .'</a></li>';
    }
    $return .= '</ul>
    </div>';

  return $return;

}

add_shortcode('blog-external-resources-link','blogExternalResourcesLink');
