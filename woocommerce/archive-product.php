<?php
/**
 * WooCommerce archive overrides for -BLANK- child theme.
 *
 * @package BlankChild
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
?>

<main id="primary" class="site-main shop-main" role="main">
  <?php if ( woocommerce_product_loop() ) : ?>
    <?php woocommerce_output_all_notices(); ?>
    <?php woocommerce_product_loop_start(); ?>

    <?php while ( have_posts() ) : ?>
      <?php the_post(); ?>
      <?php wc_get_template_part( 'content', 'product' ); ?>
    <?php endwhile; ?>

    <?php woocommerce_product_loop_end(); ?>

    <?php do_action( 'woocommerce_after_shop_loop' ); ?>
  <?php else : ?>
    <?php do_action( 'woocommerce_no_products_found' ); ?>
  <?php endif; ?>
</main>

<?php get_footer( 'shop' ); ?>
