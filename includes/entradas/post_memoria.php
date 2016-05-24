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
        'add_new_item' => 'Nuevo memoria',
        'edit' => 'Editar',
        'edit_item' => 'Editar memoria',
        'new_item' => 'Nuevo memoria',
        'view' => 'Ver',
        'view_item' => 'Ver memoria',
        'search_items' => 'Buscar memoria',
        'not_found' => 'Ningún memoria encontrado',
        'not_found_in_trash' => 'Ningún memoria encontrado en la Papelera',
        'parent' => 'Memoria superior'
      ),
      'public' => true,
      'menu_position' => 50,
      'supports' => array( 'title', 'editor', 'thumbnail' ),
      'taxonomies' => array( '' ),
      'menu_icon' => 'dashicons-chart-line',
      'has_archive' => true
    )
  );
}
add_action( 'init', 'caritaspress_crear_memorias' );
?>