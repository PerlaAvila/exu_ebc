$(document).ready(function () {
     
    
    var url_string = window.location.href;
    var url = new URL(url_string);
    var campuss = url.searchParams.get("c");
    hideDisplay(campuss);
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
	
	// MENU CAMPUS
	
	$('.ocultar').hide();
	
	$('#menu-campus-responsive').click( function () {
		$('.ocultar').slideToggle();
		$('.primer-menu').slideToggle();
	});
	

  
	// CERRAR MODAL

    $('.close').click(function () {
        $('.mapGrande').fadeOut();
		$('body').removeClass('scroll-stop');
    });
		
});

// UBICACIÓN EN VENTANA

function hideDisplay(id){
	console.log(id);
	if (id == '14'){
		// AGUASCALIENTES
		var coordinador = '<p><b>Coordinador EXU</b><br>Adiana Delgado</p>';
		var correo = '<p><b>Correo</b><br>a.delgado001@ebc.edu.mx</p>';
		var tel = '<p><b>Teléfono</b><br>(449) 1457 - 000 <b>Ext.</b> 8125</p>';
		var campus = 'Aguascalientes';
		
	}  else if (id == '4'){
		// CHIAPAS
		coordinador = '<p><b>Coordinador EXU</b><br>Jorge Torres</p>';
		correo = '<p><b>Correo</b><br>jm.torres007@ebc.edu.mx</p>';
		tel = '<p><b>Teléfono</b><br>(961) 615 - 4863 <b>Ext.</b> 6012</p>';
		campus = 'Chiapas';
		
	}  else if(id == '6'){
		// CIUDAD DE MÉXICO
		coordinador = '<p><b>Coordinador EXU</b><br>Diego Lima</p>';
		correo = '<p><b>Correo</b><br>dy.lima@ebc.edu.mx</p>';
		tel = '<p><b>Teléfono</b><br>(55) 3683 2400 <b>Ext.</b> 2086</p>';
		campus = 'Ciudad de México';
		
	}  else if(id == '13'){
		// GUADALAJARA
		coordinador = '<p><b>Coordinador EXU</b><br>Orlando Morales</p>';
		correo = '<p><b>Correo</b><br>on.morales@ebc.edu.mx</p>';
		tel = '<p><b>Teléfono</b><br>(33) 3120 - 2000 <b>Ext.</b> 6321</p>';
		campus = 'Guadalajara';
		
	}  else if(id == '9'){
		// LEÓN
		coordinador = '<p><b>Coordinador EXU</b><br>Sandra Hernandez</p>';
		correo = '<p><b>Correo</b><br>s.heranndez041@ebc.edu.mx</p>';
		tel = '<p><b>Teléfono</b><br>(477) 493 – 8484 <b>Ext.</b> 8239</p>';
		campus = 'León';
		
	}  else if(id == '12'){
		// MÉRIDA
		coordinador = '<p><b>Coordinador EXU</b><br>Olga Pozos</p>';
		correo = '<p><b>Correo</b><br>om.pozos@ebc.edu.mx</p>';
		tel = '<p><b>Teléfono</b><br>(999) 454 - 4444 <b>Ext.</b> 6222</p>';
		campus = 'Mérida';
		
	}  else if(id == '11'){
		// PACHUCA
		coordinador = '<p><b>Coordinador EXU</b><br>Psiquis Camarillo</p>';
		correo = '<p><b>Correo</b><br>p.camarillo@ebc.edu.mx</p>';
		tel = '<p><b>Teléfono</b><br>(771) 249 - 7000 <b>Ext.</b> 6104</p>';
		campus = 'Pachuca';
		
	}  else if(id == '5'){
		// QUERÉTARO
		coordinador = '<p><b>Coordinador EXU</b><br>Emilio Sandoval</p>';
		correo = '<p><b>Correo</b><br>ef.sandoval@ebc.deu.mx</p>';
		tel = '<p><b>Teléfono</b><br>(442) 349 – 5000 <b>Ext.</b> 5055</p>';
		campus = 'Querétaro';
		
	}  else if(id == '10'){
		// SAN LUIS POTOSÍ
		coordinador = '<p><b>Coordinador EXU</b><br>Blanca Sanchez</p>';
		correo = '<p><b>Correo</b><br>bc.sancehez@ebc.edu.mx</p>';
		tel = '<p><b>Teléfono</b><br>(444) 271 – 0730 <b>Ext.</b> 7439</p>';
		campus = 'San Luis Potosí';
		
	}  else if(id == '2'){
		// TLALNEPANTLA
		coordinador = '<p><b>Coordinador EXU</b><br>Mariana Garcia</p>';
		correo = '<p><b>Correo</b><br>m.garcia037@ebc.edu.mx</p>';
		tel = '<p><b>Teléfono</b><br>(55) 1085 5200 <b>Ext.</b> 5223</p>';
		campus = 'Tlalnepantla';

	}  else if(id == '3'){
		// TOLUCA
		coordinador = '<p><b>Coordinador EXU</b><br>Sarita Rodriguez</p>';
		correo = '<p><b>Correo</b><br>sg.rodriguez002@ebc.edu.mx</p>';
		tel = '<p><b>Teléfono</b><br>(722) 5480 100 <b>Ext.</b> 8124</p>';
		campus = 'Toluca';
		
		
	}
	console.log(campus);
	var campusUbicacion = $('#campus-ubicacion-txt');
	campusUbicacion.empty();
	campusUbicacion.append(coordinador + correo + tel );
	$('#eventos').empty();
	jQuery.ajax({url:"https://www.ebc.mx/exu/consulta.php",
     data:{Campus:campus},
     contentType:'application/x-www-form-urlencoded; charset=UTF-8'}).done(function( msg ) {
       document.getElementById('eventos').innerHTML=msg;     
     });  
};


   
   function verEvento(uno){
    var id=uno;
    console.log('hola');
    $('.mapGrande').fadeIn();
	$('body').addClass('scroll-stop');
    jQuery.ajax({url:"https://www.ebc.mx/exu/mapa.php",
     data:{parametro:id,},
     contentType:'application/x-www-form-urlencoded; charset=UTF-8'}).done(function( msg ) {
      
      jQuery("#mapa").html(msg);
      
      
    });  
     
   };
   
 

		