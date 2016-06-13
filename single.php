<?php get_header(); ?>

<div class="contenedor">

  <!-- CONTENIDO -->

  <div class="row">
  	<div class="small-12 columns">
  		<?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>

          <!-- POST -->

          <div class="row post">
            <?php edit_post_link('Editar', ''); ?>
            <div class="small-12 columns">
              <h2 class="titulo post-titulo"><?php the_title(); ?></h2>
            </div>
            
<hr>
<div class="espacio"></div>            
           
            <div class="small-12 medium-4 columns post-lateral">
              <?php the_post_thumbnail(); ?>  
              <div class="post-metadatos">
                <div class="post-metadatos--fecha">Publicat el <span><?php the_time('j \d\e\ F \d\e\ Y'); ?></span></div> 
                <div class="post-metadatos--categoria">
                  <span>Artxivat com:</span>
                  <?php the_category(); ?>
                </div>
                <div class="post-metadatos--etiqueta"></div>
              </div>
            </div>
            <div class="small-12 medium-8 columns post-cuerpo">
              <?php the_content(); ?>
            </div>
          </div>

        <?php endwhile; ?>
    
        <!-- NAVEGACION POSTS -->

        <div class="row navegacion-articulos sin-margen--abajo">
          <hr>
          <div class="small-12 medium-6 texto-centrado medium columns navegacion-anterior-articulo"> 
            <?php previous_post_link( '<p>ARTÍCLE PREVI</p> %link', '%title' ); ?>
          </div>
          <div class="small-12 medium-6 texto-centrado medium columns navegacion-proximo-articulo">
            <?php next_post_link( '<p>PRÓXIM ARTÍCLE</p> %link', '%title' ); ?>
          </div>
        </div>
      <?php endif; ?>
  	</div>
  </div>
<hr>
</div> <!-- /.contenedor -->

<?php get_footer(); ?>