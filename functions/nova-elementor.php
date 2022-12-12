<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

add_filter('kitify/adobe_fonts/id', 'vonica_kitify_adobe_fonts_id');
if(!function_exists('vonica_kitify_adobe_fonts_id')){
    function vonica_kitify_adobe_fonts_id(){
        return 'iiu0lcg';
    }
}

add_filter('kitify/logo/attr/src', 'vonica_kitify_logo_attr_src');
if(!function_exists('vonica_kitify_logo_attr_src')){
    function vonica_kitify_logo_attr_src( $src ){
        if(!$src){
	        $src = esc_url( Nova_OP::getOption('header_logo') );
        }
        return $src;
    }
}

add_filter('kitify/logo/attr/src4l', 'vonica_kitify_logo_attr_src4l');
if(!function_exists('vonica_kitify_logo_attr_src4l')){
    function vonica_kitify_logo_attr_src4l( $src ){
        if(!$src){
	        $src = esc_url( Nova_OP::getOption('header_logo_light') );
        }
        return $src;
    }
}

add_filter('kitify/logo/attr/width', 'vonica_kitify_logo_attr_width');
if(!function_exists('vonica_kitify_logo_attr_width')){
    function vonica_kitify_logo_attr_width( $value ){
        if(!$value){
            $value = esc_html(Nova_OP::getOption('header_logo_width'));
        }
        return $value;
    }
}

add_action('elementor/frontend/widget/before_render', 'vonica_kitify_add_class_into_sidebar_widget');
if(!function_exists('vonica_kitify_add_class_into_sidebar_widget')){
    function vonica_kitify_add_class_into_sidebar_widget( $widget ){
        if('sidebar' == $widget->get_name()){
            $widget->add_render_attribute('_wrapper', 'class' , 'widget-area');
        }

    }
}
add_filter('kitify/nova-menu/control/style', 'vonica_kitify_add_nova_menu_style');
if(!function_exists('vonica_kitify_add_nova_menu_style')){
    function vonica_kitify_add_nova_menu_style(){
        return [
          'default' => esc_html__( 'Default', 'vonica' ),
          'top-line' => esc_html__( 'Top Line', 'vonica' ),
          'bottom-line' => esc_html__( 'Bottom Line', 'vonica' ),
        ];
    }
}
add_filter('kitify/nova-menu-cart/control/preset', 'vonica_kitify_add_nova_cart_style');
if(!function_exists('vonica_kitify_add_nova_cart_style')){
    function vonica_kitify_add_nova_cart_style(){
        return [
          'default' => esc_html__( 'Default', 'vonica' ),
          'vonica' => esc_html__( 'Vonica', 'vonica' ),
        ];
    }
}
add_filter('kitify/banner/control/simple_style', 'vonica_kitify_add_simple_style');
if(!function_exists('vonica_kitify_add_simple_style')){
    function vonica_kitify_add_simple_style(){
        return [
          'none' => esc_html__( 'None', 'vonica' ),
          'cat' => esc_html__( 'Category', 'vonica' ),
        ];
    }
}
add_filter('kitify/banner/control/simple_style', 'vonica_kitify_add_simple_style');
if(!function_exists('vonica_kitify_add_simple_style')){
    function vonica_kitify_add_simple_style(){
        return [
          'none' => esc_html__( 'None', 'vonica' ),
          'cat' => esc_html__( 'Category', 'vonica' ),
        ];
    }
}
add_filter('kitify/banner-list/preset_overlay', 'vonica_kitify_banner_list_overlay_preset');
if(!function_exists('vonica_kitify_banner_list_overlay_preset')){
    function vonica_kitify_banner_list_overlay_preset(){
        return [
          'default' => esc_html__( 'Default', 'vonica' ),
          'hidden_title' => esc_html__( 'Hidden Title', 'vonica' ),
        ];
    }
}
add_filter('kitify/advanced_carousel/control/item_layout', 'vonica_kitify_add_advanced_carousel_item_layout');
if(!function_exists('vonica_kitify_add_advanced_carousel_item_layout')){
    function vonica_kitify_add_advanced_carousel_item_layout(){
        return [
          'banners'   => esc_html__( 'Banners', 'vonica' ),
          'simple'   => esc_html__( 'Simple', 'vonica' ),
          'category'   => esc_html__( 'Category', 'vonica' ),
        ];
    }
}

add_filter('kitify/products/control/grid_style', 'vonica_kitify_add_product_grid_style');
if(!function_exists('vonica_kitify_add_product_grid_style')){
    function vonica_kitify_add_product_grid_style(){
        return [
            '1' => esc_html__('Default', 'vonica'),
            '2' => esc_html__('Vonica Style', 'vonica'),
        ];
    }
}

add_filter('kitify/products/control/list_style', 'vonica_kitify_add_product_list_style');
if(!function_exists('vonica_kitify_add_product_list_style')){
    function vonica_kitify_add_product_list_style(){
        return [
            '1' => esc_html__('Type 1', 'vonica'),
            'mini' => esc_html__('Mini', 'vonica'),
        ];
    }
}
add_filter('kitify/woo-categories/control/preset', 'vonica_kitify_add_woo_categories_style');
if(!function_exists('vonica_kitify_add_woo_categories_style')){
    function vonica_kitify_add_woo_categories_style(){
        return [
          'default' => esc_html__( 'Default', 'vonica' ),
          'vonica-01' => esc_html__( 'Vonica 01', 'vonica' ),
          'vonica-02' => esc_html__( 'Vonica 02', 'vonica' ),
          'vonica-03' => esc_html__( 'Vonica 03', 'vonica' ),
        ];
    }
}
add_filter('kitify/posts/control/preset', 'vonica_kitify_add_posts_preset');
if(!function_exists('vonica_kitify_add_posts_preset')){
    function vonica_kitify_add_posts_preset(){
        return [
          'grid-1' => esc_html__( 'Grid 1', 'vonica' ),
					'grid-2' => esc_html__( 'Grid 2', 'vonica' ),
					'list-1' => esc_html__( 'List 1', 'vonica' ),
					'list-2' => esc_html__( 'List 2', 'vonica' ),
          'vonica-1' => esc_html__( 'Vonica Style', 'vonica' ),
        ];
    }
}
add_filter('kitify/tabs/control/preset', 'vonica_kitify_add_tabs_preset');
if(!function_exists('vonica_kitify_add_tabs_preset')){
    function vonica_kitify_add_tabs_preset(){
        return [
          'default' => esc_html__( 'Default', 'vonica' ),
          'vonica-1' => esc_html__( 'Vonica Style', 'vonica' ),
        ];
    }
}

add_filter('kitify/testimonials/control/preset', 'vonica_kitify_add_testimonials_preset');
if(!function_exists('vonica_kitify_add_testimonials_preset')){
    function vonica_kitify_add_testimonials_preset(){
        return [
          'vonica' => esc_html__( 'Vonica Default', 'vonica' ),
          'type-1' => esc_html__( 'Type 1', 'vonica' ),
          'type-2' => esc_html__( 'Type 2', 'vonica' ),
          'type-3' => esc_html__( 'Type 3', 'vonica' ),
          'type-4' => esc_html__( 'Type 4', 'vonica' ),
          'type-5' => esc_html__( 'Type 5', 'vonica' ),
          'type-6' => esc_html__( 'Type 6', 'vonica' ),
          'type-7' => esc_html__( 'Type 7', 'vonica' ),
          'type-8' => esc_html__( 'Type 8', 'vonica' ),
          'type-9' => esc_html__( 'Type 9', 'vonica' ),
        ];
    }
}

add_filter('kitify/products/box_selector', 'vonica_kitify_product_change_box_selector');
if(!function_exists('vonica_kitify_product_change_box_selector')){
    function vonica_kitify_product_change_box_selector(){
        return '{{WRAPPER}} ul.products .product-item';
    }
}

add_filter('kitify/posts/format-icon', 'vonica_kitify_change_postformat_icon', 10, 2);
if(!function_exists('vonica_kitify_change_postformat_icon')){
    function vonica_kitify_change_postformat_icon( $icon, $type ){
        return $icon;
    }
}
add_filter('kitify/sidebar/style/sidebar_style', 'vonica_kitify_add_sidebar_style');
if(!function_exists('vonica_kitify_add_sidebar_style')){
    function vonica_kitify_add_sidebar_style(){
        return [
            '1' => esc_html__('Default', 'vonica'),
            '2' => esc_html__('Shop Sidebar', 'vonica'),
        ];
    }
}
add_filter('kitify/wootabs/layout/tabs_layout', 'vonica_kitify_tabs_layout');
if(!function_exists('vonica_kitify_tabs_layout')){
    function vonica_kitify_tabs_layout(){
        return [
            'default' => esc_html__('Default', 'vonica'),
            'tab_left' => esc_html__('Tabs left', 'vonica'),
            'accordion' => esc_html__('Accordion', 'vonica'),
        ];
    }
}
// -----------------------------------------------------------------------------
// Elementor register breakpoint
// -----------------------------------------------------------------------------

if ( ! function_exists( 'vonica_register_breakpoint' ) ) :
function vonica_register_breakpoint(){
  if(defined('ELEMENTOR_VERSION')){
      $has_register_breakpoint = get_option('vonica_has_register_breakpoint', false);
      if(empty($has_register_breakpoint)){
          update_option('elementor_experiment-additional_custom_breakpoints', 'active');
          update_option('elementor_experiment-container', 'active');
          $kit_active_id = Elementor\Plugin::$instance->kits_manager->get_active_id();
          $raw_kit_settings = get_post_meta( $kit_active_id, '_elementor_page_settings', true );
          if(empty($raw_kit_settings)){
            $raw_kit_settings = [];
          }
          $default_settings = [
              'space_between_widgets' => '0',
              'page_title_selector' => 'h1.entry-title',
              'stretched_section_container' => '',
              'active_breakpoints' => [
                  'viewport_mobile',
                  'viewport_mobile_extra',
                  'viewport_tablet',
                  'viewport_tablet_extra',
                  'viewport_laptop',
              ],
              'viewport_mobile' => 767,
              'viewport_md' => 768,
              'viewport_mobile_extra' => 991,
              'viewport_tablet' => 1024,
              'viewport_tablet_extra' => 1279,
              'viewport_lg' => 1280,
              'viewport_laptop' => 1599,
              'system_colors' => [
                [
                  '_id' => 'primary',
                  'title' => esc_html__( 'Primary', 'vonica' )
                ],
                [
                  '_id' => 'secondary',
                  'title' => esc_html__( 'Secondary', 'vonica' )
                ],
                [
                  '_id' => 'text',
                  'title' => esc_html__( 'Text', 'vonica' )
                ],
                [
                  '_id' => 'accent',
                  'title' => esc_html__( 'Accent', 'vonica' )
                ]
              ],
              'system_typography' => [
                [
                  '_id' => 'primary',
                  'title' => esc_html__( 'Primary', 'vonica' )
                ],
                [
                  '_id' => 'secondary',
                  'title' => esc_html__( 'Secondary', 'vonica' )
                ],
                [
                  '_id' => 'text',
                  'title' => esc_html__( 'Text', 'vonica' )
                ],
                [
                  '_id' => 'accent',
                  'title' => esc_html__( 'Accent', 'vonica' )
                ]
              ]
          ];
          $raw_kit_settings = array_merge($raw_kit_settings, $default_settings);
          update_post_meta( $kit_active_id, '_elementor_page_settings', $raw_kit_settings );
          Elementor\Core\Breakpoints\Manager::compile_stylesheet_templates();
          update_option('vonica_has_register_breakpoint', true);
      }
  }
}
endif;
add_action( 'elementor/init', 'vonica_register_breakpoint' );

/**
 * Add support for Elementor Pro locations
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'vonica_register_elementor_locations' ) ) :
  function vonica_register_elementor_locations( $elementor_theme_manager ) {
      $elementor_theme_manager->register_all_core_location();
  }
endif;
// Add support for Elementor Pro locations
add_action( 'elementor/theme/register_locations', 'vonica_register_elementor_locations' );
