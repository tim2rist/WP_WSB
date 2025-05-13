<?php
/**
 * Template Name: Custom Home Page
 *
 * @package Auto Motors
 * @subpackage auto_motors
 */

get_header(); ?>

<main id="tp_content" role="main">
	<?php do_action( 'automobile_hub_before_slider' ); ?>

	<?php get_template_part( 'template-parts/home/slider' ); ?>
	<?php do_action( 'automobile_hub_after_slider' ); ?>

	<?php get_template_part( 'template-parts/home/about' ); ?>
	<?php do_action( 'automobile_hub_after_about' ); ?>

	<?php get_template_part( 'template-parts/home/featured-car' ); ?>
	<?php do_action( 'auto_motors_after_featured_car' ); ?>

	<?php get_template_part( 'template-parts/home/home-content' ); ?>
	<?php do_action( 'automobile_hub_after_home_content' ); ?>
</main>

<?php get_footer();