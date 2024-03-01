<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package One Elementor
 */

?>
<div class="<?php if(is_active_sidebar('sidebar-2')):?> col-lg-6 col-md-6 col-12 <?php else :?> col-lg-4 col-md-6 col-12 <?php endif;?>   one-elementor-masonry-item">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="one-elementor-single-post margin-top-45">
			<?php if(has_post_thumbnail()) : ?>	
			<div class="one-elementor-single-post__head">
				<div class="one-elementor-single-post__comments"><i class="fa fa-comments"></i><?php echo esc_html(get_comments_number());?></div>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('one-elementor-blog-thumb'); ?></a>
			</div>
			<?php endif; ?>
			<div class="one-elementor-single-post__body">
				
				<?php if (!empty($one_elementor_categories)) :?>
				<div class="one-elementor-single-post__cat">
					<?php foreach ($one_elementor_categories as $one_elementor_category) :?>
						<a href="<?php echo esc_url(get_category_link($one_elementor_category->term_id));?>"><?php echo esc_html($one_elementor_category->name); ?></a>
					<?php endforeach;?>	
				</div>
				<?php endif;?>

				<h2 class="one-elementor-single-post__title">
				<?php if( is_sticky()) :?><span class="one-elementor-sticky"><i class="fa-regular fa-note-sticky"></i></span><?php endif;?>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				
				<div class="one-elementor-single-post__content"><?php the_excerpt();?></div>
				<!-- Post Meta -->
				<ul class="one-elementor-post-meta">
					<li><i class="fa fa-pencil"></i><?php one_elementor_posted_on(); ?></li>
					<li><i class="fa fa-user"></i><a class="one-elementor-post-meta__author" href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php 
					one_elementor_posted_by(); ?></a></li>
				</ul>
				<div class="one-elementor-single-post__button">
					<a href="<?php the_permalink(); ?>" class="one-elementor-btn"><?php esc_html_e('View Article','one-elementor');?></a>
				</div>
			</div>
		</div>
	</article> <!-- #post-<?php the_ID(); ?> -->
</div>