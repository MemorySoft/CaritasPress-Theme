<?php
/**
*   CONFIGURACIÓN DE LA SECCIÓN DE DONATIVOS
*   ----------------------------------------
*   Autor: Hector Asencio @MemorySoft
*   Versión: 1.0
*   @package CaritasPress
*/

add_action('admin_menu', 'caritaspress_crea_menu_donativos');
add_action('admin_init', 'caritaspress_registra_opciones_donativos');

function caritaspress_crea_menu_donativos() {
  add_submenu_page(
    "configuracion",
  	__("Donatius"),
  	__("Donatius"),
  	"manage_options",
  	"donativos",
  	"caritaspress_pagina_donativos"
  	);
}

function caritaspress_registra_opciones_donativos() {

  // Definición de opciones
  add_option("donativos_cabecera_titulo","","","yes");
  add_option("donativos_cabecera_descripcion","","","yes");

  add_option("donativos_fiscal_bloque_uno_titulo","","","yes");
  add_option("donativos_fiscal_bloque_uno_descripcion","","","yes");
  add_option("donativos_fiscal_bloque_uno_cifra","","","yes");

  add_option("donativos_fiscal_bloque_dos_titulo","","","yes");
  add_option("donativos_fiscal_bloque_dos_descripcion","","","yes");
  add_option("donativos_fiscal_bloque_dos_cifra","","","yes");

  add_option("donativos_fiscal_bloque_tres_titulo","","","yes");
  add_option("donativos_fiscal_bloque_tres_descripcion","","","yes");
  add_option("donativos_fiscal_bloque_tres_cifra","","","yes");

  add_option("donativos_fiscal_info_boton","","","yes");
  add_option("donativos_fiscal_info_enlace","","","yes");

  // Registro de opciones
  register_setting("opciones_donativos", "donativos_cabecera_titulo");
  register_setting("opciones_donativos", "donativos_cabecera_descripcion");

  register_setting("opciones_donativos", "donativos_fiscal_bloque_uno_titulo");
  register_setting("opciones_donativos", "donativos_fiscal_bloque_uno_descripcion");
  register_setting("opciones_donativos", "donativos_fiscal_bloque_uno_cifra");

  register_setting("opciones_donativos", "donativos_fiscal_bloque_dos_titulo");
  register_setting("opciones_donativos", "donativos_fiscal_bloque_dos_descripcion");
  register_setting("opciones_donativos", "donativos_fiscal_bloque_dos_cifra");

  register_setting("opciones_donativos", "donativos_fiscal_bloque_tres_titulo");
  register_setting("opciones_donativos", "donativos_fiscal_bloque_tres_descripcion");
  register_setting("opciones_donativos", "donativos_fiscal_bloque_tres_cifra");

  register_setting("opciones_donativos", "donativos_fiscal_info_boton");
  register_setting("opciones_donativos", "donativos_fiscal_info_enlace");
}

function caritaspress_pagina_donativos() {
  if (!current_user_can('manage_options'))
      wp_die(__("No tienes acceso a esta página."));
  ?>

  <div class="wrap">

    <!-- Título de la página -->

    <h1><span class="dashicons dashicons-heart" style="font-size: 2rem; margin-right: 1rem;"></span> Donatius <small>- Configuració de la secció Donatius</small></h1>

    <?php settings_errors(); ?>

    <!-- Fomulario -->

    <form method="post" action="options.php">

      <?php settings_fields('opciones_donativos'); ?>

      <!-- Seccion Cabecera -->
      <p>Configura el textes que surten a la secció Donatius de la pàgina Col·labora.</p>
      <hr>

      <h2>Capçelera</h2>
      <p>Introdueix aqui el tìtol i el texte de la capçelera de la secció.</p>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Tìtol de la secció</th>
          <td><input type="text" name="donativos_cabecera_titulo" size="40" value="<?php echo get_option('donativos_cabecera_titulo'); ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">Descripció</th>
          <td><textarea name="donativos_cabecera_descripcion" cols="37" rows="10"><?php echo get_option('donativos_cabecera_descripcion'); ?></textarea></td>
        </tr>
      </table>

      <hr>

      <!-- Seccion Info Fiscal -->
      <h2>Informació fiscal</h2>
      <p>Configuració dels blocs de presentació del l'informació fiscal relacionada amb els donatius.</p>

      <h2>Bloc 1</h2>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Títol del bloc 1</th>
          <td><input type="text" name="donativos_fiscal_bloque_uno_titulo" size="40" value="<?php echo get_option('donativos_fiscal_bloque_uno_titulo'); ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">Descripció del bloc 1</th>
          <td><textarea name="donativos_fiscal_bloque_uno_descripcion" cols="37" rows="10"><?php echo get_option('donativos_fiscal_bloque_uno_descripcion'); ?></textarea></td>
        </tr>
        <tr valign="top">
          <th scope="row">Xifra 1</th>
          <td><input type="text" name="donativos_fiscal_bloque_uno_cifra" size="40" value="<?php echo get_option('donativos_fiscal_bloque_uno_cifra'); ?>" />
          <span class="description">El tant percent relatiu a aquest concepte</span></td>
        </tr>
      </table>

      <hr>

      <h2>Bloc 2</h2>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Títol del bloc 2</th>
          <td><input type="text" name="donativos_fiscal_bloque_dos_titulo" size="40" value="<?php echo get_option('donativos_fiscal_bloque_dos_titulo'); ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">Descripció del bloc 2</th>
          <td><textarea name="donativos_fiscal_bloque_dos_descripcion" cols="37" rows="10"><?php echo get_option('donativos_fiscal_bloque_dos_descripcion'); ?></textarea></td>
        </tr>
        <tr valign="top">
          <th scope="row">Xifra 2</th>
          <td><input type="text" name="donativos_fiscal_bloque_dos_cifra" size="40" value="<?php echo get_option('donativos_fiscal_bloque_dos_cifra'); ?>" />
          <span class="description">El tant percent relatiu a aquest concepte</span></td>
        </tr>
      </table>

      <hr>

      <h2>Bloc 3</h2>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Títol del bloc 3</th>
          <td><input type="text" name="donativos_fiscal_bloque_tres_titulo" size="40" value="<?php echo get_option('donativos_fiscal_bloque_tres_titulo'); ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">Descripció del bloc 3</th>
          <td><textarea name="donativos_fiscal_bloque_tres_descripcion" cols="37" rows="10"><?php echo get_option('donativos_fiscal_bloque_tres_descripcion'); ?></textarea></td>
        </tr>
        <tr valign="top">
          <th scope="row">Xifra 3</th>
          <td><input type="text" name="donativos_fiscal_bloque_tres_cifra" size="40" value="<?php echo get_option('donativos_fiscal_bloque_tres_cifra'); ?>" />
          <span class="description">El tant percent relatiu a aquest concepte</span></td>
        </tr>
      </table>

      <!-- Seccion Descarga -->

      <h2>Descàrrega</h2>
      <p>Paràmetres del botó que descarrega l'informació fiscal.</p>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Botó de descàrrega</th>
          <td><input type="text" name="donativos_fiscal_info_boton" size="40" value="<?php echo get_option('donativos_fiscal_info_boton'); ?>" />
          <span class="description">Texte del botó</span>
          <br>
          <input type="text" name="donativos_fiscal_info_enlace" size="40" value="<?php echo get_option('donativos_fiscal_info_enlace'); ?>" />
          <span class="description">Enllaç del botó</span></td>
        </tr>
      </table>

      <p class="submit">
        <input name="donativos_guardar" type="submit" class="button-primary" value="<?php _e('Guardar cambios') ?>" />
      </p>

    </form>
  </div>
<?php } ?>
