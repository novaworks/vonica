<!-- .site-search -->
		<div class="off-canvas-wrapper">
				<?php do_action( 'kitify/theme/canvas_panel' ); ?>
				<?php if ( NOVA_WOOCOMMERCE_IS_ACTIVE ) : ?>
				  <?php if (!is_user_logged_in() ) : ?>
				    <div class="kitify-offcanvas login-canvas site-canvas-menu off-canvas position-right" id="AcccountCanvas_Popup" data-off-canvas data-transition="overlap">
				      <div class="kitify-offcanvas__content nova_box_ps">
				        <?php wc_get_template( 'myaccount/form-login.php', array( 'is_popup' => true ) ); ?>
				      </div>
				      <button class="close-button" aria-label="Close menu" type="button" data-close>
				        <svg class="nova-close-canvas">
				          <use xlink:href="#nova-close-canvas"></use>
				        </svg>
				      </button>
				    </div>
				  <?php endif; ?>
				<?php endif; ?>

				<?php if ( NOVA_WOOCOMMERCE_IS_ACTIVE ) : ?>
					<?php if ( !nova_elementor_has_location( 'header' ) && Nova_OP::getOption('header_cart') == 1 &&  Nova_OP::getOption('header_cart_action') == 'mini-cart') : ?>
						<div class="nova-offcanvas minicart-canvas site-canvas-menu off-canvas position-right" id="MiniCartCanvas" data-off-canvas data-transition="overlap">
							<h2 class="title"><?php echo esc_html__( 'Shopping Cart', 'vonica' );?><span class="nova_js_count_bag_item_canvas count-item-canvas"><?php echo esc_html(WC()->cart->get_cart_contents_count()); ?></span></h2>
							<div class="add_ajax_loading">
								<span></span>
							</div>
							<?php if ( class_exists( 'WC_Widget_Cart' ) ) { the_widget( 'WC_Widget_Cart' ); } ?>
							<button class="close-button" aria-label="Close menu" type="button" data-close>
								<svg class="nova-close-canvas">
									<use xlink:href="#nova-close-canvas"></use>
								</svg>
							</button>
						</div>
					<?php endif; ?>
				<?php endif; ?>

				<?php if ( !nova_elementor_has_location( 'header' ) &&  has_nav_menu( 'nova_menu_primary' ) ): ?>
				<div class="site-canvas-menu off-canvas position-left" id="MenuOffCanvas" data-off-canvas data-transition="overlap">
						<div class="row has-scrollbar">
							<div class="header-mobiles-primary-menu">
								<?php
									wp_nav_menu(array(
										'theme_location'    => 'nova_menu_primary',
										'container'         => false,
										'menu_class'        => 'vertical menu drilldown mobile-menu',
										'items_wrap'        => '<ul id="%1$s" class="%2$s" data-drilldown data-back-button="<li class=\'js-drilldown-back\'><a class=\'js_mobile_menu_back\'></a></li>" data-auto-height="true" data-animate-height="true">%3$s</ul>',
										'link_before'       => '<span>',
										'link_after'        => '</span>',
										'fallback_cb'     	=> '',
										'walker'            => new Foundation_Drilldown_Menu_Walker(),
									));
								?>
								<button class="close-button" aria-label="Close menu" type="button" data-close>
									<svg class="nova-close-canvas">
										<use xlink:href="#nova-close-canvas"></use>
									</svg>
								</button>
							</div>
						</div>
				</div>
				<?php endif; ?>
				<?php if ( NOVA_WOOCOMMERCE_IS_ACTIVE && 'modal' == Nova_OP::getOption('product_tab_preset') ) : ?>
					<?php if ( is_product() ) : ?>
						<?php $tabs = apply_filters( 'woocommerce_product_tabs', array() );?>
						<?php if ( ! empty( $tabs ) ) : ?>
							<?php foreach ( $tabs as $key => $tab ) : ?>
								<div class="nova-offcanvas sizeguide-canvas site-canvas-menu off-canvas position-right" id="<?php echo esc_attr( $key ); ?>" data-off-canvas data-transition="overlap">
									<h2 class="title"><?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', esc_html( $tab['title'] ), $key ); ?></h2>
										<div class="nova-offcanvas__content nova_box_ps">
											<?php call_user_func( $tab['callback'], $key, $tab ); ?>
										</div>
									<button class="close-button" aria-label="Close menu" type="button" data-close>
										<svg class="nova-close-canvas">
											<use xlink:href="#nova-close-canvas"></use>
										</svg>
									</button>
								</div>
							<?php endforeach; ?>
						<?php endif; ?>
					<?php endif; ?>
				<?php endif; ?>
		</div>
