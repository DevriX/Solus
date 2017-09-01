<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Solus
 */
?>

</div><!-- #content -->

<div class="section--footer-widgets">
	<?php get_sidebar('footer' ); ?>
</div>

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="site-info">
		<span class="copyright">
			<a target="_blank" href="<?php echo esc_url( __( 'https://wordpress.org/', 'solus' ) ); ?>">
				<?php printf( esc_html__( 'Proudly powered by %s', 'solus' ), 'WordPress' ); ?>
			</a>
		</span>
		<span class="theme-author">
			<?php printf( esc_html__( 'Theme: %1$s by %2$s', 'solus' ), 'solus', '<a target="_blank" href="http://devrix.com" rel="designer">DevriX</a>' ); ?>
		</span>
	</div><!-- .site-info -->
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
</body>

</html>
