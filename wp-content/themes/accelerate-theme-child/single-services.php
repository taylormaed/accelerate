<?php
/**
 * The template for displaying services
 *
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate 1.1
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post();
									$image_right = get_field('image_right');
									$image_left = get_field('image_left');
									$size = 'medium'?>;


	<div class="service">



<?php if($image_left) { ?>
<div class="service-images-left">
	<?php echo wp_get_attachment_image( $image_left, $size ); ?>
						</div>
		<?php } ?>

	<?php if($image_right) { ?>
	<div class="service-images-left">
<?php echo wp_get_attachment_image( $image_right, $size ); ?>
						          </div>
						          <?php } ?>
						  <strong> <h2> <?php the_title(); ?></h2></strong>

						  <?php the_content(); ?>

						</div>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
