<?php

/* Get posts from database */
class Post {
	/* Attributes are public so that we can access them using $post->author directly */
	public $id;
	public $author;
	public $content;
	public $timeDate;

	public function __construct( $id, $author, $content, $timeDate ) {
		$this->id       = $id;
		$this->author   = $author;
		$this->content  = $content;
		$this->timeDate = $timeDate;
	}

	public static function all() {
		$list = [];
		$db = Db::getInstance();
		$req = $db->query( 'SELECT * FROM comment_system_posts' );
		/* Create a list of Post objects from the database results */
		foreach( $req->fetchAll() as $post ) {
			$list[] = new Post( $post['id'], $post['author'], $post['content'], $post['time_date'] );
		}
		return $list;
	}
}

?>