<?php
/**
 * The content sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package terra motive
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>
<div id="content-sidebar" class="content-sidebar widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
</div><!-- #content-sidebar -->
