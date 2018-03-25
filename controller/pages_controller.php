<?php

/* Just an error handler for now */
class PagesController {
	public function error() {
		require_once( $_SERVER['DOCUMENT_ROOT'] . '/view/pages/error.php' );
	}
}

?>