<?php
  function etherparty_script_enqueue() {
    wp_enqueue_style('new_style', get_template_directory_uri() . '/css/new_style.css', array(), '1.0.0', 'all');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1.0.0', 'all');
    wp_enqueue_style('owl.carousel',get_template_directory_uri(). '/css/owl.carousel.css', array(), '1.0.0', 'all');
    wp_enqueue_style('owl.theme',get_template_directory_uri(). '/css/owl.theme.css', array(), '1.0.0', 'all');
  }

  add_action('wp_enqueue_scripts', 'etherparty_script_enqueue');
 ?>
