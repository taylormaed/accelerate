<?php
/**
 * The template for displaying all pages
 *
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate 1.1
 */

get_header(); ?>

<div id="main" class="site-main">
		<section class="about-page">
			<div class="site-content">
			<div class="about-page-hero">
			<?php while ( have_posts() ) : the_post(); ?>

              <strong> <h2> <?php the_title(); ?></h2></strong>

				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>






<p><a href="http://localhost:8888/accelerate/">Accelerate</a>
is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.
</p>
</div>
</div>
</section>
