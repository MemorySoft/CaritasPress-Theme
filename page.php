<?php get_header(); ?>

<div class="contenedor">

  <!-- CONTENIDO -->

  <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
      <div class="row"> 
        <div class="small-12 columns">
          <h1 class="pagina-titulo"><?php the_title(); ?></h1>

          <hr>
          <div class="espacio"></div>

          <?php the_post_thumbnail(); ?>
        </div>
      </div>
      <div class="row">
        <div class="small-12 columns contenido-principal">
          <?php the_content(); ?>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>

</div> <!-- /.contenedor -->

<hr>

<?php get_footer(); ?>