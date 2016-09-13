<?php
/**
*   CONFIGURACIÓN DE LA PORTADA
*   ---------------------------
*   Autor: Hector Asencio @MemorySoft
*   Versión: 1.0
*   @package CaritasPress
*/

add_action('admin_menu', 'caritaspress_crea_menu_inicio');
add_action('admin_init', 'caritaspress_registra_opciones_inicio');

function caritaspress_crea_menu_inicio() {
  add_submenu_page(
    "configuracion",
  	__("Portada"),
  	__("Portada"),
  	"manage_options",
  	"home",
  	"caritaspress_pagina_inicio"
  	);
}

function caritaspress_registra_opciones_inicio() {

  // Definición de opciones
  add_option("home_proyectos_titulo_seccion","","","yes");
  add_option("home_proyectos_texto_seccion","","","yes");

  add_option("home_proyectos_imagen_uno","","","yes");
  add_option("home_proyectos_nombre_categoria_uno","","","yes");
  add_option("home_proyectos_texto_boton_uno","","","yes");
  add_option("home_proyectos_enlace_boton_uno","","","yes");

  add_option("home_proyectos_imagen_dos","","","yes");
  add_option("home_proyectos_nombre_categoria_dos","","","yes");
  add_option("home_proyectos_texto_boton_dos","","","yes");
  add_option("home_proyectos_enlace_boton_dos","","","yes");

  add_option("home_proyectos_imagen_tres","","","yes");
  add_option("home_proyectos_nombre_categoria_tres","","","yes");
  add_option("home_proyectos_texto_boton_tres","","","yes");
  add_option("home_proyectos_enlace_boton_tres","","","yes");

  add_option("home_proyectos_imagen_cuatro","","","yes");
  add_option("home_proyectos_nombre_categoria_cuatro","","","yes");
  add_option("home_proyectos_texto_boton_cuatro","","","yes");
  add_option("home_proyectos_enlace_boton_cuatro","","","yes");

  add_option("home_mestral_visibilidad","","","yes");
  add_option("home_mestral_imagen","","","yes");
  add_option("home_mestral_titulo","","","yes");
  add_option("home_mestral_descripcion","","","yes");
  add_option("home_mestral_texto_boton","","","yes");
  add_option("home_mestral_enlace","","","yes");

  add_option("home_empresas_visibilidad","","","yes");
  add_option("home_empresas_imagen","","","yes");
  add_option("home_empresas_titulo","","","yes");
  add_option("home_empresas_descripcion","","","yes");

  // Registro de opciones
  register_setting("opciones_home", "home_proyectos_titulo_seccion");
  register_setting("opciones_home", "home_proyectos_texto_seccion");

  register_setting("opciones_home", "home_proyectos_imagen_uno");
  register_setting("opciones_home", "home_proyectos_nombre_categoria_uno");
  register_setting("opciones_home", "home_proyectos_texto_boton_uno");
  register_setting("opciones_home", "home_proyectos_enlace_boton_uno");

  register_setting("opciones_home", "home_proyectos_imagen_dos");
  register_setting("opciones_home", "home_proyectos_nombre_categoria_dos");
  register_setting("opciones_home", "home_proyectos_texto_boton_dos");
  register_setting("opciones_home", "home_proyectos_enlace_boton_dos");

  register_setting("opciones_home", "home_proyectos_imagen_tres");
  register_setting("opciones_home", "home_proyectos_nombre_categoria_tres");
  register_setting("opciones_home", "home_proyectos_texto_boton_tres");
  register_setting("opciones_home", "home_proyectos_enlace_boton_tres");

  register_setting("opciones_home", "home_proyectos_imagen_cuatro");
  register_setting("opciones_home", "home_proyectos_nombre_categoria_cuatro");
  register_setting("opciones_home", "home_proyectos_texto_boton_cuatro");
  register_setting("opciones_home", "home_proyectos_enlace_boton_cuatro");

  register_setting("opciones_home", "home_mestral_visibilidad");
  register_setting("opciones_home", "home_mestral_imagen");
  register_setting("opciones_home", "home_mestral_titulo");
  register_setting("opciones_home", "home_mestral_descripcion");
  register_setting("opciones_home", "home_mestral_texto_boton");
  register_setting("opciones_home", "home_mestral_enlace");

  register_setting("opciones_home", "home_empresas_visibilidad");
  register_setting("opciones_home", "home_empresas_imagen");
  register_setting("opciones_home", "home_empresas_titulo");
  register_setting("opciones_home", "home_empresas_descripcion");
}

function caritaspress_pagina_inicio() {
  if (!current_user_can('manage_options'))
      wp_die(__("No tienes acceso a esta página."));
  ?>

  <div class="wrap">

    <?php settings_errors(); ?>
    <?php
        if( isset( $_GET[ 'tab' ] ) ) {
            $active_tab = $_GET[ 'tab' ];
        } else {
            $active_tab = 'proyectos' ;
        }
    ?>

    <!-- Titulo de la página -->

    <h1><span class="dashicons dashicons-admin-home" style="font-size: 2rem; margin-right: 1rem;"></span> Portada <small>- Opcions de configuració</small></h1>

    <!-- Formulario -->

    <form method="post" action="options.php">
      <?php settings_fields('opciones_home'); ?>

        <!-- Seccion Proyectos -->
        <h2>Projectes</h2>
        <p>Aquesta es la secció on apareixen les categoríes dels projectes. Pots definir el tìtol de la secció i la seva descripció, el nom de cada categoría y també l'imagen i el seu enllaç.</p>
        <hr>
        <table class="form-table">
          <tr valign="top">
            <th scope="row">Tìtol de la secció</th>
            <td><input type="text" name="home_proyectos_titulo_seccion" size="40" value="<?php echo get_option('home_proyectos_titulo_seccion'); ?>" /></td>
          </tr>
          <tr valign="top">
            <th scope="row">Descripció de la secció</th>
            <td><textarea name="home_proyectos_texto_seccion" cols="37" rows="10"><?php echo get_option('home_proyectos_texto_seccion'); ?></textarea></td>
          </tr>
        </table>

        <hr>

        <table class="form-table">
          <tr valign="top">
            <th scope="row">Nom de la categoría un</th>
            <td><input type="text" name="home_proyectos_nombre_categoria_uno" size="40" value="<?php echo get_option('home_proyectos_nombre_categoria_uno'); ?>" /></td>
          </tr>
          <tr valign="top">
            <th scope="row">Imatge de la categoría un</th>
            <td><input type="text" name="home_proyectos_imagen_uno" size="40" value="<?php echo get_option('home_proyectos_imagen_uno'); ?>" />
            <br><span class="description">Aferra aquí l'URL de l'imatge</span></td>
          </tr>
          <tr valign="top">
            <th scope="row">Botó de la categoría un</th>
            <td><input type="text" name="home_proyectos_texto_boton_uno" size="40" value="<?php echo get_option('home_proyectos_texto_boton_uno'); ?>" />
            <span class="description">Texte del botó</span>
            <br>
            <input type="text" name="home_proyectos_enlace_boton_uno" size="40" value="<?php echo get_option('home_proyectos_enlace_boton_uno'); ?>" />
            <span class="description">Enllaç del botó</span></td>
          </tr>
        </table>

        <hr>

        <table class="form-table">
          <tr valign="top">
            <th scope="row">Nom de la categoría dos</th>
            <td><input type="text" name="home_proyectos_nombre_categoria_dos" size="40" value="<?php echo get_option('home_proyectos_nombre_categoria_dos'); ?>" /></td>
          </tr>
          <tr valign="top">
            <th scope="row">Imatge de la categoría dos</th>
            <td><input type="text" name="home_proyectos_imagen_dos" size="40" value="<?php echo get_option('home_proyectos_imagen_dos'); ?>" />
            <br><span class="description">Aferra aquí l'URL de l'imatge</span></td>
          </tr>
          <tr valign="top">
            <th scope="row">Botó de la categoría dos</th>
            <td><input type="text" name="home_proyectos_texto_boton_dos" size="40" value="<?php echo get_option('home_proyectos_texto_boton_dos'); ?>" />
            <span class="description">Texte del botó</span>
            <br>
            <input type="text" name="home_proyectos_enlace_boton_dos" size="40" value="<?php echo get_option('home_proyectos_enlace_boton_dos'); ?>" />
            <span class="description">Enllaç del botó</span></td>
          </tr>
        </table>

        <hr>

        <table class="form-table">
          <tr valign="top">
            <th scope="row">Nom de la categoría tres</th>
            <td><input type="text" name="home_proyectos_nombre_categoria_tres" size="40" value="<?php echo get_option('home_proyectos_nombre_categoria_tres'); ?>" /></td>
          </tr>
          <tr valign="top">
            <th scope="row">Imatge de la categoría tres</th>
            <td><input type="text" name="home_proyectos_imagen_tres" size="40" value="<?php echo get_option('home_proyectos_imagen_tres'); ?>" />
            <br><span class="description">Aferra aquí l'URL de l'imatge</span></td>
          </tr>
          <tr valign="top">
            <th scope="row">Botó de la categoría tres</th>
            <td><input type="text" name="home_proyectos_texto_boton_tres" size="40" value="<?php echo get_option('home_proyectos_texto_boton_tres'); ?>" />
            <span class="description">Texte del botó</span>
            <br>
            <input type="text" name="home_proyectos_enlace_boton_tres" size="40" value="<?php echo get_option('home_proyectos_enlace_boton_tres'); ?>" />
            <span class="description">Enllaç del botó</span></td>
          </tr>
        </table>

        <hr>

        <table class="form-table">
          <tr valign="top">
            <th scope="row">Nom de la categoría quatre</th>
            <td><input type="text" name="home_proyectos_nombre_categoria_cuatro" size="40" value="<?php echo get_option('home_proyectos_nombre_categoria_cuatro'); ?>" /></td>
          </tr>
          <tr valign="top">
            <th scope="row">Imatge de la categoría quatre</th>
            <td><input type="text" name="home_proyectos_imagen_cuatro" size="40" value="<?php echo get_option('home_proyectos_imagen_cuatro'); ?>" />
            <br><span class="description">Aferra aquí l'URL de l'imatge</span></td>
          </tr>
          <tr valign="top">
            <th scope="row">Botó de la categoría quatre</th>
            <td><input type="text" name="home_proyectos_texto_boton_cuatro" size="40" value="<?php echo get_option('home_proyectos_texto_boton_cuatro'); ?>" />
            <span class="description">Texte del botó</span>
            <br>
            <input type="text" name="home_proyectos_enlace_boton_cuatro" size="40" value="<?php echo get_option('home_proyectos_enlace_boton_cuatro'); ?>" />
            <span class="description">Enllaç del botó</span></td>
          </tr>
        </table>

        <!-- Seccion Mestral -->
        <h2>Mestral</h2>
        <p>Aquesta es la secció que mostra informació sobre Mestral a la portada.</p>
        <hr>
        <table class="form-table">
          <tr valign="top">
            <th scope="row">Mostrar Mestral</th>
            <td>
            <?php $options = get_option( "home_mestral_visibilidad" ); ?>
            <input type="checkbox" name="home_mestral_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Marcar per mostrar la secció Mestral.</span>
          </tr>
        </table>
        <table class="form-table">
          <tr valign="top">
            <th scope="row">Tìtol</th>
            <td><input type="text" name="home_mestral_titulo" size="40" value="<?php echo get_option('home_mestral_titulo'); ?>" /></td>
          </tr>
          <tr valign="top">
            <th scope="row">Descripció</th>
            <td><textarea name="home_mestral_descripcion" cols="37" rows="10"><?php echo get_option('home_mestral_descripcion'); ?></textarea></td>
          </tr>
          <tr valign="top">
            <th scope="row">Imatge</th>
            <td><input type="text" name="home_mestral_imagen" size="40" value="<?php echo get_option('home_mestral_imagen'); ?>" />
            <br><span class="description">Aferra aquí l'URL de l'imatge</span></td>
          </tr>
          <tr valign="top">
            <th scope="row">Botó</th>
            <td><input type="text" name="home_mestral_texto_boton" size="40" value="<?php echo get_option('home_mestral_texto_boton'); ?>" />
            <span class="description">Texte del botó</span>
            <br>
            <input type="text" name="home_mestral_enlace" size="40" value="<?php echo get_option('home_mestral_enlace'); ?>" />
            <span class="description">Enllaç del botó</span></td>
          </tr>
        </table>

          <!-- Seccion Empreses Amb Cor -->
          <h2>Empreses amb Cor</h2>
          <p>Aquesta es la secció que mostra informació sobre Empreses amb Cor a la portada.</p>
          <hr>
          <table class="form-table">
            <tr valign="top">
              <th scope="row">Mostrar Empreses amb Cor</th>
              <td>
              <?php $options = get_option( "home_empresas_visibilidad" ); ?>
              <input type="checkbox" name="home_empresas_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Marcar per mostrar la secció Empreses amb Cor.</span>
            </tr>
          </table>
          <table class="form-table">
            <tr valign="top">
              <th scope="row">Tìtol</th>
              <td><input type="text" name="home_empresas_titulo" size="40" value="<?php echo get_option('home_empresas_titulo'); ?>" /></td>
            </tr>
            <tr valign="top">
              <th scope="row">Descripció</th>
              <td><textarea name="home_empresas_descripcion" cols="37" rows="10"><?php echo get_option('home_empresas_descripcion'); ?></textarea></td>
            </tr>
            <tr valign="top">
              <th scope="row">Imatge</th>
              <td><input type="text" name="home_empresas_imagen" size="40" value="<?php echo get_option('home_empresas_imagen'); ?>" />
              <br><span class="description">Aferra aquí l'URL de la imatge</span></td>
            </tr>
          </table>

      <p class="submit">
      	<input name="home_guardar" type="submit" class="button-primary" value="<?php _e('Guardar cambios') ?>" />
      </p>

    </form>
  </div>
<?php } ?>
