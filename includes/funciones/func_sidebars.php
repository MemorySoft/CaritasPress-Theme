<?php
/**
*		ÁREAS DE WIDGETS PARA CARITASPRESS
*  	---------------------------------
* 	Registro de zonas habilitadas para widgets.
*
* 	Autor: Hector Asencio @MemorySoft
* 	Versión: 1.0
*  	@package CaritasPress
*/
if ( function_exists( 'register_sidebar' ) ) {
	// SIDEBAR
	register_sidebar( array(
		'name' => 'Barra Lateral',
		'id' => 'sidebar',
		'description'   => 'Aquest contingut només es veurá en les plantilles "Sidebar a la izquierda" i "Sidebar a la derecha"',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );
	// PORTADA
	register_sidebar( array(
		'name' => 'Portada Dalt',
		'id' => 'home-carrusel',
		'description'   => 'Posa-hi contingut que sustituesqui es carrusel de noticies de la Portada',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );
}
?>
