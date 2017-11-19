<?php get_header(); the_post(); ?>

<div class="centered">
	<section id="main-content">
			
		<article id="<?php the_ID(); ?>" class="content">
			
			<?php echo the_post_thumbnail('larger-thumb'); ?>
			
			<div class="blog-post">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				
				<?php the_content(); ?>
				<date><p>Posted on <?php the_date(); ?></p></date>
				<?php
					if ( class_exists( 'Jetpack_RelatedPosts' ) ) {
					    echo do_shortcode( '[jetpack-related-posts]' );
					}
				?>
			</div>
			<div class="blog-post pagination-container">
				<div class="pagination">
					<p>Previous</p><?php previous_post_link(); ?>
				</div>
				
				<div class="pagination second">
					<p>Next</p><?php next_post_link(); ?>
				</div>
			</div>
		</article>
	</section><!-- main-section  -->
 </div><!-- centered  -->	
<?php get_footer(); ?>
					
				
					
				