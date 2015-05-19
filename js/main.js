
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

 $(document).ready(function() {
 
          $("#owl-example-1").owlCarousel({
            autoplay:true,
            autoplayTimeout:3000,
            items : 1,
            loop:true,
            nav: false,
            center:true,
            dots:false,
            itemsDesktop : [1199,1],
            itemsDesktopSmall : [979,1],
            itemsTablet: [600,1], //2 items between 600 and 0
            navigation : false,
            pagination : false,
            slideSpeed : 2200
          });
        $("#owl-example-2").owlCarousel({
            autoplay:true,
            items : 1,
            autoplayTimeout:3000,
            loop:true,
            nav: false,
            center:true,
            dots:false,
            itemsDesktop : [1199,2],
            itemsDesktopSmall : [979,1],
            itemsTablet: [600,1], //2 items between 600 and 0
            navigation : false,
            pagination : false,
            slideSpeed : 50000,
        
          });

         
        });
      