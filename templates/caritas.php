<?php /* Template Name: Càritas */ ?>
<?php require( trailingslashit( get_template_directory() ). '/includes/opciones/_variables.php'); ?>
<?php get_header(); ?>

<!-- INTRO -->

<div class="row sin-margen--abajo texto-centrado">
  <div class="small-12 columns">
    <h2 class="titulo">Càritas Diocesana de Menorca</h2>
  </div>
</div>

<!-- CARRUSEL DE MEMORIAS -->

<div class="row sin-margen--abajo">
  <div class="small-12 columns">
    <div class="-carrusel-un-item">
      <div><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/caritas_memoria_2014_1.png" alt="1.632 persones ateses de les quals el 57% van ser dones i el 43% van ser homes"></a></div>
      <div><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/caritas_memoria_2014_2.png" alt="De les persones ateses 225 van ser persones soles, 5% parelles sense fills, 41% parelles amb fills, 26% families monoparenterals i 6%altres tipus de families"></a></div>
    </div>
  </div>
</div>

<?php if ($caritas_ver == 1) { ?>
  <div class="row sin-margen--abajo texto-centrado">
    <div class="small-12 columns">
      <p class="texto-destacado">
        <?php echo $caritas_descripcion ?>
      </p>
    </div>
  </div>
<?php } ?>

<!-- ÁREAS -->

<div class="franja fondo-gris--claro texto-centrado">
  <div class="row sin-margen--abajo">
    <div class="small-12 medium-3 columns">
      <h4 class="titulo"><?php echo $programa_uno_titulo ?></h4>
      <p><?php echo $programa_uno_descripcion ?></p>
      <a href="<?php echo $programa_uno_enlace ?>" class="small button">Continua llegint</a>
    </div>
    <div class="small-12 medium-3 columns">
      <h4 class="titulo"><?php echo $programa_dos_titulo ?></h4>
      <p><?php echo $programa_dos_descripcion ?></p>
      <a href="<?php echo $programa_dos_enlace ?>" class="small button">Continua llegint</a>
    </div>
    <div class="small-12 medium-3 columns">
      <h4 class="titulo"><?php echo $programa_tres_titulo ?></h4>
      <p><?php echo $programa_tres_descripcion ?></p>
      <a href="<?php echo $programa_tres_enlace ?>" class="small button">Continua llegint</a>
    </div>
    <div class="small-12 medium-3 columns">
      <h4 class="titulo"><?php echo $programa_cuatro_titulo ?></h4>
      <p><?php echo $programa_cuatro_descripcion ?></p>
      <a href="<?php echo $programa_cuatro_enlace ?>" class="small button">Continua llegint</a>
    </div>
  </div>
</div>

<!-- MEMORIAS -->

<div class="row">
  <div class="small-12 columns texto-centrado">
    <h3 class="titulo">Memories anuals</h3>
  </div>

  <?php
    $memoria_args = array(
    'post_type' => 'memoria',
    'posts_per_page'=> 3,
  );
  $wp_query = new WP_Query($memoria_args);
  if( $wp_query->have_posts() ) { ?>
    <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
      <?php $enlace = get_post_meta( get_the_id(), 'memoria_enlace', true ); ?>
      <div class="small-12 medium-4 columns">
        <div class="tarjeta">
          <div class="tarjeta-contenido tarjeta-imagen">
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="tarjeta-accion">
            <span class="tarjeta-titulo"><?php the_title(); ?></span>
            <a href="<?php echo $enlace ?>" target="_blank" title="<?php _e('Descarrega','caritaspress'); ?> <?php the_title(); ?>"><i class="fa fa-download"></i></a>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  <?php } ?>

  <div class="small-12 columns texto-centrado">
    <p><a href="memories" title="<?php _e('Veure totes les Memories de Càritas Menorca','caritaspress'); ?>"><?php _e('Veure totes les Memories de Càritas Menorca','caritaspress'); ?> »</a></p>
  </div>
</div>

<!-- PUBLICACIONES -->

<div class="row">
  <div class="small-12 columns texto-centrado">
    <h3 class="titulo">Publicacions</h3>
  </div>

  <div class="small-12 columns">
    <?php
      $publicacion_args = array(
      'post_type' => 'publicacion',
      'posts_per_page'=> 5,
    );
    $wp_query = new WP_Query($publicacion_args);
    if( $wp_query->have_posts() ) { ?>
      <ul class="coleccion">
        <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
          <?php $enlace = get_post_meta( get_the_id(), 'publicacion_enlace', true ); ?>
          <li class="coleccion-elemento">
            <span class="titulo"><i class="fa fa-newspaper-o"></i> <?php the_title(); ?></span>
            <a class="coleccion-elemento--secundario" href="<?php echo $enlace ?>" target="_blank">
              <i class="fa fa-download"></i>
            </a>
          </li>
        <?php endwhile; ?>
      </ul>
    <?php } ?>
  </div>

  <div class="small-12 columns texto-centrado">
    <p><a href="publicacions"  title="<?php _e('Veure totes les Publicacions de Càritas Menorca','caritaspress'); ?>"><?php _e('Totes les publicacions','caritaspress'); ?> »</a></p>
  </div>
</div>

<!-- REVISTA -->

<?php if ($revista_ver == 1) { ?>
  <div class="franja fondo-rojo">
    <div class="row sin-margen--abajo">
      <div class="small-12 columns">
        <div class="elemento-multicolumna stack-for-small sin-margen--abajo">
          <div class="elemento-multicolumna-seccion">
            <img class="elemento-multicolumna-imagen" src="<?php echo $revista_imagen ?>" alt="Portada de la darrera edició de la revista de Càritas">
          </div>
          <div class="elemento-multicolumna-seccion">
            <h2 class="elemento-multicolumna-titulo texto-mayuscula"><?php echo $revista_titulo ?></h2>
            <p class="texto-destacado"><?php echo $revista_descripcion ?></p>
            <!-- <a href="http://www.caritas.es/publicaciones_info.aspx?Id=349" class="large button invertido"> -->
            <a href="<?php echo $revista_enlace ?>" class="large button invertido">
              <?php echo $revista_boton ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } ?>

<!-- MULTIMEDIA -->

<div class="row">
  <div class="small-12 columns texto-centrado">
    <h3 class="titulo">Multimedia</h3>
  </div>

  <!-- Videos -->
  <?php
    $video_args = array(
    'post_type' => 'video',
    'posts_per_page'=> 3,
  );
  $wp_query = new WP_Query($video_args);
  if( $wp_query->have_posts() ) { ?>
    <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
      <div class="small-12 medium-4 columns">
        <div class="flex-video">
          <?php the_content(); ?>
        </div>
        <h5>
          <a href="<?php the_permalink(); ?>" title="<?php _e('Veure','caritaspress'); ?> <?php the_title(); ?>"> <?php the_title(); ?></a>
        </h5>
      </div>
    <?php endwhile; ?>
  <?php } ?>

  <div class="small-12 columns texto-centrado">
    <p><a href="" title="<?php _e('Canal de YouTube de Càritas Menorca','caritaspress'); ?>"><?php _e('Canal de Youtube de Càritas Menorca','caritaspress'); ?> »</a></p>
  </div>
</div>

<!-- Audios -->
<div class="row">
  <?php
    $audio_args = array(
    'post_type' => 'audio',
    'posts_per_page'=> 5,
  );
  $wp_query = new WP_Query($audio_args);
  if( $wp_query->have_posts() ) { ?>
    <ul class="coleccion">
      <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
        <?php $enlace = get_post_meta( get_the_id(), 'audio_enlace', true ); ?>
        <li class="coleccion-elemento">
          <span class="titulo"><i class="fa fa-volume-up"></i> <?php the_title(); ?></span>
          <a class="coleccion-elemento--secundario" href="<?php echo $enlace ?>" target="_blank">
            <i class="fa fa-download"></i>
          </a>
        </li>
      <?php endwhile; ?>
    </ul>
  <?php } ?>

  <div class="small-12 columns texto-centrado">
    <p><a href="multimedia" title="<?php _e('Més multimedia de Càritas Menorca','caritaspress'); ?>"><?php _e('Més multimedia de Càritas Menorca','caritaspress'); ?> »</a></p>
  </div>
</div>

<!-- INFO CORPORATIVA -->

<div class="franja fondo-gris--claro texto-centrado">
  <div class="row sin-margen--abajo">
    <h2 class="small-12 titulo">Qui som</h2>
    <p class="texto-destacado"><?php echo $quien_subtitulo ?></p>
    <p class="texto-destacado--peque"><?php echo $quien_descripcion ?></p>
  </div>
</div>

<div class="row">
  <div class="item small-12 medium-4 columns">
    <div class="articulo stack-for-small">
      <div class="articulo-seccion articulo-seccion--vertical">
        <!-- <img class="articulo-imagen" src="http://placehold.it/350x250" alt=""> -->
      </div>
      <div class="articulo-seccion articulo-seccion--vertical">
        <h3 class="articulo-titulo"><?php echo $valores_uno_titulo ?></h3>
        <p class="articulo-extracto texto-destacado--peque"><?php echo $valores_uno_descripcion ?></p>
      </div>
    </div>
  </div>
  <div class="item small-12 medium-4 columns">
    <div class="articulo stack-for-small">
      <div class="articulo-seccion articulo-seccion--vertical">
        <!-- <img class="articulo-imagen" src="http://placehold.it/350x250" alt=""> -->
      </div>
      <div class="articulo-seccion articulo-seccion--vertical">
        <h3 class="articulo-titulo"><?php echo $valores_dos_titulo ?></h3>
        <p class="articulo-extracto texto-destacado--peque"><?php echo $valores_dos_descripcion ?></p>
      </div>
    </div>
  </div>
  <div class="item small-12 medium-4 columns">
    <div class="articulo stack-for-small">
      <div class="articulo-seccion articulo-seccion--vertical">
        <!-- <img class="articulo-imagen" src="http://placehold.it/350x250" alt=""> -->
      </div>
      <div class="articulo-seccion articulo-seccion--vertical">
        <h3 class="articulo-titulo"><?php echo $valores_tres_titulo ?></h3>
        <p class="articulo-extracto texto-destacado--peque"><?php echo $valores_tres_descripcion ?></p>
      </div>
    </div>
  </div>
</div>

<hr>

<div class="row sin-margen-abajo">
  <div class="small-12 columns">
    <h3 class="titulo texto-centrado">Organització</h3>
    <p class="texto-destacado texto-centrado"><?php echo $organizacion_descripcion ?></p>
  </div>
</div>

<div class="row texto-centrado">
  <div class="small-12 columns">
    <img src="<?php echo $organizacion_imagen ?>" alt="<?php _e('Esquema dels diferents membres que composen l\'assemblea diocesana de Menorca, presidida pel senyor bisbe','caritaspress'); ?>">
  </div>
</div>

<!-- CONTACTO -->

<div class="row">
  <div class="small-12 columns">
    <div class="large callout texto-centrado">
      <h3>Contacta amb Càrites Diocesana de Menorca</h3>
      <p><a href="contacte" class="button" title="<?php _e('Contacta','caritaspress'); ?>"><?php _e('Contacta','caritaspress'); ?></a></p>
    </div>
  </div>
</div>

<?php get_footer(); ?>
