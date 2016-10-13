<?php /* Template Name: Colabora */ ?>
<?php require( trailingslashit( get_template_directory() ). '/includes/opciones/_variables.php'); ?>
<?php get_header(); ?>

<!-- CONTENIDO | INTRO -->

<div class="row texto-centrado sin-margen--abajo">
  <div class="small-12 columns">
    <h2 class="titulo"><?php echo $donativos_titulo ?></h2>
    <p class="texto-destacado"><?php echo $donativos_descripcion ?></p>
  </div>
</div>

<!-- CONTENIDO | COLABORA -->

<div class="row colaboracion-opciones small-up-1 medium-up-5 texto-centrado">
  <div class="columns colaboracion-elemento">
    <h3>Donatius</h3>
    <img src="<?php bloginfo('template_directory'); ?>/images/icono_donatius__rojo.png" alt="Donatius">
    <a href="#formularioDonativos" class="button">Vull fer un donatiu</a>
  </div>
  <div class="columns colaboracion-elemento">
    <h3>Socis</h3>
    <img src="<?php bloginfo('template_directory'); ?>/images/icono_socis__rojo.png" alt="Socis">
    <a href="javascript:void(0)" class="button" data-toggle="formularioSocios">Vull fer-me soci</a>
  </div>
  <div class="columns colaboracion-elemento">
    <h3>Voluntaris</h3>
    <img src="<?php bloginfo('template_directory'); ?>/images/icono_voluntaris__rojo.png" alt="Voluntaris">
    <a href="javascript:void(0)" class="button" data-toggle="formularioVoluntarios">Vull ser voluntari</a>
  </div>
  <div class="columns colaboracion-elemento">
    <h3>Empreses</h3>
    <img src="<?php bloginfo('template_directory'); ?>/images/icono_empreses__rojo.png" alt="Empreses">
    <a href="javascript:void(0)" class="button" data-toggle="formularioEmpresas">Vull posar-hi cor</a>
  </div>
  <div class="columns colaboracion-elemento">
    <h3>Llegats</h3>
    <img src="<?php bloginfo('template_directory'); ?>/images/icono_llegats__rojo.png" alt="Llegats">
    <a href="javascript:void(0)" class="button" data-toggle="formularioLegados">Vull llegar</a>
  </div>
</div>

<!-- CONTENIDO | DATOS -->

<div class="row texto-centrado">
  <div class="small-12 medium-4 columns">
    <div class="datos-contenedor">
      <span class="datos-cifra"><?php echo $fiscal_bloque_uno_cifra ?></span>
      <span class="datos-etiqueta"><?php echo $fiscal_bloque_uno_titulo ?></span>
    </div>
    <p class="texto-destacado--peque texto-sin-serifa"><?php echo $fiscal_bloque_uno_descripcion ?></p>
  </div>
  <div class="small-12 medium-4 columns">
    <div class="datos-contenedor">
      <span class="datos-cifra"><?php echo $fiscal_bloque_dos_cifra ?></span>
      <span class="datos-etiqueta"><?php echo $fiscal_bloque_dos_titulo ?></span>
    </div>
    <p class="texto-destacado--peque texto-sin-serifa"><?php echo $fiscal_bloque_dos_descripcion ?></p>
  </div>
  <div class="small-12 medium-4 columns">
    <div class="datos-contenedor">
      <span class="datos-cifra"><?php echo $fiscal_bloque_tres_cifra ?></span>
      <span class="datos-etiqueta"><?php echo $fiscal_bloque_tres_titulo ?></span>
    </div>
    <p class="texto-destacado--peque texto-sin-serifa"><?php echo $fiscal_bloque_tres_descripcion ?></p>
  </div>
  <a href="<?php echo $fiscal_info_enlace ?>" class="large button boton-iconizado" target="_blank" title="Descarrega l'informació fiscal relativa als donatius"><?php echo $fiscal_info_boton ?> <i class="fa fa-download"></i></a>
</div>

<!-- CONTENIDO | FORMULARIO DONATIVOS -->

<div class="franja fondo-gris--claro sin-margen--abajo texto-centrado" id="formularioDonativos">
  <div class="row sin-margen--abajo">
    <div class="small-12 columns">
      <h2 class="titulo">FES UN DONATIU A CÀRITAS MENORCA</h2>
      <p class="texto-destacado">La majoria dels ingresos de Càritas Menorca prové de donacions de persones particulars, gent com tu que vol ajudar als demes. Ajudar es facil i costa molt poc, de fet costa nomes el que tu vulguis&hellip;</p>
    </div>
  </div>
</div>
<div class="franja fondo-rojo texto-centrado">
  <div class="row sin-margen--abajo">
    <div class="small-12 medium-6 medium-centered columns">
      <h4 class="titulo">Estem treballant per posar en marxa un nou sistema de donatius online. Gràcies per el teu interés!</h4>
      <p class="textodestacado">De moment, pots fer els donatius emprant el nostre imprès de donatius i presentant-lo en la teva entitat financera.</p>
      <a href="http://www.caritasmenorca.org/wp-content/uploads/2016/06/informacio_fiscal.pdf" class="button invertido" target="_blank" title="Artxiu PDF de la bulleta d'inscripció i donatius">DESCARREGA L'IMPRÈS</a>
      <!-- <form class="donativos-formulario" action="https://formspree.io/desarrolloweb@memorysoft.net">
        <h4>1&dash; Quantitat que vols aportar</h4>
        <fieldset class="donativos-selector">
          <div class="input-group">
            <span class="input-group-label donativos-titulo">Aportaré</span>
            <select class="input-group-field">
              <option value="100">100 &euro;</option>
              <option value="50">50 &euro;</option>
              <option value="25">25 &euro;</option>
              <option value="10">10 &euro;</option>
            </select>
            <span class="input-group-label donativos-titulo">a Càritas</span>
          </div>
        </fieldset>
        <hr>
        <h4>2&dash; Forma de pagament</h4>
        <fieldset class="donativos-pago radio-button-group">
          <label for="radio1"><input id="radio1" name="pagar" type="radio" value="mastercard"><i class="fa fa-cc-mastercard"></i> MasterCard</label>
          <label for="radio3"><input id="radio3" name="pagar" type="radio" value="visa"><i class="fa fa-cc-visa"></i> Visa</label>
          <label for="radio2"><input id="radio2" name="pagar" type="radio" value="maestro"><i class="fa fa-credit-card-alt"></i> Maestro</label>
          <label for="radio4"><input id="radio4" name="pagar" type="radio" value="paypal"><i class="fa fa-cc-paypal"></i> PayPal</label>
        </fieldset>
        <hr>
        <fieldset class="donativos-boton">
          <button type="submit" class="large button bordeado">Fer donatiu</button>
        </fieldset>
      </form> -->
    </div>
  </div>
</div>

<!--
  MODALES ////////////////////////////////////////////////////////////////////////////////////////////////
-->

<!-- Socios -->
<div class="full reveal reveal-formulario" id="formularioSocios" data-reveal>
  <div class="reveal-navigation">
    <button class="close-button" data-close aria-label="Tanca aquest formulari" type="button">
      <span aria-hidden="true"><i class="fa fa-angle-left"></i> Tornar</span>
    </button>
    <span class="reveal-title">Inscripció per a socis</span>
  </div>
  <div class="franja fondo-rojo texto-centrado">
    <div class="row sin-margen--abajo">
      <div class="small-12 columns">
        <h2>FES-TE SOCI</h2>
      </div>
    </div>
  </div>
  <div class="formulario">
    <div class="row">
      <div class="small-12 medium-12 medium-centered columns">
        <?php echo do_shortcode('[libre-form id="662"]') ?>
      </div>
    </div>
  </div>
</div>

<!-- Voluntarios -->
<div class="full reveal reveal-formulario" id="formularioVoluntarios" data-reveal>
  <div class="reveal-navigation">
    <button class="close-button" data-close aria-label="Tanca aquest formulari" type="button">
      <span aria-hidden="true"><i class="fa fa-angle-left"></i> Tornar</span>
    </button>
    <span class="reveal-title">Inscripció per a voluntaris</span>
  </div>
  <div class="franja fondo-rojo texto-centrado">
    <div class="row sin-margen--abajo">
      <div class="small-12 columns">
        <h2>FES-TE VOLUNTARI</h2>
      </div>
    </div>
  </div>
  <div class="formulario">
    <div class="row">
      <div class="small-12 medium-12 medium-centered columns">
        <?php echo do_shortcode('[libre-form id="671"]') ?>
      </div>
    </div>
  </div>
</div>

<div class="full reveal reveal-formulario" id="formularioEmpresas" data-reveal>
  <div class="reveal-navigation">
    <button class="close-button" data-close aria-label="Tanca aquest formulari" type="button">
      <span aria-hidden="true"><i class="fa fa-angle-left"></i> Tornar</span>
    </button>
    <span class="reveal-title">Inscripció per a empreses</span>
  </div>
  <div class="franja fondo-rojo texto-centrado">
    <div class="row sin-margen--abajo">
      <div class="small-12 columns">
        <h2>POSA-HI COR A LA TEVA EMPRESA</h2>
        <a href="http://www.caritasmenorca.org/wp-content/uploads/2016/06/informacio_fiscal.pdf" class="small button bordeado--blanco">Descarrega l'informació fiscal</a>
      </div>
    </div>
  </div>
  <div class="formulario">
    <div class="row">
      <div class="small-12 medium-12 medium-centered columns">
        <?php echo do_shortcode('[libre-form id="676"]') ?>
      </div>
    </div>
  </div>
</div>

<div class="full reveal reveal-formulario" id="formularioLegados" data-reveal>
  <div class="reveal-navigation">
    <button class="close-button" data-close aria-label="Tanca aquest formulari" type="button">
      <span aria-hidden="true"><i class="fa fa-angle-left"></i> Tornar</span>
    </button>
    <span class="reveal-title">Informació per a llegats</span>
  </div>
  <div class="franja fondo-rojo texto-centrado">
    <div class="row sin-margen--abajo">
      <div class="small-12 columns">
        <h2>FES UN LLEGAT</h2>
      </div>
    </div>
  </div>
  <div class="formulario">
    <div class="row">
      <div class="small-12 medium-12 medium-centered columns">
        <?php echo do_shortcode('[libre-form id="682"]') ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
