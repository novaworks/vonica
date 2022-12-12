<?php
$sep_id  = 4544;
$section = 'style_global';

Kirki::add_field( 'vonica', array(
    'type'        => 'color',
    'settings'    => 'bg_color',
    'label'       => esc_html__( 'Body Background', 'vonica' ),
    'section'     => $section,
    'default'     => '#FFF',
    'priority'    => 10,
) );

// ---------------------------------------------
Kirki::add_field( 'vonica', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );
// ---------------------------------------------

Kirki::add_field( 'vonica', array(
    'type'        => 'color',
    'settings'    => 'primary_color',
    'label'       => esc_html__( 'Main Font Color', 'vonica' ),
    'section'     => $section,
    'default'     => '#777777',
    'priority'    => 10,
) );

// ---------------------------------------------
Kirki::add_field( 'vonica', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );
// ---------------------------------------------

Kirki::add_field( 'vonica', array(
    'type'        => 'color',
    'settings'    => 'secondary_color',
    'label'       => esc_html__( 'Secondary Font Color', 'vonica' ),
    'section'     => $section,
    'default'     => '#111111',
    'priority'    => 10,
) );

// ---------------------------------------------
Kirki::add_field( 'vonica', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );
// ---------------------------------------------

Kirki::add_field( 'vonica', array(
    'type'        => 'color',
    'settings'    => 'accent_color',
    'label'       => esc_html__( 'Accent Color', 'vonica' ),
    'section'     => $section,
    'default'     => '#DD1E30',
    'priority'    => 10,
) );

// ---------------------------------------------
Kirki::add_field( 'vonica', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );
// ---------------------------------------------

// ---------------------------------------------

Kirki::add_field( 'vonica', array(
    'type'        => 'color',
    'settings'    => 'accent_color_2',
    'label'       => esc_html__( 'Accent Color 2', 'vonica' ),
    'section'     => $section,
    'default'     => '#d9f293',
    'priority'    => 10,
) );

// ---------------------------------------------
Kirki::add_field( 'vonica', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );
// ---------------------------------------------

Kirki::add_field( 'vonica', array(
    'type'        => 'color',
    'settings'    => 'border_color',
    'label'       => esc_html__( 'Border Color', 'vonica' ),
    'section'     => $section,
    'default'     => '#E2E1E4',
    'priority'    => 10,
) );
// ---------------------------------------------
Kirki::add_field( 'vonica', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );
// ---------------------------------------------

Kirki::add_field( 'vonica', array(
    'type'        => 'color',
    'settings'    => 'site_link_color',
    'label'       => esc_html__( 'Link Color', 'vonica' ),
    'section'     => $section,
    'default'     => '#111111',
    'priority'    => 10,
) );
// ---------------------------------------------
Kirki::add_field( 'vonica', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );
// ---------------------------------------------

Kirki::add_field( 'vonica', array(
    'type'        => 'color',
    'settings'    => 'site_link_hover_color',
    'label'       => esc_html__( 'Link Hover Color', 'vonica' ),
    'section'     => $section,
    'default'     => '#DD1E30',
    'priority'    => 10,
) );
// ---------------------------------------------
Kirki::add_field( 'vonica', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );
// ---------------------------------------------

Kirki::add_field( 'vonica', array(
    'type'        => 'color',
    'settings'    => 'primary_button_color',
    'label'       => esc_html__( 'Primary Button Color', 'vonica' ),
    'section'     => $section,
    'default'     => '#DD1E30',
    'priority'    => 10,
) );
// ---------------------------------------------
Kirki::add_field( 'vonica', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );
// ---------------------------------------------

Kirki::add_field( 'vonica', array(
    'type'        => 'color',
    'settings'    => 'secondary_button_color',
    'label'       => esc_html__( 'Secondary Button Color', 'vonica' ),
    'section'     => $section,
    'default'     => '#222222',
    'priority'    => 10,
) );
// ---------------------------------------------
Kirki::add_field( 'vonica', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );
// ---------------------------------------------

Kirki::add_field( 'vonica', array(
    'type'        => 'number',
    'settings'    => 'button_radius',
    'label'       => esc_html__( 'Button Radius', 'vonica' ),
    'section'     => $section,
    'default'     => 0,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 0,
        'max'  => 100,
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
    'type'        => 'number',
    'settings'    => 'field_radius',
    'label'       => esc_html__( 'Field Radius', 'vonica' ),
    'section'     => $section,
    'default'     => 0,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 0,
        'max'  => 100,
        'step' => 1
    ),
) );
