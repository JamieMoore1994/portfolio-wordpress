<?php

function blogThreeFigures($params, $content = null) {

  extract(shortcode_atts(array(
    'heading4' => '',
    'imgsrcone' => '',
    'altone' => '',
    'captionone' => '',
    'imgsrctwo' => '',
    'alttwo' => '',
    'captiontwo' => '',
    'imgsrcthree' => '',
    'altthree' => '',
    'captionthree' => ''
  ), $params));

  $return = '

      <div class="blog-container--large">';
      if($heading4) {
        $return .= '<h4 class="blog-body__titles">' . $heading4 . '</h4>';
      }
      $return .= '
            <ul class="blog-body__examples">
              <li class="blog-body__examples--item">
                  <figure class="blog-body__figures">
                      <img src="' . $imgsrcone . '" alt="' . $altone . '">
                      <figcaption class = "blog-body__captions">
                          ' . $captionone . '
                      </figcaption>
                  </figure>
              </li>
              <li class="blog-body__examples--item">
                  <figure class="blog-body__figures">
                      <img src="' . $imgsrctwo . '" alt="' . $alttwo . '">
                      <figcaption class = "blog-body__captions">
                          ' . $captiontwo . '
                      </figcaption>
                  </figure>
              </li>';
              if($imgsrcthree) {
                $return .= '
                <li class="blog-body__examples--item blog-body__examples--container">
                  <figure class="blog-body__figures">
                      <img src="' . $imgsrcthree . '" alt="' . $altthree . '">
                      <figcaption class = "blog-body__captions">
                          ' . $captionthree . '
                      </figcaption>
                  </figure>
                    </li>';
              } else {
                $return .= '
                </ul>
                </div>';
              }
              

  return $return;

}

add_shortcode('blog-three-figures','blogThreeFigures');
