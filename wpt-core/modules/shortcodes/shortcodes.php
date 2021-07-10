<?php

function wpt_get_year_shortcode() {
  $year = date('Y');
  return $year;
}


add_shortcode('wpt_get_year', 'wpt_get_year_shortcode');
