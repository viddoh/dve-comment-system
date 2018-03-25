<?php

/* Connect to database */
require_once( $_SERVER['DOCUMENT_ROOT'] . '/model/connection.php' );

if ( isset( $_GET['controller'] ) && isset( $_GET['action'] ) ) {
	/* Choose necessry controller and actions if they are defined by query */
	$controller	= $_GET['controller'];
	$action		= $_GET['action'];
} else {
	/* Default controller and action */
	$controller	= 'posts';
	$action		= 'index';
}

/* Require the basic app layout */
require_once( $_SERVER['DOCUMENT_ROOT'] . '/view/layout.php' );

?>