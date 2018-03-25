<?php 

/* Handle saving comments to the database */
require_once( $_SERVER['DOCUMENT_ROOT'] . '/model/connection.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/controller/posts_controller.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/model/save_post.php' );

$save = SavePost::save();

require_once( $_SERVER['DOCUMENT_ROOT'] . '/view/posts/save_post_panel.php' );

?>