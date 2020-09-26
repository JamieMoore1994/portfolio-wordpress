<?php

function blogExternalResourcesOpener($params, $content = null) {

  extract(shortcode_atts(array(
    'imgsrc' => '',
    'alt' => '',
    'heading3' => ''
  ), $params));

  $return = '<div class="blog-body blog-container">
              <h3 class="blog-body__titles">' . $heading3 . '</h3>
              <ul class="blog-body__resources">';

  return $return;

}

add_shortcode('blog-external-resources-opener','blogExternalResourcesOpener');
