<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="css/style.css"/> 
    <style>
        .esp{height: 15em;}
        .caja_inline {
            display: inline-block;
        }
        .form-control{margin-top:5px;}
    </style>
    <script>
    
  </script>
</head>
<body> 
<?php
    $evento= $_GET["id"]; 

    include('../../includes/accesos-ebc.php');
    $conexion = mysql_connect(SERVER_BD,USER_BD,PASSWORD_BD);
	 	       mysql_select_db(DATABASE_BD,$conexion);
			   @mysql_query("SET NAMES 'utf8'");
			   
	  $sql_consul="SELECT * FROM eventos_exu WHERE id=$evento";
	  $sql_result= mysql_query($sql_consul) or die(mysql_error());
    if (! $sql_result){
       echo "La consulta SQL contiene errores.".mysql_error();
       exit();
    }else {
        while ($row = mysql_fetch_row($sql_result)){
           
?>


<h4>&nbsp;&nbsp;Edici&oacute;n de evento</h4>
<hr style="width: 800px;" />
<div style="padding: 1px;">
    <form name="forma" method="post" enctype="multipart/form-data" action="proedit.php">  
      <input type="hidden" name="evento" value="<?php echo $evento; ?>">
      <input type="hidden" name="campus" value="<?php echo $row[7]; ?>">
      Título del evento  
      <input type="text" class="form-control" name="titulo" id="titulo" required="required" placeholder="Titulo" value="<?php echo $row[1]; ?>"  />
      Descripcion del evento<i>* Te recordamos que el límite de texto es de 270 caracteres. *</i> <div id="textarea_feedback"></div><br>
        <textarea maxlength='270' name="extracto" cols="100" rows="5" id="extracto"><?php echo $row[2]; ?></textarea><br>
        Fecha del evento
        <input type="date" class="form-control" name="fecha" id="fecha" value="<?php echo $row[4]; ?>"/>  
        Hora del evento
        <input type="time" name="hora" id="hora" class="form-control" value="<?php echo $row[5]; ?>"> 
        Categoria
        <select name='categoria' id='categoria' class='form-control' required>
    	   <option value="<?php echo $row[8]; ?>"><?php echo $row[8]; ?></option>
    	   <option value="Catapulta">Catapulta</option>
           <option value="Cultura">Cultura</option>
           <option value="Deporte">Deporte</option>
           <option value="Responsabilidad Social">Responsabilidad Social</option>
           <option value="Taller">Taller</option>
           <option value="Vinculación">Vinculación</option>
        </select>  
        Ubicación
        <input type="text" class="form-control" name="salon" id="salon" value="<?php echo $row[9]; ?>"/> 
          <div class="caja_inline">Fotograf&iacute;a de portada actual:<br>
                      <?php
                      echo "<img src='imagenes/$row[6]' style='width: 16%; float: left; padding-right: 10px;'/>";
                      ?>

          &nbsp;
          <input type="hidden" name="portada" value=" <?php echo $row[6]; ?>">
          <input type="file" id="portada" name="portada1">Recuerda que el tamaño recomendado es de (300x200)
          </div>
          <br>
        

<?php
   }
   
 }
?>

<div class="caja_inline">
        <div style="text-align: right;"><input type="submit" class="btnred" value="Cancelar Cambios" onClick="parent.jQuery.fancybox.close();" > &nbsp; <input class="btnblue" onclick="enviarForma()" type="submit" value="Guardar Cambios"></div>
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
    var adjunto = document.getElementById("portada");
    var file = adjunto.files[0];
    
 
    if((adjunto.files.length != 0) && (file.size > 1000000)){
         alert('El tamaño de las fotografías debe ser menor a 2MB');
    }
    else{
	document.forma.submit();
    }
   
}
 </script>
</body>  
</html>