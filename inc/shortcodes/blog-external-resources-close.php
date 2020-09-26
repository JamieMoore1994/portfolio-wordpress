<?php

function blogExternalResourcesCloser($params, $content = null) {

  extract(shortcode_atts(array(
  ), $params));

  $return = '</ul>
            </div>';

  return $return;

}

add_shortcode('blog-external-resources-closer','blogExternalResourcesCloser');
