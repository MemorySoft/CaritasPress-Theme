<?php /* Template Name: Portada */ ?>
<?php include('includes/opciones/_variables.php'); ?>
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
      <a href="colabora.html#formularioDonativos">
        <img src="<?php bloginfo('template_directory'); ?>/images/icono_donatius.png" alt="Donatius">
        <h5>Vull fer un <br>donatiu</h5>
      </a>
    </div>
    <div class="columns">
      <a href="colabora.html">
        <img src="<?php bloginfo('template_directory'); ?>/images/icono_socis.png" alt="Socis">
        <h5>Vull fer-me <br>soci</h5>
      </a>
    </div>
    <div class="columns">
      <a href="colabora.html">
        <img src="<?php bloginfo('template_directory'); ?>/images/icono_voluntaris.png" alt="Voluntaris">
        <h5>Vull fer-me <br>voluntari</h5>
      </a>
    </div>
    <div class="columns">
      <a href="colabora.html">
        <img src="<?php bloginfo('template_directory'); ?>/images/icono_empreses.png" alt="Empreses">
        <h5>Empresa <br>amb cor</h5>
      </a>
    </div>
    <div class="columns">
      <a href="colabora.html">
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
            <img src="http://www.buscorestaurantes.com/files/images/Arroceria-Sa-Cranca-Maritimo--136206.jpg" alt="">
          </div>
        </div>
        <div class="articulo-seccion articulo-seccion--vertical">
          <h4 class="articulo-titulo">Animació del voluntariat</h4>
          <a href="projecte.html" class="button">Veure projectes</a>
        </div>
      </div>
    </div>
    <div class="item small-12 medium-6 large-3 columns">
      <div class="articulo stack-for-small">
        <div class="articulo-seccion articulo-seccion--vertical">
          <div class="articulo-imagen">
            <img src="http://www.caib.es/sacmicrofront/archivopub.do?ctrl=MCRST320ZI43964&id=43964" alt="">
          </div>
        </div>
        <div class="articulo-seccion articulo-seccion--vertical">
          <h4 class="articulo-titulo">Acció Social</h4>
          <a href="projecte.html" class="button">Veure projectes</a>
        </div>
      </div>
    </div>
    <div class="item small-12 medium-6 large-3 columns">
      <div class="articulo stack-for-small">
        <div class="articulo-seccion articulo-seccion--vertical">
          <div class="articulo-imagen">
            <img src="http://www.caib.es/sacmicrofront/archivopub.do?ctrl=MCRST320ZI43964&id=43964" alt="">
          </div>
        </div>
        <div class="articulo-seccion articulo-seccion--vertical">
          <h4 class="articulo-titulo">Ocupació i Inserció Laboral</h4>
          <a href="projecte.html" class="button">Veure projectes</a>
        </div>
      </div>
    </div>
    <div class="item small-12 medium-6 large-3 columns">
      <div class="articulo stack-for-small">
        <div class="articulo-seccion articulo-seccion--vertical">
          <div class="articulo-imagen">
            <img src="http://www.caib.es/sacmicrofront/archivopub.do?ctrl=MCRST320ZI43964&id=43964" alt="">
          </div>
        </div>
        <div class="articulo-seccion articulo-seccion--vertical">
          <h4 class="articulo-titulo">Sensibilització i cooperació</h4>
          <a href="projecte.html" class="button">Veure projectes</a>
        </div>
      </div>
    </div>
    <div class="small-12 columns texto-centrado">
      <p><a href="projectes.html">Veure tots els projectes »</a></p>
    </div>
  </div>
</div>    


<!-- MESTRAL -->

<div class="franja fondo-gris--claro texto-centrado">
  <div class="row sin-margen--abajo">
    <div class="small-12 columns">
      <img src="http://placehold.it/450x300" alt="">
      <h2 class="small-12 titulo">Taller Mestral</h2>
      <p class="texto-destacado">
          Projecte de Càrites Menorca per a la inserció socio-laboral de persones en risc d'exclusió social, mitjançant la reutilització de residus voluminosos.
      </p>
      <a href="http://www.mestralmenorca.org/" target="_blank" class="large button">Visita la web de Mestral</a>
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
              <!-- <p class="articulo-extracto"><?php echo the_excerpt(); ?></p> -->
              <a href="noticia.html" class="button">Llegir més</a>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
    <div class="small-12 columns texto-centrado">
      <p><a href="actualitat.html">Veure tota l'actualitat »</a></p>
    </div>
  </div>
<?php } ?>

<!-- EMPRERSAS AMB COR -->

<div class="franja fondo-gris--claro texto-centrado"> 
  <div class="row sin-margen--abajo">
    <div class="small-12 columns">
      <img src="http://placehold.it/450x300" alt="">
      <h2 class="small-12 titulo">Empreses amb cor</h2>
      <p class="texto-destacado">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, voluptas, fugit! Eaque quam distinctio assumenda reprehenderit vero non impedit dolorum velit porro. Est, ab, ipsa.</p>
      <a href="javascript:void(0)" class="large button" data-toggle="infoEmpresas">Posa-hi cor al teu negoci</a>
    </div>
  </div>
</div>

<?php get_footer(); ?>