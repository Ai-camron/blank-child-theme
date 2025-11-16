<?php
/**
 * Front page template for S&S Kreates Co.
 */
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

get_header();
?>
<main id="primary" class="site-main ssk-front-page">
  <section class="hero">
    <div class="hero-content">
      <div class="hero-text">
        <h2><?php esc_html_e( 'Transform Saving Into a', 'blank-child' ); ?> <span><?php esc_html_e( 'Creative Adventure', 'blank-child' ); ?></span></h2>
        <p><?php esc_html_e( 'Beautifully designed savings tools that make financial wellness enjoyable and rewarding. Created by Rose to inspire your journey.', 'blank-child' ); ?></p>
        <div class="hero-buttons">
          <a class="btn" href="<?php echo esc_url( function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/shop/' ) ); ?>"><?php esc_html_e( 'Shop Now', 'blank-child' ); ?></a>
          <a class="btn btn-secondary" href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'How It Works', 'blank-child' ); ?></a>
        </div>
      </div>
      <div class="hero-image" aria-hidden="true">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="main-image">
          <?php esc_html_e( 'Creative Savings Tools', 'blank-child' ); ?><br /><?php esc_html_e( 'That Make Budgeting Fun', 'blank-child' ); ?>
        </div>
      </div>
    </div>
  </section>

  <section class="product-categories">
    <div class="section-title">
      <h2><?php esc_html_e( 'Our Creative Savings Tools', 'blank-child' ); ?></h2>
      <p><?php esc_html_e( 'Discover beautifully designed products that transform saving money from a chore into an enjoyable experience.', 'blank-child' ); ?></p>
    </div>
    <div class="categories-grid">
      <?php
      if ( function_exists( 'do_shortcode' ) ) {
        echo do_shortcode( '[product_categories number="4" columns="4"]' );
      }
      ?>
    </div>
  </section>

  <section class="featured-products">
    <div class="section-title">
      <h2><?php esc_html_e( 'Customer Favorites', 'blank-child' ); ?></h2>
      <p><?php esc_html_e( 'Our most popular savings tools loved by thousands of customers.', 'blank-child' ); ?></p>
    </div>
    <div class="products-grid">
      <?php
      if ( function_exists( 'do_shortcode' ) ) {
        echo do_shortcode( '[products limit="4" columns="4" visibility="featured"]' );
      }
      ?>
    </div>
  </section>

  <section class="about">
    <div class="about-content">
      <div class="about-image">
        <div class="main-quote">
          &ldquo;<?php esc_html_e( 'I believe saving money should be as enjoyable as spending it', 'blank-child' ); ?>&rdquo;<br />&mdash; <?php esc_html_e( 'Rose, Founder', 'blank-child' ); ?>
        </div>
      </div>
      <div class="about-text">
        <h2><?php esc_html_e( 'Designed by', 'blank-child' ); ?> <span><?php esc_html_e( 'Rose', 'blank-child' ); ?></span>, <?php esc_html_e( 'Crafted with Passion', 'blank-child' ); ?></h2>
        <p><?php esc_html_e( 'Every product at S&S Kreates Co. is personally designed and created by CEO Rose, combining financial wisdom with creative joy.', 'blank-child' ); ?></p>
        <p><?php esc_html_e( 'As the sole owner and operator, Rose ensures each item meets her high standards for quality and inspiration. What started as a passion project in her home studio has grown into a thriving business helping thousands make saving enjoyable.', 'blank-child' ); ?></p>
        <p><?php esc_html_e( 'Rose\'s unique approach blends artistic design with practical financial tools, creating products that people love to use every day.', 'blank-child' ); ?></p>
        <a class="btn" href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'Our Story', 'blank-child' ); ?></a>
        <div class="signature"><?php esc_html_e( 'Rose', 'blank-child' ); ?></div>
      </div>
    </div>
  </section>

  <section class="testimonials">
    <div class="section-title">
      <h2><?php esc_html_e( 'Customer Success Stories', 'blank-child' ); ?></h2>
      <p><?php esc_html_e( 'See how our creative tools have transformed saving experiences.', 'blank-child' ); ?></p>
    </div>
    <div class="testimonial-grid">
      <article class="testimonial">
        <p><?php esc_html_e( 'The savings scratch cards completely changed my relationship with money! Saving feels like a game now, and I\'ve saved over $2,000 in just three months.', 'blank-child' ); ?></p>
        <div class="customer">
          <div class="customer-img"><img src="https://i.pravatar.cc/60?img=11" alt="<?php esc_attr_e( 'Portrait of Sarah', 'blank-child' ); ?>" /></div>
          <div class="customer-info">
            <h4><?php esc_html_e( 'Sarah M.', 'blank-child' ); ?></h4>
            <p><?php esc_html_e( 'Saved $2,000 in 3 months', 'blank-child' ); ?></p>
          </div>
        </div>
      </article>
      <article class="testimonial">
        <p><?php esc_html_e( 'Rose\'s budgeting workbook is not just useful, it\'s beautiful! I actually look forward to updating it every week. It\'s transformed how I manage my finances.', 'blank-child' ); ?></p>
        <div class="customer">
          <div class="customer-img"><img src="https://i.pravatar.cc/60?img=32" alt="<?php esc_attr_e( 'Portrait of James', 'blank-child' ); ?>" /></div>
          <div class="customer-info">
            <h4><?php esc_html_e( 'James T.', 'blank-child' ); ?></h4>
            <p><?php esc_html_e( 'Customer for 2 years', 'blank-child' ); ?></p>
          </div>
        </div>
      </article>
      <article class="testimonial">
        <p><?php esc_html_e( 'The weekly challenges keep me motivated like nothing else. I love the creative themes and how they make saving fun. My favorite was the "Coffee Shop Challenge"!', 'blank-child' ); ?></p>
        <div class="customer">
          <div class="customer-img"><img src="https://i.pravatar.cc/60?img=56" alt="<?php esc_attr_e( 'Portrait of Maya', 'blank-child' ); ?>" /></div>
          <div class="customer-info">
            <h4><?php esc_html_e( 'Maya K.', 'blank-child' ); ?></h4>
            <p><?php esc_html_e( 'Saved $1,200 with challenges', 'blank-child' ); ?></p>
          </div>
        </div>
      </article>
    </div>
  </section>

  <section class="cta">
    <div class="cta-content">
      <h2><?php esc_html_e( 'Start Your Creative Savings Journey', 'blank-child' ); ?></h2>
      <p><?php esc_html_e( 'Join thousands of customers who have transformed their financial journey with our beautifully designed tools and resources.', 'blank-child' ); ?></p>
      <div class="cta-buttons">
        <a class="btn btn-purple" href="<?php echo esc_url( function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/shop/' ) ); ?>"><?php esc_html_e( 'Shop All Products', 'blank-child' ); ?></a>
        <a class="btn btn-teal" href="<?php echo esc_url( function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/shop/' ) ); ?>?filter=starter-kits"><?php esc_html_e( 'View Starter Kits', 'blank-child' ); ?></a>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
