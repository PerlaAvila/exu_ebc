<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scale=no, minimum-scale=1.0, maximum-scale=1.0">
        <meta charset="utf-8">
        <title>Pasaporte EXU - Eventos</title>
        <!-- FLATICON -->
        <link href="../../../css/bootstrap-nuevo/iconos-bootstrap/css/glyphicons.css" rel="stylesheet">
        <link rel="stylesheet" href="../../../css/bootstrap-nuevo/iconos-bootstrap/css/glyphicons-social.css">
        <link rel="stylesheet" href="../../../css/bootstrap-nuevo/iconos-bootstrap/css/glyphicons-filetypes.css">
        <!-- HOJA DE ESTILO -->
        <link rel="stylesheet" href="../css/estilos-eventos.css">
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
                            <img src="../img/logo-ebc.png" alt="Logotipo institucional de la Escuela Bancaria y Comercial">
                        </div>
                        <div class="menu-colapse">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <nav class="menu-principal">
                        	<div class="primer-menu">
                                <a href="https://www.ebc.mx/exu/" title="Sobre el Pasaporte EXU">Acerca de</a>
                                <a href="https://www.ebc.mx/exu/pdf/digital-pasaporte-exu.pdf" target="_blank" title="Pasaporte EXU digital">Pasaporte EXU</a>
                            </div>
                            <a id="menu-campus-responsive">Campus</a>
    
                            <nav class="navegacion-secundaria ocultar">
                            	<a onclick="hideDisplay(14)" title="Eventos de Aguascalientes">Aguascalientes</a>
                                <a onclick="hideDisplay(4)" title="Eventos de Chiapas">Chiapas</a>
                                <a onclick="hideDisplay(6)" title="Eventos de Ciudad de México">Ciudad de México</a>
                                <a onclick="hideDisplay(13)" title="Eventos de Guadalajara">Guadalajara</a>
                                <a onclick="hideDisplay(9)" title="Eventos de León">León</a>
                                <a onclick="hideDisplay(12)" title="Eventos de Mérida">Mérida</a>
                                <a onclick="hideDisplay(9)" title="Eventos de Pachuca">Pachuca</a>
                                <a onclick="hideDisplay(5)" title="Eventos de Querétaro">Querétaro</a>
                                <a onclick="hideDisplay(10)" title="Eventos de San Luis Potosí">San Luis Potosí</a>
                                <a onclick="hideDisplay(2)" title="Eventos de Tlalnepantla">Tlalnepantla</a>
                                <a onclick="hideDisplay(3)" title="Eventos de Toluca">Toluca</a>
                                
                            </nav>
                        </nav>
                    </div>
                </div>
            </section>

        </header>

        <!-- SECCIÓN EVENTOS -->

        <section class="eventos-campus">
            <div class="contenedor">
                <div class="contenido-barra-eventos">
                    <!-- BARRA LATERAL -->
                    <section class="barra-lateral">
                        <div class="titulo-campus-barra">
                            <h3>Campus</h3>
                        </div>

                        <nav class="navegacion-secundaria">
                            <a title="Eventos de Aguascalientes" onclick="hideDisplay(14)">Aguascalientes <span class="arrow glyphicons glyphicons-chevron-right"></span></a>
                            <a title="Eventos de Chiapas" onclick="hideDisplay(4)">Chiapas <span class="arrow glyphicons glyphicons-chevron-right"></span></a>
                            <a title="Eventos de Ciudad de México" onclick="hideDisplay(6)">Ciudad de México <span class="arrow glyphicons glyphicons-chevron-right"></span></a>
                            <a title="Eventos de Guadalajara" onclick="hideDisplay(13)">Guadalajara <span class="arrow glyphicons glyphicons-chevron-right"></span></a>
                            <a title="Eventos de León" onclick="hideDisplay(9)">León <span class="arrow glyphicons glyphicons-chevron-right"></span></a>
                            <a title="Eventos de Mérida" onclick="hideDisplay(12)">Mérida <span class="arrow glyphicons glyphicons-chevron-right"></span></a>
                            <a title="Eventos de Pachuca" onclick="hideDisplay(11)">Pachuca <span class="arrow glyphicons glyphicons-chevron-right"></span></a>
                            <a title="Eventos de Querétaro" onclick="hideDisplay(5)">Querétaro <span class="arrow glyphicons glyphicons-chevron-right"></span></a>
                            <a title="Eventos de San Luis Potosí" onclick="hideDisplay(10)">San Luis Potosí <span class="arrow glyphicons glyphicons-chevron-right"></span></a>
                            <a title="Eventos de Tlalnepantla" onclick="hideDisplay(2)">Tlalnepantla <span class="arrow glyphicons glyphicons-chevron-right"></span></a>
                            <a title="Eventos de Toluca" onclick="hideDisplay(3)">Toluca <span class="arrow glyphicons glyphicons-chevron-right"></span></a>
                        </nav>
                        
                        <div class="contenido-ubicacion-barra">
                            <div class="ubicacion-campus">
                                <h3>Contacto EXU</h3>
                            </div>
                            
                            <div class="map-campus">
								<div class="contenido-map-campus">
                                	<div id="campus-ubicacion-txt">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </section>
					
                    <!-- SECCIÓN DE LOS EVENTOS -->
                    <section class="seccion-evento-derecha">
                        <div class="titulo-seccion-campus">
                            <h2>Eventos de Campus</h2>
                        </div>

                        <div class="contenidos-eventos" id="eventos">

                        </div>
                    </section>
                </div>
                 <div id="mapa" class='mapGrande'>
                              
                </div><!--
                <nav class="numeracion">
                    <a href="" title="Página anterior" class="cambio-pagina-left"><</a>
                        <div class="menu-paginacion">
                            <a href="">1</a>
                            <a href="">2</a>
                            <a href="">3</a>
                            <a href="">4</a>
                            <a href="">5</a>
                        </div>
                    <a href="" title="Página siguiente" class="cambio-pagina-right">></a>
                </nav>-->

            </div>
        </section>

        <!-- PIE DE PÁGINA -->

        <footer>
            <p class="footer">Escuela Bancaria y Comercial, S.C. Derechos Reservados 2018</p>
        </footer>
        
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="../js/main-eventos.js"></script>
    </body>
</html>
