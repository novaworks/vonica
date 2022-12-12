<?php

$sep_id  = 8475;
$section = 'header_settings';

Kirki::add_field( 'vonica', array(
	'type'        => 'switch',
	'settings'    => 'header_wide',
  'label'       => esc_html__( 'Header Wide', 'vonica' ),
	'section'     => $section,
	'default'     => 'off',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'vonica' ),
		'off' => esc_html__( 'Disable', 'vonica' ),
	),
) );
// ---------------------------------------------
Kirki::add_field( 'vonica', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,

) );
Kirki::add_field( 'vonica', array(
    'type'        => 'slider',
    'settings'    => 'header_height',
    'label'       => esc_html__( 'Header Height (px)', 'vonica' ),
    'section'     => $section,
    'default'     => 100,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 80,
        'max'  => 300,
        'step' => 1
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'vonica', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,

) );
// ---------------------------------------------

Kirki::add_field( 'vonica', array(
	'type'        => 'switch',
	'settings'    => 'header_transparent',
  'label'       => esc_html__( 'Header Transparent', 'vonica' ),
	'section'     => $section,
	'default'     => 'off',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'vonica' ),
		'off' => esc_html__( 'Disable', 'vonica' ),
	),

) );
// ---------------------------------------------
Kirki::add_field( 'vonica', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,

) );
// ---------------------------------------------

Kirki::add_field( 'vonica', array(
    'type'        => 'slider',
    'settings'    => 'header_font_size',
    'label'       => esc_html__( 'Header Text Size', 'vonica' ),
    'section'     => $section,
    'default'     => 16,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 9,
        'max'  => 24,
        'step' => 1
    ),

) );

// ---------------------------------------------
Kirki::add_field( 'vonica', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,

) );
// ---------------------------------------------


Kirki::add_field( 'vonica', array(
    'type'        => 'toggle',
    'settings'    => 'header_search_toggle',
    'label'       => esc_html__( 'Header Search', 'vonica' ),
    'section'     => $section,
    'default'     => 1,
    'priority'    => 10,
    'choices'     => array(
        'on'  => esc_html__( 'On', 'vonica' ),
        'off' => esc_html__( 'Off', 'vonica' ),
    ),

) );

Kirki::add_field( 'vonica', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'header_search_style',
    'label'       => esc_html__( 'Search Style', 'vonica' ),
    'section'     => $section,
    'default'     => 'fullscreen',
    'priority'    => 10,
    'choices'     => array(
        'default'  => esc_html__( 'Default', 'vonica' ),
        'fullscreen'  => esc_html__( 'Fullscreen', 'vonica' ),
    ),
) );

Kirki::add_field( 'vonica', array(
    'type'        => 'checkbox',
    'settings'    => 'header_search_by_category',
    'label'       => esc_html__( 'Search by Category', 'vonica' ),
    'section'     => $section,
    'default'     => '0',
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'header_search_toggle',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
