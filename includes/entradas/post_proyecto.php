<?php  
/**
*   PROYECTO POST TYPE
*   ------------------
*   Genera un post que muestra los proyectos de Caritas con sus propias taxonomias.
*   
*   Autor: Hector Asencio @MemorySoft
*   Versión: 1.0
*   @package CaritasPress
*
*/ 

// POST TYPE
function caritaspress_crear_proyectos() {
  register_post_type( 'proyecto',
    array(
      'labels' => array(
        'name' => 'Proyectos',
        'singular_name' => 'Proyecto',
        'add_new' => 'Añadir proyecto',
        'add_new_item' => 'Nuevo proyecto',
        'edit' => 'Editar',
        'edit_item' => 'Editar proyecto',
        'new_item' => 'Nuevo proyecto',
        'view' => 'Ver',
        'view_item' => 'Ver proyecto',
        'search_items' => 'Buscar proyecto',
        'not_found' => 'Ningún proyecto encontrado',
        'not_found_in_trash' => 'Ningún proyecto encontrado en la Papelera',
        'parent' => 'Proyecto superior'
      ),
      'public' => true,
      'menu_position' => 50,
      'supports' => array( 'title', 'editor', 'thumbnail' ),
      'taxonomies' => array( '' ),
      'menu_icon' => 'dashicons-heart',
      'has_archive' => true
    )
  );
}
add_action( 'init', 'caritaspress_crear_proyectos' );

// TAXONOMIAS
function caritaspress_crear_proyectos_taxonomias() {
    register_taxonomy(
        'programa',
        'proyecto',
        array(
            'labels' => array(
                'name' => 'Programas de Càritas',
                'add_new_item' => 'Asigna el proyecto a un programa',
                'new_item_name' => "Nuevo programa"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true
        )
    );
    if (!term_exists( 'Animació del voluntariat', 'programa') ){ 
        wp_insert_term( 'Animació del voluntariat', 'programa' );
    }
    if (!term_exists( 'Acció Social', 'programa') ){ 
        wp_insert_term( 'Acció Social', 'programa' );
    }
    if (!term_exists( 'Ocupació i Inserció Laboral', 'programa') ){ 
        wp_insert_term( 'Ocupació i Inserció Laboral', 'programa' );
    }
    if (!term_exists( 'Sensibilització i cooperació', 'programa') ){ 
        wp_insert_term( 'Sensibilització i cooperació', 'programa' );
    }
}
add_action( 'init', 'caritaspress_crear_proyectos_taxonomias', 0 );
?>