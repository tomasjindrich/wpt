<?php

// add default image setting to ACF image fields
// let's you select a defualt image
// this is simply taking advantage of a field setting that already exists
function add_default_value_to_image_field($field) {
  acf_render_field_setting( $field, array(
    'label'			      => 'Výchozí obrázek',
    'instructions'		=> 'Objeví se při vytvoření nového příspěvku',
    'type'		      	=> 'image',
    'name'		      	=> 'default_value',
  ));
}



// Placeholder v title poli
add_filter('enter_title_here', 'my_title_place_holder' , 20 , 2 );
function my_title_place_holder($title , $post){

    if( $post->post_type == 'doporuceni' ){
        $my_title = __("Zadejte pojmenování pro doporučení (například jméno autora)");
        return $my_title;
    }

    return $title;
    
}