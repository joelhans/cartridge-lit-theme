<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Cartridge Lit
 */
?>

	</div><!-- #content -->
</div><!-- #page -->

<footer id="colophon" class="site-footer" role="contentinfo">
<div class="footer-wrap">

  <div class="footer-nav">
    <a class="nav-left" href="<?php echo esc_url( home_url( '/' ) ); ?>">Cartridge Lit</a>
    <a class="nav-left" href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a>
    <a class="nav-left" href="<?php echo esc_url( home_url( '/submissions/' ) ); ?>">Submissions</a>
    <a class="nav-left" href="<?php echo esc_url( home_url( '/contributors/' ) ); ?>">Contributors</a>
    <a class="nav-left" href="<?php echo esc_url( home_url( '/masthead/' ) ); ?>">Masthead</a>
  </div>

  <div class="footer-genres">
    <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Fiction' ) ) ) ?>">Fiction</a>
    <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Poetry' ) ) ) ?>">Poetry</a>
    <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Non-Fiction' ) ) ) ?>">Non-fiction</a>
		<a href="<?php echo esc_url( home_url( '/chapbooks/' ) ); ?>">Chapbooks</a>
    <a href="<?php echo esc_url( home_url( '/the-airship/' ) ); ?>">The Airship (blog)</a>
  </div>

  <div class="footer-social">
    <a href="http://twitter.com/cartridgelit">Twitter</a>
    <a href="https://www.facebook.com/CartridgeLit">Facebook</a>
    <a href="<?php echo esc_url( home_url( '/feed/' ) ); ?>">RSS</a>
  </div>

  <div class="footer-rights">
    <p>&copy; Cartridge Lit, 2014-.</p>
    <p>This airship is being co-piloted by Justin L. Daugherty and Joel Hans.</p>
    <img class="phoenix-down" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/phoenix_down_vert.png" />
  </div>



</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
