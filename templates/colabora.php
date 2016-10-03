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
    <!-- <h3>Fes un <br>donatiu</h3> -->
    <h3>Donatius</h3>
    <img src="<?php bloginfo('template_directory'); ?>/images/icono_donatius__rojo.png" alt="Donatius">
    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, a, excepturi. Praesentium.</p> -->
    <a href="#formularioDonativos" class="button">Vull fer un donatiu</a>
  </div>
  <div class="columns colaboracion-elemento">
    <!-- <h3>Fes-te soci<br>de Càritas</h3> -->
    <h3>Socis</h3>
    <img src="<?php bloginfo('template_directory'); ?>/images/icono_socis__rojo.png" alt="Socis">
    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, a, excepturi. Praesentium.</p> -->
    <a href="javascript:void(0)" class="button" data-toggle="formularioSocios">Vull fer-me soci</a>
  </div>
  <div class="columns colaboracion-elemento">
    <!-- <h3>Fes-te <br>voluntari</h3> -->
    <h3>Voluntaris</h3>
    <img src="<?php bloginfo('template_directory'); ?>/images/icono_voluntaris__rojo.png" alt="Voluntaris">
    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, a, excepturi. Praesentium.</p> -->
    <a href="javascript:void(0)" class="button" data-toggle="formularioVoluntarios">Vull ser voluntari</a>
  </div>
  <div class="columns colaboracion-elemento">
    <!-- <h3>Empresa <br>amb cor</h3> -->
    <h3>Empreses</h3>
    <img src="<?php bloginfo('template_directory'); ?>/images/icono_empreses__rojo.png" alt="Empreses">
    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, a, excepturi. Praesentium.</p> -->
    <a href="javascript:void(0)" class="button" data-toggle="formularioEmpresas">Vull posar-hi cor</a>
  </div>
  <div class="columns colaboracion-elemento">
    <!-- <h3>Fes un <br>llegat</h3> -->
    <h3>Llegats</h3>
    <img src="<?php bloginfo('template_directory'); ?>/images/icono_llegats__rojo.png" alt="Llegats">
    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, a, excepturi. Praesentium.</p> -->
    <a href="javascript:void(0)" class="button" data-toggle="formularioLegados">Vull llegar</a>
  </div>
</div>

<!-- CONTENIDO | DATOS -->

<hr>
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
    <h2 class="titulo">FES UN DONATIU A CÀRITAS MENORCA</h2>
    <p class="texto-destacado">La majoria dels ingresos de Càritas Menorca prové de donacions de persones particulars, gent com tu que vol ajudar als demes. Ajudar es facil i costa molt poc, de fet costa nomes el que tu vulguis&hellip;</p>
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
        <form class="grid-form formulario-centrado" action="https://formspree.io/desarrolloweb@memorysoft.net" method="POST">
          <input type="hidden" name="_subject" value="Nou missatge des de el formulari de Socis - Càritas Menorca" />
          <input type="text" name="_gotcha" style="display:none" />
          <input type="hidden" name="_next" value="http://www.caritasmenorca.org/gracies" />
          <fieldset>
            <!-- Datos personales -->
            <legend>Dades personals</legend>
            <div data-row-span="6">
              <div data-field-span="3">
                <label for="formulario-socios--nombre">Nom i cognoms <span class="obligatorio">*</span></label>
                <input name="formulario-socios--nombre" id="formularioSociosNombre" type="text" required>
              </div>
              <div data-field-span="1">
                <label for="formulario-socios--dni">DNI/NIF <span class="obligatorio">*</span></label>
                <input name="formulario-socios--dni" id="formularioSociosDni" type="tel" maxlength="9" required>
              </div>
              <div data-field-span="2">
                <label for="formulario-socios--nacimiento">Data de naixement</label>
                <input name="formulario-socios--nacimiento" id="formularioSociosNacimiento" type="date">
              </div>
            </div>
            <div data-row-span="6">
              <div data-field-span="4">
                <label for="formulario-socios--direccion">Adreça <span class="obligatorio">*</span></label>
                <input name="formulario-socios--direccion" id="formularioSociosDireccion" type="text" required>
              </div>
              <div data-field-span="2">
                <label for="formulario-socios--poblacion">Població <span class="obligatorio">*</span></label>
                <select name="formulario-socios--poblacion" id="formularioSociosPoblacion" required>
                  <option value="Escull una població">Escull una població</option>
                  <option value="Ciutadella">Ciutadella</option>
                  <option value="Maó">Maó</option>
                  <option value="Alaior">Alaior</option>
                  <option value="Es Mercadal">Es Mercadal</option>
                  <option value="Sant Lluis">Sant Lluis</option>
                  <option value="Es Castell">Es Castell</option>
                  <option value="Ferreries">Ferreries</option>
                  <option value="Es Migjorn Gran">Es Migjorn Gran</option>
                  <option value="Sant Climent">Sant Climent</option>
                  <option value="Fornells">Fornells</option>
                  <option value="Llucmaçanes">Llucmaçanes</option>
                  <option value="Calan Porter">Calan Porter</option>
                </select>
              </div>
            </div>
            <div data-row-span="6">
              <div data-field-span="3">
                <label for="formulario-socios--email">Correu Electrònic <span class="obligatorio">*</span></label>
                <input name="formulario-socios--email" id="formularioSociosEmail" type="email" required>
              </div>
              <div data-field-span="3">
                <label for="formulario-socios--telefono">Telefon</label>
                <input name="formulario-socios--telefono" id="formularioSociosTelefono" type="tel" max="9">
              </div>
            </div>
          </fieldset>
          <!-- Cuota de socio -->
          <fieldset>
            <legend>Aportació econòmica</legend>
            <div data-row-span="6">
              <div data-field-span="2">
                <label for="formulario-socios--cuota">Quantitat que vols aportar <span class="obligatorio">*</span></label>
                <select name="formulario-socios--cuota" id="formularioSociosCuota" required>
                  <option value="150">150 €</option>
                  <option value="125">125 €</option>
                  <option value="100">100 €</option>
                  <option value="90">90 €</option>
                  <option value="80">80 €</option>
                  <option value="70">70 €</option>
                  <option value="60">60 €</option>
                  <option value="50">50 €</option>
                  <option value="40">40 €</option>
                  <option value="30">30 €</option>
                  <option value="20">20 €</option>
                  <option value="10">10 €</option>
                  <option value="5">5 €</option>
                </select>
              </div>
              <div class="radio-button-group" data-field-span="4">
                <label for="formulario-socios--periodo_suscripcion">Periodicitat <span class="obligatorio">*</span></label>
                <label for="periodoSemanal"><input name="formulario-socios--periodo_suscripcion" type="radio" value="Semanal" id="periodoSemanal" required>Setmanal</label>
                <label for="periodoMensual"><input name="formulario-socios--periodo_suscripcion" type="radio" value="Mensual" id="periodoMensual" required checked>Mensual</label>
                <label for="periodoTrimestral"><input name="formulario-socios--periodo_suscripcion" type="radio" value="Trimestral" id="periodoTrimestral" required>Trimestral</label>
                <label for="periodoSemestral"><input name="formulario-socios--periodo_suscripcion" type="radio" value="Semestral" id="periodoSemestral" required>Semestral</label>
                <label for="periodoAnual"><input name="formulario-socios--periodo_suscripcion" type="radio" value="Anual" id="periodoAnual" required>Anual</label>
              </div>
            </div>
          </fieldset>
          <!-- Datos bancarios -->
          <fieldset>
            <legend>Dades bancaries</legend>
            <div data-row-span="6">
              <div data-field-span="6">
                <label for="formulario-socios--titular_cuenta">Nom i cognoms del titular <span class="obligatorio">*</span></label>
                <input name="formulario-socios--titular_cuenta" id="formularioSociosTitularCuenta" type="text" required>
              </div>
            </div>
            <div data-row-span="12">
              <div data-field-span="1">
                <label>Pais</label>
                <div class="contenido-estatico">ES</div>
              </div>
              <div data-field-span="1">
                <label for="formulario-socios--numero_iban">Nº Ctrl <span class="obligatorio">*</span></label>
                <input name="formulario-socios--numero_iban" id="formularioSociosNumeroIban" type="tel" maxlength="2" required>
              </div>
              <div data-field-span="2">
                <label for="formulario-socios--entidad_bancaria">Entitat <span class="obligatorio">*</span></label>
                <input name="formulario-socios--entidad_bancaria" id="formularioSociosEntidadBancaria" type="tel" maxlength="4" required>
              </div>
              <div data-field-span="2">
                <label for="formulario-socios--oficina_bancaria">Oficina <span class="obligatorio">*</span></label>
                <input name="formulario-socios--oficina_bancaria" id="formularioSociosOficinaBancaria" type="tel" maxlength="4" required>
              </div>
              <div data-field-span="1">
                <label for="formulario-socios--digito_control">D.C. <span class="obligatorio">*</span></label>
                <input name="formulario-socios--digito_control" id="formularioSociosDigitoControl" type="tel" maxlength="2" required>
              </div>
              <div data-field-span="5">
                <label for="formulario-socios--numero_cuenta">Nº de compte <span class="obligatorio">*</span></label>
                <input name="formulario-socios--numero_cuenta" id="formularioSociosNumeroCuenta" type="tel" maxlength="10" required>
              </div>
            </div>
          </fieldset>

          <div class="row">
            <div class="small-12 medium-6 columns">
              <label for="formulario-socios--privacidad">
              <input name="formulario-socios--privacidad" id="formularioSociosPrivacidad" type="checkbox" required>
                He llegit i accepto la <a href="#">polìtica de privacitat</a></label>
            </div>
            <div class="small-12 medium-6 columns">
              <button id="formularioSociosEnviar" type="submit" class="large button">Fes-me soci de Càritas</button>
            </div>
          </div>
        </form>
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
        <form class="grid-form formulario-centrado" action="https://formspree.io/desarrolloweb@memorysoft.net" method="POST">
          <input type="hidden" name="_subject" value="Nou missatge des de el formulari de Voluntaris - Càritas Menorca" />
          <input type="text" name="_gotcha" style="display:none" />
          <input type="hidden" name="_next" value="http://www.caritasmenorca.org/gracies" />
          <fieldset>
            <!-- Datos personales -->
            <legend>Dades personals</legend>
            <div data-row-span="6">
              <div data-field-span="3">
                <label for="formulario-voluntarios--nombre">Nom i cognoms <span class="obligatorio">*</span></label>
                <input name="formulario-voluntarios--nombre" id="formularioVoluntariosNombre" type="text" required>
              </div>
              <div data-field-span="1">
                <label for="formulario-voluntarios--dni">DNI/NIF <span class="obligatorio">*</span></label>
                <input name="formulario-voluntarios--dni" id="formularioVoluntariosDni" type="tel" maxlength="9" required>
              </div>
              <div data-field-span="2">
                <label for="formulario-voluntarios--nacimiento">Data de naixement <span class="obligatorio">*</span></label>
                <input name="formulario-voluntarios--nacimiento" id="formularioVoluntariosNacimiento" type="date" required>
              </div>
            </div>
            <div data-row-span="6">
              <div data-field-span="4">
                <label for="formulario-voluntarios--direccion">Adreça <span class="obligatorio">*</span></label>
                <input name="formulario-voluntarios--direccion" id="formularioVoluntariosDireccion" type="text" required>
              </div>
              <div data-field-span="2">
                <label for="formulario-voluntarios--poblacion">Població <span class="obligatorio">*</span></label>
                <select name="formulario-voluntarios--poblacion" id="formularioVoluntariosPoblacion" required>
                  <option value="Escull una població">Escull una població</option>
                  <option value="Ciutadella">Ciutadella</option>
                  <option value="Maó">Maó</option>
                  <option value="Alaior">Alaior</option>
                  <option value="Es Mercadal">Es Mercadal</option>
                  <option value="Sant Lluis">Sant Lluis</option>
                  <option value="Es Castell">Es Castell</option>
                  <option value="Ferreries">Ferreries</option>
                  <option value="Es Migjorn Gran">Es Migjorn Gran</option>
                  <option value="Sant Climent">Sant Climent</option>
                  <option value="Fornells">Fornells</option>
                  <option value="Llucmaçanes">Llucmaçanes</option>
                  <option value="Calan Porter">Calan Porter</option>
                </select>
              </div>
            </div>
            <div data-row-span="6">
              <div data-field-span="3">
                <label for="formulario-voluntarios--email">Correu Electrònic <span class="obligatorio">*</span></label>
                <input name="formulario-voluntarios--email" id="formularioVoluntariosEmail" type="email" required>
              </div>
              <div data-field-span="3">
                <label for="formulario-voluntarios--telefono">Telefon <span class="obligatorio">*</span></label>
                <input name="formulario-voluntarios--telefono" id="formularioVoluntariosTelefono" type="tel" max="9" required>
              </div>
            </div>
          </fieldset>

          <div class="row">
            <div class="small-12 medium-6 columns">
              <label for="formulario-voluntarios--privacidad">
              <input name="formulario-voluntarios--privacidad" id="formularioVoluntariosPrivacidad" type="checkbox" required>
                He llegit i accepto la <a href="#">polìtica de privacitat</a></label>
            </div>
            <div class="small-12 medium-6 columns">
              <button id="formularioVoluntariosEnviar" type="submit" class="large button">Fes-me voluntari de Càritas</button>
            </div>
          </div>
        </form>
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
        <form class="grid-form formulario-centrado" action="https://formspree.io/desarrolloweb@memorysoft.net" method="POST">
          <input type="hidden" name="_subject" value="Nou missatge des de el formulari de Empreses - Càritas Menorca" />
          <input type="text" name="_gotcha" style="display:none" />
          <input type="hidden" name="_next" value="http://www.caritasmenorca.org/gracies" />
          <fieldset>
            <!-- Datos de la empresa -->
            <legend>Dades de contacte</legend>
            <div data-row-span="6">
              <div data-field-span="3">
                <label for="formulario-empresas--nombre_empresa">Raó social <span class="obligatorio">*</span></label>
                <input name="formulario-empresas--nombre_empresa" id="formularioEmpresasNombre" type="text" required>
              </div>
              <div data-field-span="3">
                <label for="formulario-empresas--persona_contacto">Persona de contacte <i>(Nom i cognom)</i> <span class="obligatorio">*</span></label>
                <input name="formulario-empresas--persona_contacto" id="formularioEmpresasPersonaContacto" type="text" required>
              </div>
            </div>
            <div data-row-span="6">
              <div data-field-span="3">
                <label for="formulario-empresas--email">Correu Electrònic <span class="obligatorio">*</span></label>
                <input name="formulario-empresas--email" id="formularioEmpresasEmail" type="email" required>
              </div>
              <div data-field-span="3">
                <label for="formulario-empresas--telefono">Telefon <span class="obligatorio">*</span></label>
                <input name="formulario-empresas--telefono" id="formularioEmpresasTelefono" type="tel" max="9" required>
              </div>
            </div>
          </fieldset>

          <div class="row">
            <div class="small-12 medium-6 columns">
              <label for="formulario-empresas--privacidad">
              <input name="formulario-empresas--privacidad" id="formularioEmpresasPrivacidad" type="checkbox" required>
                He llegit i accepto la <a href="#">polìtica de privacitat</a></label>
            </div>
            <div class="small-12 medium-6 columns">
              <button id="formularioEmpresasEnviar" type="submit" class="large button">Enviar oferiment</button>
            </div>
          </div>
        </form>
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
        <form class="grid-form formulario-centrado" action="https://formspree.io/desarrolloweb@memorysoft.net" method="POST">
          <input type="hidden" name="_subject" value="Nou missatge des de el formulari de Llegats - Càritas Menorca" />
          <input type="text" name="_gotcha" style="display:none" />
          <input type="hidden" name="_next" value="http://www.caritasmenorca.org/gracies" />
          <fieldset>
            <!-- Datos de contacto -->
            <legend>Sol·licitut d'informació per a llegats solidaris</legend>
            <div data-row-span="6">
              <div data-field-span="3">
                <label for="formulario-legados--nombre">Nom <span class="obligatorio">*</span></label>
                <input name="formulario-legados--nombre" id="formularioLegadosNombre" type="text" required>
              </div>
              <div data-field-span="3">
                <label for="formulario-legados--apellidos">Cognoms <span class="obligatorio">*</span></label>
                <input name="formulario-legados--apellidos" id="formularioLegadosApellidos" type="text" required>
              </div>
            </div>
            <div data-row-span="6">
              <div data-field-span="3">
                <label for="formulario-legados--email">Correu Electrònic</label>
                <input name="formulario-legados--email" id="formularioLegadosEmail" type="email">
              </div>
              <div data-field-span="3">
                <label for="formulario-legados--telefono">Telefon <span class="obligatorio">*</span></label>
                <input name="formulario-legados--telefono" id="formularioLegadosTelefono" type="tel" max="9" required>
              </div>
            </div>
          </fieldset>

          <div class="row">
            <div class="small-12 medium-6 columns">
              <label for="formulario-legados--privacidad">
              <input name="formulario-legados--privacidad" id="formularioLegadosPrivacidad" type="checkbox" required>
                He llegit i accepto la <a href="#">polìtica de privacitat</a></label>
            </div>
            <div class="small-12 medium-6 columns">
              <button id="formularioLegadosEnviar" type="submit" class="large button">Enviar sol·licitut</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
