<?php

/* Handle connection to the database */
class Db {
	private static $instance = NULL;
	private function __construct() {}
	private function __clone() {}
	public static function getInstance() {
		if ( ! isset( self::$instance ) ) {
			self::$instance = new PDO( 'mysql:host=localhost;dbname=comment-system-app', 'root', '' );
		}
		return self::$instance;
	}
}

?>