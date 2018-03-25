<?php

/* Create necessary database and table for appliction */
if ( ! function_exists( 'comments_app_init' ) ) {
	function comments_app_init() {

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "comment-system-app";

		/* Create connection */
		$connection = new mysqli( $servername, $username, $password );

		/* Check connection */
		if ( $connection->connect_error ) {
			die( "Connection failed: " . $connection->connect_error );
		}

		/* Create new database for comment system app's functioning */
		$create_db = "CREATE DATABASE `$dbname`";
		if ( $connection->query( $create_db ) === TRUE ) {
			echo "comment-system-app database created successfully";
		} else {
			echo "Error creating database: " . $connection->error;
		}

		$connection = new mysqli( $servername, $username, $password, $dbname );

		/* Create table for comment-system-app database */
		$create_posts_table = "CREATE TABLE comment_system_posts (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
		author VARCHAR(30) NOT NULL,
		content TINYTEXT,
		time_date VARCHAR(50)
		)";

		if ( $connection->query( $create_posts_table ) === TRUE ) {
			echo "<br>comment_system_posts table created successfully";
		} else {
			echo "<br>Error creating table: " . $connection->error;
		}
		
		$connection->close();
	}
}

comments_app_init();

?>