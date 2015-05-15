
$(document).ready(function () {
  $('.Menu-link').click(function(e) {
            e.preventDefault();
            pag= $(this).attr("href");

                        $('body,html').animate({scrollTop: $(pag).offset().top },"slow");
                    });
});
$(window).load(function () {
  // Una vez se cargue al completo la página desaparecerá el div "cargando"
  $('#preloader').hide();
});