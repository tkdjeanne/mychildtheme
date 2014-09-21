<?php
/**
 * Sidebar template containing the primary and secondary widget areas
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

		<div id="primary" class="widget-area" role="complementary">
			<ul class="xoxo">

<?php
	/*
	 * When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, and I've removed the conditional statements
         * that added widgets. 
	 */
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
           
			

		<?php endif; // end primary widget area ?>
			
		</div><!-- #primary .widget-area -->

<?php
	// A second sidebar for widgets, just because. I've removed the conditional statements here as well. 
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>
         
		</div><!--#secondary .widget-area -->

<?php endif; ?>
