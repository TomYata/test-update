<?php
/**
 * @package Test Update
 * @version 1.2
 */
/*
Plugin Name: test Update
Plugin URI: https://yata.fr/
Description: Test
Author: Tom
Version: 1.2
*/

include_once(plugin_dir_path(__FILE__).'updater/update.php');
$updater = new Test_Update( __FILE__ ); // instantiate our class
$updater->set_username( 'TomYata' ); // set username
$updater->set_repository( 'test-update' ); // set repo
$updater->initialize(); // initialize the updater
