?php
/**
 * This is the template for displaying the 404 page.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate 1.1
 * Author:       Taylor Elliott
 * Author URI:   http://taylormaed.org
 * Template:     accelerate-theme
 */
get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<h2>You appear to be lost!</h2>
			
			<h4><a href="<?php echo home_url(); ?>">Let's take you back home</a>. :)</h4>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>