<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package One Elementor
 */

if ( ! is_active_sidebar( 'sidebar' ) ) {
	return;
}
?>

<aside id="one-elementor-primary-sidebar" class="widget-area">
	<?php dynamic_sidebar( 'sidebar' ); ?>
</aside>
