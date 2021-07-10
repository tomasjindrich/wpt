<?php 

if ( function_exists('wpt_module_svg_icons') ) {
	wpt_module_svg_icons();
};

function wpt_icon($icon_name) {

  $icons = [
    'facebook' => 'M9.7.026,8.979.012C8.656.006,8.376,0,8.216,0,6.2,0,4.893,1.409,4.893,3.588V4.6a.25.25,0,0,1-.25.25H4.318A1.042,1.042,0,0,0,3.277,5.886v.982A1.042,1.042,0,0,0,4.318,7.909h.325a.25.25,0,0,1,.25.25v5.07A.772.772,0,0,0,5.664,14H7.552a.772.772,0,0,0,.771-.771V8.159a.25.25,0,0,1,.25-.25h.413a1.042,1.042,0,0,0,1.041-1.041V5.886A1.042,1.042,0,0,0,8.986,4.845H8.573a.25.25,0,0,1-.25-.25v-.7c0-.829.243-.829.728-.829H9.68a1.043,1.043,0,0,0,1.043-1.042V1.066A1.045,1.045,0,0,0,9.7.026Z',
    'alarm' => '<g transform="matrix(5.833333333333333,0,0,5.833333333333333,0,0)"><path d="M2.500 13.002 A9.500 9.500 0 1 0 21.500 13.002 A9.500 9.500 0 1 0 2.500 13.002 Z" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"></path><path d="M6.653 20.849L4 23.501" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"></path><path d="M17.345 20.847L20 23.501" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8.5 13.502L12.5 13.502 12.5 7.502" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.832,2.292a3.993,3.993,0,1,0-5.939,5.22" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"></path><path d="M16.168,2.292a3.993,3.993,0,1,1,5.939,5.22" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"></path></g>'

  ];

  $svg_code = '<svg class="svg-icon" viewBox="0 0 140 140" height="32" width="32" xmlns="http://www.w3.org/2000/svg">' . $icons[$icon_name] . '</svg>';

  return $svg_code;

};


function wpt_i($icon_name) {
  $icon_file = WP_PLUGIN_DIR . "/wpt-core/assets/icons/streamline-light/outline/" . $icon_name . ".svg";
  echo $icon_file;
  // include_once $icon_file;
};


function wpt_module_svg_icons() {
  

}
