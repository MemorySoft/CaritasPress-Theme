<?php
/**
*   CONFIGURACIÓN DE LA PÁGINA DE LA ENTIDAD
*   ----------------------------------------
*   Autor: Hector Asencio @MemorySoft
*   Versión: 1.0
*   @package CaritasPress
*/

add_action('admin_menu', 'caritaspress_crea_menu_entidad');
add_action('admin_init', 'caritaspress_registra_opciones_entidad');

function caritaspress_crea_menu_entidad() {
  add_submenu_page(
  	"configuracion",
  	__("Càritas"),
  	__("Càritas"),
  	"manage_options",
  	"caritas",
  	"caritas_datos_entidad"
  	);
}

function caritaspress_registra_opciones_entidad() {

  // Definición de opciones
  add_option("caritas_cabecera_visibilidad","","","yes");
  add_option("caritas_cabecera_descripcion","","","yes");

  add_option("caritas_programa_uno_titulo","","","yes");
  add_option("caritas_programa_uno_descripcion","","","yes");
  add_option("caritas_programa_uno_enlace","","","yes");

  add_option("caritas_programa_dos_titulo","","","yes");
  add_option("caritas_programa_dos_descripcion","","","yes");
  add_option("caritas_programa_dos_enlace","","","yes");

  add_option("caritas_programa_tres_titulo","","","yes");
  add_option("caritas_programa_tres_descripcion","","","yes");
  add_option("caritas_programa_tres_enlace","","","yes");

  add_option("caritas_programa_cuatro_titulo","","","yes");
  add_option("caritas_programa_cuatro_descripcion","","","yes");
  add_option("caritas_programa_cuatro_enlace","","","yes");

  add_option("caritas_revista_visibilidad","","","yes");
  add_option("caritas_revista_titulo","","","yes");
  add_option("caritas_revista_descripcion","","","yes");
  add_option("caritas_revista_imagen","","","yes");
  add_option("caritas_revista_boton","","","yes");
  add_option("caritas_revista_enlace","","","yes");

  add_option("caritas_quien_subtitulo","","","yes");
  add_option("caritas_quien_descripcion","","","yes");

  add_option("caritas_valores_uno_titulo","","","yes");
  add_option("caritas_valores_uno_descripcion","","","yes");

  add_option("caritas_valores_dos_titulo","","","yes");
  add_option("caritas_valores_dos_descripcion","","","yes");

  add_option("caritas_valores_tres_titulo","","","yes");
  add_option("caritas_valores_tres_descripcion","","","yes");

  add_option("caritas_organizacion_descripcion","","","yes");
  add_option("caritas_organizacion_imagen","","","yes");

  // Registro de opciones
  register_setting("opciones_entidad", "caritas_cabecera_visibilidad");
  register_setting("opciones_entidad", "caritas_cabecera_descripcion");

  register_setting("opciones_entidad", "caritas_programa_uno_titulo");
  register_setting("opciones_entidad", "caritas_programa_uno_descripcion");
  register_setting("opciones_entidad", "caritas_programa_uno_enlace");

  register_setting("opciones_entidad", "caritas_programa_dos_titulo");
  register_setting("opciones_entidad", "caritas_programa_dos_descripcion");
  register_setting("opciones_entidad", "caritas_programa_dos_enlace");

  register_setting("opciones_entidad", "caritas_programa_tres_titulo");
  register_setting("opciones_entidad", "caritas_programa_tres_descripcion");
  register_setting("opciones_entidad", "caritas_programa_tres_enlace");

  register_setting("opciones_entidad", "caritas_programa_cuatro_titulo");
  register_setting("opciones_entidad", "caritas_programa_cuatro_descripcion");
  register_setting("opciones_entidad", "caritas_programa_cuatro_enlace");

  register_setting("opciones_entidad", "caritas_revista_visibilidad");
  register_setting("opciones_entidad", "caritas_revista_titulo");
  register_setting("opciones_entidad", "caritas_revista_descripcion");
  register_setting("opciones_entidad", "caritas_revista_imagen");
  register_setting("opciones_entidad", "caritas_revista_boton");
  register_setting("opciones_entidad", "caritas_revista_enlace");

  register_setting("opciones_entidad", "caritas_quien_subtitulo");
  register_setting("opciones_entidad", "caritas_quien_descripcion");

  register_setting("opciones_entidad", "caritas_valores_uno_titulo");
  register_setting("opciones_entidad", "caritas_valores_uno_descripcion");

  register_setting("opciones_entidad", "caritas_valores_dos_titulo");
  register_setting("opciones_entidad", "caritas_valores_dos_descripcion");

  register_setting("opciones_entidad", "caritas_valores_tres_titulo");
  register_setting("opciones_entidad", "caritas_valores_tres_descripcion");

  register_setting("opciones_entidad", "caritas_organizacion_descripcion");
  register_setting("opciones_entidad", "caritas_organizacion_imagen");
}

function caritas_datos_entidad() {
    if (!current_user_can('manage_options'))
        wp_die(__("No tienes acceso a esta página."));
    ?>

    <div class="wrap">

      <?php settings_errors(); ?>
      <?php
        if( isset( $_GET[ 'tab' ] ) ) {
            $active_tab = $_GET[ 'tab' ];
        } else {
            $active_tab = 'cabecera' ;
        }
      ?>

      <!-- Titulo de la página -->

      <h1><span class="dashicons dashicons-heart" style="font-size: 2rem; margin-right: 1rem;"></span>  Càritas <small>- Dades referents a aquesta esta entitat</small></h1>

      <?php settings_errors(); ?>

      <!-- Formulario -->

      <form method="post" action="options.php">

        <?php settings_fields('opciones_entidad'); ?>

        <!-- Seccion Cabecera -->
        <h2>Capçelera</h2>
        <p>Configura el texte que surt al principi de la pàgina Càritas y la seva visibilitat.</p>

        <hr>

        <table class="form-table">
          <tr valign="top">
            <th scope="row">Descripció a la capçelera</th>
            <td><textarea name="caritas_cabecera_descripcion" cols="37" rows="10"><?php echo get_option('caritas_cabecera_descripcion'); ?></textarea></td>
          </tr>
          <tr valign="top">
            <th scope="row">Mostrar capçelera</th>
            <td>
            <?php $options = get_option( "caritas_cabecera_visibilidad" ); ?>
            <input type="checkbox" name="caritas_cabecera_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Marcar per mostrar la capçelera de la pàgina Càritas.</span>
          </tr>
        </table>

        <!-- Seccion Entidad -->
        <h2>Entitat</h2>
				<p>Aqui es configura l'informació relativa a l'entitat, que apareix al final de la página Càritas.</p>
        <hr>

        <h2>Qui som</h2>
        <table class="form-table">
          <tr valign="top">
            <th scope="row">Subtìtol</th>
            <td><input type="text" name="caritas_quien_subtitulo" size="40" value="<?php echo get_option('caritas_quien_subtitulo'); ?>" /></td>
          </tr>
          <tr valign="top">
            <th scope="row">Descripció</th>
            <td><textarea name="caritas_quien_descripcion" cols="37" rows="10"><?php echo get_option('caritas_quien_descripcion'); ?></textarea></td>
          </tr>
        </table>

        <hr>

        <h2>Valors</h2>
        <table class="form-table">
          <tr valign="top">
            <th scope="row">Tìtol un</th>
            <td><input type="text" name="caritas_valores_uno_titulo" size="40" value="<?php echo get_option('caritas_valores_uno_titulo'); ?>" /></td>
          </tr>
          <tr valign="top">
            <th scope="row">Descripció un</th>
            <td><textarea name="caritas_valores_uno_descripcion" cols="37" rows="10"><?php echo get_option('caritas_valores_uno_descripcion'); ?></textarea></td>
          </tr>
        </table>

        <table class="form-table">
          <tr valign="top">
            <th scope="row">Tìtol dos</th>
            <td><input type="text" name="caritas_valores_dos_titulo" size="40" value="<?php echo get_option('caritas_valores_dos_titulo'); ?>" /></td>
          </tr>
          <tr valign="top">
            <th scope="row">Descripció dos</th>
            <td><textarea name="caritas_valores_dos_descripcion" cols="37" rows="10"><?php echo get_option('caritas_valores_dos_descripcion'); ?></textarea></td>
          </tr>
        </table>

        <table class="form-table">
          <tr valign="top">
            <th scope="row">Tìtol tres</th>
            <td><input type="text" name="caritas_valores_tres_titulo" size="40" value="<?php echo get_option('caritas_valores_tres_titulo'); ?>" /></td>
          </tr>
          <tr valign="top">
            <th scope="row">Descripció tres</th>
            <td><textarea name="caritas_valores_tres_descripcion" cols="37" rows="10"><?php echo get_option('caritas_valores_tres_descripcion'); ?></textarea></td>
          </tr>
        </table>

        <hr>

        <h2>Organització</h2>
        <table class="form-table">
          <tr valign="top">
            <th scope="row">Descripció de l'organització</th>
            <td><textarea name="caritas_organizacion_descripcion" cols="37" rows="10"><?php echo get_option('caritas_organizacion_descripcion'); ?></textarea></td>
          </tr>
          <tr valign="top">
            <th scope="row">Imatge</th>
            <td><input type="text" name="caritas_organizacion_imagen" size="40" value="<?php echo get_option('caritas_organizacion_imagen'); ?>" />
            <br><span class="description">Aferra aqui l'URL de la imatge</span></td>
          </tr>
        </table>

        <!-- Seccion Programas -->
        <h2>Programes</h2>
        <p>Configuració dels blocs de presentació dels programes de projectes. Pots configurar el nom, la descripció i l'enllaç que porta a la categoria que correspon a cada programa.</p>
        <hr>

        <h2>Programa 1</h2>
        <table class="form-table">
          <tr valign="top">
            <th scope="row">Nom del programa 1</th>
            <td><input type="text" name="caritas_programa_uno_titulo" size="40" value="<?php echo get_option('caritas_programa_uno_titulo'); ?>" /></td>
          </tr>
          <tr valign="top">
            <th scope="row">Descripció del programa 1</th>
            <td><textarea name="caritas_programa_uno_descripcion" cols="37" rows="10"><?php echo get_option('caritas_programa_uno_descripcion'); ?></textarea></td>
          </tr>
          <tr valign="top">
            <th scope="row">Enllaç al programa 1</th>
            <td><input type="text" name="caritas_programa_uno_enlace" size="40" value="<?php echo get_option('caritas_programa_uno_enlace'); ?>" />
            <br><span class="description">Aferra l'URL a la categoria de projectes, que correspon a cada un dels programes.</span></td>
          </tr>
        </table>

        <hr>

        <h2>Programa 2</h2>
        <table class="form-table">
          <tr valign="top">
            <th scope="row">Nom del programa 2</th>
            <td><input type="text" name="caritas_programa_dos_titulo" size="40" value="<?php echo get_option('caritas_programa_dos_titulo'); ?>" /></td>
          </tr>
          <tr valign="top">
            <th scope="row">Descripció del programa 2</th>
            <td><textarea name="caritas_programa_dos_descripcion" cols="37" rows="10"><?php echo get_option('caritas_programa_dos_descripcion'); ?></textarea></td>
          </tr>
          <tr valign="top">
            <th scope="row">Enllaç al programa 2</th>
            <td><input type="text" name="caritas_programa_dos_enlace" size="40" value="<?php echo get_option('caritas_programa_dos_enlace'); ?>" />
            <br><span class="description">Aferra l'URL a la categoria de projectes, que correspon a cada un dels programes.</span></td>
          </tr>
        </table>

        <hr>

        <h2>Programa 3</h2>
        <table class="form-table">
          <tr valign="top">
            <th scope="row">Nom del programa 3</th>
            <td><input type="text" name="caritas_programa_tres_titulo" size="40" value="<?php echo get_option('caritas_programa_tres_titulo'); ?>" /></td>
          </tr>
          <tr valign="top">
            <th scope="row">Descripció del programa 3</th>
            <td><textarea name="caritas_programa_tres_descripcion" cols="37" rows="10"><?php echo get_option('caritas_programa_tres_descripcion'); ?></textarea></td>
          </tr>
          <tr valign="top">
            <th scope="row">Enllaç al programa 3</th>
            <td><input type="text" name="caritas_programa_tres_enlace" size="40" value="<?php echo get_option('caritas_programa_tres_enlace'); ?>" />
            <br><span class="description">Aferra l'URL a la categoria de projectes, que correspon a cada un dels programes.</span></td>
          </tr>
        </table>

        <hr>

        <h2>Programa 4</h2>
        <table class="form-table">
          <tr valign="top">
            <th scope="row">Nom del programa 4</th>
            <td><input type="text" name="caritas_programa_cuatro_titulo" size="40" value="<?php echo get_option('caritas_programa_cuatro_titulo'); ?>" /></td>
          </tr>
          <tr valign="top">
            <th scope="row">Descripció del programa 4</th>
            <td><textarea name="caritas_programa_cuatro_descripcion" cols="37" rows="10"><?php echo get_option('caritas_programa_cuatro_descripcion'); ?></textarea></td>
          </tr>
          <tr valign="top">
            <th scope="row">Enllaç al programa 4</th>
            <td><input type="text" name="caritas_programa_cuatro_enlace" size="40" value="<?php echo get_option('caritas_programa_cuatro_enlace'); ?>" />
            <br><span class="description">Aferra l'URL a la categoria de projectes, que correspon a cada un dels programes.</span></td>
          </tr>
        </table>

        <!-- Seccion Revista -->
        <h2>Revista</h2>
        <p>Configura la visibilitat i el contingut de la secció Revista de Cáritas.</p>
        <hr>

        <table class="form-table">
          <tr valign="top">
            <th scope="row">Mostrar Revista de Cáritas</th>
            <td>
            <?php $options = get_option( "caritas_revista_visibilidad" ); ?>
            <input type="checkbox" name="caritas_revista_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Marcar per mostrar la secció Revista de Cáritas.</span>
          </tr>
        </table>
        <table class="form-table">
          <tr valign="top">
            <th scope="row">Tìtol</th>
            <td><input type="text" name="caritas_revista_titulo" size="40" value="<?php echo get_option('caritas_revista_titulo'); ?>" /></td>
          </tr>
          <tr valign="top">
            <th scope="row">Descripció</th>
            <td><textarea name="caritas_revista_descripcion" cols="37" rows="10"><?php echo get_option('caritas_revista_descripcion'); ?></textarea></td>
          </tr>
          <tr valign="top">
            <th scope="row">Imatge</th>
            <td><input type="text" name="caritas_revista_imagen" size="40" value="<?php echo get_option('caritas_revista_imagen'); ?>" />
            <br><span class="description">Aferra aquí l'URL de l'imatge</span></td>
          </tr>
          <tr valign="top">
            <th scope="row">Botó</th>
            <td><input type="text" name="caritas_revista_texto_boton" size="40" value="<?php echo get_option('caritas_revista_texto_boton'); ?>" />
            <span class="description">Texte del botó</span>
            <br>
            <input type="text" name="caritas_revista_enlace" size="40" value="<?php echo get_option('caritas_revista_enlace'); ?>" />
            <span class="description">Enllaç del botó</span></td>
          </tr>
        </table>

        <p class="submit">
        	<input name="entidad_guardar" type="submit" class="button-primary" value="<?php _e('Guardar cambios') ?>" />
        </p>

      </form>
    </div>
    <?php
}
?>
