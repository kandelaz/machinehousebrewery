<?php get_header(); ?>

<div class="centered beer-page">
		<!-- home spotlight begins -->
		<div class="home-spotlight">

			<div id="slider">
				<!-- Begin Flex Slider -->
			    <div class="flexslider">
			        <ul class="slides">
			        <li><img src="<?php bloginfo('template_directory'); ?>/images/slide-01.jpg" width="1020" height="510" alt="Image One"></li>
			        <li><img src="<?php bloginfo('template_directory'); ?>/images/slide-02.jpg" width="1020" height="510" alt="Image Two"></li>
			        <li><img src="<?php bloginfo('template_directory'); ?>/images/slide-03.jpg" width="1020" height="510" alt="Image Three"></li>

			        </ul>
			    </div>
			    <!-- End Flex Slider -->
		    </div>

			<!-- home page info boxes begins -->
			<div class="info-boxes">
				<!-- home page hours -->
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
				<!-- home page current seasonals -->
				<div class="info-box current-seasonals">
					<img src="<?php bloginfo('template_directory'); ?>/images/rope-left.png" alt="design-element" class="rope-left">
					<img src="<?php bloginfo('template_directory'); ?>/images/rope-right.png" alt="design-element" class="rope-right">
					<h1 id="current-seasonals-on-tap">Current Seasonals:</h1>
					<hr>
					 <?php
                            $args = array('post_type' => 'mhb_seasonals');
                            $query = new WP_Query($args);
                            while($query -> have_posts()) : $query -> the_post();
                     ?>
                        	<p><?php the_title(); ?></p>
                     <?php endwhile; ?>
                    <a href="http://www.machinehousebrewery.com/beer/#seasonals"><p>All Seasonals &nbsp;</p></a>
				</div>
				<!-- home page matches on TV -->
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
				$args = array('post_type' => 'event', 'showposts' => '1');
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
				<a href="https://www.instagram.com/machinehouse/" target="_blank">
					<h2>Snaps</h2>
					<hr>

					<!-- INSTANSIVE WIDGET -->
                    <script src="//instansive.com/widget/js/instansive.js"></script>
                    <iframe src="//instansive.com/widgets/cfec86b25b1f8b81ec74aa78b766d3bafd7291c3.html" id="instansive_cfec86b25b" name="instansive_cfec86b25b"  scrolling="no" allowtransparency="true" class="instansive-widget" style="width: 100%; overflow: hidden;"></iframe>
					<!-- LightWidget WIDGET -->
					
					<p>@machinehouse</p>
	            </a>
	            <a href="https://www.instagram.com/explore/tags/machinehousebrewery/" target="_blank" class="button">More on Instagram &nbsp;</a>

			</article>
			<!-- instagram end -->
		</section>
		<!-- home posts begin -->

</div><!-- centered  -->
<?php get_footer(); ?>
