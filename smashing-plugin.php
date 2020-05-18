<?php
/*
	Plugin Name: Bureau Vet test plugin
	Description: Dit is een update, :D
	Version: 4.0.0
	Author: Sjardo
	Author URI: http://www.sjardo.com
*/
if( ! class_exists( 'Smashing_Updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}

$updater = new Smashing_Updater( __FILE__ );
$updater->set_username( 'Sjardo' );
$updater->set_repository( 'smashing-updater-plugin' );
/*
	$updater->authorize( 'abcdefghijk1234567890' ); // Your auth code goes here for private repos
*/
$updater->initialize();
