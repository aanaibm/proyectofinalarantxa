<?php get_header(); ?>
		<div id="lateral">	
	<ul>
	<?php if(have_posts()):
	while(have_posts()):
	the_post(); ?>
		<li class="linky"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
	<?php endwhile; endif;?>	
	</ul>
		</div>

<div id="grande">

	<div id="cajatexto">
		<div class="scrollbar" id="style-4">
			<div class="force-overflow"></div>		
	</div>
</div>


		</div>
	</body>
<?php get_footer(); ?>