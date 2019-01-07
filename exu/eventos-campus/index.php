<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Eventos EXU</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"  /> 
        <link rel="stylesheet" href="css/style.css"/> 
        <link rel="stylesheet" href="fancybox/jquery.fancybox.css" />
        <style type="text/css">
            .fancybox-wrap{
                top: 20vh !important;
            } 
        </style><!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-69213223-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-69213223-2');
</script>
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
        $conexion = mysql_connect(SERVER_BD,USER_BD,PASSWORD_BD);
	 	       mysql_select_db(DATABASE_BD,$conexion);
			   @mysql_query("SET NAMES 'utf8'");
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
		}
	    $sql_repit="SELECT * FROM eventos_exu WHERE campus like '$campus' ORDER BY id DESC";
	    $res_repit= mysql_query($sql_repit) or die(mysql_error());
   	    
	    
    ?>
        <div class="container">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Lista de eventos en campus <?php echo $campus;?></h3>
              </div>
              <div class="panel-body">
                <p>
                    <a href="add.php?c=<?php echo $_GET[c];?>">+ Agregar</a>
                </p>
              
                <?php
                $tot = mysql_num_rows($res_repit);
                if ($tot>0)
                {
                	echo "<table border='1' class='table table-bordered table-striped table-hover'>
                	<tr><td>ID</td><td>TÍTULO</td><td>FECHA</td><td>DESCRIPCIÓN</td><td>Campus</td><td>ACCIONES</td></tr>";
                	while ($row= mysql_fetch_assoc($res_repit))
                	{
                	$id= $row['id'];
                    $title= $row['titulo'];
                    $fecha= $row['fecha'];
                    $desc= $row['descripcion'];
                    $campus =$row['campus'];
                	echo "
                	<tr><td>". $id ."</td>
                	<td>". $title ."</td>
                	<td>". $fecha ."</td>
                	<td>". $desc ."</td>
                	<td>". $campus ."</td>";
                	
                	echo '<td><p><a href="edit.php?id='.$id.'" class="fancybox fancybox.ajax btnblue">EDITAR</a></p>
                	    <a href="delete.php?id='.$id.'&c='.$campus.'" style="padding: 10px 5px;
    background-color: red;
    color: white;">BORRAR</a>
                	    </td></tr>';
                	}
                	echo "</table>";
                }else{
                echo "No hay registros";
                exit;
                }
                ?>
              
            </div>
  
            </div>
        </div>

 
 
 
 
 <!-- -->       
 <script src="js/jquery-1.10.2.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/funciones.js"></script>
 <script type="text/javascript" src="fancybox/jquery.fancybox.js"></script>
 <script type="text/javascript">
 $(document).ready(function() {
	$(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});
    
 });
 </script>
</body>
</html>
