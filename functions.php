<?php
/**
*		FUNCIONES DEL TEMA
*  	------------------
* 	Autor: Hector Asencio @MemorySoft
* 	Versión: 1.0
*  	@package CaritasPress
*/

require_once('includes/init.php'); 												   // Cargamos el soporte básico

/**
* FUNCIONES
* @since 1.0
*********************************************************************************************************/
require_once('includes/funciones/func_dashboard.php'); 			  // Personalizaciones del dashboard
require_once('includes/funciones/func_sidebars.php'); 				// Registro de zonas para widgets
require_once('includes/funciones/func_extractos.php');				// Extractos de articulos
require_once('includes/funciones/func_opengraph.php');				// Soporte pata OpenGraph
require_once('includes/funciones/func_categorias.php');				// Funciones para las categorias

/**
*	PÁGINAS DE OPCIONES
*	@since 1.0
*********************************************************************************************************/
require_once('includes/opciones/ops_configuracion.php'); 	    // Configuración global del sitio
require_once('includes/opciones/ops_inicio.php');					    // Opciones para la página de inicio
require_once('includes/opciones/ops_entidad.php'); 		        // Datos del propietario del sitio
require_once('includes/opciones/ops_donativos.php');				    // Ociones para la página de contacto

/**
* ENTRADAS PERSONALIZADAS
* @since 1.0
*********************************************************************************************************/
require_once('includes/entradas/post_proyecto.php');          // Crea un post para publicar proyectos
require_once('includes/entradas/post_video.php');             // Publica un video en la sección correspondiente
require_once('includes/entradas/post_audio.php');             // Publica un enlace de audio
require_once('includes/entradas/post_memoria.php');           // Genera un post con archivo de descarga
require_once('includes/entradas/post_publicacion.php');       // Publica un enlace a un archivo
require_once('includes/entradas/post_carrusel.php');          // Genera un post especifico para el carrusel

/**
* WIDGETS
* @since 1.0
*********************************************************************************************************/
require_once('includes/widgets/image/wid_img.php');           // Permite subir imágenes a un sidebar
require_once('includes/widgets/wid_bloque.php');					    // Genera un callout al 100% del ancho
?>
