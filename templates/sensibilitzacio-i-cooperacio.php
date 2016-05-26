<?php /* Template Name: Sensibilización y Cooperación */ ?>
<?php require( trailingslashit( get_template_directory() ). '/includes/opciones/_variables.php'); ?>
<?php get_header(); ?>

<!-- TITULO -->

<div class="row">
  <div class="small-12 columns texto-centrado">
    <h2 class="pagina-titulo">Programa de Sensibilització i Cooperació</h2>
    <p class="texto-destacado">La sensibilització té com objectiu principal, donar unitat i coherència a les diferents accions derivades dels programes i projectes de Càritas, i possibilitar que la nostra acció arribi a la ciutadania, perquè el compromís amb els més vulnerables, sigui captat en tota la seva dimensió, i així, la resta de la comunitat, pugui ajudar-nos a donar resposta.</p>
    <hr>
  </div>
</div>  

<!-- NOTICIAS -->

<div class="row small-up-1 medium-up-2 large-up-3">   
  <?php 
  $args = array(
    'tax_query' => array(
      array(
        'taxonomy' => 'programa',
        'field' => 'slug',
        'terms' => array( 'sensibilitzacio-i-cooperacio' )
      ),
    ),
    'post_type' => 'proyecto',
  );
  $cooperacio_item = new WP_Query($args);
  if( $cooperacio_item->have_posts() ) { ?>
    <?php  while ( $cooperacio_item->have_posts() ) : $cooperacio_item->the_post(); ?>
      <div class="column" id="post-<?php the_ID(); ?>">
        <div class="articulo stack-for-small texto centrado">
          <div class="articulo-seccion articulo-seccion--vertical">
            <div class="articulo-imagen">
              <a href="javascript:void(0)" title="<?php esc_attr__('Llegir','caritaspress'); ?> <?php the_title(); ?>" data-open="modal-<?php the_ID(); ?>"><?php the_post_thumbnail(); ?></a>
            </div>
          </div>
          <div class="articulo-seccion articulo-seccion--vertical">
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
            <div class="small-12 medium-6 columns proyecto-lateral">
              <?php the_post_thumbnail(); ?>
              <div class="proyecto-metadatos">
                <?php $terms = get_the_terms( $post->ID , 'programa' ); 
                  foreach ( $terms as $term ) { ?>
                    <span class="label"><?php echo $term->name ?></span>    
                <?php  } ?>
              </div>
            </div>
            <div class="small-12 medium-6 columns proyecto-cuerpo">
              <?php the_content(); ?>
            </div>
            <a href="javascript:void(0)" class="close-button" data-close aria-label="<?php esc_attr__('Tancar','caritaspress'); ?>">&times;</a>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  <?php } ?>
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