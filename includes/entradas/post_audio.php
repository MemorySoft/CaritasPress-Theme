<?php  
/**
*   AUDIOS POST TYPE
*   ------------------
*   Genera un post que muestra los archivos sonoros de Caritas.
*   
*   Autor: Hector Asencio @MemorySoft
*   Versión: 1.0
*   @package CaritasPress
*
*/ 

// POST TYPE
function caritaspress_crear_audios() {
  register_post_type( 'audio',
    array(
      'labels' => array(
        'name' => 'Audios',
        'singular_name' => 'Audio',
        'add_new' => 'Añadir audio',
        'add_new_item' => 'Nuevo audio',
        'edit' => 'Editar',
        'edit_item' => 'Editar audio',
        'new_item' => 'Nuevo audio',
        'view' => 'Ver',
        'view_item' => 'Ver audio',
        'search_items' => 'Buscar audio',
        'not_found' => 'Ningún audio encontrado',
        'not_found_in_trash' => 'Ningún audio encontrado en la Papelera',
        'parent' => 'Audio superior'
      ),
      'public' => true,
      'menu_position' => 50,
      'supports' => array( 'title' ),
      'taxonomies' => array( '' ),
      'menu_icon' => 'dashicons-controls-volumeon',
      'has_archive' => true
    )
  );
}
add_action( 'init', 'caritaspress_crear_audios' );

// META BOXES
function caritaspress_audio_meta_box() {
    add_meta_box( 'enlace-audio',
        'Enlace al archivo de audio',
        'caritaspress_muestra_audio_meta_box',
        'audio', 
        'normal', 
        'core'
    );
}
add_action( 'admin_init', 'caritaspress_audio_meta_box' );

function caritaspress_muestra_audio_meta_box( $audio ) {
  $enlace = esc_html( get_post_meta( $audio->ID, 'audio_enlace', true ) );
  ?>
  <table class="form-table">
    <tr valign="top">
      <th scope="row"></th>
      <td>
        <p>Pega aquí el enlace al archivo de audio.</p>
        <hr>
      </td>
    </tr>
    <tr valign="top">
      <th scope="row">URL del enlace</th>
      <td>
        <input 
        type="tel" 
        size="140" 
        name="audio_enlace" 
        value="<?php echo $enlace; ?>" /><br>
      </td>
    </tr>
  </table>
  <?php
}

function caritaspress_enlace_audio( $datos_id, $audio ) {
  if ( $audio->post_type == 'audio' ) {
    if ( isset( $_POST['audio_enlace'] ) && $_POST['audio_enlace'] != '' ) {
      update_post_meta( 
        $datos_id, 
        'audio_enlace', 
        $_POST['audio_enlace'] 
        );
    } else {
      delete_post_meta( $datos_id, 'audio_enlace' );
    }
  }
}
add_action( 'save_post', 'caritaspress_enlace_audio', 10, 2 );
?>