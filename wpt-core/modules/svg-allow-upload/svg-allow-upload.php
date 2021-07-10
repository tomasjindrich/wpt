<?php

/**
 * Snippet Name: Allow SVG Upload
 * Snippet URL: https://www.wpcustoms.net/snippets/allow-svg-upload/
 */
  // Allow SVG Upload

  add_filter('upload_mimes', 'custom_upload_mimes');

  function custom_upload_mimes ( $existing_mimes=array() ) {
    // add the file extension to the array
    $existing_mimes['svg'] = 'mime/type';
    // call the modified list of extensions
    return $existing_mimes;
  } 

  ?>