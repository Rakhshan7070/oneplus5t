<?php 
// One Elementor Header Option
$wp_customize->add_section( 'one_elementor_breadcrumb', array(
	'capability'            => 'edit_theme_options',
	'priority'              => 3,
	'title'                 => esc_html__( 'Page Breadcrumb', 'one-elementor' ),
	'description'           => esc_html__( 'Page Breadcrumb Settings.', 'one-elementor' ),
	'panel'                 => 'one_elementor_front_option'
) );

$wp_customize->add_setting( 'one_elementor_page_bc',
  array(
    'default'           => true,
    'sanitize_callback'     => 'one_elementor_sanitize_checkbox'
  )
);

$wp_customize->add_control( 'one_elementor_page_bc',
  array(
    'label'         => esc_html__( 'Show page breadcrumb', 'one-elementor' ),
    'section'       => 'one_elementor_breadcrumb',
    'type'          => 'checkbox',
  )
);

$wp_customize->add_setting( 'one_elementor_archive_bc',
  array(
    'default'           => true,
    'sanitize_callback'     => 'one_elementor_sanitize_checkbox'
  )
);

$wp_customize->add_control( 'one_elementor_archive_bc',
  array(
    'label'         => esc_html__( 'Show archive breadcrumb', 'one-elementor' ),
    'section'       => 'one_elementor_breadcrumb',
    'type'          => 'checkbox',
  )
);
$wp_customize->add_setting( 'one_elementor_bc_archive_title', array(
    'capability'            => 'edit_theme_options',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'one_elementor_bc_archive_title', array(
    'label'                 =>  __( 'Type Archive Title', 'one-elementor' ),
    'section'               => 'one_elementor_breadcrumb',
    'type'                  => 'text',
    'settings'              => 'one_elementor_bc_archive_title',
) );

$wp_customize->add_setting( 'one_elementor_search_bc',
  array(
    'default'           => true,
    'sanitize_callback'     => 'one_elementor_sanitize_checkbox'
  )
);

$wp_customize->add_control( 'one_elementor_search_bc',
  array(
    'label'         => esc_html__( 'Show search breadcrumb', 'one-elementor' ),
    'section'       => 'one_elementor_breadcrumb',
    'type'          => 'checkbox',
  )
);