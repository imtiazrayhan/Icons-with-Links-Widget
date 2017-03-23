<?php
/**
 * Plugin Name: Icons with Links Widget
 * Version: 1.1
 * Plugin URI: http://imtiazrayhan.com/
 * Description: Add beautiful icons with links to your sidebar using this widget.
 * Author: Imtiaz Rayhan
 * Author URI: http://imtiazrayhan.com
 * Author Email: irayhan.asif@gmail.com
 *
 * Add icons with links to your side and engage more with your readers.
 *
 * @package iwlw_plugin
 * @since 1.0
 * @author Imtiaz Rayhan
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

class iwlw_plugin {

  /**
   * Constructor method.
   *
   * @since 1.0
   */
  public function __construct() {

    // Setting up the plugins path.
    add_action( 'plugins_loaded', array( $this, 'iwlw_define_paths' ), 1 );

    // Setting up the Options panel.
    add_action( 'plugins_loaded', array( $this, 'iwlw_load_panel' ), 2 );

    // Registering the widget.
    add_action( 'widgets_init', array( $this, 'iwlw_register_widget' ), 3 );

  }

  /**
   * Defining Plugin Paths
   *
   * @since 1.0
   */
  public function iwlw_define_paths() {

    // Defining path to the plugin directory.
    define( 'IWLW_DIR', trailingslashit( plugin_dir_path( __FILE__ ) ) );

    // Defining path to the plugin directory URI.
    define( 'IWLW_URI', trailingslashit( plugin_dir_url( __FILE__ ) ) );

    // Defining path to classes directory.
    define( 'IWLW_CLASSES', IWLW_DIR . trailingslashit( 'classes' ) );

    // Defining path to includes directory.
    define( 'IWLW_INCLUDES', IWLW_DIR . trailingslashit( 'includes' ) );

    // Defining path to CSS directory.
    define( 'IWLW_CSS', IWLW_URI . trailingslashit( 'css' ) );

    // Defining path to images directory.
    define( 'IWLW_IMAGES', IWLW_URI . trailingslashit( 'images' ) );

  }

  /**
   * Loading the Options panel.
   *
   * @since 1.0
   */
  public function iwlw_load_panel() {

    // Loading the option framework file.
    require_once( IWLW_INCLUDES . 'titan/titan-framework.php' );

    // Loading the options file.
    require_once( IWLW_INCLUDES . 'titan/titan-options.php' );

  }

  /**
   * Register the Widget
   *
   * @since 1.0
   */
  public function iwlw_register_widget() {

    // Requiring the widget class
    require_once( IWLW_CLASSES . 'widget.php' );

    // Registering the widget
    register_widget( 'icons_with_links_widget' );

  }
}

new iwlw_plugin();
