<?php

if ( ! class_exists( 'WP_CLI' ) ) {
	return;
}

$wpcli_create_project_autoloader = dirname( __FILE__ ) . '/vendor/autoload.php';
if ( file_exists( $wpcli_create_project_autoloader ) ) {
	require_once $wpcli_create_project_autoloader;
}

WP_CLI::add_command( 'create-project', 'Create_Project' );
