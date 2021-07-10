<?php

// css
echo "<br><br>";
echo "<strong>Theme Assets</strong><br>";
foreach ( $config['assets']['css'] as $key => $item ) {
  if ( $item['enabled'] ) {
      echo 'assets/css/' . $item['file'];
      echo "<br>";
  };
};