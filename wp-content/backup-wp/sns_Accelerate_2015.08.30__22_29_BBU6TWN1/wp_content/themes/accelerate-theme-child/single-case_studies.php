<?php
/**
 * The template for displaying case studies
 *
 *
 *
 * @package WordPress
 * @subpackage Accelerate_Theme
 * @since Accelerate Theme 1.1
 */

get_header(); ?>

	<div id="primary-content" class="site-content">
		<div id="case-content" role="main">
			<?php while ( have_posts() ) : the_post();
                $services = get_field('services');
                $client = get_field('client');
                $link = get_field('site_link');
                $image_1 = get_field('image_1');
                $image_2 = get_field('image_2');
                $image_3 = get_field('image_3'); ?>


<article class="case-study">
         <aside class="case-study-sidebar">
            <h2><?php the_title(); ?></h2>
            <h5><?php echo $services; ?></h5>
            <h4>Client: <?php echo $client; ?></h4>

          <div id="case-study-content"><?php the_content(); ?></div>


    <strong><a href="<?php echo $link; ?>">View Project</a></strong>
</aside>

<div class="case-study-images">

<?php $size = "full"; ?>
<?php if($image_1) {
echo wp_get_attachment_image( $image_1, $size );
}
if($image_2) {
echo wp_get_attachment_image( $image_2, $size );
}
if($image_3) {
echo wp_get_attachment_image( $image_3, $size );
}
?>

</div>
        </article>
        <?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
