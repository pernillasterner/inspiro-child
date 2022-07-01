
<?php

add_action('wp_enqueue_scripts', 'enqueue_parent_styles');

function enqueue_parent_styles()
{
  // Child Theme stylesheet.
  $parent_style = 'inspiro-style';
  wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array($parent_style), INSPIRO_THEME_VERSION);
}

?>
