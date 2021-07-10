<?

function register_custom_image_sizes() {
  if ( ! current_theme_supports( 'post-thumbnails' ) ) {
    add_theme_support( 'post-thumbnails' );
  }
  add_image_size( 'w240', 240, 9999 );
  add_image_size( 'w480', 480, 9999 );
  add_image_size( 'w720', 720, 9999 );
  add_image_size( 'w960', 960, 9999 );
  add_image_size( 'w1168', 1168, 9999 );
  add_image_size( 'w1440', 1440, 9999 );
  add_image_size( 'w1920', 1920, 9999 );

}
add_action( 'admin_init', 'register_custom_image_sizes' );




function add_custom_image_sizes( $sizes ) {
  return array_merge( $sizes, array(
    'w240' => __( 'w240' ),
    'w480' => __( 'w480' ),
    'w720' => __( 'w720' ),
    'w960' => __( 'w960' ),
    'w1168' => __( 'w1168' ),
    'w1440' => __( 'w1440' ),
    'w1920' => __( 'w1920' )
  ) );
}
add_filter( 'image_size_names_choose', 'add_custom_image_sizes' );