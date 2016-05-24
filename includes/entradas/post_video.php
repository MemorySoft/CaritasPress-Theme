<?php  
/**
*   VIDEOS POST TYPE
*   ------------------
*   Genera un post que muestra los videos de Caritas.
*   
*   Autor: Hector Asencio @MemorySoft
*   Versión: 1.0
*   @package CaritasPress
*
*/ 

// POST TYPE
function caritaspress_crear_videos() {
  register_post_type( 'video',
    array(
      'labels' => array(
        'name' => 'Videos',
        'singular_name' => 'Video',
        'add_new' => 'Añadir video',
        'add_new_item' => 'Nuevo video',
        'edit' => 'Editar',
        'edit_item' => 'Editar video',
        'new_item' => 'Nuevo video',
        'view' => 'Ver',
        'view_item' => 'Ver video',
        'search_items' => 'Buscar video',
        'not_found' => 'Ningún video encontrado',
        'not_found_in_trash' => 'Ningún video encontrado en la Papelera',
        'parent' => 'Video superior'
      ),
      'public' => true,
      'menu_position' => 50,
      'supports' => array( 'title', 'editor' ),
      'taxonomies' => array( '' ),
      'menu_icon' => 'dashicons-video-alt3',
      'has_archive' => true
    )
  );
}
add_action( 'init', 'caritaspress_crear_videos' );
?>