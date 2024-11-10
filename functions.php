<?php

function theme_enqueue_scripts(){
  $theme_directory = get_template_directory_uri();

  wp_enqueue_script('jquery');
  wp_enqueue_style('common-style',$theme_directory . '/assets/css/style.css');
  wp_enqueue_script('common-script',$theme_directory . '/assets/js/common.js', array('jquery'), null, true);

  if(is_front_page()){
    wp_enqueue_style('front-style',$theme_directory . '/assets/css/front-page.css', array('common-style'), null);
    wp_enqueue_script('front-script',$theme_directory . '/assets/css/front-page.js' array('common.js'), null, true);
  }
}
add_action('wp_enqueue_script','theme_enqueue_script');

