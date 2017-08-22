jQuery( document ).ready( function( $ ) {
  $('.testimonial-carousel__items').slick({
    dots: true,
    arrows: true,
  });

  if ( $( ".main-content__sidebar-wrap" ).length ) {
	$(".main-content__sidebar-wrap").sticky({topSpacing:20, bottomSpacing: 430});

    if ($(window).width() < 700) {
   		$(".main-content__sidebar-wrap").unstick();
    }

    $(window).resize(function() {
        if ($(window).width() < 700) {
           $(".main-content__sidebar-wrap").unstick();
        }
        else {
           $(".main-content__sidebar-wrap").sticky({topSpacing:20, bottomSpacing: 430});
        }
    });
}

});
		