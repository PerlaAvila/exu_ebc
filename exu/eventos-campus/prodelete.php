<html>
<head>
<title></title>
</head>
<body>

<?php

$idevento =$_POST['id'];
$campus =$_POST['campus'];
        $conexion = mysql_connect(SERVER_BD,USER_BD,PASSWORD_BD);
	 	       mysql_select_db(DATABASE_BD,$conexion);
			   @mysql_query("SET NAMES 'utf8'");

$query="DELETE FROM eventos_exu
WHERE id = '$idevento'";
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
$RES= mysql_query($query) or die(mysql_error());

$location = "http://www.ebc.mx/exu/eventos-campus/?c=$redirect";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$location.'">';
?>


</script>

</body>
</html>