<html>
<head>
<title>Problema</title>
</head>
<body>

<?php
$exalumno = $_POST['txtNombre'];
$nombre = strtoupper($exalumno);

$tipoEx = $_POST['lstTipo'];
if ($tipoEx == '1'){ $folder = 'destacados/'; } 
elseif ($tipoEx == '2'){ $folder = 'distinguidos/'; } 
elseif ($tipoEx == '3'){ $folder = 'jovenes/'; } 

$foto = $_FILES['imagen']['name'];
$ruta = $_FILES['imagen']['tmp_name'];
//$destino = "fotos/".$foto;
$destino = "../../exalumnos/destacados-y-distinguidos/imagenes/".$folder.$foto;
copy($ruta, $destino);

        $conexion = mysql_connect(SERVER_BD,USER_BD,PASSWORD_BD);
	 	       mysql_select_db(DATABASE_BD,$conexion);
			   @mysql_query("SET NAMES 'utf8'");

	 $query="INSERT INTO exalumnos_base (nombre_completo,tipo_exalumno,campus, carrera,generacion,cargo,descripcion,foto,frase,anno_distincion,sexo)
      VALUES('$nombre',
	  '".$_POST['lstTipo']."',
	  '".$_POST['lstCamp']."',
	  '".$_POST['lstcarreras']."',
	  '".$_POST['generation']."',
	  '".$_POST['cargo']."',
	  '".$_POST['texto']."',
	  '".$foto."',
	  '".$_POST['frase']."',
	  '".$_POST['txtAnno']."',
	  '".$_POST['lstSexo']."')";
$RES= mysql_query($query) or die(mysql_error());

$result = mysql_query("SELECT * FROM exalumnos_base WHERE nombre_completo='$nombre'");
if(mysql_num_rows($result) == 1)
{
echo "<SCRIPT type='text/javascript'> //not showing me this
                        alert('Se envio correctamente :)');
                        window.location= 'http://www.ebc.mx/eventos/exalumnosapp/index.php'
                    </SCRIPT>";
}
else {
    echo "ERROR, NO SE PUDO AGREGAR D:";
}


?>


<!---->

</body>
</html>