<?php 
	if( have_posts() ):
		while( have_posts() ):
			the_post(); 
?>
<div class="scrollbar" id="style-4">
			<div class="force-overflow"></div>		
	
		<div id="contenido_post">
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</div>
</div>

<?php endwhile; endif; ?>