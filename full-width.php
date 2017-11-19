<?php /* Template Name: Full-Width */

get_header(); ?>

<div class="centered">		

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
    
    <h2><?php the_title(); // get the page or posting title ?></h2> 
    
    <?php the_content(); // get page or posting written content ?>
    
    <?php endwhile; endif; // end the loop ?>
     
</div><!-- centered  -->

			
<?php get_footer(); ?>