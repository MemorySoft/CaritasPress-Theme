<?php /* Template Name: Portada */ ?>
<?php require( trailingslashit( get_template_directory() ). '/includes/opciones/_variables.php'); ?>
<?php get_header(); ?>

<!--

# CARRUSEL
Este componente consiste en un carrusel que muestra el CPT 'Carrusel' o la
categoría predefinida 'Portada' y está encapsulado en un sidebar que sobre-escribe
el contenido de los anteriores items cuando está definido:

  1- Muestra el CPT 'carrusel' por defecto
  2- Si existe algún post con la categoría 'Portada' lo sobre-escribe
  3- Si añadimos algún widget al sidebar, sobre-escribe lo anterior

Ficheros relacionados:

  * includes\entradas\post_carrusel.php
  * includes\funciones\func_categorias.php
  * includes\funciones\func_sidebars.php
  * styles\caritas.css
  * styles\owl.carousel.css
  * styles\owl.theme.css

-->

<div class="row sin-margen--abajo">
  <div class="small-12 columns">
    <!-- Declaramos el sidebar -->
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home-carrusel') ) : ?>
      <!-- Contenido por defecto si no hay nigún widget -->
      <div class="carrusel portada-carrusel -carrusel-un-item">
        <?php
        // Preparamos las opciones para la query
        $noticias_args = array(
          'post_type' => 'post',
          'category_name' => 'portada',
          'posts_per_page'=> 6,
        );
        $carrusel_args = array(
          'post_type' => 'carrusel'
        );
        // Ejecutamos la query
        $carrusel_item = new WP_Query($carrusel_args);
        $noticias_item = new WP_Query($noticias_args);
        // Si hay posts con la categoría 'Portada' sacamos las seis últimas
        if( $noticias_item->have_posts() ) { ?>
          <?php  while ( $noticias_item->have_posts() ) : $noticias_item->the_post(); ?>
            <div class="carrusel-item">
              <?php the_post_thumbnail(); ?>
              <div class="carrusel-seccion">
                <h1 class="carrusel-titulo"><?php the_title(); ?></h1>
                <a class="carrusel-enlace button" href="<?php the_permalink(); ?>" title="<?php esc_attr__('Llegir','caritaspress'); ?> <?php the_title(); ?>">
                    <?php _e('Llegir','caritaspress'); ?>
                  </a>
              </div>
            </div>
          <?php endwhile; ?>
        <?php
        // Si ningún post tiene la categoría 'Portada' mostramos el CTP 'Carrusel'
        } elseif( $carrusel_item->have_posts() ) { ?>
          <?php  while ( $carrusel_item->have_posts() ) : $carrusel_item->the_post(); ?>
            <div>
              <?php the_post_thumbnail(); ?>
            </div>
          <?php endwhile; ?>
        <?php } ?>
      </div>
    <?php endif; ?>
  </div>
</div>

<!-- COLABORA -->

<div class="franja fondo-rojo texto-centrado">
  <div class="row sin-margen--abajo">
    <h2 class="small-12">Càritas Diocesana de Menorca, ajudan's a ajudar!</h2>
  </div>
  <div class="row small-up-1 medium-up-5 sin-margen--abajo texto-centrado">
    <div class="columns">
      <a href="colabora">
        <img src="<?php bloginfo('template_directory'); ?>/images/icono_donatius.png" alt="Donatius">
        <h5>Vull fer un <br>donatiu</h5>
      </a>
    </div>
    <div class="columns">
      <a href="colabora">
        <img src="<?php bloginfo('template_directory'); ?>/images/icono_socis.png" alt="Socis">
        <h5>Vull fer-me <br>soci</h5>
      </a>
    </div>
    <div class="columns">
      <a href="colabora">
        <img src="<?php bloginfo('template_directory'); ?>/images/icono_voluntaris.png" alt="Voluntaris">
        <h5>Vull fer-me <br>voluntari</h5>
      </a>
    </div>
    <div class="columns">
      <a href="colabora">
        <img src="<?php bloginfo('template_directory'); ?>/images/icono_empreses.png" alt="Empreses">
        <h5>Empresa <br>amb cor</h5>
      </a>
    </div>
    <div class="columns">
      <a href="colabora">
        <img src="<?php bloginfo('template_directory'); ?>/images/icono_llegats.png" alt="Llegats">
        <h5>Fes un <br>llegat</h5>
      </a>
    </div>
  </div>
</div>

<!-- PROYECTOS -->

<div class="proyectos">
  <div class="row texto-centrado">
    <div class="small-12 columns">
      <h3><?php echo $proyectos_titulo ?></h3>
      <p class="texto-destacado"><?php echo $proyectos_texto ?></p>
    </div>

    <div class="item small-12 medium-6 large-3 columns">
      <div class="articulo stack-for-small">
        <div class="articulo-seccion articulo-seccion--vertical">
          <div class="articulo-imagen">
            <img src="<?php echo $proyectos_imagen_uno ?>" alt="Imatge que simbolitza el voluntariat">
          </div>
        </div>
        <div class="articulo-seccion articulo-seccion--vertical">
          <h4 class="articulo-titulo"><?php echo $proyectos_nombre_categoria_uno ?></h4>
          <a href="<?php echo $proyectos_enlace_boton_uno ?>" title="<?php esc_attr__('anar a la pàgina de la categoria Animació del voluntariat','caritaspress'); ?>" class="button"><?php echo $proyectos_texto_boton_uno ?></a>
        </div>
      </div>
    </div>
    <div class="item small-12 medium-6 large-3 columns">
      <div class="articulo stack-for-small">
        <div class="articulo-seccion articulo-seccion--vertical">
          <div class="articulo-imagen">
	          <img src="<?php echo $proyectos_imagen_dos ?>" alt="Imatge que simbolitza ajuda">
          </div>
        </div>
        <div class="articulo-seccion articulo-seccion--vertical">
          <h4 class="articulo-titulo"><?php echo $proyectos_nombre_categoria_dos ?></h4>
          <a href="<?php echo $proyectos_enlace_boton_dos ?>" title="<?php esc_attr__('anar a la pàgina de la categoria Acció Social','caritaspress'); ?>" class="button"><?php echo $proyectos_texto_boton_dos ?></a>
        </div>
      </div>
    </div>
    <div class="item small-12 medium-6 large-3 columns">
      <div class="articulo stack-for-small">
        <div class="articulo-seccion articulo-seccion--vertical">
          <div class="articulo-imagen">
            <img src="<?php echo $proyectos_imagen_tres ?>" alt="Imatge que simbolitza treball">
          </div>
        </div>
        <div class="articulo-seccion articulo-seccion--vertical">
          <h4 class="articulo-titulo"><?php echo $proyectos_nombre_categoria_tres ?></h4>
          <a href="<?php echo $proyectos_enlace_boton_tres ?>" title="<?php esc_attr__('anar a la pàgina de la categoria Ocupació i Inserció Laboral','caritaspress'); ?>" class="button"><?php echo $proyectos_texto_boton_tres ?></a>
        </div>
      </div>
    </div>
    <div class="item small-12 medium-6 large-3 columns">
      <div class="articulo stack-for-small">
        <div class="articulo-seccion articulo-seccion--vertical">
          <div class="articulo-imagen">
            <img src="<?php echo $proyectos_imagen_cuatro ?>" alt="Imatge que simbolitza cooperació">
          </div>
        </div>
        <div class="articulo-seccion articulo-seccion--vertical">
          <h4 class="articulo-titulo"><?php echo $proyectos_nombre_categoria_cuatro ?></h4>
          <a href="<?php echo $proyectos_enlace_boton_cuatro ?>" title="<?php esc_attr__('anar a la pàgina de la categoria Sensibilització i cooperació','caritaspress'); ?>" class="button"><?php echo $proyectos_texto_boton_cuatro ?></a>
        </div>
      </div>
    </div>
    <div class="small-12 columns texto-centrado">
      <p><a href="projectes" title="<?php _e('Veure tots els projectes','caritaspress'); ?>"><?php _e('Veure tots els projectes','caritaspress'); ?> »</a></p>
    </div>
  </div>
</div>

<!-- MESTRAL -->

<?php if ($mestral_ver == 1) { ?>
  <div class="franja fondo-gris--claro texto-centrado">
    <div class="row sin-margen--abajo">
      <div class="small-12 columns">
        <img src="<?php echo $mestral_imagen ?>" alt="<?php esc_attr__('Logotip del projecte','podemospress'); ?>">
        <h2 class="small-12 titulo"><?php echo $mestral_titulo ?></h2>
        <p class="texto-destacado">
          <?php echo $mestral_descripcion ?>
        </p>
        <a href="<?php echo $mestral_enlace ?>" target="_blank" class="large button" title="<?php _e('Visita la web de Mestral','caritaspress'); ?>"><?php echo $mestral_texto_boton ?></a>
      </div>
    </div>
  </div>
<?php } ?>

<!-- ACTUALIDAD -->

<?php
  $args=array(
    'post_type' => 'post',
    'posts_per_page'=> 3,
  );
  $actualidad = new WP_Query($args);
  if( $actualidad->have_posts() ) { ?>
  <div class="row texto-centrado">
    <div class="small-12 columns">
      <h3 class="titulo">Actualitat</h3>
    </div>
    <div class="row small-up-1 medium-up-2 large-up-3">
      <?php  while ( $actualidad->have_posts() ) : $actualidad->the_post(); ?>
        <div class="column">
          <div class="articulo stack-for-small texto centrado">
            <div class="articulo-seccion articulo-seccion--vertical">
              <div class="articulo-imagen">
                <?php the_post_thumbnail(); ?>
              </div>
            </div>
            <div class="articulo-seccion articulo-seccion--vertical">
              <h4 class="articulo-titulo"><?php the_title(); ?></h4>
              <a href="<?php the_permalink(); ?>" class="button" title="<?php esc_attr__('Llegir','podemospress'); ?> <?php the_title(); ?>"><?php _e('Llegir més','caritaspress'); ?></a>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
    <div class="small-12 columns texto-centrado">
      <p><a href="actualitat" title="<?php esc_attr__('Veure tota l\'actualitat','caritaspress'); ?>"><?php _e('Veure tota l\'actualitat','caritaspress'); ?> »</a></p>
    </div>
  </div>
<?php } ?>

<!-- EMPRESAS -->

<?php if ($empresas_ver == 1) { ?>
  <div class="franja fondo-gris--claro texto-centrado">
    <div class="row sin-margen--abajo">
      <div class="small-12 columns">
        <img src="<?php echo $empresas_imagen ?>" alt="<?php esc_attr__('Logotip del projecte','caritaspress'); ?>">
        <h2 class="small-12 titulo"><?php echo $empresas_titulo ?></h2>
        <p class="texto-destacado"><?php echo $empresas_descripcion ?></p>
        <a href="javascript:void(0)" class="large button" data-toggle="infoEmpresas" title="<?php _e('Posa-hi cor al teu negoci','caritaspress'); ?>"><?php _e('Posa-hi cor al teu negoci','caritaspress'); ?></a>
      </div>
    </div>
  </div>
<?php } ?>

<?php get_footer(); ?>
