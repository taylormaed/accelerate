<?php
/**
 * The template for displaying the About page.
 *
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate 1.1
 */

get_header(); ?>

<section class="about-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .about-page -->



<p><a href="http://localhost:8888/accelerate/">Accelerate</a>
is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.
</p>
</div>
</div>
</section>

<?php query_posts('posts_per_page=4&post_type=services'); ?>
<?php while ( have_posts() ) : the_post();
		$image_right = get_field('image_right');
									$image_left = get_field('image_left');
									$size = 'medium'?>
<div id="container" class="clearfix">
          <!-- moved the if above the div so it will not be created if we are doing image left -->
          <?php if($image_right) { ?>
            <div class="service-image-right">
              <?php
              $size = "full";
              echo wp_get_attachment_image( $image_right, $size );
              ?>
            </div>
          <?php } ?>

          <!-- moved the if above the div so it will not be created if we are doing image right -->
          <?php if($image_left) { ?>
            <div class="service-image-left">
              <?php
              $size = "full";
              echo wp_get_attachment_image( $image_left, $size );
              ?>
            </div>
          <?php } ?>

          <h4 class="titleclass"><?php the_title(); ?></h4>
          <p><?php the_content(); ?><p>

        </div> <!-- #container -->
	   <?php endwhile; // end of the loop. ?>

	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>
