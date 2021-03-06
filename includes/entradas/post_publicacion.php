<?php
/**
*   REVISTA POST TYPE
*   ------------------
*   Genera un post que muestra las publicaciones de Caritas.
*
*   Autor: Hector Asencio @MemorySoft
*   Versión: 2.0
*   @package CaritasPress
*
*/

// POST TYPE
function caritaspress_crear_publicacion() {
  register_post_type( 'publicacion',
    array(
      'labels' => array(
        'name' => 'Publicaciones',
        'singular_name' => 'Publicaciones',
        'add_new' => 'Añadir Publicación',
        'add_new_item' => 'Nueva Publicación',
        'edit' => 'Editar',
        'edit_item' => 'Editar Publicación',
        'new_item' => 'Nueva Publicación',
        'view' => 'Ver',
        'view_item' => 'Ver Publicación',
        'search_items' => 'Buscar Publicación',
        'not_found' => 'Ninguna Publicación encontrada',
        'not_found_in_trash' => 'Ninguna Publicación encontrada en la Papelera',
        'parent' => 'Publicación superior'
      ),
      'public' => true,
      'menu_position' => 50,
      'supports' => array( 'title','editor' ),
      'taxonomies' => array( '' ),
      'menu_icon' => 'dashicons-book-alt',
      'has_archive' => true
    )
  );
}
add_action( 'init', 'caritaspress_crear_publicacion' );

// META BOXES
function caritaspress_publicacion_meta_box() {
    add_meta_box( 'enlace-publicacion',
        'Enllace a l\'archivo descarregable de la publicació',
        'caritaspress_muestra_publicacion_meta_box',
        'publicacion',
        'normal',
        'core'
    );
}
add_action( 'admin_init', 'caritaspress_publicacion_meta_box' );

function caritaspress_muestra_publicacion_meta_box( $publicacion ) {
  $enlace = esc_html( get_post_meta( $publicacion->ID, 'publicacion_enlace', true ) );
  $fecha = esc_html( get_post_meta( $publicacion->ID, 'publicacion_fecha', true ) );
  ?>
  <table class="form-table">
    <tr valign="top">
      <th scope="row">URL de l'enllaç</th>
      <td>
        <input
        type="tel"
        size="140"
        name="publicacion_enlace"
        value="<?php echo $enlace; ?>" /><br>
      </td>
    </tr>
  </table>
  <table class="form-table">
    <tr valign="top">
      <th scope="row">Data de la publicació</th>
      <td>
        <input
        type="tel"
        size="40"
        name="publicacion_fecha"
        value="<?php echo $fecha; ?>" /><br>
      </td>
    </tr>
  </table>
  <?php
}

function caritaspress_enlace_publicacion( $datos_id, $publicacion ) {
  if ( $publicacion->post_type == 'publicacion' ) {
    if ( isset( $_POST['publicacion_enlace'] ) && $_POST['publicacion_enlace'] != '' ) {
      update_post_meta(
        $datos_id,
        'publicacion_enlace',
        $_POST['publicacion_enlace']
        );
    } else {
      delete_post_meta( $datos_id, 'publicacion_enlace' );
    }
    if ( isset( $_POST['publicacion_fecha'] ) && $_POST['publicacion_fecha'] != '' ) {
      update_post_meta(
        $datos_id,
        'publicacion_fecha',
        $_POST['publicacion_fecha']
        );
    } else {
      delete_post_meta( $datos_id, 'publicacion_fecha' );
    }
  }
}
add_action( 'save_post', 'caritaspress_enlace_publicacion', 10, 2 );
?>
