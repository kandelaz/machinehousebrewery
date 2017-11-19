<div id="slider">
<?php 
$args = array(
'post_type' 	=> 'slides',
'orderby' 		=> 'menu_order',
'post_per_page' => -1
);

$slides = new WP_Query($args);

if ($slides -> have_posts() ) : ?>		
	
	
<!-- Begin Flex Slider -->
<div class="flexslider">
    <ul class="slides">
    <?php while ($slides -> have_posts() ) : $slides -> the_post(); ?>	
		<li>
	    	<?php the_post_thumbnail( 'slides' ); ?>
	    </li>
	<?php endwhile; ?>
    </ul>   
</div>
<!-- End Flex Slider -->

<?php  endif; ?>
</div>