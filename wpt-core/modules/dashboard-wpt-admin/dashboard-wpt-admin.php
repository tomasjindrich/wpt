<?php


if ( function_exists( 'wpt_add_dashboard_widget_engine' ) ) {
	wpt_add_dashboard_widget_engine();
};


function wpt_add_dashboard_widget_engine() {
  
  add_action('wp_dashboard_setup', 'dashboard_widget_engine'); // add custom Dashboard Widget

  function dashboard_widget_engine() {
    global $wp_meta_boxes;
    wp_add_dashboard_widget('custom_help_widget', 'WPT Engine', 'dashboard_widget_engine_content');
  }

  function dashboard_widget_engine_content() {

      $config = wpt_get_config();



      include_once( plugin_dir_path( __FILE__ ) . 'includes/modules.php');
      include_once( plugin_dir_path( __FILE__ ) . 'includes/theme-assets.php');
      include_once( plugin_dir_path( __FILE__ ) . 'includes/theme-config.php');
      include_once( plugin_dir_path( __FILE__ ) . 'includes/shortcodes.php');
      include_once( plugin_dir_path( __FILE__ ) . 'includes/sandbox.php');

    };
};