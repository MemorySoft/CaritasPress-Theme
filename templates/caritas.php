<?php /* Template Name: Càritas */ ?>
<?php require( trailingslashit( get_template_directory() ). '/includes/opciones/_variables.php'); ?>
<?php get_header(); ?>

<!-- INTRO -->

<div class="row sin-margen--abajo texto-centrado">
  <div class="small-12 columns">
    <h2 class="titulo">Càritas Diocesana de Menorca</h2>
  </div>
</div>

<!-- CARRUSEL MEMORIAS -->

<div class="row sin-margen--abajo">
  <div class="small-12 columns">
    <div class="carrusel -carrusel-un-item">
      <?php
      $carrusel_args = array(
        'post_type' => 'carrusel'
      );
      $carrusel_item = new WP_Query($carrusel_args); ?>
      <?php  while ( $carrusel_item->have_posts() ) : $carrusel_item->the_post(); ?>
        <div>
          <?php the_post_thumbnail(); ?>
        </div>
      <?php endwhile; ?>
    </div>
    <hr class="hide-for-small">
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
      <a href="<?php echo $programa_uno_enlace ?>" class="small button">Projectes</a>
      <hr class="hide-for-medium">
    </div>
    <div class="small-12 medium-3 columns">
      <h4 class="titulo"><?php echo $programa_dos_titulo ?></h4>
      <p><?php echo $programa_dos_descripcion ?></p>
      <a href="<?php echo $programa_dos_enlace ?>" class="small button">Projectes</a>
      <hr class="hide-for-medium">
    </div>
    <div class="small-12 medium-3 columns">
      <h4 class="titulo"><?php echo $programa_tres_titulo ?></h4>
      <p><?php echo $programa_tres_descripcion ?></p>
      <a href="<?php echo $programa_tres_enlace ?>" class="small button">Projectes</a>
      <hr class="hide-for-medium">
    </div>
    <div class="small-12 medium-3 columns">
      <h4 class="titulo"><?php echo $programa_cuatro_titulo ?></h4>
      <p><?php echo $programa_cuatro_descripcion ?></p>
      <a href="<?php echo $programa_cuatro_enlace ?>" class="small button">Projectes</a>
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
          <div class="tarjeta-accion">
            <div class="tarjeta-titulo"><?php the_title(); ?></div>
            <a class="boton-flotante" href="<?php echo $enlace ?>" target="_blank" title="<?php _e('Descarrega','caritaspress'); ?> <?php the_title(); ?>"><i class="fa fa-download"></i></a>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  <?php } ?>

  <div class="small-12 columns texto-centrado">
    <p><a class="boton-secundario" href="<?php echo site_url(); ?>/memories" title="<?php _e('Veure totes les Memories de Càritas Menorca','caritaspress'); ?>"><?php _e('Veure totes les Memories de Càritas Menorca','caritaspress'); ?> »</a></p>
  </div>
</div>

<!-- INFO CORPORATIVA -->

<div class="franja fondo-gris--claro texto-centrado">
  <div class="row sin-margen--abajo">
    <div class="small-12 columns">
      <h2 class="titulo">Qui som</h2>
      <p class="texto-destacado"><?php echo $quien_subtitulo ?></p>
      <hr>
      <p class="texto-destacado--peque sin-margen--abajo"><?php echo $quien_descripcion ?></p>
    </div>
  </div>
</div>

<div class="row sin-margen--abajo">
  <div class="item small-12 medium-4 columns">
    <div class="articulo stack-for-small">
      <div class="articulo-seccion articulo-seccion--vertical">
        <img class="articulo-imagen .icono" src="<?php bloginfo('template_directory'); ?>/images/identitat.png">
      </div>
      <div class="articulo-seccion articulo-seccion--vertical">
        <h3 class="articulo-titulo"><?php echo $valores_uno_titulo ?></h3>
        <p class="articulo-extracto texto-destacado--peque sin-margen--abajo"><?php echo $valores_uno_descripcion ?></p>
      </div>
    </div>
  </div>
  <div class="item small-12 medium-4 columns">
    <div class="articulo stack-for-small">
      <div class="articulo-seccion articulo-seccion--vertical">
        <img class="articulo-imagen .icono" src="<?php bloginfo('template_directory'); ?>/images/missio.png">
      </div>
      <div class="articulo-seccion articulo-seccion--vertical">
        <h3 class="articulo-titulo"><?php echo $valores_dos_titulo ?></h3>
        <p class="articulo-extracto texto-destacado--peque sin-margen--abajo"><?php echo $valores_dos_descripcion ?></p>
      </div>
    </div>
  </div>
  <div class="item small-12 medium-4 columns">
    <div class="articulo stack-for-small">
      <div class="articulo-seccion articulo-seccion--vertical">
        <img class="articulo-imagen .icono" src="<?php bloginfo('template_directory'); ?>/images/visio.png">
      </div>
      <div class="articulo-seccion articulo-seccion--vertical">
        <h3 class="articulo-titulo"><?php echo $valores_tres_titulo ?></h3>
        <p class="articulo-extracto texto-destacado--peque sin-margen--abajo"><?php echo $valores_tres_descripcion ?></p>
      </div>
    </div>
  </div>
</div>

<hr>

<div class="row sin-margen-abajo">
  <div class="small-12 columns">
    <h2 class="titulo texto-centrado">Organització</h2>
    <p class="texto-destacado texto-centrado sin-margen--abajo"><?php echo $organizacion_descripcion ?></p>
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
      <h3>Contacta amb Càritas Diocesana de Menorca</h3>
      <p><a href="<?php echo site_url(); ?>/contacte" class="button sin-margen--abajo" title="<?php _e('Contacta','caritaspress'); ?>"><?php _e('Contacta','caritaspress'); ?></a></p>
    </div>
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
            <a href="<?php echo $revista_enlace ?>" class="large button invertido">
              <?php echo $revista_boton ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } ?>

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
          <?php $publicacion_enlace = get_post_meta( get_the_id(), 'publicacion_enlace', true ); ?>
          <?php $publicacion_fecha = get_post_meta( get_the_id(), 'publicacion_fecha', true ); ?>
          <li class="coleccion-elemento">
            <div class="coleccion-titulo">
              <a href="<?php echo $publicacion_enlace ?>" target="_blank">
                <?php the_title(); ?>
              </a>
            </div>
            <small class="coleccion-fecha"><?php echo $publicacion_fecha ?></small>
            <p class="coleccion-descripcion"><?php echo the_content(); ?></p>
            <a class="coleccion-elemento--secundario boton-flotante--invertido" href="<?php echo $publicacion_enlace ?>" target="_blank">
              <i class="fa fa-download"></i>
            </a>
          </li>
        <?php endwhile; ?>
      </ul>
    <?php } ?>
  </div>

  <div class="small-12 columns texto-centrado">
    <p><a class="boton-secundario" href="<?php echo site_url(); ?>/publicacions"  title="<?php _e('Veure totes les Publicacions de Càritas Menorca','caritaspress'); ?>"><?php _e('Totes les publicacions','caritaspress'); ?> »</a></p>
  </div>
</div>

<!-- AUDIOS -->

<div class="row">
  <div class="small-12 columns texto-centrado">
    <h3 class="titulo">Audios</h3>
  </div>

  <div class="small-12 columns">
    <?php
      $audio_args = array(
      'post_type' => 'audio',
      'posts_per_page'=> 5,
    );
    $wp_query = new WP_Query($audio_args);
    if( $wp_query->have_posts() ) { ?>
      <ul class="coleccion">
        <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
          <?php $audio_enlace = get_post_meta( get_the_id(), 'audio_enlace', true ); ?>
          <?php $audio_fecha = get_post_meta( get_the_id(), 'audio_fecha', true ); ?>
          <li class="coleccion-elemento">
            <div class="coleccion-titulo">
              <a href="<?php echo $audio_enlace ?>" target="_blank">
                <?php the_title(); ?>
              </a>
            </div>
            <small class="coleccion-fecha"><?php echo $audio_fecha ?></small>
            <p class="coleccion-descripcion"><?php echo the_content(); ?></p>
            <a class="coleccion-elemento--secundario boton-flotante--invertido" href="<?php echo $audio_enlace ?>" target="_blank">
              <i class="fa fa-volume-up"></i>
            </a>
          </li>
        <?php endwhile; ?>
      </ul>
    <?php } ?>
  </div>

  <div class="small-12 columns texto-centrado">
    <p><a class="boton-secundario" href="<?php echo site_url(); ?>/multimedia" title="<?php _e('Més videos de Càritas Menorca','caritaspress'); ?>"><?php _e('Més videos de Càritas Menorca','caritaspress'); ?> »</a></p>
  </div>
</div>

<!-- VIDEOS -->

<div class="row">
  <div class="small-12 columns texto-centrado">
    <h3 class="titulo">Videos</h3>
  </div>

  <div class="small-12 columns">
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
  </div>

  <div class="small-12 columns texto-centrado">
    <p><a class="boton-secundario" href="https://www.youtube.com/channel/UCzcLy0ubLrH_QOmelsHbqcQ" title="<?php _e('Canal de YouTube de Càritas Menorca','caritaspress'); ?>"><?php _e('Canal de Youtube de Càritas Menorca','caritaspress'); ?> »</a></p>
  </div>
</div>

<hr>

<?php get_footer(); ?>
