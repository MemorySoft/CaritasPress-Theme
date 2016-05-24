<?php 
// Podemos personalizar la salida usando 
// $customLength=30; echo get_the_excerpt(); y 
// $customLength=0; entre etiquetas php
function caritaspress_custom_excerpt_length( $length ) {
	global $customLength;
	if( $customLength ) {
		return $customLength;
	} else {
		return 30;
	}
}
add_filter( 'excerpt_length', 'caritaspress_custom_excerpt_length', 999 );

// Generamos la elipsis al final de los artículos
function caritaspress_new_excerpt_more( $more ) {
	return ' … ';
}
add_filter( 'excerpt_more', 'caritaspress_new_excerpt_more' );
?>