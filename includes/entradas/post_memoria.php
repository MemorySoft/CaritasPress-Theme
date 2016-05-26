<?php  
/**
*   MEMORIAS POST TYPE
*   ------------------
*   Genera un post que muestra las memorias anuales de Caritas.
*   
*   Autor: Hector Asencio @MemorySoft
*   Versión: 1.0
*   @package CaritasPress
*
*/ 

// POST TYPE
function caritaspress_crear_memorias() {
  register_post_type( 'memoria',
    array(
      'labels' => array(
        'name' => 'Memorias',
        'singular_name' => 'Memoria',
        'add_new' => 'Añadir memoria',
        'add_new_item' => 'Nueva memoria',
        'edit' => 'Editar',
        'edit_item' => 'Editar memoria',
        'new_item' => 'Nueva memoria',
        'view' => 'Ver',
        'view_item' => 'Ver memoria',
        'search_items' => 'Buscar memoria',
        'not_found' => 'Ninguna memoria encontrada',
        'not_found_in_trash' => 'Ninguna memoria encontrada en la Papelera',
        'parent' => 'Memoria superior'
      ),
      'public' => true,
      'menu_position' => 50,
      'supports' => array( 'title', 'thumbnail' ),
      'taxonomies' => array( '' ),
      'menu_icon' => 'dashicons-chart-line',
      'has_archive' => true
    )
  );
}
add_action( 'init', 'caritaspress_crear_memorias' );

// META BOXES
function caritaspress_memoria_meta_box() {
    add_meta_box( 'enlace-memoria',
        'Enlace al archivo de la Memoria anual',
        'caritaspress_muestra_memoria_meta_box',
        'memoria', 
        'normal', 
        'core'
    );
}
add_action( 'admin_init', 'caritaspress_memoria_meta_box' );

function caritaspress_muestra_memoria_meta_box( $memoria ) {
  $enlace = esc_html( get_post_meta( $memoria->ID, 'memoria_enlace', true ) );
  ?>
  <table class="form-table">
    <tr valign="top">
      <th scope="row"></th>
      <td>
        <p>Pega aquí el enlace al archivo de la Memoria anual.</p>
        <hr>
      </td>
    </tr>
    <tr valign="top">
      <th scope="row">URL del enlace</th>
      <td>
        <input 
        type="tel" 
        size="140" 
        name="memoria_enlace" 
        value="<?php echo $enlace; ?>" /><br>
      </td>
    </tr>
  </table>
  <?php
}

function caritaspress_enlace_memoria( $datos_id, $memoria ) {
  if ( $memoria->post_type == 'memoria' ) {
    if ( isset( $_POST['memoria_enlace'] ) && $_POST['memoria_enlace'] != '' ) {
      update_post_meta( 
        $datos_id, 
        'memoria_enlace', 
        $_POST['memoria_enlace'] 
        );
    } else {
      delete_post_meta( $datos_id, 'memoria_enlace' );
    }
  }
}
add_action( 'save_post', 'caritaspress_enlace_memoria', 10, 2 );
?>