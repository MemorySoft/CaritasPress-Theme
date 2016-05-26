<?php /* Template Name: Acció Social */ ?>
<?php require( trailingslashit( get_template_directory() ). '/includes/opciones/_variables.php'); ?>
<?php get_header(); ?>

<!-- TITULO -->

<div class="row">
  <div class="small-12 columns texto-centrado">
    <h2 class="pagina-titulo">Programa d'Acció Social</h2>
    <p class="texto-destacado">El programa d’Ocupació està format per diversos serveis i projectes que pretenen la reinserció socio-laboral de totes aquelles persones que, per qualsevol circumstància, tenen limitat l’accés al món laboral, degut a la manca d’hàbits i coneixements, trobant-se en situació de risc greu de caure en la marginació o exclusió social.</p>
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