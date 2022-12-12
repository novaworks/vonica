<?php

// ============================================
// Panel
// ============================================

// no panel


// ============================================
// Sections
// ============================================

Kirki::add_section( 'product', array(
    'title'          => esc_html__( 'Product Page', 'vonica' ),
    'priority'       => 55,
    'capability'     => 'edit_theme_options',
) );


// ============================================
// Controls
// ============================================

$sep_id  = 34532;
$section = 'product';

Kirki::add_field( 'vonica', array(
    'type'        => 'toggle',
    'settings'    => 'single_product_sidebar',
    'label'       => esc_html__( 'Single Product Sidebar', 'vonica' ),
    'section'     => $section,
    'default'     => false,
    'priority'    => 10,
) );
// // ---------------------------------------------
Kirki::add_field( 'vonica', array(
    'settings'    => 'single_product_gallery_heading',
    'section'     => $section,
    'type'        => 'custom',
    'default'     => wp_kses(__( '<span class="big-separator">Image Gallery</span>', 'vonica' ),'simple'),
) );
// ---------------------------------------------
Kirki::add_field( 'vonica', array(
    'type'        => 'toggle',
    'settings'    => 'product_image_zoom',
    'label'       => esc_html__( 'Image Zoom', 'vonica' ),
    'section'     => $section,
    'default'     => true,
    'description' => esc_html__( 'Zooms in where your cursor is on the image', 'vonica' ),
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
    'settings'    => 'product_image_lightbox',
    'label'       => esc_html__( 'Image Lightbox', 'vonica' ),
    'section'     => $section,
    'default'     => true,
    'description' => esc_html__( 'Opens your images against a dark backdrop', 'vonica' ),
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
    'type'        => 'radio-buttonset',
    'settings'    => 'product_tab_preset',
    'label'       => esc_html__( 'Product Tab Style', 'vonica' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
    'choices'     => array(
        ''         => esc_html__( 'Default', 'vonica' ),
        'modal'  => esc_html__( 'Modal', 'vonica' ),
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
    'settings'    => 'single_product_section_heading',
    'section'     => $section,
    'type'        => 'custom',
    'default'     => wp_kses(__( '<span class="big-separator">Product Tabs Icons</span>', 'vonica' ),'simple'),
    'active_callback'    => array(
        array(
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
        ),
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'vonica', array(
    'type'        => 'image',
    'settings'    => 'panel_description_icon',
    'label'       => esc_html__( 'Description Icon', 'vonica' ),
    'section'     => $section,
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
        ),
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'vonica', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'active_callback'    => array(
        array(
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
        ),
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'vonica', array(
    'type'        => 'image',
    'settings'    => 'panel_additional_information_icon',
    'label'       => esc_html__( 'Additional Infomation Icon', 'vonica' ),
    'section'     => $section,
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
        ),
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'vonica', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'active_callback'    => array(
        array(
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
        ),
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'vonica', array(
    'type'        => 'image',
    'settings'    => 'panel_reviews_icon',
    'label'       => esc_html__( 'Reviews Icon', 'vonica' ),
    'section'     => $section,
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
        ),
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'vonica', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'active_callback'    => array(
        array(
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
        ),
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'vonica', array(
    'type'        => 'image',
    'settings'    => 'panel_sizeguide_icon',
    'label'       => esc_html__( 'Size Guide Icon', 'vonica' ),
    'section'     => $section,
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
        ),
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'vonica', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'active_callback'    => array(
        array(
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
        ),
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'vonica', array(
    'type'        => 'image',
    'settings'    => 'panel_store_available_icon',
    'label'       => esc_html__( 'Store availability Icon', 'vonica' ),
    'section'     => $section,
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
        ),
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'vonica', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'active_callback'    => array(
        array(
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
        ),
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'vonica', array(
    'type'        => 'toggle',
    'settings'    => 'single_product_store_availiable',
    'label'       => esc_html__( 'Store availability', 'vonica' ),
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
    'type'        => 'link',
    'settings'    => 'single_product_store_availiable_url',
    'label'       => esc_html__( 'Store availability  Page Url', 'vonica' ),
    'section'     => $section,
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'single_product_store_availiable',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'vonica', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'active_callback'    => array(
        array(
            'setting'  => 'single_product_store_availiable',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
// ---------------------------------------------

Kirki::add_field( 'vonica', array(
    'type'        => 'radio-image',
    'settings'    => 'single_product_sidebar_position',
    'label'       => esc_html__( 'Sidebar Position', 'vonica' ),
    'section'     => $section,
    'default'     => 'left',
    'priority'    => 10,
    'choices'     => array(
        'left'    => get_template_directory_uri() . '/images/customiser/product-sidebar-left.png',
        'right'   => get_template_directory_uri() . '/images/customiser/product-sidebar-right.png',
    ),
    'active_callback'    => array(
        array(
            'setting'  => 'single_product_sidebar',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );

// ---------------------------------------------
Kirki::add_field( 'vonica', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'active_callback'    => array(
        array(
            'setting'  => 'single_product_sidebar',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
// ---------------------------------------------

Kirki::add_field( 'vonica', array(
    'type'        => 'toggle',
    'settings'    => 'single_product_social_share',
    'label'       => esc_html__( 'Display Social Share', 'vonica' ),
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
    'settings'    => 'upsell_products',
    'label'       => esc_html__( 'Up-sells Display', 'vonica' ),
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
    'settings'    => 'related_products',
    'label'       => esc_html__( 'Related Products Display', 'vonica' ),
    'section'     => $section,
    'default'     => true,
    'priority'    => 10,
) );

// ---------------------------------------------
Kirki::add_field( 'vonica', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'active_callback'    => array(
        array(
            'setting'  => 'related_products',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
// ---------------------------------------------

Kirki::add_field( 'vonica', array(
    'type'        => 'slider',
    'settings'    => 'related_products_column',
    'label'       => esc_html__( 'Number of Related Products', 'vonica' ),
    'section'     => $section,
    'default'     => 4,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 2,
        'max'  => 6,
        'step' => 1
    ),
    'active_callback'    => array(
        array(
            'setting'  => 'related_products',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
