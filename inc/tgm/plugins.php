<?php


function vonica_theme_register_required_plugins() {

  $plugins = array(
    'novaworks' => array(
      'name'               => esc_html__('Novaworks','vonica'),
      'slug'               => 'novaworks',
      'source'             => 'http://assets.novaworks.net/plugins/novaworks.zip',
      'required'           => true,
      'description'        => esc_html__('Extends the functionality of Vonica with theme specific shortcodes and page builder elements.','vonica'),
      'demo_required'      => true,
      'version'            => '2.0.1'
    ),
    'kitify' => array(
      'name'               => esc_html__('Kitify','vonica'),
      'slug'               => 'kitify',
      'source'             => 'http://assets.novaworks.net/plugins/kitify-1.0.4.zip',
      'required'           => true,
      'description'        => esc_html__('A perfect plugin for Elementor','vonica'),
      'demo_required'      => true,
      'version'            => '1.0.4.5'
    ),
    // 'novawrs-pagespeed' => array(
    //   'name'               => esc_html__('Novaworks PageSpeed','vonica'),
    //   'slug'               => 'novawrs-pagespeed',
    //   'source'             => 'http://assets.novaworks.net/plugins/novawrs-pagespeed-v1.0.0.zip',
    //   'required'           => true,
    //   'description'        => esc_html__(' Novaworks PageSpeed eliminate render-blocking Javascript. This gives 2x-5x increase in page load speed, as well as in relevant Google page speed metrics. And this plugin improves your page speed, even on top of your existing optimizations','vonica'),
    //   'demo_required'      => false,
    //   'version'            => '1.0.0'
    // ),
    'wc-ajax-product-filter' => array(
      'name'               => esc_html__('Nova Ajax Product Filters','vonica'),
      'slug'               => 'nova-ajax-product-filter',
      'source'             => 'http://assets.novaworks.net/plugins/nova-ajax-product-filter.zip',
      'required'           => true,
      'description'        => esc_html__('A plugin to filter woocommerce products with AJAX request.','vonica'),
      'demo_required'      => true,
      'version'            => '1.0.0'
    ),
    'elementor' => array(
      'name'               => esc_html__('Elementor Page Builder','vonica'),
      'slug'               => 'elementor',
      'required'           => true,
      'description'        => esc_html__('The most advanced frontend drag & drop page builder. Create high-end, pixel perfect websites at record speeds. Any theme, any page, any design.','vonica'),
      'demo_required'      => true
    ),
    'woocommerce' => array(
      'name'               => esc_html__('WooCommerce','vonica'),
      'slug'               => 'woocommerce',
      'required'           => true,
      'description'        => esc_html__('The eCommerce engine','vonica'),
      'demo_required'      => true
    ),
    'kirki' => array(
      'name'               => esc_html__('Kirki','vonica'),
      'slug'               => 'kirki',
      'required'           => true,
      'demo_required'      => true
    ),
    'yith-woocommerce-wishlist' => array(
      'name'               => esc_html__('YITH WooCommerce Wishlist','vonica'),
      'slug'               => 'yith-woocommerce-wishlist',
      'required'           => false,
      'description'        => esc_html__('YITH WooCommerce Wishlist gives your users the possibility to create, fill, manage and share their wishlists allowing you to analyze their interests and needs to improve your marketing strategies.','vonica'),
      'demo_required'      => true
    ),
    'envato-market' => array(
      'name'               => esc_html__('Envato Market','vonica'),
      'slug'               => 'envato-market',
      'source'             => 'https://envato.github.io/wp-envato-market/dist/envato-market.zip',
      'required'           => false,
      'description'        => esc_html__('Automatically update your Envato theme','vonica'),
      'demo_required'      => true
    ),
    'revslider' => array(
      'name'               => esc_html__('Slider Revolution','vonica'),
      'slug'               => 'revslider',
      'source'				     => 'http://assets.novaworks.net/plugins/revslider.zip',
      'required'           => false,
      'demo_required'      => true
    ),
    'woo-variation-swatches' => array(
      'name'               => esc_html__('Variation Swatches for WooCommerce','vonica'),
      'slug'               => 'woo-variation-swatches',
      'required'           => false,
      'description'        => esc_html__('Beautiful colors, images and buttons variation swatches for woocommerce product attributes. Requires WooCommerce 3.2+','vonica'),
      'demo_required'      => true
    ),
  );

	$config = array(
	  'id'                => 'vonica',
		'default_path'      => '',
		'parent_slug'       => 'themes.php',
		'menu'              => 'tgmpa-install-plugins',
		'has_notices'       => true,
		'is_automatic'      => true,
	);

	tgmpa( $plugins, $config );
}

add_action( 'tgmpa_register', 'vonica_theme_register_required_plugins' );
