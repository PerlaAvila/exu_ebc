<?php
$titulo = $_POST['titulo'];
$extracto = $_POST['extracto'];
$fecha = $_POST['fecha'];
$hr = $_POST['hora'];
$campus = $_POST['campus'];
$categoria =$_POST['categoria'];
$ubicacion = $_POST['ubicacion'];
$salon = $_POST['salon'];
$target = "imagenes/"; 
$target = $target . basename( $_FILES['portada']['name']) ; 
$foto = $_FILES['portada']['name'];

switch($campus){
    case "Ciudad de México":
        $redirect = "cDmX";
    break;
    case "Tlalnepantla":
        $redirect = "t14n3";
    break;  
     case "Toluca":
        $redirect = "t01uK";
    break;  
     case "Chiapas":
        $redirect = "ch14pZ";
    break;  
     case "Querétaro":
        $redirect = "Qt4r0";
    break;  
     case "León":
        $redirect = "L30n";
    break;  
     case "San Luis Potosí":
        $redirect = "zLp";
    break;  
     case "Pachuca":
        $redirect = "p4cHuK";
    break;  
     case "Mérida":
        $redirect = "m3r1dA";
    break; 
    case "Guadalajara":
        $redirect = "gDdLg";
    break; 
    case "Aguascalientes":
        $redirect = "4guAs";
    break; 
}

if($titulo == ""){
    $location = "http://www.ebc.mx/exu/eventos-campus";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$location.'">';
}
else{
      if(move_uploaded_file($_FILES['portada']['tmp_name'], $target)){
       $conexion = mysql_connect(SERVER_BD,USER_BD,PASSWORD_BD);
       mysql_select_db(DATABASE_BD,$conexion);
       @mysql_query("SET NAMES 'utf8'");

       $consulta = "insert into eventos_exu (titulo,descripcion,ubicacion,fecha,hora,foto,campus,salon,categoria) values ('".$titulo."','".$extracto."','".$ubicacion."','".$fecha."','".$hr."','".$_FILES['portada']['name']."','".$campus."','".$salon."','".$categoria."')";

       $res = mysql_query($consulta, $conexion) or die(mysql_error());

       $result = mysql_query("SELECT * FROM eventos_exu WHERE titulo='$titulo' AND fecha='$fecha'");
       if(mysql_num_rows($result) == 1){
        
        echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('Se envio correctamente :)');
        window.location= 'http://www.ebc.mx/exu/eventos-campus/?c=$redirect'
        </SCRIPT>";
      }else{
       echo "ERROR, NO SE PUDO AGREGAR D:";
     }//else error
    }//if exito
  }//else

?>

