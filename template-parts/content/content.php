	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if(has_post_thumbnail()): ?>
		<div class="entry-thumbnail">
			<?php nova_single_post_thumbnail(); ?>
			<?php if(has_category()): ?>
				<?php
				$categories = get_the_category();
				$separator = '';
				$output = '';
				if ( ! empty( $categories ) ) :
				?>
					<div class="entry-meta__cat">
						<?php

								foreach( $categories as $category ) {
										$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
								}
								echo trim( $output, $separator );

						?>
					</div>
				<?php endif?>
			<?php endif?>
		</div>
	<?php endif; ?>

	<div class="entry-content-wrap">

		<header class="entry-header">
			<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
		</header>

		<div class="entry-content">

			<div><?php the_excerpt(); ?></div>

		</div>
		<div class="entry-meta">
			<a class="author-all-posts" href="<?php echo get_author_posts_url( get_the_author_meta('ID') ) ?>">
				<figure>
					<?php echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?>
				</figure>
				<span><?php echo get_the_author_meta( 'display_name' ) ?></span>
			</a>
			<div class="meta-right">
				<div class="meta-right__post-date">
					<div class="post-date-icon">
						<svg class="icon-calendar-svg">
					  <use xlink:href="#vonica-calendar"></use>
					</svg>
					</div>
					<?php echo nova_posted_on(); ?>
				</div>
				<?php
				echo '<div class="nova-sharing-posts">';
				nova_social_sharing(get_the_permalink(), get_the_title(), (has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : ''));
				echo '</div>';
				?>
			</div>
		</div>
	</div>

</article>
