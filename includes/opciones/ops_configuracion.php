<?php
/**
*		CONFIGURACIÓN GLOBAL
*  	--------------------
* 	Autor: Hector Asencio @MemorySoft
* 	Versión: 1.0
*  	@package CaritasPress
*/

add_action('admin_menu', 'caritaspress_crea_menu_configuracion');
add_action('admin_init', 'caritaspress_registra_opciones_configuracion');

function caritaspress_crea_menu_configuracion() {
  if (!current_user_can('manage_options'))
    add_menu_page(
    	__("Caritas"),
    	__("Caritas"),
    	"edit_pages",
    	"configuracion",
    	"caritaspress_configuracion_global",
    	"dashicons-admin-generic",
    	4.1
    	);
    add_submenu_page(
    	"configuracion",
    	__("Configuració"),
    	__("Configuració"),
    	"edit_pages",
    	"configuracion",
    	"caritaspress_configuracion_global"
    	);
}

function caritaspress_registra_opciones_configuracion() {

  // Definición de opciones
  add_option("global_email_contacto","","","yes");

  add_option("global_twitter","","","yes");
  add_option("global_facebook","","","yes");
  add_option("global_youtube","","","yes");

  add_option("global_analitica","","","yes");

  add_option("global_direccion_uno_calle","","","yes");
  add_option("global_direccion_uno_numero","","","yes");
  add_option("global_direccion_uno_cp","","","yes");
  add_option("global_direccion_uno_localidad","","","yes");
  add_option("global_direccion_uno_telefono","","","yes");
  add_option("global_direccion_uno_fax","","","yes");

  add_option("global_direccion_dos_calle","","","yes");
  add_option("global_direccion_dos_numero","","","yes");
  add_option("global_direccion_dos_cp","","","yes");
  add_option("global_direccion_dos_localidad","","","yes");
  add_option("global_direccion_dos_telefono","","","yes");
  add_option("global_direccion_dos_fax","","","yes");

  add_option("global_enlace_uno","","","yes");
  add_option("global_logo_uno","","","yes");

  add_option("global_enlace_dos","","","yes");
  add_option("global_logo_dos","","","yes");

  add_option("global_enlace_tres","","","yes");
  add_option("global_logo_tres","","","yes");

  add_option("global_enlace_cuatro","","","yes");
  add_option("global_logo_cuatro","","","yes");

  // Registro de opciones
  register_setting("opciones_globales", "global_email_contacto");

  register_setting("opciones_globales", "global_twitter");
  register_setting("opciones_globales", "global_facebook");
  register_setting("opciones_globales", "global_youtube");

  register_setting("opciones_globales", "global_analitica");

  register_setting("opciones_globales", "global_direccion_uno_calle");
  register_setting("opciones_globales", "global_direccion_uno_numero");
  register_setting("opciones_globales", "global_direccion_uno_cp");
  register_setting("opciones_globales", "global_direccion_uno_localidad");
  register_setting("opciones_globales", "global_direccion_uno_telefono");
  register_setting("opciones_globales", "global_direccion_uno_fax");

  register_setting("opciones_globales", "global_direccion_dos_calle");
  register_setting("opciones_globales", "global_direccion_dos_numero");
  register_setting("opciones_globales", "global_direccion_dos_cp");
  register_setting("opciones_globales", "global_direccion_dos_localidad");
  register_setting("opciones_globales", "global_direccion_dos_telefono");
  register_setting("opciones_globales", "global_direccion_dos_fax");

  register_setting("opciones_globales", "global_enlace_uno");
  register_setting("opciones_globales", "global_logo_uno");

  register_setting("opciones_globales", "global_enlace_dos");
  register_setting("opciones_globales", "global_logo_dos");

  register_setting("opciones_globales", "global_enlace_tres");
  register_setting("opciones_globales", "global_logo_tres");

  register_setting("opciones_globales", "global_enlace_cuatro");
  register_setting("opciones_globales", "global_logo_cuatro");
}

function caritaspress_configuracion_global() {
  if (!current_user_can('edit_pages'))
      wp_die(__("No tienes acceso a esta página."));
  ?>

  <div class="wrap">
    
    <!-- Titulo de la página -->

    <h1><span class="dashicons dashicons-admin-generic" style="font-size: 2rem; margin-right: 1rem;"></span> Configuració <small>- Opcions globals de configuració per tot el lloc web</small></h1>

    <?php settings_errors(); ?>
    
    <!-- Formulario -->

    <form method="post" action="options.php">

      <?php settings_fields('opciones_globales'); ?>

      <!-- Seccion General -->
      <h2>General</h2>
      <p>Aquesta es la secció on es configuren les opcions que efecten a tot el lloc web.</p>
      <hr>

      <h2>Contacte</h2>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Email de contacte</th>
          <td><input type="text" name="global_email_contacto" size="40" value="<?php echo get_option('global_email_contacto'); ?>" />
          <br><span class="description">Adreça de correu elèctronic que apareix al footer</span></td>
        </tr>
      </table>

      <hr>

      <h2>Xarxes Socials</h2>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Perfil de Twitter</th>
          <td><input type="text" name="global_twitter" size="40" value="<?php echo get_option('global_twitter'); ?>" />
          <br><span class="description">Aferra aquí l'URL del perfil de Twitter</span></td>
        </tr>
        <tr valign="top">
          <th scope="row">Perfil de Facebook</th>
          <td><input type="text" name="global_facebook" size="40" value="<?php echo get_option('global_facebook'); ?>" />
          <br><span class="description">Aferra aquí l'URL del perfil de Facebook</span></td>
        </tr>
        <tr valign="top">
          <th scope="row">Perfil de YouTube</th>
          <td><input type="text" name="global_youtube" size="40" value="<?php echo get_option('global_youtube'); ?>" />
          <br><span class="description">Aferra aquí l'URL del perfil de YouTube</span></td>
        </tr>
      </table>

      <hr>

      <h2>Analìtica</h2>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Google Analytics</th>
          <td><input type="text" name="global_analitica" size="40" value="<?php echo get_option('global_analitica'); ?>" />
          <br><span class="description">Introdueix aqui l'ID de Google Analytics</span></td>
        </tr>
      </table>

      <!-- Seccion Direcciones -->
      <h2>Adreçes</h2>
      <p>Configura en aquesta secció les adreçes postals que apareixen al peu de la pàgina.</p>
      <hr>

      <h2>Adreça 1</h2>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Carrer</th>
          <td><input type="text" name="global_direccion_uno_calle" size="40" value="<?php echo get_option('global_direccion_uno_calle'); ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">Nombre</th>
          <td><input type="text" name="global_direccion_uno_numero" size="40" value="<?php echo get_option('global_direccion_uno_numero'); ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">Codi Postal</th>
          <td><input type="text" name="global_direccion_uno_cp" size="40" value="<?php echo get_option('global_direccion_uno_cp'); ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">Localitat</th>
          <td><input type="text" name="global_direccion_uno_localidad" size="40" value="<?php echo get_option('global_direccion_uno_localidad'); ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">Telefon</th>
          <td><input type="text" name="global_direccion_uno_telefono" size="40" value="<?php echo get_option('global_direccion_uno_telefono'); ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">Fax</th>
          <td><input type="text" name="global_direccion_uno_fax" size="40" value="<?php echo get_option('global_direccion_uno_fax'); ?>" /></td>
        </tr>
      </table>

      <hr>

      <h2>Adreça 2</h2>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Carrer</th>
          <td><input type="text" name="global_direccion_dos_calle" size="40" value="<?php echo get_option('global_direccion_dos_calle'); ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">Nombre</th>
          <td><input type="text" name="global_direccion_dos_numero" size="40" value="<?php echo get_option('global_direccion_dos_numero'); ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">Codi Postal</th>
          <td><input type="text" name="global_direccion_dos_cp" size="40" value="<?php echo get_option('global_direccion_dos_cp'); ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">Localitat</th>
          <td><input type="text" name="global_direccion_dos_localidad" size="40" value="<?php echo get_option('global_direccion_dos_localidad'); ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">Telefon</th>
          <td><input type="text" name="global_direccion_dos_telefono" size="40" value="<?php echo get_option('global_direccion_dos_telefono'); ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">Fax</th>
          <td><input type="text" name="global_direccion_dos_fax" size="40" value="<?php echo get_option('global_direccion_dos_fax'); ?>" /></td>
        </tr>
      </table>

      <!-- Seccion Enlaces -->
      <h2>Enllaços</h2>
      <p>En aquesta secció es configuren el enllaços i imatges dels logotips que apareixen al peu de les pàgines.</p>
      <hr>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Enllaç un</th>
          <td><input type="text" name="global_logo_uno" size="40" value="<?php echo get_option('global_logo_uno'); ?>" />
          <span class="description">URL de l'arxiu d'imatge</span>
          <br>
          <input type="text" name="global_enlace_uno" size="40" value="<?php echo get_option('global_enlace_uno'); ?>" />
          <span class="description">Enllaç</span></td>
        </tr>
      </table>

      <hr>

      <table class="form-table">
        <tr valign="top">
          <th scope="row">Enllaç un</th>
          <td><input type="text" name="global_logo_dos" size="40" value="<?php echo get_option('global_logo_dos'); ?>" />
          <span class="description">URL de l'arxiu d'imatge</span>
          <br>
          <input type="text" name="global_enlace_dos" size="40" value="<?php echo get_option('global_enlace_dos'); ?>" />
          <span class="description">Enllaç</span></td>
        </tr>
      </table>

      <hr>

      <table class="form-table">
        <tr valign="top">
          <th scope="row">Enllaç un</th>
          <td><input type="text" name="global_logo_tres" size="40" value="<?php echo get_option('global_logo_tres'); ?>" />
          <span class="description">URL de l'arxiu d'imatge</span>
          <br>
          <input type="text" name="global_enlace_tres" size="40" value="<?php echo get_option('global_enlace_tres'); ?>" />
          <span class="description">Enllaç</span></td>
        </tr>
      </table>

      <hr>

      <table class="form-table">
        <tr valign="top">
          <th scope="row">Enllaç un</th>
          <td><input type="text" name="global_logo_cuatro" size="40" value="<?php echo get_option('global_logo_cuatro'); ?>" />
          <span class="description">URL de l'arxiu d'imatge</span>
          <br>
          <input type="text" name="global_enlace_cuatro" size="40" value="<?php echo get_option('global_enlace_cuatro'); ?>" />
          <span class="description">Enllaç</span></td>
        </tr>
      </table>

      <p class="submit">
      	<input name="configuracion_guardar" type="submit" class="button-primary" value="<?php _e('Guardar cambios') ?>" />
      </p>

    </form>
  </div>
<?php } ?>
