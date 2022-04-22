<?php

if( isset($_ENV['DOCUMENT_ROOT']) ) {
      add_filter( 'wpcfm_config_dir', function($dir) {
        return $_ENV['DOCUMENT_ROOT'] . '/private/config/dev';
      }, 10 );
   }
   else {
      add_filter( 'wpcfm_config_dir', function($dir) {
        return $_ENV['DOCROOT'] . '/private/config/dev';
      }, 10 );
   }


  $config_dir = untrailingslashit($_ENV[$root]) . '/private/config';
  $config_url = home_url() . '/private/config';
