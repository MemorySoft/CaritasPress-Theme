  <?php include('includes/opciones/_variables.php'); ?>

  <!-- PIE DE PÁGINA -->

  <div class="row texto-centrado">
    <div class="small-3 columns">
      <!-- <a href="http://mestralmenorca.org" target="_blank" title="Visita la web de Mestral"> -->
      <a href="<?php echo $enlace_logo_uno ?>" target="_blank">
        <img src="<?php echo $imagen_logo_uno ?>" alt="Logotip">
      </a>
    </div>
    <div class="small-3 columns">
      <!-- <a href="http://caritas.es" target="_blank" title="Visita la web de Cáritas Española"> -->
      <a href="<?php echo $enlace_logo_dos ?>" target="_blank">
        <img src="<?php echo $imagen_logo_dos ?>" alt="Logotip">
      </a>
    </div>
    <div class="small-3 columns">
      <!-- <a href="http://www.caritas.org/es/" target="_blank" title="Visita la web de Caritas Internationalis"> -->
      <a href="<?php echo $enlace_logo_tres ?>" target="_blank">
        <img src="<?php echo $imagen_logo_tres ?>" alt="Logotip">
      </a>
    </div>
    <div class="small-3 columns">
      <!-- <a href="http://www.bisbatdemenorca.com/" target="_blank" title="Visita la web del Bisbat de Menorca"> -->
      <a href="<?php echo $enlace_logo_cuatro ?>" target="_blank">
        <img src="<?php echo $imagen_logo_cuatro ?>" alt="Logotip">
      </a>
    </div>
  </div>

  <footer>
    <div class="franja fondo-rojo sin-margen--abajo">
      <div class="row footer sin-margen--abajo">
        <div class="small-12 columns texto-centrado">
          <h1>
            Col·labora amb Càritas
            <small><a href="colabora" class="small button invertido">Fes-te col·laborador</a></small>
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
                <!-- C/ SANTA EULALIA, 83 - 07702 - MAO <br>
                Teléfon 971 36 10 01 | Fax 971 35 37 79</p> -->
                <?php echo $calle_uno ?>,
                <?php echo $numero_uno ?> -
                <?php echo $cp_uno ?> -
                <?php echo $localidad_uno ?> <br>
                <?php echo $telefono_uno ?> |
                <?php echo $fax_uno ?>
              </p>
            </div>
          </div>
          <div class="elemento-multicolumna">
            <div class="elemento-multicolumna-seccion">
              <i class="fa fa-map-marker fa-3x"></i>
            </div>
            <div class="elemento-multicolumna-seccion">
              <p class="elemento-multicolumna-titulo texto-miniscula texto-delgado texto-con-serifa">
                <!-- C/ FIVALLER, 20 - 07760 - CIUTADELLA <br>
                Teléfon 971 48 11 40 | Fax 971 35 37 79</p> -->
                <?php echo $calle_dos ?>,
                <?php echo $numero_dos ?> -
                <?php echo $cp_dos ?> -
                <?php echo $localidad_dos ?> <br>
                <?php echo $telefono_dos ?> |
                <?php echo $fax_dos ?>
              </p>
            </div>
          </div>
          <div class="elemento-multicolumna">
            <div class="elemento-multicolumna-seccion">
              <i class="fa fa-envelope"></i>
            </div>
            <div class="elemento-multicolumna-seccion">
              <p class="elemento-multicolumna-titulo texto-miniscula texto-delgado texto-con-serifa">
                <!-- caritas@caritasmenorca.org</p> -->
                <?php echo $email_contacto ?>
              </p>
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
            <!-- <a class="redes-sociales-item" href="https://www.youtube.com/channel/UCzcLy0ubLrH_QOmelsHbqcQ" target="_blank"> -->
              <a class="redes-sociales-item" href="<?php echo $enlace_youtube ?>" target="_blank">
              <img src="<?php bloginfo('template_directory'); ?>/images/icono_youtube.png" alt="Icono de YouTube">
            </a>
            <!-- <a class="redes-sociales-item" href="https://www.facebook.com/cdmenorca" target="_blank"> -->
            <a class="redes-sociales-item" href="<?php echo $enlace_facebook ?>" target="_blank">
              <img src="<?php bloginfo('template_directory'); ?>/images/icono_facebook.png" alt="Icono de Facebook">
            </a>
            <!-- <a class="redes-sociales-item" href="https://twitter.com/caritasmenorca?lang=es" target="_blank"> -->
            <a class="redes-sociales-item" href="<?php echo $enlace_twitter ?>" target="_blank">
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
        <p class="texto-destacado--peque">Des de Càritas Diocesana de Menorca estem implantant un nou programa de col·laboració amb tots aquells agents econòmics i socials, l'activitat i filosofia dels quals, coincideixen amb els valors que des de Càritas promovem: la solidaritat, la justícia, el respecte a la dignitat i la igualtat.</p>
        <p>Les empreses y entitats del nostre entorn són un dels agents més importants per al desenvolupament sostenible de la nostra societat i per a la seva cohesió social. La Responsabilitat Social Corporativa (RSE) és una realitat consolidada al nostre país.</p>
        <p>Càritas Menorca aposta per aquest treball conjunt amb els diferents agents socials que, atenent a la situació actual i dins de les seves possibilitats, volen formar part d'aquesta xarxa solidària.</p>
        <p>
          <h4>Avantatges de ser una Empresa/Entitat amb Cor</h4>
          <ul class="lista--entre-lineas">
              <li>Estalona el vostre paper com a membre dinàmic de la comunitat i desperta l’interès de clients, proveïdors i empleats, sobre tot, si poden participar directe o indirectament de lesaccions.</li>
              <li>Reforça la vostra imatge de marca i l’impacte mediàtic, vinculant-vos mitjançant les accions de mecenatge, patrocini o esponsorització.</li>
              <li>Presentar-vos davant la societat, i especialment davant el vostre públic, com una empresa o entitat responsable i socialment compromesa.</li>
              <li>Per part de Càritas sempre es farà menció de la col·laboració en mitjans de comunicació i en els mitjans de difusió interna de la pròpia entitat, web, xarxes, memòria, etc.</li>
              <li>Elaboració d'articles que expliquin el suport de les empreses o entitats, en mitjans especialitzats.</li>
              <li>Ús de la nostra imatge i nom sempre previ permís.</li>
              <li>Identificació visual de l'empresa com a “Empresa amb Cor”. Participació i organització d’actes conjunts on es reconeguin o promoguin aquest tipus de col·laboracions.</li>
              <li>Beneficis fiscals, que contempla la legislació vigent, en termes de patrocini i mecenatge.</li>
              <li>La senzilla satisfacció que dóna saber que s’està contribuint a fer un món més just i digne per a tots.</li>
          </ul>

        </p>
        <p><a href="colabora" class="button">Ofereix la teva empresa</a></p>
      </div>
    </div>
  </div>

  <!-- Google Analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', '<?php echo $analitica_id ?>', 'auto');
    ga('require', 'linkid', 'linkid.js');
    ga('send', 'pageview');
  </script>

  <?php wp_footer() ?>
  </body>
</html>
