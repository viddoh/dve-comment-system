<!-- Comments panel -->
<div class="comment-system-app-comments-heading">
	<h3 class="text-center">Comments:</h2>
</div>

<?php foreach(array_reverse( $posts ) as $post) { ?>
	<div class="comment-system-app-comment">
		<p><strong><?php echo $post->author; ?></strong> commented on <?php echo $post->timeDate; ?></p>
		<p><?php echo $post->content; ?></p>
	</div>
<?php } ?>