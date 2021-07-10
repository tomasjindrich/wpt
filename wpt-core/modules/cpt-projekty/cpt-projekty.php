<?php

/* ---------------------------------------------------------- */
/* REGISTER CUSTOM POST TYPE
/* ---------------------------------------------------------- */

function custom_post_type_projekty() {

  $slug = 'projekty';
  // svg ikona bubble text
  $svg_icon = 'data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M14.985,14.641 C15.163403,14.4624562 15.4469003,14.4448717 15.646,14.6 L15.646,14.6 L23.357,20.606 C23.4789706,20.7003851 23.5505588,20.8457756 23.551,21 C23.6723809,21.8849705 23.4442527,22.7824184 22.915,23.502 C22.4150942,23.901018 21.7739901,24.0787212 21.14,23.994 L21.14,23.994 L20.551,23.994 C20.425434,23.9941278 20.3044166,23.947006 20.212,23.862 L20.212,23.862 L13.067,17.294 C12.9673467,17.2011927 12.9093073,17.0721361 12.9059038,16.936 C12.9033285,16.7997004 12.9564264,16.6682198 13.053,16.572 L13.053,16.572 Z M2.342,20.3 C2.73437889,19.9210278 3.35808478,19.9264476 3.74381858,20.3121814 C4.12955237,20.6979152 4.13497221,21.3216211 3.756,21.714 L3.756,21.714 L1.756,23.714 C1.36305062,24.0984215 0.734949381,24.0984215 0.342,23.714 C-0.0483819383,23.3235001 -0.0483819383,22.6904999 0.342,22.3 L0.342,22.3 Z M12.427,8.046 C12.6222499,7.85080903 12.9387501,7.85080903 13.134,8.046 L13.134,8.046 L16.134,11.046 C16.329191,11.2412499 16.329191,11.5577501 16.134,11.753 L16.134,11.753 L7.698,20.188 C7.11225022,20.7735729 6.16274978,20.7735729 5.577,20.188 L5.577,20.188 L3.99,18.602 C3.70818132,18.3206274 3.54981968,17.9387365 3.54981968,17.5405 C3.54981968,17.1422635 3.70818132,16.7603726 3.99,16.479 L3.99,16.479 Z M18.676,1.8 C18.8712499,1.60480903 19.1877501,1.60480903 19.383,1.8 L19.383,1.8 L23.118,5.531 C24.2902171,6.76924206 24.2902171,8.70775794 23.118,9.946 L23.118,9.946 L19.264,13.799 C18.8693473,14.1792216 18.2446527,14.1792216 17.85,13.799 C17.4596181,13.4085001 17.4596181,12.7754999 17.85,12.385 L17.85,12.385 L21.704,8.531 C22.09478,8.07492645 22.09478,7.40207355 21.704,6.946 L21.704,6.946 L21.323,6.564 L17.902,9.985 C17.8081957,10.0790417 17.6808273,10.1318938 17.548,10.1318938 C17.4151727,10.1318938 17.2878043,10.0790417 17.194,9.985 L17.194,9.985 L14.194,6.985 C13.999,6.791 14.127,6.35 14.322,6.15 L14.322,6.15 Z M2.2,0.14 C2.34826168,-0.00359699828 2.56952201,-0.0413343965 2.757,0.045 C2.94356414,0.12957497 3.05967183,0.319389252 3.05,0.524 C2.937,2.8 4.248,3.215 5.764,3.7 C7.17974392,4.00636529 8.34868152,5.00005606 8.879,6.348 C9.33551775,7.61365302 9.13753703,9.02309605 8.35,10.114 C7.55177466,11.3083463 6.1407048,11.9408413 4.718,11.742 C2.847,11.419 1.043,9.582 0.333,7.274 C-0.489827656,4.73541032 0.239106563,1.95007731 2.2,0.14 Z"/></svg>');

	$labels = array(
		'name'                  => _x( 'Projekty', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Projekt', 'Post Type Singular Name', 'text_domain' ),
		'all_items'             => __( 'Všechny projekty', 'text_domain' ),
		'add_new_item'          => __( 'Přidat nový projekt', 'text_domain' ),
		'add_new'               => __( 'Přidat nový', 'text_domain' ),
		'new_item'              => __( 'Nový projekt', 'text_domain' ),
		'edit_item'             => __( 'Upravit projekt', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Projekty', 'text_domain' ),
		//'description'           => __( $config['name'], 'text_domain' ),
		'labels'                => $labels,
		//'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		'supports'              => array( 'title', 'editor', 'page-attributes' ),
		//'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
    'menu_icon'             => $svg_icon,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
    'show_in_rest'          => true,
    'public'                => true,
    'publicly_queryable'    => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'rewrite'               => false ,
	);
	register_post_type( $slug, $args );

}
add_action( 'init', 'custom_post_type_projekty', 0 );




// /* ---------------------------------------------------------- */
// /* ADMIN NEW COLUMNS
// /* ---------------------------------------------------------- */

// // Vytvoří a seřadí nové sloupce (zatím bez hodnot z DB)
// add_filter( 'manage_projekty_posts_columns', 'projekty_filter_posts_columns' );
// function projekty_filter_posts_columns( $columns ) {
//   $columns = array(
//     'cb' => $columns['cb'], // zaškrtávátko
// 	  'foto_autora' => __( 'Foto' ),
//     'title' => $columns['title'], // titulek
//   	'text_projekty' => __( 'Text'),
//   	'jmeno_autora' => __( 'Autor doporučení' ),
//   	'oblibene' => __( 'Oblíbené'),
//   );
  
//   return $columns;
// }


// // Naplní nově vytvořené sloupce hodnotami z DB
// add_action( 'manage_projekty_posts_custom_column', 'projekty_column', 10, 2);
// function projekty_column( $column, $post_id ) {
  
// 	// Foto autora
//   // ----------------------
//   if ( 'foto_autora' === $column ) {
//     $foto_autora = get_field('foto_autora');
//     $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
//     if( $foto_autora ) {
//         $thumbnail_url = $foto_autora['sizes']['thumbnail'];
//         echo '<img src="'. $thumbnail_url .'" style="width: 60px; height: 60px; border-radius: 60px;">';
//     } else echo 'n/a';
//   }

//   // Text doporučení
//   // ----------------------
//   if ( 'text_projekty' === $column ) {
//     $text_projekty = get_post_meta( $post_id, 'text_projekty', true );

//     if ( ! $text_projekty ) {
//       _e( 'n/a' );  
//     } else {
//       echo substr($text_projekty, 0, 160). '...';
//     }
//   }

//   // Popisek autora / není samostatný column, jen přidáme ke jménu
//   // ----------------------

//     $popisek_autora = get_post_meta( $post_id, 'popisek_autora', true );

//   // Jméno autora
//   // ----------------------
//   if ( 'jmeno_autora' === $column ) {
//     $jmeno_autora = get_post_meta( $post_id, 'jmeno_autora', true );

//     if ( ! $jmeno_autora ) {
//       _e( 'n/a' );  
//     } else {
//       echo $jmeno_autora;
//       if ( $popisek_autora ) echo '<div style="font-size: 10px;">('. $popisek_autora .')</div>';
//     }
//   }

//   // Oblíbené
//   // ----------------------
//   if ( 'oblibene' === $column ) {
//     $oblibene = get_post_meta( $post_id, 'oblibene', true );

//     if ( ! $oblibene ) {
//       _e( '-' );  
//     } else {
//       // ikona hvězdičky
//       echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><title>rating-star</title><path fill="#f9bc60" d="M23.555,8.729a1.505,1.505,0,0,0-1.406-.98H16.062a.5.5,0,0,1-.472-.334L13.405,1.222a1.5,1.5,0,0,0-2.81,0l-.005.016L8.41,7.415a.5.5,0,0,1-.471.334H1.85A1.5,1.5,0,0,0,.887,10.4l5.184,4.3a.5.5,0,0,1,.155.543L4.048,21.774a1.5,1.5,0,0,0,2.31,1.684l5.346-3.92a.5.5,0,0,1,.591,0l5.344,3.919a1.5,1.5,0,0,0,2.312-1.683l-2.178-6.535a.5.5,0,0,1,.155-.543l5.194-4.306A1.5,1.5,0,0,0,23.555,8.729Z"/></svg>';
//     }
//   }
	
// }


// /* ---------------------------------------------------------- */
// /* ADMIN STYLING (CSS)
// /* ---------------------------------------------------------- */

// // CSS styly pro upravu Admin Columns
// add_action('admin_head', 'my_admin_column_width');
// function my_admin_column_width() {
//     echo '<style type="text/css">
//         .column-title { text-align: left; width:15% !important; }
//         .column-foto_autora { text-align: left; width:70px !important;}
//         .column-text_projekty { text-align: left; width:40% !important;}
//         .column-jmeno_autora { text-align: left; width: 200px !important;}
//         .column-oblibene { text-align: left; width:100px !important;}
//     </style>';
// }



// /* ---------------------------------------------------------- */
// /* OTHERS
// /* ---------------------------------------------------------- */



// // add default image setting to ACF image fields
// // let's you select a defualt image
// // this is simply taking advantage of a field setting that already exists
// add_action('acf/render_field_settings/type=image', 'add_default_value_to_image_field');
// function add_default_value_to_image_field($field) {
//   acf_render_field_setting( $field, array(
//     'label'			      => 'Výchozí obrázek',
//     'instructions'		=> 'Objeví se při vytvoření nového příspěvku',
//     'type'		      	=> 'image',
//     'name'		      	=> 'default_value',
//   ));
// }



// // Placeholder v title poli
// add_filter('enter_title_here', 'my_title_place_holder' , 20 , 2 );
// function my_title_place_holder($title , $post){

//     if( $post->post_type == 'projekty' ){
//         $my_title = __("Zadejte název projektu)");
//         return $my_title;
//     }

//     return $title;
    
// }



?>