  <?php include('includes/opciones/_variables.php'); ?>

  <!-- PIE DE PÁGINA -->

  <div class="row texto-centrado">
    <div class="small-3 columns">
      <a href="">
        <img src="<?php bloginfo('template_directory'); ?>/images/logo_mestral.png" alt="Enllaç a Mestral Menorca">
      </a>
    </div>
    <div class="small-3 columns">
      <a href="">
        <img src="<?php bloginfo('template_directory'); ?>/images/logo_caritas_es.png" alt="Enllaç a Caritas Española">
      </a>
    </div>
    <div class="small-3 columns">
      <a href="">
        <img src="<?php bloginfo('template_directory'); ?>/images/logo_caritas_int.png" alt="Enllaç a Caritas Internationalis">
      </a>
    </div>
    <div class="small-3 columns">
      <a href="">
        <img src="<?php bloginfo('template_directory'); ?>/images/logo_bisbe_menorca.png" alt="Enllaç al Bisbat de Menorca">
      </a>
    </div>
  </div>

  <footer>
    <div class="franja fondo-rojo sin-margen--abajo">
      <div class="row footer sin-margen--abajo">
        <div class="small-12 columns texto-centrado">
          <h1>
            Col·labora amb Càritas 
            <small><a href="colabora.html" class="small button invertido">Fes-te col·laborador</a></small>
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
            <h5><?php echo $footer_uno_titulo ?></h5>
            <?php caritaspress_menu_footer_uno(); ?> 
          <?php endif; ?>
          <h5>Segueix-nos</h5>
          <div class="redes-sociales--horizontal">
            <a class="redes-sociales-item" href="">
              <img src="<?php bloginfo('template_directory'); ?>/images/icono_youtube.png" alt="">
            </a>
            <a class="redes-sociales-item" href="">
              <img src="<?php bloginfo('template_directory'); ?>/images/icono_facebook.png" alt="">
            </a>
            <a class="redes-sociales-item" href="">
              <img src="<?php bloginfo('template_directory'); ?>/images/icono_twitter.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="franja--estrecha fondo-gris--medio sin-margen--abajo">
      <div class="row sin-margen--abajo">
        <div class="small-12 large-1 columns">
          <a href="contacte.html" class="small button bordeado--blanco">Contacte</a>
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
        <p class="texto-destacado--peque">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium corrupti in optio excepturi, ut, animi, tempore quasi rem inventore, quod architecto assumenda mollitia exercitationem autem quaerat cupiditate. Itaque quaerat, ipsa pariatur quidem, dolorum est distinctio.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, eos architecto quod. Consequuntur voluptates accusantium a voluptas nostrum similique dolorem harum libero incidunt. Eveniet doloribus distinctio dicta error nostrum quis consequatur sit maiores maxime iste adipisci cupiditate itaque, excepturi voluptatem et nihil! Praesentium aliquid fuga dicta totam aliquam, nisi laborum eligendi molestias facilis, accusamus debitis veritatis.</p>
        <p><a href="colabora.html" class="button">Ofereix la teva empresa</a></p>
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