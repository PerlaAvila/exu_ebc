$(document).ready(function () {

    // MENU HAMBURGER

    $('.menu-colapse').click(function () {
        $('.menu-colapse').toggleClass('active');
        $('.menu-principal').toggleClass('active');
		$('body').toggleClass('scroll');
    });
	
	// MOVIMIENTO DEL SCROLL
	
	 $('.acerca-de').click(function () {
		$('html, body').animate({
      		scrollTop: $(".contenido-pasaporte-exu").offset().top-320
  		}, 2000);
	});
	

  
	// CERRAR MODAL

    $('.close').click(function () {
        console.log('hola');
        $('.mapGrande').fadeOut();
		$('body').removeClass('scroll-stop');
    });
	
	
});

function verEvento(uno){
    var id=uno;
    $('.mapGrande').fadeIn();
		$('body').addClass('scroll-stop');
    jQuery.ajax({url:"https://www.ebc.mx/exu/mapa.php",
     data:{parametro:id,},
     contentType:'application/x-www-form-urlencoded; charset=UTF-8'}).done(function( msg ) {
      
      jQuery("#mapa").html(msg);
      
      
    });  
     
   };
