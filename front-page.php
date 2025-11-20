<?php
/**
 * Front-page template for the -BLANK- child theme.
 *
 * @package BlankChild
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

get_header();
?>

<main id="primary" class="site-main" role="main">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php the_content(); ?>
      </article>
    <?php endwhile; ?>
  <?php endif; ?>

  <section class="hero" id="homepage-hero" aria-labelledby="hero-title">
    <div class="hero__inner">
      <p class="hero__eyebrow"><?php esc_html_e( 'New Drop', 'blank' ); ?></p>
      <h1 id="hero-title" class="hero__title"><?php esc_html_e( '-BLANK- Streetwear', 'blank' ); ?></h1>
      <p class="hero__description">
        <?php esc_html_e( 'Bold, minimal, and unapologetic. Discover motion-led apparel designed for confident expression.', 'blank' ); ?>
      </p>
      <div class="hero__cta">
        <a class="btn" href="<?php echo esc_url( function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : '#featured-products' ); ?>">
          <?php esc_html_e( 'Shop the collection', 'blank' ); ?>
        </a>
        <a class="btn btn-secondary" href="#featured-products">
          <?php esc_html_e( 'Skip to featured products', 'blank' ); ?>
        </a>
      </div>
    </div>
  </section>

  <section class="product-grid" id="featured-products" aria-labelledby="featured-products-title" tabindex="-1">
    <div class="product-grid__header">
      <h2 id="featured-products-title" class="section-title">
        <?php esc_html_e( 'Featured products', 'blank' ); ?>
      </h2>
      <p class="section-description">
        <?php esc_html_e( 'Hand-picked pieces from the latest release.', 'blank' ); ?>
      </p>
    </div>

    <div class="product-grid__items" role="region" aria-live="polite">
      <?php
      if ( function_exists( 'woocommerce_shortcode_products' ) ) {
        echo do_shortcode( '[products limit="8" columns="4" orderby="date" order="DESC"]' );
      } else {
        echo '<p>' . esc_html__( 'WooCommerce is not active yet. Add products once the plugin is enabled.', 'blank' ) . '</p>';
      }
      ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>
