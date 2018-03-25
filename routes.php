<?php

/* Call to the necessary action */
function call( $controller, $action ) {
	require_once( $_SERVER['DOCUMENT_ROOT'] . '/controller/' . $controller . '_controller.php' );
	/* We may be able to choose the necessary controller via switch/case inthe future.
	For now there is only one, but more can be added in the future. */
	require_once( $_SERVER['DOCUMENT_ROOT'] . '/model/post.php' );
	$controller = new PostsController();
	$controller->{ $action }();
}

/* Adding an entry for the new controller and its actions. More of them can be added later */
$controllers = array( 'pages' => ['error'], 'posts' => ['index'], 'save_posts' => ['save_post_panel'] );

if ( array_key_exists( $controller, $controllers ) ) {
	if ( in_array( $action, $controllers[ $controller ] ) ) {
		call( $controller, $action );
	} else {
		/* Error handlers */
		call( 'pages', 'error' );
	}
} else {
	call( 'pages', 'error' );
}

?>