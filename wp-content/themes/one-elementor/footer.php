<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package One Elementor
 */

?>
</div><!-- #content -->
	<footer id="colophon" class="one-elementor-footer">
		<?php if(is_active_sidebar('one_elementor_footer_1')) : ?>
		<div class="one-elementor-footer__top">
			<div class="container">
				<div class="row">
					<?php if(is_active_sidebar('one_elementor_footer_1')) : ?>
						<div class="col-lg-4 col-12">
							<?php dynamic_sidebar('one_elementor_footer_1'); ?>
						</div>
					<?php endif; ?>
					<?php if(is_active_sidebar('one_elementor_footer_2')) : ?>
						<div class="col-lg-4 col-12">
							<?php dynamic_sidebar('one_elementor_footer_2'); ?>
						</div>
					<?php endif; ?>
					<?php if(is_active_sidebar('one_elementor_footer_3')) : ?>
						<div class="col-lg-4 col-12">
							<?php dynamic_sidebar('one_elementor_footer_3'); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<div class="one-elementor-footer__bottom">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="one-elementor-footer__branding text-center">
							<p class="one-elementor-footer__site"><?php esc_html_e('&copy; All Right Reserved ','one-elementor'); ?> <a class="one-elementor-footer__url" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('title'); ?></a> <?php echo  esc_html(date_i18n( __( 'Y' , 'one-elementor' ) ));?></p>
							<p class="one-elementor-footer__devs"><?php
							printf( esc_html__( 'Theme %2$s  By  %1$s', 'one-elementor' ), '<a href="#" target="_blank" >Codeglim</a>' , '<a href="#" target="_blank">One Elementor</a>' );?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
</div><!-- End Page -->

<?php wp_footer(); ?>

</body>
</html>
