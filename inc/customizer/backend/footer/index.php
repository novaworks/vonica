<?php

// ============================================
// Panel
// ============================================

// no panel


// ============================================
// Sections
// ============================================

Kirki::add_section( 'footer', array(
    'title'          => esc_html__( 'Footer', 'vonica' ),
    'priority'       => 60,
    'capability'     => 'edit_theme_options',
) );


// ============================================
// Controls
// ============================================

$sep_id  = 48536;
$section = 'footer';
Kirki::add_field( 'vonica', array(
    'type'     => 'textarea',
    'settings' => 'footer_text',
    'label'    => esc_html__( 'Copyright Text', 'vonica' ),
    'section'  => $section,
    'default'  => esc_html__( '© 2022 Vonica All rights reserved. Designed by Novaworks', 'vonica' ),
    'priority' => 10,
) );
