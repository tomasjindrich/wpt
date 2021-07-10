<?

/*
Plugin Name: WPT CORE
Plugin URI: https://tomasjindrich.cz
description: WPT CORE
Version: 1.2
Author: Tomas Jindrich
Author https://tomasjindrich.cz
*/

if ( ! defined( 'WPINC' ) ) { /* security stuff */
	die;
}


if ( function_exists( 'wpt_load_all_enabled_modules' ) ) {
	wpt_load_all_enabled_modules();
};



function wpt_get_config() {

  // defaultní core config
  $configDefaultFile = WP_PLUGIN_DIR . "/wpt-core/config-default.json";
  $configDefaultString = file_get_contents($configDefaultFile);
  $configDefaultArray = json_decode($configDefaultString, true);

  // custom theme config
  $configThemeFile = WP_PLUGIN_DIR . "/wpt-theme/config.json";
  $configThemeString = file_get_contents($configThemeFile);
  $configThemeArray = json_decode($configThemeString, true);

  // config default + custom theme
  return array_replace_recursive($configDefaultArray, $configThemeArray);

};


function wpt_load_all_enabled_modules() {

  $config = wpt_get_config();

  foreach ( $config['modules'] as $key => $module ) {
    if ( $module['enabled'] ) {
      if ( ( !is_admin() && $module['frontend'] ) || ( is_admin() && $module['backend'] ) ) {
        include_once ( WP_PLUGIN_DIR . '/wpt-core/modules/' . $key . '/' . $key . '.php');
      };
    };
  };
};


