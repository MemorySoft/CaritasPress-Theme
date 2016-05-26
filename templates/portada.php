<?php /* Template Name: Portada */ ?>
<?php require( trailingslashit( get_template_directory() ). '/includes/opciones/_variables.php'); ?>
<?php get_header(); ?>

<!-- CARRUSEL -->
   
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home-carrusel') ) : ?>
  <div class="carrusel portada-carrusel -carrusel-un-item">
    <?php 
    $noticias_args = array(
      'post_type' => 'post',
      'category_name' => 'portada',
      'posts_per_page'=> 3,
    );
    $carrusel_args = array(
      'post_type' => 'carrusel'
    );
    $carrusel_item = new WP_Query($carrusel_args);
    $noticias_item = new WP_Query($noticias_args);
    if( $noticias_item->have_posts() ) { ?>
      <?php  while ( $noticias_item->have_posts() ) : $noticias_item->the_post(); ?>
        <div class="carrusel-item">
          <?php the_post_thumbnail(); ?>
          <div class="carrusel-seccion">
            <h1 class="carrusel-titulo"><?php the_title(); ?></h1>
            <a class="carrusel-enlace button" href="<?php the_permalink(); ?>" title="<?php esc_attr__('Llegir','podemospress'); ?> <?php the_title(); ?>">
                <?php _e('Llegir','podemospress'); ?>
              </a>
          </div>
        </div>
      <?php endwhile; ?>
    <?php } elseif( $carrusel_item->have_posts() ) { ?>
      <?php  while ( $carrusel_item->have_posts() ) : $carrusel_item->the_post(); ?>
        <div>
          <?php the_post_thumbnail(); ?>
        </div>
      <?php endwhile; ?>
    <?php } ?>
  </div>
<?php endif; ?>

<!-- COLABORA -->

<div class="franja fondo-rojo texto-centrado">
  <div class="row sin-margen--abajo">
    <h2 class="small-12">Càritas Diocesana de Menorca, ajudan's a ajudar!</h2>
  </div>
  <div class="row small-up-1 medium-up-5 sin-margen--abajo texto-centrado">
    <div class="columns">
      <a href="col·labora">
        <img src="<?php bloginfo('template_directory'); ?>/images/icono_donatius.png" alt="Donatius">
        <h5>Vull fer un <br>donatiu</h5>
      </a>
    </div>
    <div class="columns">
      <a href="col·labora">
        <img src="<?php bloginfo('template_directory'); ?>/images/icono_socis.png" alt="Socis">
        <h5>Vull fer-me <br>soci</h5>
      </a>
    </div>
    <div class="columns">
      <a href="col·labora">
        <img src="<?php bloginfo('template_directory'); ?>/images/icono_voluntaris.png" alt="Voluntaris">
        <h5>Vull fer-me <br>voluntari</h5>
      </a>
    </div>
    <div class="columns">
      <a href="col·labora">
        <img src="<?php bloginfo('template_directory'); ?>/images/icono_empreses.png" alt="Empreses">
        <h5>Empresa <br>amb cor</h5>
      </a>
    </div>
    <div class="columns">
      <a href="col·labora">
        <img src="<?php bloginfo('template_directory'); ?>/images/icono_llegats.png" alt="Llegats">
        <h5>Fes un <br>llegat</h5>
      </a>
    </div>
  </div>
</div>


<!-- PROYECTOS -->

<div class="projectos">
  <div class="row texto-centrado">
    <div class="small-12 columns">
      <h3>Els nostres projectes</h3>
      <p class="texto-destacado">Càritas actua, compromesos amb la justicia</p>
    </div>
    <div class="item small-12 medium-6 large-3 columns">
      <div class="articulo stack-for-small">
        <div class="articulo-seccion articulo-seccion--vertical">
          <div class="articulo-imagen">
            <img src="<?php bloginfo('template_directory'); ?>/images/programas/voluntariat.jpg" alt="Voluntaria ajudant a gent gran">
          </div>
        </div>
        <div class="articulo-seccion articulo-seccion--vertical">
          <h4 class="articulo-titulo">Animació del <br>voluntariat</h4>
          <a href="animacio-del-voluntariat" title="<?php esc_attr__('anar a la pàgina de la categoria Animació del voluntariat','caritaspress'); ?>" class="button">Veure projectes</a>
        </div>
      </div>
    </div>
    <div class="item small-12 medium-6 large-3 columns">
      <div class="articulo stack-for-small">
        <div class="articulo-seccion articulo-seccion--vertical">
          <div class="articulo-imagen">
            <img src="<?php bloginfo('template_directory'); ?>/images/programas/social.jpg" alt="Persona desplaçada treballant al Taller Mestral">
          </div>
        </div>
        <div class="articulo-seccion articulo-seccion--vertical">
          <h4 class="articulo-titulo">Acció <br>Social</h4>
          <a href="accio-social" title="<?php esc_attr__('anar a la pàgina de la categoria Acció Social','caritaspress'); ?>" class="button">Veure projectes</a>
        </div>
      </div>
    </div>
    <div class="item small-12 medium-6 large-3 columns">
      <div class="articulo stack-for-small">
        <div class="articulo-seccion articulo-seccion--vertical">
          <div class="articulo-imagen">
            <img src="<?php bloginfo('template_directory'); ?>/images/programas/ocupacio.jpg" alt="Imatge de dos mans agafan-se">
          </div>
        </div>
        <div class="articulo-seccion articulo-seccion--vertical">
          <h4 class="articulo-titulo">Ocupació i <br>Inserció Laboral</h4>
          <a href="ocupacio-i-insercio-laboral" title="<?php esc_attr__('anar a la pàgina de la categoria Ocupació i Inserció Laboral','caritaspress'); ?>" class="button">Veure projectes</a>
        </div>
      </div>
    </div>
    <div class="item small-12 medium-6 large-3 columns">
      <div class="articulo stack-for-small">
        <div class="articulo-seccion articulo-seccion--vertical">
          <div class="articulo-imagen">
            <img src="<?php bloginfo('template_directory'); ?>/images/programas/cooperacio.jpg" alt="Cooperant a Jerusalem">
          </div>
        </div>
        <div class="articulo-seccion articulo-seccion--vertical">
          <h4 class="articulo-titulo">Sensibilització <br>i cooperació</h4>
          <a href="sensibilitzacio-i-cooperacio" title="<?php esc_attr__('anar a la pàgina de la categoria Sensibilització i cooperació','caritaspress'); ?>" class="button">Veure projectes</a>
        </div>
      </div>
    </div>
    <div class="small-12 columns texto-centrado">
      <p><a href="projectes" title="<?php _e('Veure tots els projectes','caritaspress'); ?>"><?php _e('Veure tots els projectes','caritaspress'); ?> »</a></p>
    </div>
  </div>
</div>    


<!-- MESTRAL -->

<div class="franja fondo-gris--claro texto-centrado">
  <div class="row sin-margen--abajo">
    <div class="small-12 columns">
      <img src="<?php bloginfo('template_directory'); ?>/images/logo_mestral_grande.png" alt="Logotipo del proyecto Taller Mestral">
      <h2 class="small-12 titulo">Taller Mestral</h2>
      <p class="texto-destacado">
          Projecte de Càrites Menorca per a la inserció socio-laboral de persones en risc d'exclusió social, mitjançant la reutilització de residus voluminosos.
      </p>
      <a href="http://www.mestralmenorca.org/" target="_blank" class="large button" title="<?php _e('Visita la web de Mestral','caritaspress'); ?>"><?php _e('Visita la web de Mestral','caritaspress'); ?></a>
    </div>
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
      <p><a href="actualitat.html" title="<?php esc_attr__('Veure tota l\'actualitat','caritaspress'); ?>"><?php _e('Veure tota l\'actualitat','caritaspress'); ?> »</a></p>
    </div>
  </div>
<?php } ?>

<!-- EMPRERSAS AMB COR -->

<div class="franja fondo-gris--claro texto-centrado"> 
  <div class="row sin-margen--abajo">
    <div class="small-12 columns">
      <img src="<?php bloginfo('template_directory'); ?>/images/logo_empreses.jpg" alt="<?php esc_attr__('Logotip de Empreses amb Cor','podemospress'); ?>">
      <h2 class="small-12 titulo">Empreses amb cor</h2>
      <p class="texto-destacado">Les empreses responsables són un dels agents més importants per al desenvolupament sostenible de la nostra societat i per a la seva cohesió social..</p>

      <!-- Esto está comentado hasta que tengamos el contenido para la ventana modal 
      <a href="javascript:void(0)" class="large button" data-toggle="infoEmpresas" title="<?php _e('Posa-hi cor al teu negoci','caritaspress'); ?>"><?php _e('Posa-hi cor al teu negoci','caritaspress'); ?></a> 
      -->
      
      <a href="col·labora" class="large button" ><?php _e('Posa-hi cor al teu negoci','caritaspress'); ?></a>
    </div>
  </div>
</div>

<?php get_footer(); ?>