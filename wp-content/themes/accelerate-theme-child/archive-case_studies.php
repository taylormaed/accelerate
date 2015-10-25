<?php
/**
 * The template for the archive of case studies
 *
 * @package WordPress
 * @subpackage Accelerate_Theme
 * @since Accelerate Theme 1.1
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
            <?php while ( have_posts() ) : the_post(); 
                $image_1 = get_field('image_1');
                $services = get_field('services');
                ?>
                

<article class="case-study">
         <aside class="case-study-sidebar">
             <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <h6><?php echo $services; ?></h6>
            
            <?php the_excerpt(); ?>

    <p><strong><a href="<?php the_permalink(); ?>">View Project</a></strong></p>
</aside>

<div class ="case-study-images">
    <a href="<?php the_permalink(); ?>">
        <?php
$size = "full"; ?>
<?php if($image_1) {
echo wp_get_attachment_image( $image_1, $size );
}
?>
    </a>
</div>
        </article>
        <?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>