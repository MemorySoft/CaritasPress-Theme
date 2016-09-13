<?php
/**
*		VARIABLES PARA CARITASPRESS
*  	---------------------------
* 	Variables usadas por las páginas de opciones.
*
* 	Autor: Hector Asencio @MemorySoft
* 	Versión: 1.0
*  	@package CaritasPress
*/

/**
 *  GLOBALES
 *  @since 1.0
 */
// Email footer
$email_contacto                       = get_option("global_email_contacto");
// Redes Sociales footer
$enlace_twitter 											= get_option("global_twitter");
$enlace_facebook 										  = get_option("global_facebook");
$enlace_youtube 											= get_option("global_youtube");
// Analitica de página
$analitica_id												  = get_option("global_analitica");
// Direcciones footer
$calle_uno                            = get_option("global_direccion_uno_calle");
$numero_uno                           = get_option("global_direccion_uno_numero");
$cp_uno                               = get_option("global_direccion_uno_cp");
$localidad_uno                        = get_option("global_direccion_uno_localidad");
$telefono_uno                         = get_option("global_direccion_uno_telefono");
$fax_uno                              = get_option("global_direccion_uno_fax");

$calle_dos                            = get_option("global_direccion_dos_calle");
$numero_dos                           = get_option("global_direccion_dos_numero");
$cp_dos                               = get_option("global_direccion_dos_cp");
$localidad_dos                        = get_option("global_direccion_dos_localidad");
$telefono_dos                         = get_option("global_direccion_dos_telefono");
$fax_dos                              = get_option("global_direccion_dos_fax");
// Enlaces footer
$enlace_logo_uno                      = get_option("global_enlace_uno");
$imagen_logo_uno                      = get_option("global_logo_uno");

$enlace_logo_dos                      = get_option("global_enlace_dos");
$imagen_logo_dos                      = get_option("global_logo_dos");

$enlace_logo_tres                     = get_option("global_enlace_tres");
$imagen_logo_tres                     = get_option("global_logo_tres");

$enlace_logo_cuatro                   = get_option("global_enlace_cuatro");
$imagen_logo_cuatro                   = get_option("global_logo_cuatro");

/**
*  PORTADA
*  @since 1.0
*/
// Sección Proyectos
$proyectos_titulo                    = get_option("home_proyectos_titulo_seccion");
$proyectos_texto                     = get_option("home_proyectos_texto_seccion");

$proyectos_imagen_uno                = get_option("home_proyectos_imagen_uno");
$proyectos_nombre_categoria_uno      = get_option("home_proyectos_nombre_categoria_uno");
$proyectos_texto_boton_uno           = get_option("home_proyectos_texto_boton_uno");
$proyectos_enlace_boton_uno          = get_option("home_proyectos_enlace_boton_uno");

$proyectos_imagen_dos                = get_option("home_proyectos_imagen_dos");
$proyectos_nombre_categoria_dos      = get_option("home_proyectos_nombre_categoria_dos");
$proyectos_texto_boton_dos           = get_option("home_proyectos_texto_boton_dos");
$proyectos_enlace_boton_dos          = get_option("home_proyectos_enlace_boton_dos");

$proyectos_imagen_tres               = get_option("home_proyectos_imagen_tres");
$proyectos_nombre_categoria_tres     = get_option("home_proyectos_nombre_categoria_tres");
$proyectos_texto_boton_tres          = get_option("home_proyectos_texto_boton_tres");
$proyectos_enlace_boton_tres         = get_option("home_proyectos_enlace_boton_tres");

$proyectos_imagen_cuatro             = get_option("home_proyectos_imagen_cuatro");
$proyectos_nombre_categoria_cuatro   = get_option("home_proyectos_nombre_categoria_cuatro");
$proyectos_texto_boton_cuatro        = get_option("home_proyectos_texto_boton_cuatro");
$proyectos_enlace_boton_cuatro       = get_option("home_proyectos_enlace_boton_cuatro");
// Destacado Mestral
$mestral_ver                         = get_option("home_mestral_visibilidad");
$mestral_imagen                      = get_option("home_mestral_imagen");
$mestral_titulo                      = get_option("home_mestral_titulo");
$mestral_descripcion                 = get_option("home_mestral_descripcion");
$mestral_texto_boton                 = get_option("home_mestral_texto_boton");
$mestral_enlace                      = get_option("home_mestral_enlace");
// Destacado Empresas
$empresas_ver                         = get_option("home_empresas_visibilidad");
$empresas_imagen                      = get_option("home_empresas_imagen");
$empresas_titulo                      = get_option("home_empresas_titulo");
$empresas_descripcion                 = get_option("home_empresas_descripcion");

/**
*  ENTIDAD
*  @since 1.0
*/
// Caritas sección
$caritas_ver                         = get_option("caritas_cabecera_visibilidad");
$caritas_descripcion                 = get_option("caritas_cabecera_descripcion");
// Programas bloques
$programa_uno_titulo                 = get_option("caritas_programa_uno_titulo");
$programa_uno_descripcion            = get_option("caritas_programa_uno_descripcion");
$programa_uno_enlace                 = get_option("caritas_programa_uno_enlace");

$programa_dos_titulo                 = get_option("caritas_programa_dos_titulo");
$programa_dos_descripcion            = get_option("caritas_programa_dos_descripcion");
$programa_dos_enlace                 = get_option("caritas_programa_dos_enlace");

$programa_tres_titulo                = get_option("caritas_programa_tres_titulo");
$programa_tres_descripcion           = get_option("caritas_programa_tres_descripcion");
$programa_tres_enlace                = get_option("caritas_programa_tres_enlace");

$programa_cuatro_titulo              = get_option("caritas_programa_cuatro_titulo");
$programa_cuatro_descripcion         = get_option("caritas_programa_cuatro_descripcion");
$programa_cuatro_enlace              = get_option("caritas_programa_cuatro_enlace");
// Destacado Revista
$revista_ver                         = get_option("caritas_revista_visibilidad");
$revista_titulo                      = get_option("caritas_revista_titulo");
$revista_descripcion                 = get_option("caritas_revista_descripcion");
$revista_imagen                      = get_option("caritas_revista_imagen");
$revista_boton                       = get_option("caritas_revista_boton");
$revista_enlace                      = get_option("caritas_revista_enlace");
// Sección Qui Som
$quien_subtitulo                     = get_option("caritas_quien_subtitulo");
$quien_descripcion                   = get_option("caritas_quien_descripcion");

$valores_uno_titulo                  = get_option("caritas_valores_uno_titulo");
$valores_uno_descripcion             = get_option("caritas_valores_uno_descripcion");

$valores_dos_titulo                  = get_option("caritas_valores_dos_titulo");
$valores_dos_descripcion             = get_option("caritas_valores_dos_descripcion");

$valores_tres_titulo                 = get_option("caritas_valores_tres_titulo");
$valores_tres_descripcion            = get_option("caritas_valores_tres_descripcion");

$organizacion_descripcion            = get_option("caritas_organizacion_descripcion");
$organizacion_imagen                 = get_option("caritas_organizacion_imagen");
// Callout
$anuncio_ver                         = get_option("caritas_anuncio_visibilidad");
$anuncio_titulo                      = get_option("caritas_anuncio_titulo");
$anuncio_descripcion                 = get_option("caritas_anuncio_descripcion");
$anuncio_boton                       = get_option("caritas_anuncio_boton");
$anuncio_enlace                      = get_option("caritas_anuncio_enlace");

/**
*  DONATIVOS
*  @since 1.0
*/
// Sección Donatius
$donativos_titulo                   = get_option("donativos_cabecera_titulo");
$donativos_descripcion              = get_option("donativos_cabecera_descripcion");
// Bloques info fiscal
$fiscal_bloque_uno_titulo           = get_option("donativos_fiscal_bloque_uno_titulo");
$fiscal_bloque_uno_descripcion      = get_option("donativos_fiscal_bloque_uno_descripcion");
$fiscal_bloque_uno_cifra            = get_option("donativos_fiscal_bloque_uno_cifra");

$fiscal_bloque_dos_titulo           = get_option("donativos_fiscal_bloque_dos_titulo");
$fiscal_bloque_dos_descripcion      = get_option("donativos_fiscal_bloque_dos_descripcion");
$fiscal_bloque_dos_cifra            = get_option("donativos_fiscal_bloque_dos_cifra");

$fiscal_bloque_tres_titulo          = get_option("donativos_fiscal_bloque_tres_titulo");
$fiscal_bloque_tres_descripcion     = get_option("donativos_fiscal_bloque_tres_descripcion");
$fiscal_bloque_tres_cifra           = get_option("donativos_fiscal_bloque_tres_cifra");

$fiscal_info_boton                  = get_option("donativos_fiscal_info_boton");
$fiscal_info_enlace                 = get_option("donativos_fiscal_info_enlace");
?>
