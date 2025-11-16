<?php
/**
 * Child theme functions – -BLANK-
 * (WordPress – child theme functions.php)
 */

// Safety guard: disallow direct access.
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

/**
 * Helper: version for cache-busting.
 * Uses theme version normally; falls back to filemtime in WP_DEBUG for easier dev.
 */
function blank_asset_version( $relative_path ) {
  $theme    = wp_get_theme();
  $version  = $theme ? $theme->get( 'Version' ) : '1.0.0';
  $fullpath = get_stylesheet_directory() . $relative_path;

  if ( defined( 'WP_DEBUG' ) && WP_DEBUG && file_exists( $fullpath ) ) {
    return (string) filemtime( $fullpath );
  }
  return $version ?: '1.0.0';
}

/**
 * Enqueue parent + child styles and theme JS.
 */
function blank_enqueue_assets() {
  // Typography
  wp_enqueue_style(
    'blank-google-fonts',
    'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Quicksand:wght@400;500;700&display=swap',
    [],
    null
  );

  // Parent Astra CSS (load first)
  wp_enqueue_style(
    'blank-parent-style',
    get_template_directory_uri() . '/style.css',
    [],
    wp_get_theme( get_template() )->get( 'Version' )
  );

  // Child CSS: base, Elementor helpers, animations
  wp_enqueue_style(
    'blank-custom',
    get_stylesheet_directory_uri() . '/assets/css/custom.css',
    ['blank-parent-style'],
    blank_asset_version( '/assets/css/custom.css' )
  );

  wp_enqueue_style(
    'blank-elementor-custom',
    get_stylesheet_directory_uri() . '/assets/css/elementor-custom.css',
    ['blank-custom'],
    blank_asset_version( '/assets/css/elementor-custom.css' )
  );

  wp_enqueue_style(
    'blank-animations',
    get_stylesheet_directory_uri() . '/assets/css/brand-animation.css',
    ['blank-custom'],
    blank_asset_version( '/assets/css/brand-animation.css' )
  );

  // Theme JS
  wp_enqueue_script(
    'blank-theme',
    get_stylesheet_directory_uri() . '/assets/js/theme.js',
    ['jquery'],
    blank_asset_version( '/assets/js/theme.js' ),
    true
  );
}
add_action( 'wp_enqueue_scripts', 'blank_enqueue_assets', 20 );

/**
 * Balanced product grid (shop columns on archives).
 * 3 | 4 | 5 across on desktop — default 4.
 */
function blank_shop_columns( $cols ) {
  return 4; // Adjust to 3/4/5 to taste
}
add_filter( 'loop_shop_columns', 'blank_shop_columns', 20 );

/**
 * Uniform catalog thumbnail ratio (archive grids).
 * Example: 4:5 portrait to reduce layout shift.
 */
function blank_wc_thumb_size( $size ) {
  return [ 'width' => 600, 'height' => 750, 'crop' => 1 ];
}
add_filter( 'woocommerce_get_image_size_thumbnail', 'blank_wc_thumb_size' );

/**
 * Add global background animation class to <body>.
 */
add_filter( 'body_class', function( $classes ) {
  if ( ! is_admin() ) {
    $classes[] = 'has-blank-bg';
  }
  return $classes;
});


/**
 * Helper: WooCommerce cart item count.
 */
function blank_wc_cart_count() {
  if ( function_exists( 'WC' ) && null !== WC()->cart ) {
    return (int) WC()->cart->get_cart_contents_count();
  }
  return 0;
}

if ( function_exists( 'WC' ) ) {
  add_filter( 'woocommerce_add_to_cart_fragments', function( $fragments ) {
    ob_start();
    ?>
    <span class="cart-count" aria-live="polite"><?php echo esc_html( blank_wc_cart_count() ); ?></span>
    <?php
    $fragments['span.cart-count'] = ob_get_clean();
    return $fragments;
  } );
}

// End of functions.php
