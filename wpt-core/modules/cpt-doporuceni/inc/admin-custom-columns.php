<?php

// Vytvoří a seřadí nové sloupce (zatím bez hodnot z DB)
function doporuceni_filter_posts_columns( $columns ) {
  $columns = array(
    'cb' => $columns['cb'], // zaškrtávátko
	  'foto_autora' => __( 'Foto' ),
    'title' => $columns['title'], // titulek
  	'text_doporuceni' => __( 'Text'),
  	'jmeno_autora' => __( 'Autor doporučení' ),
  	'oblibene' => __( 'Oblíbené'),
  );
  
  return $columns;
}


// Naplní nově vytvořené sloupce hodnotami z DB
function doporuceni_column( $column, $post_id ) {
  
	// Foto autora
  // ----------------------
  if ( 'foto_autora' === $column ) {
    $foto_autora = get_field('foto_autora');
    $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
    if( $foto_autora ) {
        $thumbnail_url = $foto_autora['sizes']['thumbnail'];
        echo '<img src="'. $thumbnail_url .'" style="width: 60px; height: 60px; border-radius: 60px;">';
    } else echo 'n/a';
  }

  // Text doporučení
  // ----------------------
  if ( 'text_doporuceni' === $column ) {
    $text_doporuceni = get_post_meta( $post_id, 'text_doporuceni', true );

    if ( ! $text_doporuceni ) {
      _e( 'n/a' );  
    } else {
      echo substr($text_doporuceni, 0, 160). '...';
    }
  }

  // Popisek autora / není samostatný column, jen přidáme ke jménu
  // ----------------------

    $popisek_autora = get_post_meta( $post_id, 'popisek_autora', true );

  // Jméno autora
  // ----------------------
  if ( 'jmeno_autora' === $column ) {
    $jmeno_autora = get_post_meta( $post_id, 'jmeno_autora', true );

    if ( ! $jmeno_autora ) {
      _e( 'n/a' );  
    } else {
      echo $jmeno_autora;
      if ( $popisek_autora ) echo '<div style="font-size: 10px;">('. $popisek_autora .')</div>';
    }
  }

  // Oblíbené
  // ----------------------
  if ( 'oblibene' === $column ) {
    $oblibene = get_post_meta( $post_id, 'oblibene', true );

    if ( ! $oblibene ) {
      _e( '-' );  
    } else {
      // ikona hvězdičky
      echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><title>rating-star</title><path fill="#f9bc60" d="M23.555,8.729a1.505,1.505,0,0,0-1.406-.98H16.062a.5.5,0,0,1-.472-.334L13.405,1.222a1.5,1.5,0,0,0-2.81,0l-.005.016L8.41,7.415a.5.5,0,0,1-.471.334H1.85A1.5,1.5,0,0,0,.887,10.4l5.184,4.3a.5.5,0,0,1,.155.543L4.048,21.774a1.5,1.5,0,0,0,2.31,1.684l5.346-3.92a.5.5,0,0,1,.591,0l5.344,3.919a1.5,1.5,0,0,0,2.312-1.683l-2.178-6.535a.5.5,0,0,1,.155-.543l5.194-4.306A1.5,1.5,0,0,0,23.555,8.729Z"/></svg>';
    }
  }
	
}


/* ---------------------------------------------------------- */
/* ADMIN STYLING (CSS)
/* ---------------------------------------------------------- */

// CSS styly pro upravu Admin Columns
function my_admin_column_width() {
    echo '<style type="text/css">
        .column-title { text-align: left; width:15% !important; }
        .column-foto_autora { text-align: left; width:70px !important;}
        .column-text_doporuceni { text-align: left; width:40% !important;}
        .column-jmeno_autora { text-align: left; width: 200px !important;}
        .column-oblibene { text-align: left; width:100px !important;}
    </style>';
}

