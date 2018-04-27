<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wudtichai
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<p>&copy; <?php the_date('Y'); ?> - <?php bloginfo( 'name' ); ?> </p>
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
