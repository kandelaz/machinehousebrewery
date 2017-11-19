<?php get_header(); ?>

<div class="centered">		
	<section id="main-content">
        
        	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
    
			<?php the_post_thumbnail('larger-thumb'); ?>
			
			<div class="blog-post">
				<h1><?php the_title(); ?></h1> 
				<?php the_content(); // get page or posting written content ?>
				<?php endwhile; endif; wp_reset_postdata(); // end the loop ?>
			</div>
			        	
	</section>
</div><!-- centered  -->
  
<?php get_footer(); ?>
