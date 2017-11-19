<?php /* Template Name: Page-Beer */
get_header(); ?>


<script>
	$("article.card").css("background-color")
</script>


<div class="centered">	
	
	<div id="always-on-tap" class="title-top">
		<div class="wood-block"><h1 class="center">SIGNATURE ALES</h1></div>
	</div>
	
	<section class="cards">
    	<?php
	    //ale post type 
		$args = array('post_type' => 'ales', 'category_name' => 'always-on-tap', 'showposts' => '3');
		$query = new WP_Query($args);
		while($query -> have_posts()) : $query -> the_post();
		?>		
		<article class="card bg-white">
			<div class="ales">
				<h1><?php the_title(); ?></h1>
				<img src="<?php echo(types_render_field( "ale-image", array('raw' => true) )); ?>" alt="machine-house-brewery-beers-cask-beer-english-style-georgetown-seattle">
				<p><span class="maroon"><?php echo(types_render_field( "abv", array('raw' => true) )); ?>% ABV</span></p>
				<p class="info"><?php echo(types_render_field( "short-description", array('raw' => true) )); ?></p>
				<br>
				<?php
					$specs = types_render_field('srm');
					if (!empty($specs)) {
				?>
					<a href="<?php the_permalink(); ?>">Learn more</a>
				<?php 
					} 
				?>
				<br>
			</div>
		</article>
		<?php endwhile; // end of the loop. 
		wp_reset_postdata();
		?>
	</section>
	<hr>
	<br>
	
	<div id="seasonals" class="title-top">
		<div class="wood-block"><h1 class="center">SEASONALS NOW ON TAP</h1></div>
	</div>  
      
      
      <section class="blog-spot cards">
    		
	    		<?php
	    	    //ale post type 
				$args = array('post_type' => 'ales', 'category_name' => 'seasonal-current', 'showposts' => '12');
				$query = new WP_Query($args);
				while($query -> have_posts()) : $query -> the_post();
				?>		
				
				<article class="card">
					<div class="ales">
						<h1><?php the_title(); ?></h1>
						<img src="<?php echo(types_render_field( "ale-image", array('raw' => true) )); ?>" alt="machine-house-brewery-beers-cask-beer-english-style-georgetown-seattle">
						<p><span class="maroon"><?php echo(types_render_field( "abv", array('raw' => true) )); ?>% ABV</span></p>
						<p class="info"><?php echo(types_render_field( "short-description", array('raw' => true) )); ?></p>
						<br>
						<?php
							$specs = types_render_field('og');
							if (!empty($specs)) {
						?>
							<a href="<?php the_permalink(); ?>">Learn more</a>
						<?php 
							} 
						?>
						<br>
					</div>
				</article>
    	<?php endwhile; // end of the loop. 
			wp_reset_postdata();
			?>
		</section>
		
		<hr>
	<br>
	<div id="seasonals" class="title-top">
		<div class="wood-block"><h1 class="center">PAST SEASONALS <small>[NOT ON TAP]</small></h1></div>
	</div>  
      
      
      <section class="blog-spot cards">
    		
	    		<?php
	    	    //ale post type 
				$args = array('post_type' => 'ales', 'category_name' => 'seasonal-past', 'showposts' => '15');
				$query = new WP_Query($args);
				while($query -> have_posts()) : $query -> the_post();
				?>		
				
				<article class="card bg-white">
					<div class="ales">
						<h1><?php the_title(); ?></h1>
						<img src="<?php echo(types_render_field( "ale-image", array('raw' => true) )); ?>" alt="machine-house-brewery-beers-cask-beer-english-style-georgetown-seattle">
						<p><span class="maroon"><?php echo(types_render_field( "abv", array('raw' => true) )); ?>% ABV</span></p>
						
						<p class="info"><?php echo(types_render_field( "short-description", array('raw' => true) )); ?></p>
						
						<?php
							$specs = types_render_field('og');
							if (!empty($specs)) {
						?>
							<a href="<?php the_permalink(); ?>">Learn more</a>
						<?php 
							} 
						?>
											
					</div>
				</article>
    	<?php endwhile; // end of the loop. 
			wp_reset_postdata();
			?>
		</section>
		<hr>
		<br>
		<br>
</div><!-- centered  -->
  
<?php get_footer(); ?>
