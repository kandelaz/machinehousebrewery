<?php get_header(); the_post(); ?>

<div class="centered">	
	
	<section id="main-content">
    	
		
		<?php the_post_thumbnail('medium-thumb'); ?>

		<div id="<?php the_ID(); ?>" class="blog-post">
			<h1 class="small-caps"><?php the_title(); ?></h1>
			<p class="info"><?php echo(types_render_field( "long-description", array('raw' => true) )); ?></p>
			<br>
			<div class="specs">
				<p><span class="maroon"><strong>ABV:</strong></span> &nbsp;<?php echo(types_render_field( "abv", array('raw' => true) )); ?>%</p>
				<p><span class="maroon"><strong>SRM:</strong></span> &nbsp;<?php echo(types_render_field( "srm", array('raw' => true) )); ?></p>			
				<p><span class="maroon"><strong>OG:</strong></span> &nbsp;<?php echo(types_render_field( "og", array('raw' => true) )); ?></p>
			</div>
			<div class="specs">
				<p><span class="maroon"><strong>FG:</strong></span> &nbsp;<?php echo(types_render_field( "fg", array('raw' => true) )); ?></p>
				<p><span class="maroon"><strong>IBU:</strong></span> &nbsp;<?php echo(types_render_field( "ibu", array('raw' => true) )); ?></p>
				<p><span class="maroon"><strong>&nbsp;</strong></span> &nbsp; </p>

			</div>
			<br>
			<div class="specs">
			<p><span class="maroon"><strong>Mash:</strong></span><br><?php echo(types_render_field( "mash", array('raw' => true) )); ?></p>
			<p><span class="maroon"><strong>Hops:</strong></span><br><?php echo(types_render_field( "hops", array('raw' => true) )); ?></p>
			</div>
			<br><br>
			
		</div>
		
	</section>
	<hr>
	<br>
		
</div><!-- centered  -->
<?php get_footer(); ?>
