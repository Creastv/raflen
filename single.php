<?php
get_header();
while (have_posts()) : the_post();
	if (is_singular('realizacje')) :
		get_template_part('templates-parts/content/content', 'realization');
	else :
		get_template_part('templates-parts/content/content', 'post');
	endif;
	if (is_singular('post')) :
		echo '<br>';
		get_template_part('templates-parts/parts/recomended-posts');
	endif;
endwhile;
get_footer();
