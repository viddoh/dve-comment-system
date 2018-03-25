<?php

/* Get the list of all existing posts */
class PostsController {
	public function index() {
		/* Get the list of all existing posts */
		$posts = Post::all();
		/* Require panels for creating and displaying comments */
		require_once( $_SERVER['DOCUMENT_ROOT'] . '/view/posts/write_post_panel.php' );
		require_once( $_SERVER['DOCUMENT_ROOT'] . '/view/posts/index.php' );
	}
}

?>