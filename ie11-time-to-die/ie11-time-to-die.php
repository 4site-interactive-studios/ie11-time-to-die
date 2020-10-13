<?php
/*
  Plugin Name: IE11 Time to Die
  Plugin URI: https://github.com/4site-interactive-studios/ie11-time-to-die
  description: A WordPress Plugin that displays a warning to IE11 users only and encourages them to switch their browser.
  Version: 1.1
  Author: 4Site Studios
  Author URI: https://www.4sitestudios.com
  License: GPL2
*/

// Load JavaScript & CSS
function enqueue_head() {
  wp_enqueue_script('ie11-time-to-die', plugin_dir_url(__FILE__) . 'js/ie11-time-to-die.js');
  wp_enqueue_style('ie11-time-to-die', plugin_dir_url(__FILE__) . 'css/ie11-time-to-die.css');
}

// Add message box to body.
function add_code_to_body() {
  include plugin_dir_path( __FILE__ ) . 'inc/ie--box.php';
}

// Run functions
add_action('wp_head', 'enqueue_head');
add_action( 'wp_body_open', 'add_code_to_body' );