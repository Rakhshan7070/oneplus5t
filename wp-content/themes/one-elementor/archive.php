<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package One Elementor
 */

get_header();
?>

	<?php if(get_theme_mod('one_elementor_archive_bc', true)) : ?>
		<div class="one-elementor-bc">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<?php $one_elementor_bc_archive_title = get_theme_mod('one_elementor_bc_archive_title'); ?>
						<?php if(!empty ($one_elementor_bc_archive_title)) :?>
						<h2 class="bc-title"><?php echo esc_html($one_elementor_bc_archive_title)?></h2>
						<?php else :?>
						<h2 class="bc-title"><?php esc_html_e('Blog Archive','one-elementor')?></h2>
						<?php endif ;?>
						<div class="bc-list">
							<?php if (function_exists('bcn_display')) bcn_display(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
	
	<section class="one-elementor-blog-section site-archive">
		<div class="container">
			<div class="row">
				<div class="<?php if(is_active_sidebar('sidebar')): ?> col-lg-9 one-elementor-main-area__with-side <?php else :?> col-12 <?php endif; ?>">
					<div class="row one-elementor-masonry-item">
						<?php if ( have_posts() ) : ?>
							<?php
								/* Start the Loop */
								while ( have_posts() ) :
								the_post();

								/*
								 * Include the Post-Type-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'archive' );

							endwhile;

							else :
							get_template_part( 'template-parts/content', 'none' );

							endif;
						?>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="pagination-main">
								<?php if (function_exists("one_elementor_pagination")) :?>
									<?php one_elementor_pagination(); ?>
								<?php endif;?>
							</div>
						</div>
					</div>	
				</div>
				<?php if(is_active_sidebar('sidebar')): ?>
				<div class="col-lg-3 col-12 one-elementor-main-area__sidebar">
					<div class="one-elementor-sidebar one-elementor-sidebar__right">
						<?php get_sidebar(); ?>
					</div>
				</div>
				<?php endif;?>
			</div>
		</div>
	</section>

<?php
get_footer();
