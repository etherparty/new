<?php
  function etherparty_script_enqueue() {
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), '1.0.1', 'all');
  }

  add_action('wp_enqueue_scripts', 'etherparty_script_enqueue');

  function etherparty_theme_setup() {
    add_theme_support('menus');

    register_nav_menu('primary','Primary Header Navigation');
  }

  add_action('after_setup_theme', 'etherparty_theme_setup');
  function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
  }
  add_action('get_header', 'remove_admin_login_header');
 ?>
