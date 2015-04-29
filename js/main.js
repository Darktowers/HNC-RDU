
$(document).ready(function () {
  $('.Menu-link').click(function(e) {
            e.preventDefault();
            pag= $(this).attr("href");

                        $('body,html').animate({scrollTop: $(pag).offset().top },"slow");
                    });
});
