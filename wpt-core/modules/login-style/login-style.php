<?php

	add_action( 'login_head', 'login_logo' );
	add_filter( 'login_headerurl', 'login_url' );
	add_filter( 'login_headertitle', 'login_title' );

	function login_logo() {
		
		$config = wpt_get_config();
		$options = $config['modules']['login-style']['options'];

		$defaultSvgPath = 'M12,0 C18.624447,0.00716484761 23.9928352,5.37555305 24,12 C24,18.627417 18.627417,24 12,24 C5.372583,24 0,18.627417 0,12 C0,5.372583 5.372583,0 12,0 Z M12,2 C6.4771525,2 2,6.4771525 2,12 C2,17.5228475 6.4771525,22 12,22 C17.5203344,21.9939376 21.9939376,17.5203344 22,12 C22,6.4771525 17.5228475,2 12,2 Z M12,5 L12.2058372,5.00557314 C13.9121561,5.09549407 15.3833965,6.26453174 15.8466896,7.92500108 C16.3285144,9.6518892 15.6024375,11.4884447 14.07,12.419 L14.07,12.419 L14.817,17.271 C14.8838553,17.7037831 14.7582459,18.1441708 14.4731429,18.4765667 C14.1880398,18.8089627 13.7719164,19.0001703 13.334,19 L13.334,19 L10.666,19 C10.2282872,19 9.81235599,18.8090521 9.52729052,18.4768922 C9.24222506,18.1447323 9.11646763,17.7046268 9.183,17.272 L9.183,17.272 L9.929,12.419 C8.39640541,11.4883479 7.67035679,9.65152633 8.15244718,7.92452071 C8.63453758,6.19751508 10.2069707,5.00231041 12,5 L12,5 Z';
	
		// default settings
		
		$logoWidth =  $options['logoWidth'] ?? '72'; //size in px
		$logoHeight = $options['logoHeight'] ?? $logoWidth; //size in px
		$svgColor = $options['svgColor'] ?? 'ced4da'; // fill color, hex without #
		$svgPath =  $options['svgPath'] ?? $defaultSvgPath;
		
		$svgViewport = 24; // size in px, height and width
		$svgViewbox = '0 0 24 24';
		$svgWidth = $logoWidth; // size in px
		$svgHeight = $logoHeight; // size in px
	
		echo '<style type="text/css">  h1 a { width: '. $svgWidth .'px !important; height: '. $svgHeight .'px !important; background-image:url(\'data:image/svg+xml;charset=UTF-8,<svg width="'. $svgViewport .'" height="'. $svgViewport .'" viewbox="'. $svgViewbox .'" xmlns="http://www.w3.org/2000/svg"><path d="'. $svgPath .'" fill="%23'. $svgColor .'" fill-rule="nonzero"/></svg>\') !important; background-size: cover !important; }  </style>'; 
		
	}
	
	// changing the logo link from wordpress.org to your site
	function login_url() { return home_url(); }
	
	// changing the alt text on the logo to show your site name
	function login_title() { return get_option( 'blogname' ); }
