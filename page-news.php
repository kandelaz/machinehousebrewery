<?php /* Template Name: Page-News */
get_header(); ?>
<div class="centered">	
	<div id="always-on-tap" class="title-top">
		<div class="wood-block"><h1 class="center">LATEST NEWS</h1></div>
	</div>
	<section id="main-content">
    	<article class="content-1-col">
    		<section class="cards">
    			<?php	
					//news post
		            $newsPost = new WP_Query('cat=4&posts_per_page=3');
		            if ($newsPost->have_posts()) : 
		            while ($newsPost->have_posts() ) : $newsPost->the_post();
				?>		
				<article class="card">
					<div class="news-page">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-thumb'); ?></a>
						<a href="<?php the_permalink(); ?>"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></a>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>"><p>More</p></a>
					</div>
				</article>	
			<?php endwhile; // end of the loop. ?> 
			<?php endif; wp_reset_postdata(); ?>
			</section>
		</article>				
	</section><!-- main-section -->
</div><!-- centered  -->	
<?php get_footer(); ?>	