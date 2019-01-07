<?php
header ("Cache-Control: no-cache, must-revalidate"); //no guardar en CACHE
header ("Pragma: no-cache"); 
$campus=$_REQUEST['Campus'];

$conexion = mysql_connect(SERVER_BD,USER_BD,PASSWORD_BD);
	 	       mysql_select_db(DATABASE_BD,$conexion);
			    @mysql_query("SET NAMES 'utf8'");
			    if($campus == ''){
			        $sql="SELECT * FROM eventos_exu WHERE fecha >= CURDATE() ORDER BY fecha LIMIT 30";
			    }
			    else{
					$sql="select * from eventos_exu where fecha >= CURDATE() AND campus = '$campus' ORDER by fecha ASC LIMIT 30";
			    }
			$result=mysql_query($sql, $conexion);   
			$numero=mysql_num_rows($result);
			
			while($row=mysql_fetch_row($result)){
			 if($row[3] == ""){
                                $ubicacion = $row[9];
                                $clase1 = 'none';
                                $clase = 'flex';
                            } else{
                                $clase1 = 'flex';
                                $clase = 'none';
                            }
                            
                            switch ($row[8]) {
                                case "Catapulta":
                                    $categoria = "catapulta";
                                break;
                                case "Deporte":
                                    $categoria = "deporte";
                                break;
                                case "Cultura":
                                    $categoria = "cultura";
                                break;
                                case "Taller":
                                    $categoria = "taller-exu";
                                break;
                                case "Responsabilidad Social":
                                    $categoria = "r-social";
                                break;
                                case "Vinculación":
                                    $categoria = "vinculacion";
                                break;
                                case "":
                                    $categoria = "";
                                break;
                                
                            }
                            setlocale(LC_TIME, 'es_ES', 'Spanish_Spain', 'Spanish'); 
                            $date = $date = str_replace("/","-","$row[4]");
                            $fecha = strftime('%d %B %Y',strtotime($date)); // 08 julio 2016
                            
                          echo "<div class='widget'>
                        <div class='campus'>
                            <h3>$row[7]</h3>
                        </div>
                        <div class='imagenes-eventos $categoria'>
                            <img src='../eventos-campus/imagenes/$row[6]' alt='Imagen del evento en curso'>	
                        </div>
                        <div class='titulo-evento'>
                            <h4>$row[1]</h4>
                            <p class='descripcion-texto'>
                                $row[2]
                            </p>
                        </div>
                        <div class='ubicacion-fecha'>
                            <a title='Ubicación del evento' style='display:$clase1' id='map1' class='contenido-ubicacion map1' onclick='verEvento($row[0])'>
                                <div class='ubicacion-evento glyphicons glyphicons-map-marker'></div>
                                <p class='ubicacion'>
                                    Ver mapa de ubicación
                                </p>
                            </a>
                            <a title='Ubicación del evento' style='display:$clase' class='contenido-ubicacion'>
                                <div class='ubicacion-evento glyphicons glyphicons-map-marker'></div>
                                <p class='ubicacion'>
                                  Campus $row[7] $ubicacion
                                </p>
                            </a>
                            
                            <div class='contenido-fecha'>
                                <div class='fecha-evento glyphicons glyphicons-calendar'></div>
                                <p class='fecha'>
                                    $fecha
                                </p>
                            </div>
                            
                            <div class='contenido-hora'>
                               <div class='hora-evento glyphicons glyphicons-clock'></div>
                               <p class='hora'>
                                   $row[5] hrs
                               </p>
                           </div>
                        </div>
                        
						
						
                    </div>";
                            
						 }
						 
				
clearstatcache();

?>