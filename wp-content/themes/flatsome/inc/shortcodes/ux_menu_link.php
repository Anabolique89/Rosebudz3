<?php
/**
 * Registers the `ux_menu_link` shortcode.
 *
 * @package flatsome
 */

/**
 * Renders the `ux_menu_link` shortcode.
 *
 * @param array  $atts    An array of attributes.
 * @param string $content The shortcode content.
 * @param string $tag     The name of the shortcode, provided for context to enable filtering.
 *
 * @return string
 */
function flatsome_render_ux_menu_link_shortcode( $atts, $content, $tag ) {
	$atts = shortcode_atts(
		array(
			'visibility' => '',
			'class'      => '',
			'text'       => '',
			'label'      => '',
			'icon'       => '',
			'post'       => '',
			'term'       => '',
			'link'       => '',
			'target'     => '_self',
			'rel'        => '',
		),
		$atts,
		$tag
	);

	$classes = array( 'ux-menu-link flex menu-item' );
	$link    = trim( $atts['link'] );
	$icon    = $atts['icon'] ? get_flatsome_icon( 'ux-menu-link__icon text-center ' . $atts['icon'] ) : '';

	if ( ! empty( $atts['post'] ) ) {
		$link = get_permalink( (int) $atts['post'] );
	} elseif ( ! empty( $atts['term'] ) ) {
		$link = get_term_link( (int) $atts['term'] );
	}

	// Ensure paths (except hash) are rendered as full URLs.
	if ( substr( $link, 0, 1 ) !== '#' && ! wp_http_validate_url( $link ) ) {
		$link = site_url( $link );
	}

	if ( ! empty( $atts['class'] ) )      $classes[] = $atts['class'];
	if ( ! empty( $atts['label'] ) )      $classes[] = $atts['label'];
	if ( ! empty( $atts['visibility'] ) ) $classes[] = $atts['visibility'];

	$link_rels = explode( ' ', $atts['rel'] );
	$link_atts = array(
		'target' => $atts['target'],
		'rel'    => array_filter( $link_rels ),
	);

	ob_start();

	?>
	<div class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>">
		<a class="ux-menu-link__link flex" href="<?php echo esc_attr( $link ); ?>"<?php echo flatsome_parse_target_rel( $link_atts ); ?>>
			<?php echo $icon; ?>
			<span class="ux-menu-link__text">
				<?php echo esc_html( $atts['text'] ); ?>
			</span>
		</a>
	</div>
	<?php

	return ob_get_clean();
}
add_shortcode( 'ux_menu_link', 'flatsome_render_ux_menu_link_shortcode' );
