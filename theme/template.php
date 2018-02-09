<?php

function gl_theme_path() {
  return base_path().path_to_theme();
}


function geeklabel_preprocess_page(&$variables) {
  $variables['login_url'] = base_path().'user/login';
  $variables['image_path'] = $image_path = gl_theme_path().'/assets/images';
  $variables['logo'] = $image_path.'/oc-logo.png';
}


?>