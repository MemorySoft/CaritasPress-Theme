$(document).ready(function() {

  // FOUNDATION INIT
  $(document).foundation();

  // CARRUSELES
  $(".-carrusel-un-item").owlCarousel({
    autoPlay: true,
    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem:true,
    pagination : false,
    navigation: true,
    navigationText: ["«","»"],
  });

  $(".-carrusel-tres-items").owlCarousel({
    autoPlay: true,
    navigation: true,
    navigationText: ["«","»"],
    pagination: false,
    items : 3,
    itemsDesktop : [1200,3],
    itemsDesktopSmall : [400,1]
  });

  $(".-carrusel-cuatro-items").owlCarousel({
    autoPlay: true,
    navigation: true,
    navigationText: ["«","»"],
    pagination: false,
    items : 4,
    itemsDesktop : [1200,3],
    itemsDesktopSmall : [400,1]
  });

  // GALERIAS
  $('.gallery-item a').touchTouch();

  // MENU
  $(".menu-disparador").click(function() {
    $(".top-bar-menu").toggle("fast");
  });

  // ENLACES EXTERNOS
  // Para evitar la vulnerabilidad target_blank en navegadores antiguos
  // agregamos los atributos correspondientes de manera automática a todos
  // los enlaces externos excepto el host y el localhost
  $("a[href^='http']").not("a[href^='http:\/\/www.caritasmenorca.org'],a[href^='https:\/\/www.caritasmenorca.org'],a[href^='http:\/\/localhost'],a[href^='https:\/\/localhost']")
    .attr({
      target: "_blank",
      rel: "noopener noreferer"
  });

});
