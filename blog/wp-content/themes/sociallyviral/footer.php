<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SociallyViral
 */
?>

	</div><!-- #content -->
</div><!-- .main-container -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<div class="copyrights">
				<a href="<?php echo esc_url( __( 'http://ivhseniorcare.com/', 'sociallyviral' ) ); ?>"><?php printf( __( 'Proudly powered by ', 'IvhSeniorcare' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( '%1$s Theme by %2$s.', '' ), 'ivhseniorcare', '<a href="http://ivhseniorcare.com/" rel="designer"></a>' ); ?>
			</div>
			<a href="#blog" class="toplink" rel="nofollow"><i class="icon-angle-up"></i></a>
			<nav id="navigation" class="footer-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
			</nav><!-- #site-navigation -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>