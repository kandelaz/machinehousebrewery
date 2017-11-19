<?php //* Template Name: Page-Events */
get_header(); ?>
<div class="centered">	
	<div id="always-on-tap" class="title-top">
		<div class="wood-block"><h1 class="center">UPCOMING EVENTS</h1></div>
	</div>
	
	<section id="main-content">
    	<article class="content-1-col">
    	    
    	    <section class="cards">
	    	    <?php
	    	    //events post type 
				$args = array('post_type' => 'event', 'showposts' => '6');
				$query = new WP_Query($args);
				while($query -> have_posts()) : $query -> the_post();
				?>
						
				<article class="card">
					<div class="news-page">
						<a href="<?php the_permalink(); ?>"><span class="event-date"><?php echo(types_render_field("the-date", array('raw' => true) )); ?></span></a>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-thumb'); ?></a>
						<a href="<?php the_permalink(); ?>"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></a>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>"><p>More</p></a>
					</div>
				</article>	
				<?php endwhile; // end of the loop. 
				wp_reset_postdata();
				?>
    	    </section>
    	    	
		</article>
	</section><!-- main-section  -->
	
	
			
				
</div><!-- centered  -->	
<?php get_footer(); ?>	

									