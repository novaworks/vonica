<?php

$sep_id  = 300;
$section = 'header_elements';

Kirki::add_field( 'vonica', array(
    'type'        => 'toggle',
    'settings'    => 'icons_on_topbar',
    'label'       => esc_html__( 'Show icons on Topbar', 'vonica' ),
    'section'     => $section,
    'default'     => false,
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
    'type'        => 'toggle',
    'settings'    => 'header_burger_menu',
    'label'       => esc_html__( 'Burger Menu', 'vonica' ),
    'section'     => $section,
    'default'     => false,
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
    'type'        => 'toggle',
    'settings'    => 'header_wishlist',
    'label'       => esc_html__( 'Wishlist', 'vonica' ),
    'section'     => $section,
    'default'     => false,
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
    'type'        => 'toggle',
    'settings'    => 'header_cart',
    'label'       => esc_html__( 'Cart', 'vonica' ),
    'section'     => $section,
    'default'     => true,
    'priority'    => 10,

) );
Kirki::add_field( 'vonica', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'header_cart_action',
    'label'       => esc_html__( 'Icon cart action', 'vonica' ),
    'section'     => $section,
    'default'     => 'mini-cart',
    'priority'    => 10,
    'choices'     => array(
        'mini-cart'     => esc_html__( 'Open Mini cart', 'vonica' ),
        'cart-page'     => esc_html__( 'Go to Cart page', 'vonica' ),
    ),
    'active_callback'    => array(
        array(
            'setting'  => 'header_cart',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
