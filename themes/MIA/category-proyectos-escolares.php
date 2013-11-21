<?php 
	$args = array(
		'post_type' => 'post',
			'category' => 9,
				'numberposts' => 2,
	);

	$resultados = get_posts($args);
		foreach ($resultados as $proyecto): setup_postdata($proyecto);
			echo '<pre>';
			echo '</br>';
			echo $proyecto -> post_title;
			echo '</pre)';
		endforeach; wp_reset_postdata(); ?>	
?>



<?php if(have_posts()): while(have_posts()): the_post(); 
		echo $post->post_title;
		echo '</br>';
     endwhile; endif; ?>
