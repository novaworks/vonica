<?php

// ============================================
// Panel
// ============================================

// no panel


// ============================================
// Sections
// ============================================

Kirki::add_section( 'fonts', array(
    'title'          => esc_html__( 'Fonts', 'vonica' ),
    'priority'       => 35,
    'capability'     => 'edit_theme_options',
) );


// ============================================
// Controls
// ============================================

$sep_id  = 59374;
$section = 'fonts';


Kirki::add_field( 'vonica', array(
    'type'        => 'number',
    'settings'    => 'font_size',
    'label'       => esc_html__( 'Base Font Size', 'vonica' ),
    'description' => esc_html__( 'The Base Font Size refers to the size applied to the paragraph text. All other elements, such as headings, links, buttons, etc will adjusted automatically to keep the hierarchy of font sizes based on this one size. Easy-peasy!', 'vonica' ),
    'section'     => $section,
    'default'     => 16,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 12,
        'max'  => 24,
        'step' => 1
    ),
) );

// ---------------------------------------------

Kirki::add_field( 'vonica', array(
    'type'        => 'typography',
    'settings'    => 'main_font',
    'label'       => esc_html__( 'Body Font', 'vonica' ),
    'section'     => $section,
    'default'     => array(
        'font-family'    => 'Poppins',
        'variant'        => '400',
        'subsets'        => array( 'latin-ext' ),
    ),
    'choices' => apply_filters(
    	'novathemes_fonts_choices', [
    		'variant' => [
    			'300',
    			'400',
    			'500',
    			'600',
    			'700',
    		]
    	]
    ),
) );


// ---------------------------------------------
Kirki::add_field( 'vonica', array(
    'type'        => 'typography',
    'settings'    => 'secondary_font',
    'label'       => esc_html__( 'Headings Font', 'vonica' ),
    'section'     => $section,
    'default'     => array(
        'font-family'    => 'kudryashev-d-contrast',
        'variant'        => '400',
        'subsets'        => array( 'latin' ),
    ),
    'choices' => apply_filters(
    	'novathemes_fonts_choices', [
    		'variant' => [
    			'300',
    			'400',
    			'500',
    			'600',
    			'700',
    		]
    	]
    ),
) );


// ---------------------------------------------
Kirki::add_field( 'vonica', array(
    'type'        => 'select',
    'settings'    => 'secondary_font_weight',
    'label'       => esc_html__( 'Headings Font Weight', 'vonica' ),
    'section'     => $section,
    'default'     => '300',
    'priority'    => 10,
    'choices'     => array(
        '300'     => '300',
        '400'     => '400',
        '500'     => '500',
        '600'     => '600',
        '700'     => '700',
    ),
) );
