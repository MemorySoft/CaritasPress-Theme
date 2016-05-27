  <?php include('includes/opciones/_variables.php'); ?>

  <!-- PIE DE PÁGINA -->

  <div class="row texto-centrado">
    <div class="small-3 columns">
      <a href="http://mestralmenorca.org" target="_blank" title="Visita la web de Mestral">
        <img src="<?php bloginfo('template_directory'); ?>/images/logo_mestral.png" alt="Logotip de Mestral Menorca">
      </a>
    </div>
    <div class="small-3 columns">
      <a href="http://caritas.es" target="_blank" title="Visita la web de Cáritas Española">
        <img src="<?php bloginfo('template_directory'); ?>/images/logo_caritas_es.png" alt="Logotip de Cáritas Española">
      </a>
    </div>
    <div class="small-3 columns">
      <a href="http://www.caritas.org/es/" target="_blank" title="Visita la web de Caritas Internationalis">
        <img src="<?php bloginfo('template_directory'); ?>/images/logo_caritas_int.png" alt="Logotip de Caritas Internationalis">
      </a>
    </div>
    <div class="small-3 columns">
      <a href="http://www.bisbatdemenorca.com/" target="_blank" title="Visita la web del Bisbat de Menorca">
        <img src="<?php bloginfo('template_directory'); ?>/images/logo_bisbe_menorca.png" alt="Logotip del Bisbat de Menorca">
      </a>
    </div>
  </div>

  <footer>
    <div class="franja fondo-rojo sin-margen--abajo">
      <div class="row footer sin-margen--abajo">
        <div class="small-12 columns texto-centrado">
          <h1>
            Col·labora amb Càritas 
            <small><a href="col·labora" class="small button invertido">Fes-te col·laborador</a></small>
          </h1>
          <hr>
        </div>
        <div class="small-12 large-8 columns">
          <div class="elemento-multicolumna">
            <div class="elemento-multicolumna-seccion">
              <img class="elemento-multicolumna-imagen" src="<?php bloginfo('template_directory'); ?>/images/logo_caritas--mini-blanco.png" alt="">
            </div>
            <div class="elemento-multicolumna-seccion">
              <h3 class="elemento-multicolumna-titulo texto-miniscula">Càritas Diocesana de Menorca</h3>
            </div>
          </div>
          <div class="elemento-multicolumna">
            <div class="elemento-multicolumna-seccion">
              <i class="fa fa-map-marker fa-3x"></i>
            </div>
            <div class="elemento-multicolumna-seccion">
              <p class="elemento-multicolumna-titulo texto-miniscula texto-delgado texto-con-serifa">
              C/ SANTA EULALIA, 83 - 07702 - MAO <br>
              Teléfon 971 36 10 01 | Fax 971 35 37 79</p>
            </div>
          </div>
          <div class="elemento-multicolumna">
            <div class="elemento-multicolumna-seccion">
              <i class="fa fa-map-marker fa-3x"></i>
            </div>
            <div class="elemento-multicolumna-seccion">
              <p class="elemento-multicolumna-titulo texto-miniscula texto-delgado texto-con-serifa">
              C/ FIVALLER, 20 - 07760 - CIUTADELLA <br>
              Teléfon 971 48 11 40 | Fax 971 35 37 79</p>
            </div>
          </div>
          <div class="elemento-multicolumna">
            <div class="elemento-multicolumna-seccion">
              <i class="fa fa-envelope"></i>
            </div>
            <div class="elemento-multicolumna-seccion">
              <p class="elemento-multicolumna-titulo texto-miniscula texto-delgado texto-con-serifa">
              caritas@caritasmenorca.org</p>
            </div>
          </div>
        </div>
        <div class="small-12 large-4 columns">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-uno') ) : ?>
            <h5>Materials de difusió</h5>
            <?php caritaspress_menu_footer_uno(); ?> 
          <?php endif; ?>
          <h5>Segueix-nos</h5>
          <div class="redes-sociales--horizontal">
            <a class="redes-sociales-item" href="" target="_blank">
              <img src="<?php bloginfo('template_directory'); ?>/images/icono_youtube.png" alt="Icono de YouTube">
            </a>
            <a class="redes-sociales-item" href="https://www.facebook.com/cdmenorca" target="_blank">
              <img src="<?php bloginfo('template_directory'); ?>/images/icono_facebook.png" alt="Icono de Facebook">
            </a>
            <a class="redes-sociales-item" href="https://twitter.com/caritasmenorca?lang=es" target="_blank">
              <img src="<?php bloginfo('template_directory'); ?>/images/icono_twitter.png" alt="Icono de Twitter">
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="franja--estrecha fondo-gris--medio sin-margen--abajo">
      <div class="row sin-margen--abajo">
        <div class="small-12 large-1 columns">
          <a href="contacte" class="small button bordeado--blanco">Contacte</a>
        </div>
        <div class="small-12 large-8 columns">
          <?php caritaspress_menu_inferior(); ?> 
        </div>
        <div class="small-12 large-3 columns">
          <p>&copy; Càritas Menorca 2016</p>
        </div>
      </div>
    </div>
  </footer>

  <div class="full reveal" id="infoEmpresas" data-reveal>
    <div class="row">
      <div class="small-12 columns">
        <div class="close-button" data-close aria-label="Tanca">
          <span aria-hidden="true">&times;</span>
        </div>
        <h2>Empreses amb cor</h2>
        <p class="texto-destacado--peque"></p>
        <p><a href="col·labora" class="button">Ofereix la teva empresa</a></p>
      </div>
    </div>
  </div>

  <!-- Google Analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', '<?php echo get_option('global_analitica'); ?>', 'auto');
    ga('require', 'linkid', 'linkid.js');
    ga('send', 'pageview');
  </script>
  
  <?php wp_footer() ?>
  </body>
</html>