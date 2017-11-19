<?php get_header(); the_post(); ?>

<div class="centered">
	<section id="main-content">
		
		<article id="<?php the_ID(); ?>" class="content">
			
			<?php echo the_post_thumbnail('larger-thumb'); ?>
			
			<div class="blog-post">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<p>
					<strong><i class="fa fa-calendar" aria-hidden="true"></i> &nbsp;</strong> <?php echo(types_render_field("the-date", array('raw' => true) )); ?>
					<span>
					<br>
					</span>
					<strong> <i class="fa fa-clock-o" aria-hidden="true"></i> &nbsp;&nbsp;</strong> 
					<?php echo(types_render_field("the-time", array('raw' => true) )); ?>
				</p>
				
				
				
				<?php
					if ( !empty(types_render_field('more-info-title-1')) &&  !empty(types_render_field('more-info-url-1')) ) {
				?>
				<p>
					<span><a href="<?php echo(types_render_field("more-info-url-1", array('raw' => true) )); ?>" target="_blank"><?php echo(types_render_field("more-info-title-1", array('raw' => true) )); ?></a></span>
				<?php 
					} 
					
					if ( !empty( types_render_field('more-info-title-2')) &&  !empty( types_render_field('more-info-url-2')) ) {
				?>
					<span> // <a href="<?php echo(types_render_field("more-info-url-2", array('raw' => true) )); ?>" target="_blank"><?php echo(types_render_field("more-info-title-2", array('raw' => true) )); ?></a></span>
				<?php 
					} 
					if ( !empty( types_render_field('more-info-title-3')) &&  !empty( types_render_field('more-info-url-3')) ) {
				?>
					<span> // <a href="<?php echo(types_render_field("more-info-url-3", array('raw' => true) )); ?>" target="_blank"><?php echo(types_render_field("more-info-title-3", array('raw' => true) )); ?></a></span>
				<?php 
					} 
					if ( !empty( types_render_field('more-info-title-4')) &&  !empty( types_render_field('more-info-url-4')) ) {
				?>
					<span> // <a href="<?php echo(types_render_field("more-info-url-4", array('raw' => true) )); ?>" target="_blank"><?php echo(types_render_field("more-info-title-4", array('raw' => true) )); ?></a></span>
				<?php 
					} 
					if ( !empty( types_render_field('more-info-title-5')) &&  !empty( types_render_field('more-info-url-5')) ) {
				?>
					<span> // <a href="<?php echo(types_render_field("more-info-url-5", array('raw' => true) )); ?>" target="_blank"><?php echo(types_render_field("more-info-title-5", array('raw' => true) )); ?></a></span>
				<?php 
					} 
				?>
				</p>
				<hr>				
				<?php the_content(); ?>
				
				<?php if ( class_exists( 'Jetpack_RelatedPosts' ) ) { echo do_shortcode( '[jetpack-related-posts]' ); } ?>
			</div>	
				
			<div class="blog-post pagination-container">
				<div class="pagination">
					<p>Previous</p><?php previous_post_link(); ?>
				</div>
				<div></div>
				<div class="pagination">
					<p>Next</p><?php next_post_link(); ?>
				</div>
			</div>
		</article>
			
		<!-- news sidebar -->
	
	</section><!-- main-section  -->


 </div><!-- centered  -->	
<?php get_footer(); ?>

