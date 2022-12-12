<?php
$sep_id  = 8325;
$section = 'global_popup';

Kirki::add_field( 'vonica', array(
	'type'        => 'switch',
	'settings'    => 'newsletter_popup',
  'label'       => esc_html__( 'Newsletter Popup', 'vonica' ),
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
	'type'        => 'switch',
	'settings'    => 'popup_showonly_homepage',
  'label'       => esc_html__( 'Only showing on homepage', 'vonica' ),
	'section'     => $section,
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Yes', 'vonica' ),
		'off' => esc_html__( 'No', 'vonica' ),
	),
  'active_callback'    => array(
      array(
          'setting'  => 'newsletter_popup',
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
            'setting'  => 'newsletter_popup',
            'operator' => '==',
            'value'    => true,
        ),
    ),

) );
// ---------------------------------------------
Kirki::add_field( 'vonica', array(
	'type'        => 'switch',
	'settings'    => 'popup_show_mobile',
  'label'       => esc_html__( 'Don\'t show popup on mobile', 'vonica' ),
	'section'     => $section,
	'default'     => 'off',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Yes', 'vonica' ),
		'off' => esc_html__( 'No', 'vonica' ),
	),
  'active_callback'    => array(
      array(
          'setting'  => 'newsletter_popup',
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
            'setting'  => 'newsletter_popup',
            'operator' => '==',
            'value'    => true,
        ),
    ),

) );
// ---------------------------------------------
Kirki::add_field( 'vonica', array(
	'type'        => 'switch',
	'settings'    => 'popup_show_again',
  'label'       => esc_html__( 'Display option "Does not show popup again"', 'vonica' ),
	'section'     => $section,
	'default'     => 'off',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Yes', 'vonica' ),
		'off' => esc_html__( 'No', 'vonica' ),
	),
  'active_callback'    => array(
      array(
          'setting'  => 'newsletter_popup',
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
            'setting'  => 'newsletter_popup',
            'operator' => '==',
            'value'    => true,
        ),
    ),

) );
// ---------------------------------------------
Kirki::add_field( 'vonica', array(
  'type'     => 'text',
  'settings' => 'popup_show_again_text',
  'label'       => esc_html__( 'Text "Does not show popup again"', 'vonica' ),
  'section'  => $section,
  'default'  => esc_html__( 'Don’t show this popup again', 'vonica' ),
  'priority' => 10,
  'active_callback'    => array(
      array(
          'setting'  => 'newsletter_popup',
          'operator' => '==',
          'value'    => true,
      ),
      array(
          'setting'  => 'popup_show_again',
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
            'setting'  => 'newsletter_popup',
            'operator' => '==',
            'value'    => true,
        ),
        array(
            'setting'  => 'popup_show_again',
            'operator' => '==',
            'value'    => true,
        ),
    ),

) );
// ---------------------------------------------
Kirki::add_field( 'vonica', array(
  'type'     => 'text',
  'settings' => 'popup_show_after',
  'label'       => esc_html__( 'Popup showing after', 'vonica' ),
	'description' => esc_html__( 'Show Popup when site loaded after (number) seconds ( 1000ms = 1 second )', 'vonica' ),
  'section'  => $section,
  'default'  => 2000,
  'priority' => 10,
  'active_callback'    => array(
      array(
          'setting'  => 'newsletter_popup',
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
            'setting'  => 'newsletter_popup',
            'operator' => '==',
            'value'    => true,
        ),
    ),

) );
// ---------------------------------------------
Kirki::add_field( 'vonica', array(
  'type'        => 'editor',
	'settings'    => 'popup_content',
	'label'       => esc_html__( 'Newsletter Popup Content', 'vonica' ),
	'section'     => $section,
	'default'     => '',
  'active_callback'    => array(
      array(
          'setting'  => 'newsletter_popup',
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
            'setting'  => 'newsletter_popup',
            'operator' => '==',
            'value'    => true,
        ),
    ),

) );
// ---------------------------------------------
