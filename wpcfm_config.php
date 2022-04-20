<?php

isset($_ENV['PANTHEON_ENVIRONMENT'])
	
if( isset($_ENV['PANTHEON_ENVIRONMENT'] ) {
	$root = 'DOCROOT';	
   }
   else {
	$root= 'DOCUMENT_ROOT';	
   }

	
add_filter( 'wpcfm_config_dir', function($dir) {
	return $_ENV[$root] . '/private/config/dev';
}, 10 );
	

  $config_dir = untrailingslashit($_ENV[$root]) . '/private/config';
  $config_url = home_url() . '/private/config';

define( 'WPCFM_CONFIG_DIR', apply_filters( 'wpcfm_config_dir', $config_dir ) );
define( 'WPCFM_CONFIG_URL', apply_filters( 'wpcfm_config_url', $config_url ) );
