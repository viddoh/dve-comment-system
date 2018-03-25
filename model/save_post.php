<?php 

/* Handle saving posts to the database */
class SavePost {
	public function __construct() {}
	public static function save() {
		$db = Db::getInstance();
		$author = $_POST['name'];
		$content = $_POST['content'];
		date_default_timezone_set( 'EET' );
		$timeDate = date( "h:i:sa" ) . '&nbsp;' .date( "Y.m.d" );
		try {
			$sql = "INSERT INTO comment_system_posts (author, content, time_date) VALUES ('$author', '$content', '$timeDate')";
			$sth = $db->query( $sql );
		} catch( PDOException $e ) {
			echo $e->getMessage();
		}
	}
}

?>