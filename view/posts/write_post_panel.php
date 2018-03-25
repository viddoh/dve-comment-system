<!-- Comments writing block -->
<div class="comment-system-app-write-post-panel">
	<form action="controller/save_post_controller.php" method="Post">
		<div class="form-group">
			<label for="name">Your name:</label>
			<input type="text" class="form-control comment-system-app-write-post-name" name="name" id="name">
		</div>
		<div class="form-group">
			<label for="content" >Your comment:</label>
			<textarea class="form-control comment-system-app-write-post-input" name="content" id="content"></textarea>
		</div>
		<input type="submit" class="btn btn-info comment-system-app-write-post-submit" value="Submit">
	</form>
</div>