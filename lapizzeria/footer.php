    <footer class="site-footer">
        <?php 
              $args = array(
                'theme_location'  => 'header-menu',
                'container'       => 'nav',
                'container_class' => 'footer-nav',
                'after'           => '<span class="separador"> | </span>'
              );
              wp_nav_menu($args);
        ?>

          <div class="direccion-footer">
                <p>4226 - Bigup Avenida 1184 Bogotá</p>
                <p>Teléfono: 900018838833</p>
          </div>
    </footer>  
  
  
  <?php wp_footer() ?>
</body>
</html>