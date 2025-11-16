<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
wp_body_open();
$description = get_bloginfo( 'description', 'display' );
if ( empty( $description ) ) {
  $description = __( 'Budget, Save & Play', 'blank-child' );
}
?>
<header class="ssk-header">
  <div class="ssk-header__inner">
    <div class="ssk-header__branding">
      <div class="logo-icon">
        <img src="https://img.icons8.com/color/48/piggy-bank.png" alt="<?php esc_attr_e( 'Piggy bank icon', 'blank-child' ); ?>" />
      </div>
      <div class="logo-text">
        <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
        <p class="tagline"><?php echo esc_html( $description ); ?></p>
      </div>
    </div>
    <nav class="ssk-header__nav" aria-label="<?php esc_attr_e( 'Primary navigation', 'blank-child' ); ?>">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-link">
        <img src="https://img.icons8.com/ios-filled/50/home.png" alt="<?php esc_attr_e( 'Home', 'blank-child' ); ?>" />
        <span><?php esc_html_e( 'Home', 'blank-child' ); ?></span>
      </a>
      <a href="<?php echo esc_url( function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/shop/' ) ); ?>" class="nav-link">
        <img src="https://img.icons8.com/ios-filled/50/shop.png" alt="<?php esc_attr_e( 'Shop', 'blank-child' ); ?>" />
        <span><?php esc_html_e( 'Shop', 'blank-child' ); ?></span>
      </a>
      <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="nav-link">
        <img src="https://img.icons8.com/ios-filled/50/user.png" alt="<?php esc_attr_e( 'About', 'blank-child' ); ?>" />
        <span><?php esc_html_e( 'About', 'blank-child' ); ?></span>
      </a>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="nav-link">
        <img src="https://img.icons8.com/ios-filled/50/new-post.png" alt="<?php esc_attr_e( 'Contact', 'blank-child' ); ?>" />
        <span><?php esc_html_e( 'Contact', 'blank-child' ); ?></span>
      </a>
      <a href="<?php echo esc_url( home_url( '/links/' ) ); ?>" class="nav-link">
        <img src="https://img.icons8.com/ios-filled/50/link.png" alt="<?php esc_attr_e( 'Links', 'blank-child' ); ?>" />
        <span><?php esc_html_e( 'Links', 'blank-child' ); ?></span>
      </a>
      <?php if ( function_exists( 'wc_get_cart_url' ) ) : ?>
        <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="nav-link cart-link">
          <img src="https://img.icons8.com/ios-filled/50/shopping-cart.png" alt="<?php esc_attr_e( 'Cart', 'blank-child' ); ?>" />
          <span class="cart-count" aria-live="polite">
            <?php echo esc_html( blank_wc_cart_count() ); ?>
          </span>
        </a>
      <?php endif; ?>
    </nav>
  </div>
</header>
