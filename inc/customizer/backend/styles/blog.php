<?php
$sep_id  = 7565;
$section = 'style_blog';

Kirki::add_field( 'vonica', array(
    'type'        => 'color',
    'settings'    => 'blog_background_color',
    'label'       => esc_html__( 'Background Color', 'vonica' ),
    'section'     => $section,
    'default'     => '#f6f6f6',
    'priority'    => 10,

) );

// ---------------------------------------------
Kirki::add_field( 'vonica', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,

) );
// ---------------------------------------------
