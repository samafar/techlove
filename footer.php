<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package Techlove
 */

?>


</div><!-- #page -->

<footer>
  <div class="footer_top">
    <h3>System, Webb & Design</h3>
  </div>
  <div class="footer_container">
    <div class="footer_left">
      Hitta hit
    </div>
    <div class="footer_right">
      Länkar
      <?php    
          wp_nav_menu(
              array(
                  'theme_location' => 'menu-1',
                  'menu_id'        => 'primary-menu',
              )
          );
			?>
    </div>
  </div>

  <div class="footer_bottom">
    Logos

  </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>