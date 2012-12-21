<?php
// Register a single navigation menu to be
// constructed in the admin panel, and
// displayed in nav.php
register_nav_menus(array(
	'primary' => 'Primary Navigation'		
));

function minecraft_comment_form()	{
	global $post;
	?>
	
	<form method="post" action="<?php bloginfo('url'); ?>/wp-comments-post.php">
	
		<input type="hidden" name="comment_post_ID" value="<?php echo $post->ID; ?>" />
		<input type="hidden" name="comment_parent" id="comment_parent" value="0"/>
		
		<h4>Author</h4><input name="author" type="text" />
		<h4>Email</h4><input name="email" type="text" />
		<h4>Comment</h4>
		<textarea id="comment" name="comment" ></textarea>
		<br></br>
		<input name="submit" type="submit" value="Post Comment">
	</form>
	<?php 
}

?>
