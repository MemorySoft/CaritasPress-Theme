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
  <div class="large-12 columns">
    <div class="-carrusel-un-item">
      <div><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/caritas_memoria_2014_1.png" alt="1.632 persones ateses de les quals el 57% van ser dones i el 43% van ser homes"></a></div>
      <div><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/caritas_memoria_2014_2.png" alt="De les persones ateses 225 van ser persones soles, 5% parelles sense fills, 41% parelles amb fills, 26% families monoparenterals i 6%altres tipus de families"></a></div>
    </div>
  </div>
</div>

<div class="row sin-margen--abajo texto-centrado">
  <div class="small-12 columns">
    <p class="texto-destacado">Càritas Diocesana és l’organisme oficial de l’Església Catòlica de Menorca, cridat a expressar l’Amor gratuït de Déu pels més pobres. És una entitat creada per a promoure, orientar i coordinar l’acció caritativa i social de tota l’Església.</p>
  </div>
</div>

<!-- ÁREAS -->

<div class="franja fondo-gris--claro texto-centrado">
  <div class="row sin-margen--abajo">
    <div class="small-12 medium-3 columns">
      <h4 class="titulo">ANIMACIÓ DEL <br class="show-for-medium">VOLUNTARIAT</h4>
      <p>L’objectiu d’aquest projecte és impulsar i dinamitzar el territori, fent que les parròquies es converteixin en el cor de la vida de l’acció social de la nostra comunitat...</p>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>animacio-del-voluntariat" class="small button">Continua llegint</a>
    </div>
    <div class="small-12 medium-3 columns">
      <h4 class="titulo">ACCIÓ <br class="show-for-medium">SOCIAL</h4>
      <p>El programa d’Ocupació està format per diversos serveis i projectes que pretenen la reinserció socio-laboral de totes aquelles persones que, per qualsevol circumstància...</p>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>accio-social" class="small button">Continua llegint</a>
    </div>
    <div class="small-12 medium-3 columns">
      <h4 class="titulo">OCUPACIÓ I INSERCIÓ <br class="show-for-medium">LABORAL</h4>
      <p>El Programa d’Inclusió Social és des del qual parteix l'atenció bàsica a les persones més vulnerables de Menorca. Treballem per ajudar a cobrir les necessitats bàsiques, per...</p>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>ocupacio-i-insercio-laboral" class="small button">Continua llegint</a>
    </div>
    <div class="small-12 medium-3 columns">
      <h4 class="titulo">SENSIBILITZACIÓ <br class="show-for-medium">I COOPERACIÓ</h4>
      <p>La sensibilització té com objectiu principal, donar unitat i coherència a les diferents accions derivades dels programes i projectes de Càritas, i possibilitar que la nostra...</p>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>sensibilitzacio-i-cooperacio" class="small button">Continua llegint</a>
    </div>
  </div>
</div>

<!-- MEMORIAS -->

<div class="row">
  <div class="small-12 columns texto-centrado">
    <h3 class="titulo">Memories anuals</h3>
    <!-- <p class="texto-destacado">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure tempora praesentium, esse. Ea officiis eaque iusto voluptatum, necessitatibus id quibusdam commodi vero dicta.</p> -->
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
    <!-- <p class="texto-destacado">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum vitae nam et facilis harum maxime doloribus quod laborum, architecto tenetur.</p> -->
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

<div class="franja fondo-rojo">
  <div class="row sin-margen--abajo">
    <div class="small-12 columns">
      <div class="elemento-multicolumna stack-for-small sin-margen--abajo">
        <div class="elemento-multicolumna-seccion">
          <img class="elemento-multicolumna-imagen" src="<?php bloginfo('template_directory'); ?>/images/revista_caritas_547.jpg" alt="Portada de la darrera edició de la revista de Càritas">
        </div>
        <div class="elemento-multicolumna-seccion">
          <h2 class="elemento-multicolumna-titulo texto-mayuscula">Revista de Cáritas</h2>
          <p class="texto-destacado">La revista Cáritas ofereix informació de tots els nivells territorials de la Confederació. El nou format ha eliminat la divisió, per seccions, dels ámbits nacional i internacional, Càritas está present alla on les persones pateixen i es sol·liciie el recolçament de la institució.</p>
          <a href="http://www.caritas.es/publicaciones_info.aspx?Id=349" class="large button invertido">Suscriu-te</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- MULTIMEDIA -->

<div class="row">
  <div class="small-12 columns texto-centrado">
    <h3 class="titulo">Multimedia</h3>
    <!-- <p class="texto-destacado">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur error itaque quod voluptatem voluptates quaerat, reiciendis quidem perspiciatis sint beatae.</p> -->
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
    <p class="texto-destacado">Càritas vol ser el rostre visible de la comunitat diocesana, compromesa a fer dels exclosos els predilectes de l’Evangeli de Jesús.</p>
    <p class="texto-destacado--peque">Aquell exemple tantes vegades evocat de la canya i el peix no deixa de tenir vigència per a Càritas: en efecte, de vegades cal donar el peix, però és imprescindible ensenyar a pescar, i conscienciar la societat perquè «deixi pescar» les persones en risc d’exclusió social. I, seguint amb aquest símil, també és necessari procurar que no es contamini el mar en el qual tots hem de pescar, i denunciar aquells que acaparen el peix molt per damunt de les seves necessitats. En resum: assistència, promoció i transformació social: aquesta és la triple missió a la qual se sent cridada Càritas, per tal de ser fi del a la seva identitat.</p>
  </div>
</div>

<div class="row">
  <div class="item small-12 medium-4 columns">
    <div class="articulo stack-for-small">
      <div class="articulo-seccion articulo-seccion--vertical">
        <!-- <img class="articulo-imagen" src="http://placehold.it/350x250" alt=""> -->
      </div>
      <div class="articulo-seccion articulo-seccion--vertical">
        <h3 class="articulo-titulo">Identitat</h3>
        <p class="articulo-extracto texto-destacado--peque">Càritas és l’organisme oficial de l’Església Catòlica de Menorca, cridat a expressar l’Amor gratuït de Déu pels més pobres. Una entitat per a promoure, orientar i coordinar l’acció caritativa i social de tota l’Església.</p>
      </div>
    </div>
  </div>
  <div class="item small-12 medium-4 columns">
    <div class="articulo stack-for-small">
      <div class="articulo-seccion articulo-seccion--vertical">
        <!-- <img class="articulo-imagen" src="http://placehold.it/350x250" alt=""> -->
      </div>
      <div class="articulo-seccion articulo-seccion--vertical">
        <h3 class="articulo-titulo">Missió</h3>
        <p class="articulo-extracto texto-destacado--peque">La missió primària i fonamental de Càritas Diocesana és suscitar i encoratjar l’esperit i l’acció de la caritat a l’Esglésiaen relació amb els pobres i marginats de la Diòcesi i del món sencer.</p>
      </div>
    </div>
  </div>
  <div class="item small-12 medium-4 columns">
    <div class="articulo stack-for-small">
      <div class="articulo-seccion articulo-seccion--vertical">
        <!-- <img class="articulo-imagen" src="http://placehold.it/350x250" alt=""> -->
      </div>
      <div class="articulo-seccion articulo-seccion--vertical">
        <h3 class="articulo-titulo">Visió</h3>
        <p class="articulo-extracto texto-destacado--peque">Càritas presta una atenció d’acompanyament i assistència a les persones, però ja fa anys que Càritas és pionera en la defensa de la promoció humana i la transformació de les estructures.</p>
      </div>
    </div>
  </div>
</div>

<hr>

<div class="row sin-margen-abajo"
  <div class="small-12 columns">
    <h3 class="titulo texto-centrado">Organització</h3>
    <p class="texto-destacado texto-centrado">Es l’estructura administrativa, tècnica i professional que permet desenvolupar programes i serveis específics d’assistència, promoció, formació i sensibilització a les 17 parroquies de Menorca.</p>
  </div>
</div>

<div class="row texto-centrado">
  <div class="small-12 columns">
    <img src="<?php bloginfo('template_directory'); ?>/images/organigrama_caritas.png" alt="<?php _e('Esquema dels diferents membres que composen l\'assemblea diocesana de Menorca, presidida pel senyor bisbe','caritaspress'); ?>">
  </div>
</div>

<!-- CONTACTO -->

<div class="row">
  <div class="small-12 columns">
    <div class="large callout texto-centrado">
      <h3>Contacta amb Càrites Diocesana de Menorca</h3>
      <p><a href="contacto" class="button invertido" title="<?php _e('Contacta','caritaspress'); ?>"><?php _e('Contacta','caritaspress'); ?></a></p>
    </div>
  </div>
</div>

<?php get_footer(); ?>