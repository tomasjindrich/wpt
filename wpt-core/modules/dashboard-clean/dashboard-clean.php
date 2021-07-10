<?php

if ( function_exists('wpt_module_dashboard_clean') ) {
	wpt_module_dashboard_clean();
};

function wpt_module_dashboard_clean() {

  $config = wpt_get_config();
  $options = $config['modules']['dashboard-clean']['options'];

  // welcome panel
  if ( !$options['welcome_panel'] ) remove_action( 'welcome_panel', 'wp_welcome_panel' );
   
  // other panels
  add_action( 'admin_init', 'remove_dashboard_meta' );

  // remove widgets
  function remove_dashboard_meta() {

    $config = wpt_get_config();
    $options = $config['modules']['dashboard-clean']['options'];

    echo $options['dashboard_incoming_links'];

    if ( !$options['dashboard_incoming_links'] ) remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal'); //Removes the 'incoming links' widget
    if ( !$options['dashboard_plugins'] ) remove_meta_box('dashboard_plugins', 'dashboard', 'normal'); //Removes the 'plugins' widget
    if ( !$options['dashboard_primary'] ) remove_meta_box('dashboard_primary', 'dashboard', 'normal'); //Removes the 'WordPress News' widget
    if ( !$options['dashboard_secondary'] ) remove_meta_box('dashboard_secondary', 'dashboard', 'normal'); //Removes the secondary widget
    if ( !$options['dashboard_quick_press'] ) remove_meta_box('dashboard_quick_press', 'dashboard', 'side'); //Removes the 'Quick Draft' widget
    if ( !$options['dashboard_recent_drafts'] ) remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side'); //Removes the 'Recent Drafts' widget
    if ( !$options['dashboard_recent_comments'] ) remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal'); //Removes the 'Activity' widget
    if ( !$options['dashboard_right_now'] ) remove_meta_box('dashboard_right_now', 'dashboard', 'normal'); //Removes the 'At a Glance' widget
    if ( !$options['dashboard_activity'] ) remove_meta_box('dashboard_activity', 'dashboard', 'normal'); //Removes the 'Activity' widget (since 3.8)
    if ( !$options['dashboard_site_health'] ) remove_meta_box('dashboard_site_health', 'dashboard', 'normal');
  }

}