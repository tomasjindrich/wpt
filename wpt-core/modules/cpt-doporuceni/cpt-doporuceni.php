<?php


/* ---------------------------------------------------------- */
/* INC
/* ---------------------------------------------------------- */

include_once( plugin_dir_path( __FILE__ ) . 'inc/register-custom-post-type.php' );
include_once( plugin_dir_path( __FILE__ ) . 'inc/register-local-acf-group.php' );
include_once( plugin_dir_path( __FILE__ ) . 'inc/acf-custom.php' );
include_once( plugin_dir_path( __FILE__ ) . 'inc/admin-custom-columns.php' );

/* ---------------------------------------------------------- */
/* WP Hooks
/* ---------------------------------------------------------- */

// Vytvoří nový custom post type
add_action( 'init', 'custom_post_type_doporuceni', 0 );

// ACF přidá pole pro defaultní obrázek
add_action('acf/render_field_settings/type=image', 'add_default_value_to_image_field');

// Vytvoří a seřadí nové sloupce (zatím bez hodnot z DB)
add_filter( 'manage_doporuceni_posts_columns', 'doporuceni_filter_posts_columns' );

// Naplní nově vytvořené sloupce hodnotami z DB
add_action( 'manage_doporuceni_posts_custom_column', 'doporuceni_column', 10, 2);

// CSS styly pro upravu Admin Columns
add_action('admin_head', 'my_admin_column_width');

// Placeholder v title poli
add_filter('enter_title_here', 'my_title_place_holder' , 20 , 2 );




