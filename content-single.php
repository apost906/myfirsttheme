<?php if(have_posts())	: ?>
	<?php while(have_posts()) : the_post() ?>
		<h2><?php the_title() ?></h2>
		<div class="story-content">
			<?php the_content() ?>
		</div>
		<?php if(comments_open()) : ?>
			<h4>Comments</h4>
			<?php $comments = get_comments(array('post_id'=>$post->ID)); ?>
			<ul class="comments"><?php wp_list_comments(null,$comments); ?></ul>
			<?php if(comments_open())	minecraft_comment_form(); ?>
		<?php endif?>
		
	<?php endwhile ?>
<?php endif ?>
		