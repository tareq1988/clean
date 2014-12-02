<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Clean
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'clean' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'clean' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'clean' ), 'Clean', '<a href="http://tareq.wedevs.com" rel="designer">Tareq Hasan</a>' ); ?>
		</div><!-- .site-info -->

        <div class="social-menu">
            <ul>
                <li><a href="http://twitter.com"></a></li>
                <li><a href="http://facebook.com"></a></li>
                <li><a href="http://dribble.com"></a></li>
                <li><a href="http://codepen.io"></a></li>
                <li><a href="http://dropbox.com"></a></li>
                <li><a href="http://flickr.com"></a></li>
                <li><a href="http://plus.google.com"></a></li>
                <li><a href="http://github.com"></a></li>
                <li><a href="http://instagram.com"></a></li>
                <li><a href="http://linkedin.com"></a></li>
                <li><a href="http://pinterest.com"></a></li>
                <li><a href="http://path.com"></a></li>
            </ul>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
