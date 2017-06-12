<?php
  function etherparty_script_enqueue() {
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), '1.0.1', 'all');
  }

  add_action('wp_enqueue_scripts', 'etherparty_script_enqueue');

  /* Theme setup */
  add_action( 'after_setup_theme', 'wpt_setup' );
  if ( ! function_exists( 'wpt_setup' ) ):
    function wpt_setup() {
      register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
    } endif;

  function wpt_register_js() {
    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
    wp_enqueue_script('jquery.bootstrap.min');
  }
  add_action( 'init', 'wpt_register_js' );
  function wpt_register_css() {
    wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap.min' );
  }
  add_action( 'wp_enqueue_scripts', 'wpt_register_css' );

  require_once('wp-bootstrap-navwalker.php');


  function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
  }
  add_action('get_header', 'remove_admin_login_header');
 ?>
