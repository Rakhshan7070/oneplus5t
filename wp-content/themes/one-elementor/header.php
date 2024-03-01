<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package One Elementor
 */
$one_elementor_search_enable = get_theme_mod('one_elementor_search_enable','true');
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Start Page -->
<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'one-elementor' ); ?></a>

		<!-- Header -->
		<header id="masthead" class="one-elementor-header site-header">
			<?php if ( get_header_image() ) : ?>
			<div class="header-image">
				<img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>">
			</div>
			<?php endif; ?>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="one-elementor-header__middle">
							<!-- Logo -->
							<div class="one-elementor-logo">
								<?php if( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
									the_custom_logo();
								}else { ?>
									<div class="normal-text">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html(get_bloginfo('name'));?></a>
										<?php $one_elementor_title_description = get_bloginfo( 'description', 'display' ); ?>
										<p class="site-description"><?php echo esc_html($one_elementor_title_description); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
									</div>
								<?php } ?>
							</div>
							<div class="one-elementor-header__menu">
								<!-- Main Nav -->
								<nav id="site-navigation" class="one-elementor-header__nav navbar navbar-expand-lg" style="display: none;">
									<div class="navbar-collapse">
										<?php
										wp_nav_menu( array(
											'theme_location' => 'menu-1',
											'menu_id'        => 'primary-menu',
											'menu_class'        => 'nav one-elementor-menu navbar-nav',
										) );
										?>
									</div>
								</nav>
								<!--/ End Main Nav -->
								<div class="one-elementor-header__right">
									<div class="one-elementor-header__button one-elementor-header__search">
										<?php if ($one_elementor_search_enable == true) :?>
										<a href="#" class="one-elementor-header__button--icon one-elementor-search-icon"><i class="fa fa-search"></i></a>
										<!-- Search Form -->
										<div class="search-form-main">
											<?php echo get_search_form();?>
											<a href="#" class="one-elementor-search-close"><i class="fa fa-close"></i></a>
										</div>
										<!-- End Search Form -->
										<?php endif;?>
										<div class="menu-click"><a href="#" class="one-elementor-header__button--icon"><i class="fa fa-bars"></i></a></div>
									</div>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
			
		
			<!-- Sidebar Menu -->
			<div class="one-elementor-mobile-menu">
				<div class="menu-inner">
					<h4 class="oe-menu-title"><?php esc_html_e('Navigation','one-elementor');?></h4>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'side-menu',
							'menu_class'        => 'side-nav',
						) );
					?>
					<div class="close-menu"><a href="#"><i class="fa fa-remove"></i><?php esc_html_e('Close Menu','one-elementor');?></a></div>
				</div>
			</div>
			<!-- End Sidebar Menu -->
			
		</header>
		<!-- End Header -->
		
	<div id="primary" class="one-elementor-section-main">