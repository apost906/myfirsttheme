<div class="search results">
<?php if( have_posts() ) : ?>
	<?php while( have_posts() ) : the_post() ?>
		<h2><a href="<?php permalink_link() ?>"><?php the_title() ?></a></h2>
	<?php endwhile ?>
<?php else: ?>
	<p class="alert">Sorry, there are no pages matching your search</p> 
	
<?php endif ?>
</div>