<?php
$sep_id  = 77953;
$section = 'style_header';

Kirki::add_field( 'vonica', array(
    'type'        => 'color',
    'settings'    => 'header_background_color',
    'label'       => esc_html__( 'Header Background Color', 'vonica' ),
    'section'     => $section,
    'default'     => 'transparent',
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
    'settings'    => 'header_background_color_2',
    'label'       => esc_html__( 'Header Secondary Background Color', 'vonica' ),
    'section'     => $section,
    'default'     => '#F6F6F6',
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
    'settings'    => 'header_font_color',
    'label'       => esc_html__( 'Header Text Color', 'vonica' ),
    'section'     => $section,
    'default'     => '#242424',
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
    'settings'    => 'header_accent_color',
    'label'       => esc_html__( 'Header Accent Color', 'vonica' ),
    'section'     => $section,
    'default'     => '#000',
    'priority'    => 10,

) );

// ---------------------------------------------
Kirki::add_field( 'vonica', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,

) );
// ---------------------------------------------
