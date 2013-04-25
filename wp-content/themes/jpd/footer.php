<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
    <div class="content-background-bottom"></div>
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'twentytwelve_credits' ); ?>
			<?php printf( __( 'COPYRIGHT &copy; 2012 JUDY PAULEN DESIGNS, LLC. ALL RIGHTES RESERVED SITE DESIGN: LILY NOTES STUDIO', 'twentytwelve' ), 'WordPress' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>