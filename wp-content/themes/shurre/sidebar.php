<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ShUrRe
 */

//if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	//return;
//}
//?>

<!-- <aside id="secondary" class="widget-area"> -->
	<!-- <?php //dynamic_sidebar( 'sidebar-1' ); ?> -->
<!-- </aside> -->
<!-- #secondary -->
<div id="sidebar-primary" class="sidebar">
	    <?php if ( is_active_sidebar( 'primary' ) ) : ?>
	        <?php dynamic_sidebar( 'primary' ); ?>
	        
	    <?php else : ?>
	        <!-- Time to add some widgets! -->
	    <?php endif; ?>
	</div>