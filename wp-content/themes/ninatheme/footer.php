<footer class="footer-container">
  <div class="footer-top--container">
    <div class="footer-column">
      <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/Isotipo.svg" alt="isotipo Nina">
    </div>
    <div class="footer-column">
      <nav class="nav-container">
        <?php wp_nav_menu(
          array(
            'theme_location' => 'footer-menu',
            'menu_class' => 'menu-footer',
            'container_class' => 'container-footer--menu',
          )
        );
        ?>
      </nav>
    </div>
    <div class="footer-column">
      <div class="social-footer">
        <p>Seguinos</p>
        <div class="social-icons">
          <a href=#><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/Facebook.svg" alt="icono Facebook"></a>
          <a href=#><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/Instagram.svg" alt="icono Instagram"></a>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-line"></div>
  <div class="footer-bottom--container">
    <p>© 2022 Nina | Desarrollo por 25Watts | Todos los derechos reservado</p>
  </div>
</footer>
<script>
  var temaUrl = '<?php echo get_template_directory_uri(); ?>';
  console.log(temaUrl);
</script>

<?php wp_footer() ?>

</body>

</html>