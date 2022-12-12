<?php

// ============================================
// Panel
// ============================================

// no panel


// ============================================
// Sections
// ============================================

Kirki::add_section( 'social_media', array(
    'title'          => esc_html__( 'Social Media', 'vonica' ),
    'priority'       => 65,
    'capability'     => 'edit_theme_options',
) );


// ============================================
// Controls
// ============================================

$sep_id  = 98795;
$section = 'social_media';

Kirki::add_field( 'vonica', array(
    'type'        => 'text',
    'settings'    => 'facebook_link',
    'label'       => esc_html__( 'Facebook', 'vonica' ),
    'section'     => $section,
    'default'     => '#',
    'priority'    => 10,
) );

Kirki::add_field( 'vonica', array(
    'type'        => 'text',
    'settings'    => 'twitter_link',
    'label'       => esc_html__( 'Twitter', 'vonica' ),
    'section'     => $section,
    'default'     => '#',
    'priority'    => 10,
) );

Kirki::add_field( 'vonica', array(
    'type'        => 'text',
    'settings'    => 'pinterest_link',
    'label'       => esc_html__( 'Pinterest', 'vonica' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'vonica', array(
    'type'        => 'text',
    'settings'    => 'linkedin_link',
    'label'       => esc_html__( 'LinkedIn', 'vonica' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'vonica', array(
    'type'        => 'text',
    'settings'    => 'googleplus_link',
    'label'       => esc_html__( 'Google+', 'vonica' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'vonica', array(
    'type'        => 'text',
    'settings'    => 'rss_link',
    'label'       => esc_html__( 'RSS', 'vonica' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'vonica', array(
    'type'        => 'text',
    'settings'    => 'tumblr_link',
    'label'       => esc_html__( 'Tumblr', 'vonica' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'vonica', array(
    'type'        => 'text',
    'settings'    => 'instagram_link',
    'label'       => esc_html__( 'Instagram', 'vonica' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'vonica', array(
    'type'        => 'text',
    'settings'    => 'youtube_link',
    'label'       => esc_html__( 'Youtube', 'vonica' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'vonica', array(
    'type'        => 'text',
    'settings'    => 'vimeo_link',
    'label'       => esc_html__( 'Vimeo', 'vonica' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'vonica', array(
    'type'        => 'text',
    'settings'    => 'behance_link',
    'label'       => esc_html__( 'Behance', 'vonica' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'vonica', array(
    'type'        => 'text',
    'settings'    => 'dribbble_link',
    'label'       => esc_html__( 'Dribbble', 'vonica' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'vonica', array(
    'type'        => 'text',
    'settings'    => 'flickr_link',
    'label'       => esc_html__( 'Flickr', 'vonica' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'vonica', array(
    'type'        => 'text',
    'settings'    => 'git_link',
    'label'       => esc_html__( 'Git', 'vonica' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'vonica', array(
    'type'        => 'text',
    'settings'    => 'skype_link',
    'label'       => esc_html__( 'Skype', 'vonica' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'vonica', array(
    'type'        => 'text',
    'settings'    => 'weibo_link',
    'label'       => esc_html__( 'Weibo', 'vonica' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'vonica', array(
    'type'        => 'text',
    'settings'    => 'foursquare_link',
    'label'       => esc_html__( 'Foursquare', 'vonica' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'vonica', array(
    'type'        => 'text',
    'settings'    => 'soundcloud_link',
    'label'       => esc_html__( 'Soundcloud', 'vonica' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'vonica', array(
    'type'        => 'text',
    'settings'    => 'snapchat_link',
    'label'       => esc_html__( 'Snapchat', 'vonica' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );
