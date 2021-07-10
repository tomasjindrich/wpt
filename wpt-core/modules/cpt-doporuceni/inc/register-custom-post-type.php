<?php

function custom_post_type_doporuceni() {

  $slug = 'doporuceni';
  // svg ikona bubble text
  $svg_icon = 'data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M22,0.5 L2,0.5 C1.17157288,0.5 0.5,1.17157288 0.5,2 L0.5,15.552 C0.502802207,15.9442488 0.663431761,16.3188464 0.94564929,16.5912804 C1.22786682,16.8637144 1.60789634,17.011033 2,17 L5,17 L5,21 C4.99993387,21.1860906 5.10321948,21.3568217 5.26808082,21.4431376 C5.43294215,21.5294535 5.63209968,21.5170716 5.785,21.411 L12.156,17 L22,17 C22.8284271,17 23.5,16.3284271 23.5,15.5 L23.5,2 C23.5,1.17157288 22.8284271,0.5 22,0.5 Z M5.25,11 C5.25,10.5857864 5.58578644,10.25 6,10.25 L18,10.25 C18.4142136,10.25 18.75,10.5857864 18.75,11 C18.75,11.4142136 18.4142136,11.75 18,11.75 L6,11.75 C5.58578644,11.75 5.25,11.4142136 5.25,11 Z M18,7.25 L6,7.25 C5.58578644,7.25 5.25,6.91421356 5.25,6.5 C5.25,6.08578644 5.58578644,5.75 6,5.75 L18,5.75 C18.4142136,5.75 18.75,6.08578644 18.75,6.5 C18.75,6.91421356 18.4142136,7.25 18,7.25 Z"/></svg>');


	$labels = array(
		'name'                  => _x( 'Doporučení', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Doporučení', 'Post Type Singular Name', 'text_domain' ),
		'all_items'             => __( 'Všechna doporučení', 'text_domain' ),
		'add_new_item'          => __( 'Přidat nové doporučení', 'text_domain' ),
		'add_new'               => __( 'Přidat nové', 'text_domain' ),
		'new_item'              => __( 'Nové doporučení', 'text_domain' ),
		'edit_item'             => __( 'Upravit doporučení', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Doporučení', 'text_domain' ),
		//'description'           => __( $config['name'], 'text_domain' ),
		'labels'                => $labels,
		//'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		'supports'              => array( 'title' ),
		//'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
    'menu_icon'             => $svg_icon,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
    'show_in_rest'          => true,
		// Nastavení pro neveřejné příspěvky. Doporučení nemají vlastní podstránky, zobrazují se pouze jako součásti stránek a přehledů které vytvořím.
    'public'                => false,
    'publicly_queryable'    => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'rewrite'               => false ,
	);
	register_post_type( $slug, $args );

}