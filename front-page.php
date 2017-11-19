<?php get_header(); ?>

<div class="centered beer-page">
		<!-- home spotlight begins -->	
		<div class="home-spotlight">
		
			<!-- <img src="<?php bloginfo('template_directory'); ?>/images/" alt="" class="announcement"> -->
			
			<?php if ( is_front_page() ) {
				get_template_part('slides', 'home');
			} ?>
		    
			<!-- home page info boxes begins -->
			<div class="info-boxes">
			
				<div class="info-box hours">
					<img src="<?php bloginfo('template_directory'); ?>/images/rope-left.png" alt="design-element" class="rope-left">
					<img src="<?php bloginfo('template_directory'); ?>/images/rope-right.png" alt="design-element" class="rope-right">
					<h1>Hours:</h1>
					<hr>
					<?php 
                            $args = array('post_type' => 'mhb_hours');
                            $query = new WP_Query($args);
                            while($query -> have_posts()) : $query -> the_post();
                     ?>   
                        	<p><?php the_title(); ?></p>
                     <?php endwhile; ?>
					<a href="https://goo.gl/hvzB4O" target="_blank"><p>Map &amp; Directions &nbsp;</p></a>
				</div>
				
				<div class="info-box current-seasonals">
					<img src="<?php bloginfo('template_directory'); ?>/images/rope-left.png" alt="design-element" class="rope-left">
					<img src="<?php bloginfo('template_directory'); ?>/images/rope-right.png" alt="design-element" class="rope-right">
					<h1 id="current-seasonals-on-tap">Current Seasonals:</h1>
					<hr>
					<?php
			    	    //ale post type 
						$args = array('post_type' => 'ales', 'category_name' => 'seasonal-current', 'showposts' => '6');
						$query = new WP_Query($args);
						while($query -> have_posts()) : $query -> the_post();
					?>   
                        	<p><?php the_title(); ?> &nbsp;<?php echo(types_render_field( "abv", array('raw' => true) )); ?>% ABV</p>
                     <?php endwhile; ?>
                    <a href="http://www.machinehousebrewery.com/beer/#seasonals"><p>All Seasonals &nbsp;</p></a>
				</div>
				
				<div class="info-box matches">
					<img src="<?php bloginfo('template_directory'); ?>/images/rope-left.png" alt="design-element" class="rope-left">
					<img src="<?php bloginfo('template_directory'); ?>/images/rope-right.png" alt="design-element" class="rope-right">
					<h1>Matches on TV:</h1>
					<hr>
					<?php 
                            $args = array('post_type' => 'mhb_matches');
                            $query = new WP_Query($args);
                            while($query -> have_posts()) : $query -> the_post();
                     ?>   
                        	<p><?php the_title(); ?></p>
                     <?php endwhile; ?>
					<a href="http://www.machinehousebrewery.com/matches-on-tv"><p>Full Schedule &nbsp;</p></a>
				</div>
				
			</div>
			<!-- home page info boxes ends -->
		</div>
		<!-- home spotlight ends -->	
					
		<!-- home posts begin -->
		<section class="home-posts">
			<!-- latest news begin -->
			<article class="home-post news">
				<div>
				<a href="http://www.machinehousebrewery.com/news/">
					<h2>Latest News</h2>
				</a>
				<hr>
				<?php
	                //news post
	                $newsPost = new WP_Query('cat=4&posts_per_page=1');
	                if ($newsPost->have_posts()) :  while ($newsPost->have_posts() ) : $newsPost->the_post();
				?>
				<a href="<?php the_permalink(); ?>">
					<?php
						the_post_thumbnail('home-thumb'); 
					?>
                	<p><?php the_title(); ?></p>
                
                </a>
				<a href="http://www.machinehousebrewery.com/news/" class="button">More News &nbsp;</a>
				</div><?php 
                    endwhile; // end of the loop. 
                    endif;
                    wp_reset_postdata();
                ?>
			</article>
			<!-- latest news end -->
			<!-- upcoming events begin -->
			<article class="home-post events">
			<?php 
				$args = array('post_type' => 'event', 'category_name' => 'featured-post', 'showposts' => '1');
				$query = new WP_Query($args);
				while($query -> have_posts()) : $query -> the_post();
			?>
				<div>
					<a href="http://www.machinehousebrewery.com/events/"><h2>Upcoming Events</h2></a>
					<hr>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-thumb'); ?></a>
	                <a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
				<a href="http://www.machinehousebrewery.com/events/" class="button">More Events &nbsp;</a>
				</div>
				<?php 
                    endwhile; // end of the loop.
                    wp_reset_postdata();
                ?>
			</article>
			<!-- upcoming events end -->
			
			
			<!-- instagram begin -->
			<article class="home-post instagram-feed">
				<div>
					<h2>Snaps</h2>
					<hr>
					
					<div id="instawidget">
					<!-- InstaWidget -->
<a href="https://instawidget.net/v/tag/machinehousebrewery" id="link-ef7cbbd9ef5e7912182b5b67520b0bb2811591caace77a27702fb08e3d380390" target="_blank">#machinehousebrewery</a>
<script src="https://instawidget.net/js/instawidget.js?u=ef7cbbd9ef5e7912182b5b67520b0bb2811591caace77a27702fb08e3d380390&width=500px"></script>
	
					</div>
					
					
					<a href="https://www.instagram.com/machinehouse/" target="_blank"><p>@machinehouse</p></a>
					<a href="https://www.instagram.com/explore/tags/machinehousebrewery/" target="_blank" class="button">More on Instagram &nbsp;</a>
				</div>
			</article>
			<!-- instagram end -->
		</section>
		<!-- home posts begin -->		
				
</div><!-- centered  -->

<?php get_footer(); ?>