<?php

// ============================================
// Panel
// ============================================

Kirki::add_panel( 'panel_shop', array(
    'title'         => esc_html__( 'Shop', 'vonica' ),
    'priority'      => 50,
) );


// ============================================
// Sections
// ============================================

Kirki::add_section( 'shop', array(
    'title'          => esc_html__( 'Layout', 'vonica' ),
    'priority'       => 50,
    'capability'     => 'edit_theme_options',
    'panel'          => 'panel_shop'
) );

Kirki::add_section( 'shop_catalog_mode', array(
    'title'          => esc_html__( 'Catalog Mode', 'vonica' ),
    'priority'       => 50,
    'capability'     => 'edit_theme_options',
    'panel'          => 'panel_shop'
) );

Kirki::add_section( 'shop_custom_archives', array(
    'title'          => esc_html__( 'Custom Archives', 'vonica' ),
    'priority'       => 50,
    'capability'     => 'edit_theme_options',
    'panel'          => 'panel_shop'
) );


// ============================================
// Controls
// ============================================

require_once('layout.php');
require_once('catalog_mode.php');
require_once('custom_archives.php');
