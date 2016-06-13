<?php /* Template Name: Contacto */ ?>
<?php require( trailingslashit( get_template_directory() ). '/includes/opciones/_variables.php'); ?>
<?php get_header(); ?>

<div class="contenedor">

	<!-- WIDGETS -->

	<div class="row sin-margen--abajo">
		<div class="small-12 columns">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('contacto-arriba') ) : ?>
			<?php endif; ?>
		</div>
	</div>

	<!-- CONTENIDO -->
    
    <div class="row sin-margen--abajo">
      <div class="small-12 columns">
        <h3 class="titulo">Contacte</h3>
      </div>
    </div>

    <div class="franja fondo-gris--claro">
      <div class="row sin-margen--abajo">
        <div class="formulario small-12 medium-12 columns" id="formularioContacto">
          <form class="grid-form" action="https://formspree.io/desarrolloweb@memorysoft.net" method="POST">
            <input type="hidden" name="_subject" value="Nou missatge des de el formulari de Contacte - Càritas Menorca" />
            <input type="text" name="_gotcha" style="display:none" />
            <input type="hidden" name="_next" value="http://www.caritasmenorca.org/gracies" />
            <fieldset>
              <legend>Contacta amb Càritas Diocesana de Menorca</legend>
              <div data-row-span="6">
                <div data-field-span="3">
                  <label for="formulario-contacto--nombre">Nom <span class="obligatorio">*</span></label>
                  <input name="formulario-contacto--nombre" id="formularioContactoNombre" type="text" required>
                </div>
                <div data-field-span="3">
                  <label for="formulario-contacto--email">Correu Electrònic <span class="obligatorio">*</span></label>
                  <input name="formulario-contacto--email" id="formularioContactoEmail" type="email" required>
                </div>
              </div>
              <div data-row-span="6">
                <div data-field-span="6">
                  <label for="formulario-contacto--mensaje">Missatge <span class="obligatorio">*</span></label>
                  <textarea name="formulario-contacto--mensaje" id="formularioContactoMensaje" cols="30" rows="5" required></textarea>
                </div>
              </div>
            </fieldset>

            <div class="row sin-margen--abajo">
              <div class="small-12 medium-6 columns">
                <label for="formulario-contacto--privacidad">
                  <input name="formulario-contacto--privacidad" id="formularioContactoPrivacidad" type="checkbox">
                  He llegit i accepto la <a href="legal">polìtica de privacitat</a></label>
              </div>
              <div class="small-12 medium-6 columns">
                <button id="formularioContactoEnviar" type="submit" class="large button">Enviar missatge</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

<?php get_footer(); ?>