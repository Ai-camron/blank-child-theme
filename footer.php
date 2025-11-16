<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

$description = get_bloginfo( 'description', 'display' );
if ( empty( $description ) ) {
  $description = __( 'Creative tools to transform your financial journey into an enjoyable adventure.', 'blank-child' );
}
?>
<footer class="ssk-footer">
  <div class="ssk-footer__inner">
    <div class="footer-section">
      <h3><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h3>
      <p><?php echo esc_html( $description ); ?></p>
      <div class="social-icons">
        <a href="https://instagram.com" class="social-icon" aria-label="Instagram">
          <img src="https://img.icons8.com/ios-filled/50/instagram-new.png" alt="Instagram" />
        </a>
        <a href="https://pinterest.com" class="social-icon" aria-label="Pinterest">
          <img src="https://img.icons8.com/ios-filled/50/pinterest.png" alt="Pinterest" />
        </a>
        <a href="https://facebook.com" class="social-icon" aria-label="Facebook">
          <img src="https://img.icons8.com/ios-filled/50/facebook-f.png" alt="Facebook" />
        </a>
        <a href="https://tiktok.com" class="social-icon" aria-label="TikTok">
          <img src="https://img.icons8.com/ios-filled/50/tiktok.png" alt="TikTok" />
        </a>
      </div>
    </div>
    <div class="footer-section">
      <h3><?php esc_html_e( 'Shop', 'blank-child' ); ?></h3>
      <ul class="footer-links">
        <li><a href="<?php echo esc_url( function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/shop/' ) ); ?>#scratch-offs"><img src="https://img.icons8.com/ios-filled/50/scroll.png" alt="" /><?php esc_html_e( 'Scratch-Off Cards', 'blank-child' ); ?></a></li>
        <li><a href="<?php echo esc_url( function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/shop/' ) ); ?>#challenges"><img src="https://img.icons8.com/ios-filled/50/trophy.png" alt="" /><?php esc_html_e( 'Savings Challenges', 'blank-child' ); ?></a></li>
        <li><a href="<?php echo esc_url( function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/shop/' ) ); ?>#workbooks"><img src="https://img.icons8.com/ios-filled/50/book.png" alt="" /><?php esc_html_e( 'Workbooks & Planners', 'blank-child' ); ?></a></li>
        <li><a href="<?php echo esc_url( function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/shop/' ) ); ?>#tools"><img src="https://img.icons8.com/ios-filled/50/tools.png" alt="" /><?php esc_html_e( 'Budgeting Tools', 'blank-child' ); ?></a></li>
        <li><a href="<?php echo esc_url( function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/shop/' ) ); ?>#downloads"><img src="https://img.icons8.com/ios-filled/50/download.png" alt="" /><?php esc_html_e( 'Digital Downloads', 'blank-child' ); ?></a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h3><?php esc_html_e( 'Support', 'blank-child' ); ?></h3>
      <ul class="footer-links">
        <li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>"><img src="https://img.icons8.com/ios-filled/50/question-mark.png" alt="" /><?php esc_html_e( 'FAQ', 'blank-child' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/shipping-returns/' ) ); ?>"><img src="https://img.icons8.com/ios-filled/50/shipped.png" alt="" /><?php esc_html_e( 'Shipping & Returns', 'blank-child' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/digital-product-guide/' ) ); ?>"><img src="https://img.icons8.com/ios-filled/50/document.png" alt="" /><?php esc_html_e( 'Digital Product Guide', 'blank-child' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><img src="https://img.icons8.com/ios-filled/50/new-post.png" alt="" /><?php esc_html_e( 'Contact Us', 'blank-child' ); ?></a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h3><?php esc_html_e( 'Contact', 'blank-child' ); ?></h3>
      <ul class="footer-links">
        <li><a href="mailto:hello@sskreates.com"><img src="https://img.icons8.com/ios-filled/50/new-post.png" alt="" />hello@sskreates.com</a></li>
        <li><a href="tel:5551234567"><img src="https://img.icons8.com/ios-filled/50/phone.png" alt="" />(555) 123-4567</a></li>
        <li><a href="https://goo.gl/maps/X6EXAMPLE"><img src="https://img.icons8.com/ios-filled/50/marker.png" alt="" />Portland, Oregon</a></li>
      </ul>
    </div>
  </div>
  <div class="ssk-footer__credits">
    <p>&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?> | <?php esc_html_e( 'Budget, Save & Play', 'blank-child' ); ?></p>
    <p><?php esc_html_e( 'All products designed with love by Rose', 'blank-child' ); ?></p>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
