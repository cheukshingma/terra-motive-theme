<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package terra motive
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'terra-motive' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'terra-motive' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'terra-motive' ), 'Terra Motive', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<!-- Flex Slider --> 
<script type="text/javascript" src="/~ccit2718/wp-content/themes/terra-motive/js/jquery.flexslider.js" ></script>
<script type="text/javascript">
	// Can also be used with $(document).ready()
	jQuery(window).load(function() {
	  jQuery('.flexslider').flexslider({
		animation: "slide"
	  });
	});
</script>

<?php wp_footer(); ?>

</body>
</html>
