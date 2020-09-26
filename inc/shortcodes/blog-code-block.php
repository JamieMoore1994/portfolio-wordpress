<?php

function blogCodeBlock($params, $content = null) {

  extract(shortcode_atts(array(
    'imgsrc' => '',
    'alt' => '',
    'heading3' => '',
    'text' => '',
    'caption' => ''
  ), $params));

  $return = '
    <div class="blog-container--large">';
    if($heading3) {
      $return .= '<h3 class="blog-body__titles">' . $heading3 . '</h3>';
    }
    $return .= '
        <figure class = "blog-body__figures blog-body__examples--item large-image">
          <div class="blog-body__code-background">
              <code class = "code-example">
                  ' . $text . '
              </code>
          </div>
          <figcaption class = "normal-text">
              <p>' . $content . '</p>
          </figcaption>
        </figure>';

  $return .= '
  </div>';

  if($imgsrc) {
    $return .= '<figure class = "blog-body__figures blog-body__examples--item large-image">
    <img src = "' . $imgsrc . '" alt = "' . $alt . '">
    <figcaption class="blog-body__captions">' . $caption . '</figcaption>
    </figure>';
  }

  return $return;

}

add_shortcode('blog-code-block','blogCodeBlock');