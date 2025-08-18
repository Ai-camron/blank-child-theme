/* Front Page for -BLANK- */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>
<main id="primary" class="site-main">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post();
      the_content();
    endwhile;
  endif;

  // Optional: show latest products without Elementor Pro
  if ( function_exists('do_shortcode') ) {
    echo do_shortcode('[products limit="8" columns="4" orderby="date" order="DESC"]');
  }
  ?>
</main>
<?php get_footer(); ?>

<?php
/* Front Page for -BLANK- */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>
<main id="primary" class="site-main">
  <section class="hero">
    <h1>-BLANK- Streetwear</h1>
    <p>Bold. Minimal. Unapologetic. Discover the new drop.</p>
  </section>
  <section class="product-grid">
    <h2>Featured Products</h2>
    <?php
    if ( function_exists('do_shortcode') ) {
      echo do_shortcode('[products limit="8" columns="4" orderby="date" order="DESC"]');
    }
    ?>
  </section>
</main>
<?php get_footer(); ?>
