<?php
if ( !function_exists( 'nova_add_custom_product_metabox') ) :
function nova_add_custom_product_metabox( $meta_boxes ) {
    $prefix = 'vonica_';
    $theme_meta_boxes = array();
    if ( NOVA_WOOCOMMERCE_IS_ACTIVE ) {
    $theme_meta_boxes[] = [
        'title'      => esc_html__( 'Header Image', 'vonica' ),
        'id'         => 'header-image',
        'post_types' => ['product'],
        'context'    => 'normal',
        'priority'   => 'high',
        'fields'     => [
            [
                'type'             => 'image',
                'id'               => $prefix.'product_page_header_image',
                'max_file_uploads' => 1,
            ],
        ],
    ];
  }
  $theme_meta_boxes[] = [
      'title'      => esc_html__( 'For post format QUOTE', 'vonica' ),
      'id'         => 'format_quote',
      'post_types' => ['post'],
      'context'    => 'normal',
      'priority'   => 'high',
      'fields'     => [
          [
              'type' => 'textarea',
              'name' => esc_html__( 'Quote Content', 'vonica' ),
              'id'   => $prefix.'post_quote_content',
          ],
          [
              'type' => 'text',
              'id'   => $prefix . 'post_quote_author',
              'name' => esc_html__( 'Author', 'vonica' ),
          ],
          [
              'type' => 'color',
              'id'   => $prefix . 'post_quote_text_color',
              'name' => esc_html__( 'Text Color', 'vonica' ),
              'std'  => '#000',
          ],
          [
              'type' => 'color',
              'id'   => $prefix . 'post_quote_bg_color',
              'name' => esc_html__( 'Background Color', 'vonica' ),
              'std'  => '#FFF',
          ],
      ],
  ];
  $theme_meta_boxes[] = [
      'title'      => esc_html__( 'For post format VIDEO', 'vonica' ),
      'id'         => 'format_video',
      'post_types' => ['post'],
      'context'    => 'normal',
      'priority'   => 'high',
      'fields'     => [

          [
              'type' => 'text',
              'id'   => $prefix . 'post_video_url',
              'name' => esc_html__( 'Youtube/Vimeo Video Url', 'vonica' ),
          ],
      ],
  ];
  $meta_boxes = apply_filters('vonica/metabox/meta_boxes',$theme_meta_boxes);
  return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'nova_add_custom_product_metabox' );
endif;
