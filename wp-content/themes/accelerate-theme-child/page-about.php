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
  
    <?php while ( have_posts() ) : the_post(); ?>
      <div class='homepage-hero'>
        <?php the_content(); ?>
      </div>
    <?php endwhile; // end of the loop. ?>
    
</section>  

<section class="header--about">
<h2 style="text-align: center;"><strong>OUR SERVICES</strong></h2>
<p style="text-align: center;">We take pride in our clients and the content we create for them.</p>
<p style="text-align: center;">Here's a brief overview of our offered services.</p>
</section>

<div class="site-content">

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

</div><!-- site-content -->

<?php get_footer(); ?>