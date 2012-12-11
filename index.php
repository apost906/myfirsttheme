<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('stylesheet_url')?>" />
		<title><?php echo get_bloginfo('name') ?></title>
	</head>
	<body>
		<h1><?php echo get_bloginfo('name') ?></h1>
		<p><?php echo get_bloginfo('decription') ?></p>
		
		<div class="posts">
		<?php if(have_posts()):?>
			<?php while(have_posts()):?>
				<?php the_post() ?>
				<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
				<?php the_content() ?>
			<?php endwhile ?>
		<?php endif?>
		</div>
	</body>
</html>