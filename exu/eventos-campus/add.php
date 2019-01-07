<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="utf-8" />
        <title>Eventos EXU</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"  /> 
        <link rel="stylesheet" type="text/css" href="css/style.css"/> 
        <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css" />
        <script src="js/jquery-1.10.2.js"></script>
        <style type="text/css">
            .fancybox-wrap{
                top: 20vh !important;
            } 
        </style>
    </head>
<body>
    <!--modal-->
    <div id="modal"></div>
    <!--/modal-->

    <header class="header-fondo">  
        <div class="container">
            <div class="row">
                <div class="col-xs-3" id="logo">
                    <img src="https://www.ebc.mx/lp/reencuentro-de-ex-alumnos/responsivo/img/ebc-logotipo.png"  alt="EBC " id="ebc-logo">
                </div>
            </div>
        </div>
    </header>
      
<?php 
if($_GET[c] == 'cDmX'){
		    $campus="Ciudad de México";
		}elseif($_GET[c] == 't14n3'){
		    $campus="Tlalnepantla";
		}elseif($_GET[c] == 't01uK'){
		    $campus="Toluca";
		}elseif($_GET[c] == 'ch14pZ'){
		    $campus="Chiapas";
		}elseif($_GET[c] == 'Qt4r0'){
		    $campus="Querétaro";
		}elseif($_GET[c] == 'L30n'){
		    $campus="León";
		}elseif($_GET[c] == 'zLp'){
		    $campus="San Luis Potosí";
		}elseif($_GET[c] == 'p4cHuK'){
		    $campus="Pachuca";
		}elseif($_GET[c] == 'm3r1dA'){
		    $campus="Mérida";
		}elseif($_GET[c] == 'gDdLg'){
		    $campus="Guadalajara";
		}elseif($_GET[c] == '4guAs'){
		    $campus="Aguascalientes";
		}else{
		    echo"<SCRIPT type='text/javascript'> //not showing me this
        alert('Por favor ingresa la clave de tu campus en el URL');
        window.location= 'http://www.ebc.mx/exu'
        </SCRIPT>";
		}
?>
<h4>&nbsp;&nbsp;Agregar nuevo evento</h4>
<hr style="width: 800px;" />
<div style="padding: 0 30%;">
    <p style="color:blue; font-size: 20px"><i>Te recordamos que tus títulos y textos de eventos no pueden llevar comas sencillas (&#39;)</i></p><br><br>
    <form method="post" id="forma" name="forma" enctype="multipart/form-data">
        <input type="hidden" name="campus" value="<?php echo $campus;?>" />
        Título del evento
        <input type="text" class="form-control" name="titulo" id="titulo" required="required" placeholder="Título del evento"  />
        Descripción del evento <i>* Te recordamos que el límite de texto es de 270 caracteres. *</i> <div id="textarea_feedback"></div>
        <textarea maxlength='270' rows="5" class="form-control" name="extracto" id="extracto" required="required" placeholder="¿De qué se trata el evento?"  /></textarea>
        Fecha del evento
        <input type="date" class="form-control" name="fecha" id="fecha" required="required" placeholder="2018-08-25"  />
        Hora del evento
        <input type="time" class="form-control" name="hora" id="hora" required="required" placeholder="14:00"  />
        Categoría
        <select name='categoria' id='categoria' class='form-control' required>
    	   <option value="">-- Categoría del evento --</option>
    	   <option value="Catapulta">Catapulta</option>
           <option value="Cultura">Cultura</option>
           <option value="Deporte">Deporte</option>
           <option value="Responsabilidad Social">Responsabilidad Social</option>
           <option value="Taller">Taller Exu</option>
           <option value="Vinculación">Vinculación</option>
           <option value="Otro">Otro</option>
        </select>  
        
        Ubicación
        <input type="text" class="form-control" name="salon" placeholder="Sala A Edificio B"  />
        Escoger foto de portada recomendado (300x200)
        <input type="file" class="form-control" name="portada" id="portada" accept="image/*" required /></br></br>
          <input type="submit" value="&nbsp; Cancelar &nbsp;" class="btnred" onClick="parent.jQuery.fancybox.close();" > &nbsp; <input onclick="enviarForma()" class="btnblue" value="Guardar evento"> 
        </div>
    </form>
 </div> 
 
 <script>
$(document).ready(function() {
var text_max = 270;
$('#textarea_feedback').html(text_max + ' caracteres restantes');

$('#extracto').keyup(function() {
    var text_length = $('#extracto').val().length;
    var text_remaining = text_max - text_length;

    $('#textarea_feedback').html(text_remaining + ' caracteres restantes');
});

});    
function enviarForma(){
    
    var titulo = document.getElementById("titulo").value;
    var extracto = document.getElementById("extracto").value;
    var fecha = document.getElementById("fecha").value;
    var categoria = document.getElementById("categoria").value;
    var adjunto = document.getElementById("portada");
    var foto = document.getElementById('portada').files.length;
    var file = adjunto.files[0];
    
    console.log(foto);
    
    if(titulo == null || titulo === '', extracto == null || extracto === '', fecha === '' , categoria === null || categoria === '', foto == '0'){
        alert('Todos los campos son requeridos');
    }else if(file.size > 500000) {    
        alert('El tamaño de las fotografías debe ser menor a 500KB')
    }
    else{
        document.getElementById('forma').action = "agregar.php";
	document.forma.submit();
    }
   
}
 </script>
</body>  
</html>