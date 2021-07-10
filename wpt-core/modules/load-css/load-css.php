<?php


if ( function_exists('wpt_load_all_enabled_css') ) {
	wpt_load_all_enabled_css();
};


function wpt_load_all_enabled_css() {

  // načtení všech požadovaných css souborů na frontend
  add_action( 'wp_enqueue_scripts', 'wpt_load_frontend_css' );
  // načtení všech požadovaných css souborů na backend
  add_action( 'admin_enqueue_scripts', 'wpt_load_backend_css' );


  // získá pole všech aktivních a požadovaných css souborů
  function wpt_load_frontend_css() {
    $config = wpt_get_config();
    foreach ( $config['assets']['css'] as $key => $item ) {
      // pokud je css položka/soubor enabled
      if ( ($item['enabled'] &&  $item['frontend']) ) {
        $itemName = $key;
        $fileUrl = WP_PLUGIN_URL . $item['file'];
        $filePath = WP_PLUGIN_DIR . $item['file'];
        $fileVersion = filemtime( $filePath );

        if(file_exists($filePath)) {
          wp_enqueue_style( $itemName, $fileUrl, array(), $fileVersion, false);
        };

      };
    };
  }

    // získá pole všech aktivních a požadovaných css souborů
    function wpt_load_backend_css() {
      $config = wpt_get_config();
      foreach ( $config['assets']['css'] as $key => $item ) {
        // pokud je css položka/soubor enabled
        if ( ($item['enabled'] &&  $item['backend']) ) {
          $itemName = $key;
          $fileUrl = WP_PLUGIN_URL . '/wpt-theme/assets/css/' . $item['file'];
          $filePath = WP_PLUGIN_DIR . '/wpt-theme/assets/css/' . $item['file'];
          $fileVersion = filemtime( $filePath );
          wp_enqueue_style( $itemName, $fileUrl, array(), $fileVersion, false);
  
        };
      };
    }

}
