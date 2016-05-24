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
      'supports' => array( 'title', 'editor' ),
      'taxonomies' => array( '' ),
      'menu_icon' => 'dashicons-controls-volumeon',
      'has_archive' => true
    )
  );
}
add_action( 'init', 'caritaspress_crear_audios' );
?>