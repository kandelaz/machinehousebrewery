<?php 
	if(have_posts() ) { 
		the_post(); rewind_posts(); 
	}
?>
<?php
	if ('event' == get_post_type() ) {
		include(TEMPLATEPATH . '/single/single-cat-events.php');
	}
	if ('ales' == get_post_type() ) {
		include(TEMPLATEPATH . '/single/single-beer.php');
	}
	else {
		include(TEMPLATEPATH . '/single/single-post.php');
	}
?>