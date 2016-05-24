<?php  
/**
*   REVISTA POST TYPE
*   ------------------
*   Genera un post que muestra las revistas de Caritas.
*   
*   Autor: Hector Asencio @MemorySoft
*   Versión: 1.0
*   @package CaritasPress
*
*/ 

// POST TYPE
function caritaspress_crear_revistas() {
  register_post_type( 'revista',
    array(
      'labels' => array(
        'name' => 'Càrites Actua',
        'singular_name' => 'Càrites Actua',
        'add_new' => 'Añadir Càrites Actua',
        'add_new_item' => 'Nuevo Càrites Actua',
        'edit' => 'Editar',
        'edit_item' => 'Editar Càrites Actua',
        'new_item' => 'Nuevo Càrites Actua',
        'view' => 'Ver',
        'view_item' => 'Ver Càrites Actua',
        'search_items' => 'Buscar Càrites Actua',
        'not_found' => 'Ningún Càrites Actua encontrado',
        'not_found_in_trash' => 'Ningún Càrites Actua encontrado en la Papelera',
        'parent' => 'Càrites Actua superior'
      ),
      'public' => true,
      'menu_position' => 50,
      'supports' => array( 'title', 'editor', 'thumbnail' ),
      'taxonomies' => array( '' ),
      'menu_icon' => 'dashicons-book-alt',
      'has_archive' => true
    )
  );
}
add_action( 'init', 'caritaspress_crear_revistas' );
?>