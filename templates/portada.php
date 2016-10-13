<?php /* Template Name: Portada */ ?>
<?php require( trailingslashit( get_template_directory() ). '/includes/opciones/_variables.php'); ?>
<?php get_header(); ?>


<!-- CARRUSEL -->

<div class="row sin-margen--abajo">
  <div class="small-12 columns">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home-carrusel') ) : ?>
      <div class="-carrusel-un-item carrusel-de-uno">
        <?php
        $noticias_args = array(
          'post_type' => 'post',
          'category_name' => 'portada',
          'posts_per_page'=> 6,
        );
        $noticias_item = new WP_Query($noticias_args); ?>
        <?php  while ( $noticias_item->have_posts() ) : $noticias_item->the_post(); ?>
          <div class="carrusel-item banner">
            <?php the_post_thumbnail(); ?>
            <div class="banner-franja">
              <h2 class="banner-titulo"><?php the_title(); ?></h2>
              <a class="banner-enlace button tiny" href="<?php the_permalink(); ?>" title="<?php esc_attr__('Llegir','caritaspress'); ?> <?php the_title(); ?>">
                <?php _e('Llegir','caritaspress'); ?>
              </a>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>
</div>

<!-- COLABORA -->

<div class="franja fondo-rojo texto-centrado">
  <div class="row sin-margen--abajo">
    <div class="small-12 columns">
      <h2>Càritas Diocesana de Menorca, ajudan's a ajudar!</h2>
      <a class="expanded button large invertido hide-for-medium" href="<?php echo site_url(); ?>colabora">Col·labora amb Càritas</a>
    </div>
  </div>
  <div class="row medium-up-5 sin-margen--abajo texto-centrado">
    <div class="columns show-for-medium">
      <a href="colabora">
        <img src="<?php bloginfo('template_directory'); ?>/images/icono_donatius.png" alt="Donatius">
        <h5>Vull fer un <br>donatiu</h5>
      </a>
    </div>
    <div class="columns show-for-medium">
      <a href="colabora">
        <img src="<?php bloginfo('template_directory'); ?>/images/icono_socis.png" alt="Socis">
        <h5>Vull fer-me <br>soci</h5>
      </a>
    </div>
    <div class="columns show-for-medium">
      <a href="colabora">
        <img src="<?php bloginfo('template_directory'); ?>/images/icono_voluntaris.png" alt="Voluntaris">
        <h5>Vull fer-me <br>voluntari</h5>
      </a>
    </div>
    <div class="columns show-for-medium">
      <a href="colabora">
        <img src="<?php bloginfo('template_directory'); ?>/images/icono_empreses.png" alt="Empreses">
        <h5>Empresa <br>amb cor</h5>
      </a>
    </div>
    <div class="columns show-for-medium">
      <a href="colabora">
        <img src="<?php bloginfo('template_directory'); ?>/images/icono_llegats.png" alt="Llegats">
        <h5>Fes un <br>llegat</h5>
      </a>
    </div>
    <div class="columns hide-for-medium">
      <hr>
      <a href="colabora">
        <h5 class="sin-margen--abajo">Col·labora <br>amb Càritas</h5>
        <i class="fa fa-angle-double-right fa-2x"></i>
      </a>
      <hr>
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
  </div>
</div>

<<<<<<< HEAD
<!-- MESTRAL -->

<div class="franja fondo-gris--claro texto-centrado">
  <div class="row sin-margen--abajo">
    <?php if ($mestral_ver == 1) { ?>
        <div class="small-12 columns">
          <img src="<?php echo $mestral_imagen ?>" alt="<?php esc_attr__('Logotip del projecte','podemospress'); ?>">
          <h2 class="small-12 titulo"><?php echo $mestral_titulo ?></h2>
          <p class="texto-destacado">
            <?php echo $mestral_descripcion ?>
          </p>
          <a href="<?php echo $mestral_enlace ?>" target="_blank" class="large button boton-iconizado" title="<?php _e('Visita la web de Mestral','caritaspress'); ?>"><?php echo $mestral_texto_boton ?> <i class="fa fa-share show-for-medium"></i></a>
        </div>
    <?php } ?>
  </div>
</div>

<!-- ACTUALIDAD -->

<?php
  $args=array(
    'post_type' => 'post',
    'posts_per_page'=> 3,
  );
  $actualidad = new WP_Query($args);
  if( $actualidad->have_posts() ) { ?>
  <div class="row texto-centrado sin-margen--abajo">
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
  </div>
<?php } ?>

<!-- EMPRESAS -->

<div class="franja fondo-gris--claro texto-centrado">
  <div class="row sin-margen--abajo">
    <?php if ($empresas_ver == 1) { ?>
      <div class="small-12 columns">
        <img src="<?php echo $empresas_imagen ?>" alt="<?php esc_attr__('Logotip del projecte','caritaspress'); ?>">
        <h2 class="small-12 titulo"><?php echo $empresas_titulo ?></h2>
        <p class="texto-destacado"><?php echo $empresas_descripcion ?></p>
        <a href="javascript:void(0)" class="large button boton-iconizado" data-toggle="infoEmpresas" title="<?php _e('Posa-hi cor al teu negoci','caritaspress'); ?>"><?php _e('Posa-hi cor al teu negoci','caritaspress'); ?> <i class="fa fa-heart show-for-medium"></i></a>
      </div>
    <?php } ?>
  </div>
</div>

<?php get_footer(); ?>
