<?php get_header(); ?>
<body>
		<div class="scrollbar2" id="style-1">
			<div class="force-overflow2"></div>
		<div id="wrapper">
			<ul id="menubar">
				<li><a href="<?php bloginfo('url'); ?>/page/home"><img src="<?php bloginfo('template_url');?>/Imagenes/profile6.png"></a>
				<ul>
					<li><a href="<?php bloginfo('url'); ?>/category/writing"><img src="<?php bloginfo('template_url');?>/Imagenes/writing5.png"></a></li>
					<li><a href="<?php bloginfo('url'); ?>/category/art"><img src="<?php bloginfo('template_url');?>/Imagenes/art2.png"></a></li>
					<li><a href="<?php bloginfo('url'); ?>/category/design"><img src="<?php bloginfo('template_url');?>/Imagenes/design4.png"></li></a>
	            </ul>
	            </li>					
				<li><a href="<?php bloginfo('url'); ?>/page/about"><img src="<?php bloginfo('template_url');?>/Imagenes/about1.png"></a></li>
				<li><a href="<?php bloginfo('url'); ?>/page/extras"><img src="<?php bloginfo('template_url');?>/Imagenes/extras.png"></a></li>
			</ul> 
			<div class="scrollbar2" id="style-1">
			<div class="force-overflow2"></div>
		</div>

	<div id="gallery">
		
		<?php if(have_posts() ):
		while(have_posts()):
		the_post(); ?>
		<?php the_post_thumbnail('medium'); ?>

	<?php endwhile; endif;?>
	</div>


		</div>
	</div>
	</body>
<?php get_footer(); ?>

