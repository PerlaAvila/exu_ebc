<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scale=no, minimum-scale=1.0, maximum-scale=1.0">
        <meta charset="utf-8">
        <title>Pasaporte EXU</title>
        <!-- FLATICON -->
        <link href="../../../css/bootstrap-nuevo/iconos-bootstrap/css/glyphicons.css" rel="stylesheet">
        <link rel="stylesheet" href="../../../css/bootstrap-nuevo/iconos-bootstrap/css/glyphicons-social.css">
        <link rel="stylesheet" href="../../../css/bootstrap-nuevo/iconos-bootstrap/css/glyphicons-filetypes.css">
        <!-- HOJA DE ESTILO -->
        <link rel="stylesheet" href="css/estilos-.css">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-69213223-2"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-69213223-2');
        </script>
    </head>
    <body>

        <header>

            <!-- NAVEGACIÓN PRINCIPAL -->
            <section class="navegador-principal">
                <div class="contenedor">
                    <div class="barra-navegacion">
                        <div class="logo-ebc">
                            <img src="img/logo-ebc.png" alt="Logotipo institucional de la Escuela Bancaria y Comercial">
                        </div>
                        <div class="menu-colapse">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <nav class="menu-principal">
                            <a class="acerca-de" title="Sobre el Pasaporte EXU">Acerca de</a>
                            <a href="eventos" title="Eventos relacionados">Eventos</a>
                            <a href="pdf/digital-pasaporte-exu.pdf" target="_blank" title="Pasaporte EXU digital">Pasaporte EXU</a>
                        </nav>
                    </div>
                </div>
            </section>

            <!-- CONTENIDO PRINCIPAL -->
            <section class="contenido-principal">
                <div class="contenedor">
                    <div class="contenedor-cont-principal">
                        <div class="logo-exu">
                            <img src="img/logo-exu.png" alt="Logotipo para pasaporte EXU">
                        </div>
                        <div class="cont-descripcion-exu">
                            <p class="descripcion-exu">
                                ¡Busca los eventos <b>EXU</b> en tu campus y participa en ellos!<br><br>
                                
                                Aprovecha estas actividades para crear y expandir tu red de contactos. No pierdas la oportunidad de complementar tus conocimientos y potenciar tu vida estudiantil y profesional al mismo tiempo.<br><br>
                                
                                Recuerda que ser <b>estudiante de la EBC</b>, es ser un estudiante activo y participativo.
                            </p>
                        </div>
                        <div class="arrow glyphicons glyphicons-chevron-down"></div>
                    </div>
                </div>
            </section>

        </header>

        <!-- SECCIÓN EVENTOS -->

        <section class="eventos">
            <div class="contenedor">

                <div class="contenidos-eventos">
                    <?php
                        $evento= $_GET["id"]; 
                        include('../includes/accesos-ebc.php');
                        include('eventos-campus/functions.php');
                        $conexion = mysql_connect(SERVER_BD,USER_BD,PASSWORD_BD);
                    	 	       mysql_select_db(DATABASE_BD,$conexion);
                    			   @mysql_query("SET NAMES 'utf8'");
                    		$timestamp_now = date("Y/m/d");//strtotime(date('d-m-Y'));
                    	  $sql_consul="SELECT * FROM ( SELECT * FROM eventos_exu WHERE fecha >= CURDATE() ORDER BY fecha ASC, hora ASC) AS wuwu GROUP BY campus";
                    	  $sql_result= mysql_query($sql_consul) or die(mysql_error());
                        if (! $sql_result){
                           echo "La consulta SQL contiene errores.".mysql_error();
                           exit();
                        }else {
                            while ($row = mysql_fetch_row($sql_result)){
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
                            
                            switch ($row[7]) {
                                case "Ciudad de México":
                                    $campus = "6";
                                break;
                                case "Tlanepantla":
                                    $campus = "2";
                                break;
                                case "Toluca":
                                    $campus = "3";
                                break;
                                case "Chiapas":
                                    $campus = "4";
                                break;
                                case "Querétaro":
                                    $campus = "5";
                                break;
                                case "Dinamarca":
                                    $campus = "6";
                                break;
                                case "En línea":
                                    $campus = "7";
                                break;
                                case "León":
                                    $campus = "9";
                                break;
                                case "San Luis Potosí":
                                    $campus = "10";
                                break;
                                case "Pachuca":
                                    $campus = "11";
                                break;
                                case "Mérida":
                                    $campus = "12";
                                break;
                                case "Guadalajara":
                                    $campus = "13";
                                break;
                                case "Aguascalientes":
                                    $campus = "14";
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
                            <img src='eventos-campus/imagenes/$row[6]' alt='Imagen del evento en curso'>	
                        </div>
                        <div class='titulo-evento'>
                            <h4>$row[1]</h4>
                            <p class='descripcion-texto'>
                                $row[2]
                            </p>
                        </div>
                        <div class='ubicacion-fecha'>
							<div class='bloque-fecha-hora'>
							
                            <a title='Ubicación del evento' style='display:$clase1' class='contenido-ubicacion map1' onclick='verEvento($row[0])'>
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
						   
                           <div class='boton-evento' >
                        <a href='eventos/?c=$campus' title='Eventos'>Ver más eventos</a>
                    </div>
                        </div>
                        
						
						
                    </div>";
                            }}
                    ?>
                    
                   <!-- <img src='eventos-campus/imagenes/catapulta.png' alt='Imagen con respecto a la categoría'>-->
                    
                    <!--<div class='boton-evento' >
                        <a href='' title='Eventos'>Ver más eventos</a>
                    </div>-->
                    
                    <div id="mapa" class='mapGrande'>
                              
                    </div>
                </div>    
            </div>
        </section>

        <!-- DESCRIPCIÓN PASAPORTE EXU -->

        <section class="contenido-pasaporte-exu">
            <div class="contenedor">
                <div class="pasaporte-exu-contenidos">
                    <h2><strong>EXU</strong></h2>
                    <div class="line"></div>
                    <div class="descripcion-pasaporte-exu">
                    	<p><i>Extensión Universitaria</i> (<b>EXU</b>) es el área que promueve las actividades co-curriculares y extracurriculares a lo largo del programa académico.</p>
                        
                        <p><b>¿Qué es el Pasaporte EBC?</b></p>
                        
                        <p>Es el programa que te orientará para participar en actividades extracurriculares y co-curriculares.</p>

                        <p>Tiene el propósito de enriquecer la vida estudiantil y fortalecer los tres Principios Institucionales.</p>

                        <ul class="principios-institucionales">
                            <li><strong>Somos estudiantes para siempre.</strong></li>
                            <li><strong>Somos impulsores de progreso.</strong></li>
                            <li><strong>Somos honestos y socialmente responsables.</strong></li>
                        </ul>

                        <p>¿Cómo funciona?</p>

                        <p>Recibirás cada semestre un pasaporte nuevo, a través del cual deberás registrar tu participación en las actividades de tu campus, tales como conferencias, celebraciones e incluso nuestro tradicional Torneo de Ping-Pong.</p>
                        
                        <br>
                        
                        <hr>
                        
                        <div class="erratas">
                        	<p>FE DE ERRATAS DE LA EDICIÓN IMPRESA</p>
                        
                            1. En bienvenida, donde dice Impulsores del progreso, debe decir Impulsores de progreso.<br>
                            2. En la sección “¿Qué es EXU?” dice “co-corriculares”, debe decir “co-curriculares”.<br>
                            3. En el recuadro de EXU, donde dice “pasoporte” debe decir “pasaporte”.<br>
                            4. En la sección <i>EXU, Beneficios</i>, donde dice Eberics debe decir Éberics.<br>
                            5. En esa misma sección, donde dice “tú primer trabajo” debe decir “tu primer trabajo”.<br>
                            6. En la sección <i>Cuidado y preservación</i> del medioambiente, donde dice “ofrescamos” debe decir “ofrezcamos”.
                    	</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PIE DE PÁGINA -->

        <footer>
            <p class="footer">Escuela Bancaria y Comercial, S.C. Derechos Reservados 2018</p>
        </footer>


        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
