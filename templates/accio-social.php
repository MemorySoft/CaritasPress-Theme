<?php /* Template Name: Acció Social */ ?>
<?php require( trailingslashit( get_template_directory() ). '/includes/opciones/_variables.php'); ?>
<?php get_header(); ?>

<!-- CABECERA -->

<?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>
    <div class="row">
      <div class="small-12 columns texto-centrado">
        <h2 class="pagina-titulo"><?php the_title(); ?></h2>
        <p class="texto-destacado"><?php the_content(); ?></p>
        <hr>
      </div>
    </div>
  <?php endwhile; ?>
<?php endif; ?>

<!-- NOTICIAS -->

<div class="row small-up-1 medium-up-2 large-up-3">
  <?php
  $args = array(
    'tax_query' => array(
      array(
        'taxonomy' => 'programa',
        'field' => 'slug',
        'terms' => array( 'accio-social' )
      ),
    ),
    'post_type' => 'proyecto',
  );
  $social_item = new WP_Query($args);
  if( $social_item->have_posts() ) { ?>
    <?php  while ( $social_item->have_posts() ) : $social_item->the_post(); ?>
      <div class="column" id="post-<?php the_ID(); ?>">
        <div class="articulo stack-for-small texto centrado">
          <div class="articulo-seccion articulo-seccion--vertical">
            <div class="articulo-imagen">
              <?php the_post_thumbnail(); ?>
            </div>
          </div>
          <div class="articulo-seccion articulo-seccion--vertical espacio">
            <h4 class="articulo-titulo"><?php the_title(); ?></h4>
            <a href="javascript:void(0)" title="<?php esc_attr__('Llegir','caritaspress'); ?> <?php the_title(); ?>" class="button" data-open="modal-<?php the_ID(); ?>"><?php _e('Llegir','caritaspress'); ?></a>
          </div>
        </div>
        <!-- MODAL | PROYECTO -->
        <div class="full reveal" id="modal-<?php the_ID(); ?>" data-reveal>
          <div class="row proyecto">
            <div class="small-12 columns">
              <h2 class="titulo proyecto-titulo">
                <?php if ( get_theme_mod( 'caritaspress_logo' ) ) : ?>
                  <div class='site-logo'>
                    <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
                      <img src='<?php echo esc_url( get_theme_mod( 'caritaspress_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
                    </a>
                  </div>
                <?php endif; ?>
                <?php the_title(); ?>
              </h2>
            </div>

            <hr>
            <div class="espacio"></div>

            <div class="small-12 medium-4 columns proyecto-lateral">
              <?php the_post_thumbnail(); ?>
              <div class="proyecto-metadatos">
                <?php $terms = get_the_terms( $post->ID , 'programa' );
                  foreach ( $terms as $term ) { ?>
                    <span class="label fondo-gris--medio"><?php echo $term->name ?></span>
                <?php  } ?>
              </div>
            </div>
            <div class="small-12 medium-8 columns proyecto-cuerpo">
              <?php the_content(); ?>
            </div>
            <button class="boton-cerrar" data-close aria-label="Cerrar" type="button">
              <i class="fa fa-angle-double-left"></i>
              <span aria-hidden="true">Enrrere</span>
            </button>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  <?php } ?>
</div>

<!-- NAVEGACIÓN -->

<div class="row">
  <div class="small-12 columns texto-centrado">
    <div class="filtros-categorias">
      <div class="menu-centrado">
        <ul class="menu vertical medium-horizontal">
          <li><p class="texto-destacado sin-margen--abajo show-for-medium">PROGRAMES: &nbsp;&nbsp;</p></li>
          <li><a class="label" href="<?php echo esc_url( home_url( '/' ) ); ?>animacio-del-voluntariat">Animació del Voluntariat</a></li>
          <li><a class="label" href="<?php echo esc_url( home_url( '/' ) ); ?>accio-social">Acció Social</a></li>
          <li><a class="label" href="<?php echo esc_url( home_url( '/' ) ); ?>ocupacio-i-insercio-laboral">Ocupació i Inserció Laboral</a></li>
          <li><a class="label" href="<?php echo esc_url( home_url( '/' ) ); ?>sensibilitzacio-i-cooperacio">Sensibilització i Cooperació</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- PAGINADOR -->

<?php if (previous_posts_link() != '' || next_posts_link() != '' ) { ?>
  <div class="row">
    <div class="small-12 columns">
      <hr>
      <ul class="pagination text-center" role="navigation" aria-label="Pagination">
        <li class="pagination-prev"><?php next_posts_link( 'Noticies recents' ); ?></li>
        <li class="pagination-next"><?php previous_posts_link( 'Noticies antigues' ); ?></li>
      </ul>
    </div>
  </div>

<?php } ?>

<?php get_footer(); ?>
