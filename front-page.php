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
      <div class="hero__badge" role="status">
        <span class="hero__badge-icon" aria-hidden="true">★</span>
        <p class="hero__badge-copy"><?php esc_html_e( 'Sustainable fabrics, limited releases, ships worldwide.', 'blank' ); ?></p>
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

  <section class="collection-spotlight" id="collection-spotlight" aria-labelledby="collection-spotlight-title">
    <div class="section-heading">
      <p class="section-eyebrow"><?php esc_html_e( 'Signature Capsules', 'blank' ); ?></p>
      <h2 id="collection-spotlight-title" class="section-title"><?php esc_html_e( 'Built for the city, tested in motion', 'blank' ); ?></h2>
      <p class="section-description">
        <?php esc_html_e( 'Layered silhouettes, breathable tech fabrics, and reflective accents keep you ready for every move.', 'blank' ); ?>
      </p>
    </div>

    <div class="collection-grid" role="list">
      <article class="collection-card" role="listitem">
        <figure class="collection-card__media">
          <img src="https://images.unsplash.com/photo-1521572267360-ee0c2909d518?auto=format&fit=crop&w=900&q=80" alt="Model wearing a layered black streetwear set" loading="lazy" />
          <figcaption class="collection-card__pill">
            <span aria-hidden="true" class="icon icon-fire"></span>
            <?php esc_html_e( 'Heat-reactive prints', 'blank' ); ?>
          </figcaption>
        </figure>
        <div class="collection-card__body">
          <h3><?php esc_html_e( 'Urban Velocity', 'blank' ); ?></h3>
          <p><?php esc_html_e( 'Architectural lines and articulated seams engineered for commute-to-club comfort.', 'blank' ); ?></p>
          <a class="text-link" href="#featured-products">
            <span aria-hidden="true" class="icon icon-arrow"></span>
            <?php esc_html_e( 'View capsule', 'blank' ); ?>
          </a>
        </div>
      </article>

      <article class="collection-card" role="listitem">
        <figure class="collection-card__media">
          <img src="https://images.unsplash.com/photo-1509631179647-0177331693ae?auto=format&fit=crop&w=900&q=80" alt="Close up of reflective streetwear jacket" loading="lazy" />
          <figcaption class="collection-card__pill">
            <span aria-hidden="true" class="icon icon-shield"></span>
            <?php esc_html_e( 'Weather-ready shells', 'blank' ); ?>
          </figcaption>
        </figure>
        <div class="collection-card__body">
          <h3><?php esc_html_e( 'Night Signal', 'blank' ); ?></h3>
          <p><?php esc_html_e( 'Reflective trims, stormproof layers, and matte finishes keep the silhouette sharp after dark.', 'blank' ); ?></p>
          <a class="text-link" href="#featured-products">
            <span aria-hidden="true" class="icon icon-arrow"></span>
            <?php esc_html_e( 'Explore the drop', 'blank' ); ?>
          </a>
        </div>
      </article>

      <article class="collection-card" role="listitem">
        <figure class="collection-card__media">
          <img src="https://images.unsplash.com/photo-1509631179647-0177331693ae?auto=format&fit=crop&w=900&q=80" alt="Minimal streetwear outfit with clean lines" loading="lazy" />
          <figcaption class="collection-card__pill">
            <span aria-hidden="true" class="icon icon-leaf"></span>
            <?php esc_html_e( 'Recycled fibers', 'blank' ); ?>
          </figcaption>
        </figure>
        <div class="collection-card__body">
          <h3><?php esc_html_e( 'Studio Essentials', 'blank' ); ?></h3>
          <p><?php esc_html_e( 'Modular basics with breathable mesh panels and soft-touch finishes for everyday performance.', 'blank' ); ?></p>
          <a class="text-link" href="#featured-products">
            <span aria-hidden="true" class="icon icon-arrow"></span>
            <?php esc_html_e( 'Shop essentials', 'blank' ); ?>
          </a>
        </div>
      </article>
    </div>
  </section>

  <section class="brand-promise" id="brand-promise" aria-labelledby="brand-promise-title">
    <div class="section-heading">
      <p class="section-eyebrow"><?php esc_html_e( 'Why -BLANK-', 'blank' ); ?></p>
      <h2 id="brand-promise-title" class="section-title"><?php esc_html_e( 'Engineered to move, built to last', 'blank' ); ?></h2>
    </div>

    <div class="promise-grid" role="list">
      <article class="promise-card" role="listitem">
        <div class="promise-card__icon" aria-hidden="true">
          <span class="icon icon-globe"></span>
        </div>
        <div class="promise-card__body">
          <h3><?php esc_html_e( 'Worldwide delivery', 'blank' ); ?></h3>
          <p><?php esc_html_e( 'Express shipping and transparent tracking to over 80 countries.', 'blank' ); ?></p>
        </div>
      </article>
      <article class="promise-card" role="listitem">
        <div class="promise-card__icon" aria-hidden="true">
          <span class="icon icon-recycle"></span>
        </div>
        <div class="promise-card__body">
          <h3><?php esc_html_e( 'Eco-forward', 'blank' ); ?></h3>
          <p><?php esc_html_e( 'Recycled nylons, organic cottons, and waterless dyeing keep our footprint light.', 'blank' ); ?></p>
        </div>
      </article>
      <article class="promise-card" role="listitem">
        <div class="promise-card__icon" aria-hidden="true">
          <span class="icon icon-award"></span>
        </div>
        <div class="promise-card__body">
          <h3><?php esc_html_e( 'Guaranteed fit', 'blank' ); ?></h3>
          <p><?php esc_html_e( 'Free size exchanges and detailed fit guides mean zero guesswork.', 'blank' ); ?></p>
        </div>
      </article>
    </div>
  </section>

  <section class="lookbook" id="lookbook" aria-labelledby="lookbook-title">
    <div class="section-heading">
      <p class="section-eyebrow"><?php esc_html_e( 'Lookbook', 'blank' ); ?></p>
      <h2 id="lookbook-title" class="section-title"><?php esc_html_e( 'Layers in motion', 'blank' ); ?></h2>
      <p class="section-description"><?php esc_html_e( 'Street-inspired edits styled by the -BLANK- collective.', 'blank' ); ?></p>
    </div>

    <div class="lookbook__grid" role="list">
      <figure class="lookbook__item" role="listitem">
        <img src="https://images.unsplash.com/photo-1542293773-4bce6c5a3b99?auto=format&fit=crop&w=800&q=80" alt="Model in white oversized hoodie and cargo pants" loading="lazy" />
        <figcaption><?php esc_html_e( 'Oversized hoodies paired with tactical cargos for 24/7 wear.', 'blank' ); ?></figcaption>
      </figure>
      <figure class="lookbook__item" role="listitem">
        <img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&fit=crop&w=800&q=80" alt="Two models in layered streetwear jackets" loading="lazy" />
        <figcaption><?php esc_html_e( 'Layered shells and reflective trims keep the silhouette sharp.', 'blank' ); ?></figcaption>
      </figure>
      <figure class="lookbook__item" role="listitem">
        <img src="https://images.unsplash.com/photo-1521572267360-ee0c2909d518?auto=format&fit=crop&w=800&q=80" alt="Close-up of technical streetwear fabric" loading="lazy" />
        <figcaption><?php esc_html_e( 'Technical fabrics with breathable mesh and bonded seams.', 'blank' ); ?></figcaption>
      </figure>
    </div>
  </section>

  <section class="newsletter" id="newsletter" aria-labelledby="newsletter-title">
    <div class="newsletter__content">
      <div class="section-heading">
        <p class="section-eyebrow"><?php esc_html_e( 'Never miss a drop', 'blank' ); ?></p>
        <h2 id="newsletter-title" class="section-title"><?php esc_html_e( 'Join the signal list', 'blank' ); ?></h2>
        <p class="section-description"><?php esc_html_e( 'Get early access to capsules, collabs, and limited runs before they sell out.', 'blank' ); ?></p>
      </div>
      <form class="newsletter__form" action="#" method="post">
        <label class="newsletter__label" for="newsletter-email"><?php esc_html_e( 'Email address', 'blank' ); ?></label>
        <div class="newsletter__controls">
          <input id="newsletter-email" name="newsletter-email" type="email" required="required" aria-required="true" autocomplete="email" placeholder="you@example.com" />
          <button type="submit" class="btn">
            <span aria-hidden="true" class="icon icon-spark"></span>
            <?php esc_html_e( 'Sign me up', 'blank' ); ?>
          </button>
        </div>
        <p class="newsletter__note"><?php esc_html_e( 'We respect your inbox. Unsubscribe anytime.', 'blank' ); ?></p>
      </form>
    </div>
    <div class="newsletter__visual" aria-hidden="true">
      <img src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?auto=format&fit=crop&w=900&q=80" alt="" loading="lazy" />
      <div class="newsletter__overlay">
        <p><?php esc_html_e( 'Limited runs. Purpose-built silhouettes. A+ streetwear every season.', 'blank' ); ?></p>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
