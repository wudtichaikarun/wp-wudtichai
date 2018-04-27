<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wudtichai
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container">

		<?php if ( have_posts() ) : ?>
			<?php while(have_posts()) :	the_post(); ?>

				<article class="post">
					<h3 class="post__header"><?php the_title(); ?></h3>
					<p class="post__title">Create By <?php the_author(); ?> on <?php the_time( 'F j, Y g:i a' ); ?></p>					
					<p class="post__content"><?php the_content(); ?></p>
			  </article>

			<?php endwhile; ?>
		<?php else : ?>
			<?php echo wpautop( 'sorri, No posts were found.'); ?>	
	  <?php	endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
