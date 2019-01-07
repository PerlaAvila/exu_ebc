<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="stylesheet" href="css/style.css"/> 
    <style>
        .esp{height: 15em;}
        .caja_inline {
            display: inline-block;
        }
    </style>
</head>
<body>  

<?php $evento= $_GET["id"]; ?>
<h4>&nbsp;&nbsp;Eliminar Registro</h4>
<hr style="width: 600px;" />
<div style="padding: 40px 10px; text-align: center;">
    El registro con el nombre: <br> 
    <form action="prodelete.php" method="post" enctype="multipart/form-data">
        
        <input type="hidden" name="id" value="<?php echo $evento; ?>" />
        <input type="hidden" name="campus" value="<?php echo $_GET[c]; ?>" />
        <b>
        <?php
        include('../../includes/accesos-ebc.php');
          $conexion = mysql_connect(SERVER_BD,USER_BD,PASSWORD_BD);
            mysql_select_db(DATABASE_BD,$conexion);
           @mysql_query("SET NAMES 'utf8'");
           

            $resultado = mysql_query("SELECT titulo FROM eventos_exu WHERE id = '$evento'");
            if (!$resultado) {
                echo 'No se pudo ejecutar la consulta: ' . mysql_error();
                exit;
            }
            $fila = mysql_fetch_row($resultado);
            echo $fila[0]; 
            ?> 

        </b><br>se eliminara de forma permanente &iquest;Esta seguro?    
        <br><br><br>
        <div style="text-align: center;"><input id="elegir" type="submit" class="btnred" value=" NO " onClick="parent.jQuery.fancybox.close();" > &nbsp; <input class="btnblue" type="submit" value=" SI "></div>   


        
    </form>
 </div>   
</body>  
</html>