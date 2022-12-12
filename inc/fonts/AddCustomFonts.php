<?php

/**
 * @author: Nova-works
 */

if ( ! class_exists( 'NovaThemesAddCustomFonts' ) ) {
	class NovaThemesAddCustomFonts {

		/**
		 * The single class instance.
		 * @var $_instance
		 */
		private static $_instance = null;

		/**
		 * Main Instance
		 * Ensures only one instance of this class exists in memory at any one time.
		 */
		public static function instance() {
			if ( is_null( self::$_instance ) ) {
				self::$_instance = new self();
				self::$_instance->init_hooks();
			}
			return self::$_instance;
		}

		public function __construct() {
			// We do nothing here!
		}

		/**
		 * Init hooks
		 */
		public function init_hooks() {
			add_filter( 'novathemes_fonts_list', [ $this, 'typekit_fonts' ], 20 );
		}

		/**
		 * Typekit fonts
		 */
		public function typekit_fonts( $fonts ) {
			if(!get_option( 'kitify-typekit-fonts' )) {
				return;
			}
			$typekit_fonts = get_option( 'kitify-typekit-fonts' )[ 'custom-typekit-font-details' ];

			if ( ! empty( $typekit_fonts ) ) {

				$fonts[ 'families' ][ 'typekit_fonts' ] = array(
					'text' => esc_html__( 'TypeKit Fonts', 'vonica' ),
					'children' => []
				);
				foreach( $typekit_fonts as $font ) {

					$id = $font[ 'slug' ];

					$fonts[ 'families' ][ 'typekit_fonts' ][ 'children' ][] = [
						'id' => $font[ 'slug' ],
						'text' => $font[ 'family' ]
					];

					$fonts[ 'variants' ][ $id ] = $font[ 'weights' ];

				}

			}
			return $fonts;

		}

	}

	return NovaThemesAddCustomFonts::instance();

}
