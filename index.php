<!DOCTYPE html>
<html>
	<head>
		<?php get_header(); ?>
	</head>
	<body>
		<div id="wrapper">
			<header>
				<h1><?php bloginfo('name') ?></h1>
			</header>
			<nav id="primary-nav">
				<?php get_template_part('nav') ?>
			</nav>
			<div id="main">
				<div class="row">
					<!-- MAIN COLUMN -->
					<div class="span9">
						<?php 
						/**
						 * Check to see if the current request
						 * is_category()
						 * is_front_page()
						 * is_home()
						 * is_404()
						 * is_archive()
						 * is_page()
						 * is_single() --> e.g.
						 * is_tag()
						 * is_search() --> a page display search results
						 */
						if(is_front_page())	{
							// Includes file named content-home.php
							get_template_part('content','home');
						}	elseif (is_page() || is_single())	{
							// Includes file named content-single.php
							get_template_part('content','single');
						}	elseif (is_search())	{
							// Includes file named content-search.php
							get_template_part('content','search');
						}	else	{
							// Includes file named content-blog.php
							get_template_part('content','blog');
						}
						?>
					</div>
					<!-- RIGHT SIDEBAR -->
					<div class="span3">
						<?php get_sidebar(); ?>
					</div>
				</div>
				
			</div>
			<footer>
				<?php get_footer(); ?>
			</footer>
		</div>
	</body>
</html>