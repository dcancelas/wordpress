<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main" style="background-color: dodgerblue; color: white; animation: changecolor 2s linear infinite alternate both;">

	<div class="section-inner thin error404-content">

		<h2 class="entry-title"><?php _e( 'No hay nada xd', 'twentytwenty' ); ?></h2>

		<div class="intro-text"><p><?php _e( 'Quizás deberias revisar la url.', 'twentytwenty' ); ?></p></div>

		<?php
		get_search_form(
			array(
				'label' => __( '404 not found', 'twentytwenty' ),
			)
		);
		?>

	</div><!-- .section-inner -->

    <?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

</main><!-- #site-content -->

<?php
get_footer();
