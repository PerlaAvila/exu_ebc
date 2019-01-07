<?php
$titulo = $_POST['titulo'];
$extracto = $_POST['extracto'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$ubicacion = $_POST['ubicacion'];
$categoria = $_POST['categoria'];
$campus = $_POST['campus'];
$fotoactual = $_POST['portada1'];
$idevento = $_POST['evento'];
$salon = $_POST['salon'];
    $conexion = mysql_connect(SERVER_BD,USER_BD,PASSWORD_BD);
        mysql_select_db(DATABASE_BD,$conexion);
        @mysql_query("SET NAMES 'utf8'");

      $foto = $_FILES['portada1']['name'];
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
if ($foto == ""){
    $query ="UPDATE eventos_exu SET titulo ='".$titulo."', descripcion ='".$extracto."', ubicacion ='".$ubicacion."', fecha ='".$fecha."', hora ='".$hora."', categoria ='".$categoria."', salon ='".$salon."' 
        WHERE id=$idevento";
      $RES= mysql_query($query) or die(mysql_error());
 
}else if ($foto != ""){
    
    $ruta = $_FILES['portada1']['tmp_name'];
    $destino = "imagenes/".$foto;
    copy($ruta, $destino); 
     
    $query ="UPDATE eventos_exu SET titulo ='".$titulo."', descripcion ='".$extracto."', ubicacion ='".$ubicacion."', fecha ='".$fecha."', hora ='".$hora."', categoria ='".$categoria."', salon ='".$salon."', foto ='".$foto."' 
        WHERE id=$idevento";
       $RES= mysql_query($query) or die(mysql_error());  
}


$location = "http://www.ebc.mx/exu/eventos-campus/?c=$redirect";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$location.'">';
?>
