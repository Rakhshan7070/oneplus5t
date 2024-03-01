<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package One Elementor
 */

get_header();

?>
	
	<?php if(get_theme_mod('one_elementor_search_bc', true)) : ?>
		<div class="one-elementor-bc">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2 class="bc-title"><?php printf( esc_html__( 'Search Results: %s', 'one-elementor' ), '<span>' . get_search_query() . '</span>' );?></h2>
						<div class="bc-list">
							<?php if (function_exists('bcn_display')) bcn_display(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
	
	<section class="one-elementor-search-page search-page">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php if ( have_posts() ) : ?>
						<div class="row one-elementor-masonry">
							<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'search' );

							endwhile;
							?>
						</div>
					<?php else :?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>
					<?php endif;?>
				</div>
			</div>

			<?php the_posts_navigation();?>
		</div>
	</section>

<?php
get_footer();
