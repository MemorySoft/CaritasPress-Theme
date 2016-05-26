<?php  
/**
*   FAQ POST TYPE
*   ------------------
*   Genera un post que muestra las preguntas más frecuentes.
*   
*   Autor: Hector Asencio @MemorySoft
*   Versión: 1.0
*   @package CaritasPress
*
*/ 

function caritaspress_crear_faqs() {
  register_post_type( 'faq',
    array(
      'labels' => array(
        'name' => 'Preguntas',
        'singular_name' => 'Pregunta',
        'add_new' => 'Añadir pregunta',
        'add_new_item' => 'Nueva pregunta',
        'edit' => 'Editar',
        'edit_item' => 'Editar pregunta',
        'new_item' => 'Nueva pregunta',
        'view' => 'Ver',
        'view_item' => 'Ver pregunta',
        'search_items' => 'Buscar pregunta',
        'not_found' => 'Ninguna pregunta encontrada',
        'not_found_in_trash' => 'Ninguna pregunta encontrada en la Papelera',
        'parent' => 'Pregunta superior'
      ),
      'public' => true,
      'menu_position' => 50,
      'supports' => array( 'title', 'editor', 'thumbnail' ),
      'taxonomies' => array( '' ),
      'menu_icon' => 'dashicons-info',
      'has_archive' => true
    )
  );
}
add_action( 'init', 'caritaspress_crear_faqs' );
?>