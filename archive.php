<?php get_header(); ?>

<div class="centered">
	<section id="main-content">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>

		<div class="blog-post">
			<h1><?php the_title(); ?></h1>
		</div>

		<?php endwhile; endif; wp_reset_postdata(); // end the loop ?>

	</section>
</div><!-- centered  -->

<?php get_footer(); ?>
