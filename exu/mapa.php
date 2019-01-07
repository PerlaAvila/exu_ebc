<?php
header ("Cache-Control: no-cache, must-revalidate"); //no guardar en CACHE
header ("Pragma: no-cache"); 
require('../includes/accesos-ebc.php');
$id=$_REQUEST['parametro'];

$conexion = mysql_connect(SERVER_BD,USER_BD,PASSWORD_BD);
	 	       mysql_select_db(DATABASE_BD,$conexion);
			    @mysql_query("SET NAMES 'utf8'");
					$sql="select ubicacion from eventos_exu where id like '$id'";
			$result=mysql_query($sql, $conexion);   
			$cant_registros=mysql_num_rows($result);
			while($row=mysql_fetch_row($result)){
                      
		echo "<div class='contenido-map-modal'>
                    <div class='modal-map'>
                        <div class='close'>
                            <div class='linea'></div>
                        </div>
                        <div class='map' id='mapa'>
                            $row[0]
                        </div>
                    </div>
                </div>
                <script>
                $('.close').click(function () {
        $('.mapGrande').fadeOut();
		$('body').removeClass('scroll-stop');
    });</script>";
						 }
						 					 
clearstatcache();
?> 