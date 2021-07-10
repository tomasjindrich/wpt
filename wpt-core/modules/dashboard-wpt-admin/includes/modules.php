<?php

// modules
echo "<strong>Modules</strong><br>";
foreach ( $config['modules'] as $key => $item ) {

  $color_dot = $item['enabled'] ? '#24b414' : '#ced4da';
  $color_text = !$item['enabled'] ? ' color: #ced4da;' : null;

  echo ("<div style='margin-top 2px; margin-bottom:2px;" . $color_text . "'><span style='margin-right: 0.5em; border-radius: 100%; display: inline-block; width: 7px; height: 7px;  background-color: " . $color_dot . "'></span> " . $key ."</div>");
 
}; 