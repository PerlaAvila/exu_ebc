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
                                <a href="http://www.ebc.mx/exu/index-.php" title="Sobre el Pasaporte EXU">Acerca de</a>
                                <a href="" title="Eventos relacionados">Eventos</a>
                                <a href="" title="Beneficios dentro del programa">Pasaporte EXU</a>
                            </div>
                            <a id="menu-campus-responsive">Campus</a>
    
                            <nav class="navegacion-secundaria ocultar">
                            	<a href="" title="Eventos de Aguascalientes">Aguascalientes</a>
                                <a href="" title="Eventos de Chiapas">Chiapas</a>
                                <a href="" title="Eventos de Ciudad de México">Ciudad de México</a>
                                <a href="" title="Eventos de Guadalajara">Guadalajara</a>
                                <a href="" title="Eventos de León">León</a>
                                <a href="" title="Eventos de Mérida">Mérida</a>
                                <a href="" title="Eventos de Pachuca">Pachuca</a>
                                <a href="" title="Eventos de Querétaro">Querétaro</a>
                                <a href="" title="Eventos de San Luis Potosí">San Luis Potosí</a>
                                <a href="" title="Eventos de Tlalnepantla">Tlalnepantla</a>
                                <a href="" title="Eventos de Toluca">Toluca</a>
                                
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

                        <div class="contenidos-eventos">

                            <!-- INICIO WIDGET -->
                            <div class="widget">
                                <div class="campus">
                                    <h3>Campus</h3>
                                </div>
                                <div class="imagenes-eventos">
                                    <img src="../img/imagen-prueba-evento.jpg" alt="Imagen del evento en curso">
                                </div>
                                <div class="titulo-evento">
                                    <h4>Título Evento</h4>
                                    <p class="descripcion-texto">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt nobis, aspernatur dicta, possimus aperiam et maiores labore quisquam earum! Tempore.
                                    </p>
                                </div>
                                <div class="ubicacion-fecha">
                                    <a title="Ubicación del evento" class="contenido-ubicacion map1">
                                        <div class="ubicacion-evento glyphicons glyphicons-map-marker"></div>
                                        <p class="ubicacion">
                                            Ubicación
                                        </p>
                                    </a>
                                    
                                    <div class="mapGrande">
                                        <div class="contenido-map-modal">
                                            <div class="modal-map">
                                                <div class="close">
                                                    <div class="linea"></div>
                                                </div>
                                                <div class="map">
                                                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.656310776548!2d-99.16046078509339!3d19.4272502868874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff33713d6f33%3A0xeb9779c09a192a0!2sEBC+-+Campus+Ciudad+de+M%C3%A9xico+Edificio+Liverpool!5e0!3m2!1ses!2smx!4v1533918782430" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="contenido-fecha">
                                        <div class="fecha-evento glyphicons glyphicons-calendar"></div>
                                        <p class="fecha">
                                            XX/XX/XXXX
                                        </p>
                                    </div>
                                </div>
                            </div>
        
                            <div class="widget">
                                <div class="campus">
                                    <h3>Campus</h3>
                                </div>
                                <div class="imagenes-eventos">
                                    <img src="../img/imagen-prueba-evento.jpg" alt="Imagen del evento en curso">
                                </div>
                                <div class="titulo-evento">
                                    <h4>Título Evento</h4>
                                    <p class="descripcion-texto">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt nobis, aspernatur dicta, possimus aperiam et maiores labore quisquam earum! Tempore.
                                    </p>
                                </div>
                                <div class="ubicacion-fecha">
                                    <a title="Ubicación del evento" class="contenido-ubicacion map1">
                                        <div class="ubicacion-evento glyphicons glyphicons-map-marker"></div>
                                        <p class="ubicacion">
                                            Ubicación
                                        </p>
                                    </a>
                                    
                                    <div class="mapGrande">
                                        <div class="contenido-map-modal">
                                            <div class="modal-map">
                                                <div class="close">
                                                    <div class="linea"></div>
                                                </div>
                                                <div class="map">
                                                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.656310776548!2d-99.16046078509339!3d19.4272502868874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff33713d6f33%3A0xeb9779c09a192a0!2sEBC+-+Campus+Ciudad+de+M%C3%A9xico+Edificio+Liverpool!5e0!3m2!1ses!2smx!4v1533918782430" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="contenido-fecha">
                                        <div class="fecha-evento glyphicons glyphicons-calendar"></div>
                                        <p class="fecha">
                                            XX/XX/XXXX
                                        </p>
                                    </div>
                                </div>
                            </div>
        
                            <div class="widget">
                                <div class="campus">
                                    <h3>Campus</h3>
                                </div>
                                <div class="imagenes-eventos">
                                    <img src="../img/imagen-prueba-evento.jpg" alt="Imagen del evento en curso">
                                </div>
                                <div class="titulo-evento">
                                    <h4>Título Evento</h4>
                                    <p class="descripcion-texto">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt nobis, aspernatur dicta, possimus aperiam et maiores labore quisquam earum! Tempore.
                                    </p>
                                </div>
                                <div class="ubicacion-fecha">
                                    <a title="Ubicación del evento" class="contenido-ubicacion map1">
                                        <div class="ubicacion-evento glyphicons glyphicons-map-marker"></div>
                                        <p class="ubicacion">
                                            Ubicación
                                        </p>
                                    </a>
                                    
                                    <div class="mapGrande">
                                        <div class="contenido-map-modal">
                                            <div class="modal-map">
                                                <div class="close">
                                                    <div class="linea"></div>
                                                </div>
                                                <div class="map">
                                                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.656310776548!2d-99.16046078509339!3d19.4272502868874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff33713d6f33%3A0xeb9779c09a192a0!2sEBC+-+Campus+Ciudad+de+M%C3%A9xico+Edificio+Liverpool!5e0!3m2!1ses!2smx!4v1533918782430" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="contenido-fecha">
                                        <div class="fecha-evento glyphicons glyphicons-calendar"></div>
                                        <p class="fecha">
                                            XX/XX/XXXX
                                        </p>
                                    </div>
                                </div>
                            </div>
        
                            <div class="widget">
                                <div class="campus">
                                    <h3>Campus</h3>
                                </div>
                                <div class="imagenes-eventos">
                                    <img src="../img/imagen-prueba-evento.jpg" alt="Imagen del evento en curso">
                                </div>
                                <div class="titulo-evento">
                                    <h4>Título Evento</h4>
                                    <p class="descripcion-texto">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt nobis, aspernatur dicta, possimus aperiam et maiores labore quisquam earum! Tempore.
                                    </p>
                                </div>
                                <div class="ubicacion-fecha">
                                    <a title="Ubicación del evento" class="contenido-ubicacion map1">
                                        <div class="ubicacion-evento glyphicons glyphicons-map-marker"></div>
                                        <p class="ubicacion">
                                            Ubicación
                                        </p>
                                    </a>
                                    
                                    <div class="mapGrande">
                                        <div class="contenido-map-modal">
                                            <div class="modal-map">
                                                <div class="close">
                                                    <div class="linea"></div>
                                                </div>
                                                <div class="map">
                                                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.656310776548!2d-99.16046078509339!3d19.4272502868874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff33713d6f33%3A0xeb9779c09a192a0!2sEBC+-+Campus+Ciudad+de+M%C3%A9xico+Edificio+Liverpool!5e0!3m2!1ses!2smx!4v1533918782430" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="contenido-fecha">
                                        <div class="fecha-evento glyphicons glyphicons-calendar"></div>
                                        <p class="fecha">
                                            XX/XX/XXXX
                                        </p>
                                    </div>
                                </div>
                            </div>
        
                            <!-- INICIO WIDGET -->
                            <div class="widget">
                                <div class="campus">
                                    <h3>Campus</h3>
                                </div>
                                <div class="imagenes-eventos">
                                    <img src="../img/imagen-prueba-evento.jpg" alt="Imagen del evento en curso">
                                </div>
                                <div class="titulo-evento">
                                    <h4>Título Evento</h4>
                                    <p class="descripcion-texto">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt nobis, aspernatur dicta, possimus aperiam et maiores labore quisquam earum! Tempore.
                                    </p>
                                </div>
                                <div class="ubicacion-fecha">
                                    <a title="Ubicación del evento" class="contenido-ubicacion map1">
                                        <div class="ubicacion-evento glyphicons glyphicons-map-marker"></div>
                                        <p class="ubicacion">
                                            Ubicación
                                        </p>
                                    </a>
                                    
                                    <div class="mapGrande">
                                        <div class="contenido-map-modal">
                                            <div class="modal-map">
                                                <div class="close">
                                                    <div class="linea"></div>
                                                </div>
                                                <div class="map">
                                                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.656310776548!2d-99.16046078509339!3d19.4272502868874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff33713d6f33%3A0xeb9779c09a192a0!2sEBC+-+Campus+Ciudad+de+M%C3%A9xico+Edificio+Liverpool!5e0!3m2!1ses!2smx!4v1533918782430" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="contenido-fecha">
                                        <div class="fecha-evento glyphicons glyphicons-calendar"></div>
                                        <p class="fecha">
                                            XX/XX/XXXX
                                        </p>
                                    </div>
                                </div>
                            </div>
        
                            <div class="widget">
                                <div class="campus">
                                    <h3>Campus</h3>
                                </div>
                                <div class="imagenes-eventos">
                                    <img src="../img/imagen-prueba-evento.jpg" alt="Imagen del evento en curso">
                                </div>
                                <div class="titulo-evento">
                                    <h4>Título Evento</h4>
                                    <p class="descripcion-texto">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt nobis, aspernatur dicta, possimus aperiam et maiores labore quisquam earum! Tempore.
                                    </p>
                                </div>
                                <div class="ubicacion-fecha">
                                    <a title="Ubicación del evento" class="contenido-ubicacion map1">
                                        <div class="ubicacion-evento glyphicons glyphicons-map-marker"></div>
                                        <p class="ubicacion">
                                            Ubicación
                                        </p>
                                    </a>
                                    
                                    <div class="mapGrande">
                                        <div class="contenido-map-modal">
                                            <div class="modal-map">
                                                <div class="close">
                                                    <div class="linea"></div>
                                                </div>
                                                <div class="map">
                                                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.656310776548!2d-99.16046078509339!3d19.4272502868874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff33713d6f33%3A0xeb9779c09a192a0!2sEBC+-+Campus+Ciudad+de+M%C3%A9xico+Edificio+Liverpool!5e0!3m2!1ses!2smx!4v1533918782430" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="contenido-fecha">
                                        <div class="fecha-evento glyphicons glyphicons-calendar"></div>
                                        <p class="fecha">
                                            XX/XX/XXXX
                                        </p>
                                    </div>
                                </div>
                            </div>
        
                            <div class="widget">
                                <div class="campus">
                                    <h3>Campus</h3>
                                </div>
                                <div class="imagenes-eventos">
                                    <img src="../img/imagen-prueba-evento.jpg" alt="Imagen del evento en curso">
                                </div>
                                <div class="titulo-evento">
                                    <h4>Título Evento</h4>
                                    <p class="descripcion-texto">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt nobis, aspernatur dicta, possimus aperiam et maiores labore quisquam earum! Tempore.
                                    </p>
                                </div>
                                <div class="ubicacion-fecha">
                                    <a title="Ubicación del evento" class="contenido-ubicacion map1">
                                        <div class="ubicacion-evento glyphicons glyphicons-map-marker"></div>
                                        <p class="ubicacion">
                                            Ubicación
                                        </p>
                                    </a>
                                    
                                    <div class="mapGrande">
                                        <div class="contenido-map-modal">
                                            <div class="modal-map">
                                                <div class="close">
                                                    <div class="linea"></div>
                                                </div>
                                                <div class="map">
                                                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.656310776548!2d-99.16046078509339!3d19.4272502868874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff33713d6f33%3A0xeb9779c09a192a0!2sEBC+-+Campus+Ciudad+de+M%C3%A9xico+Edificio+Liverpool!5e0!3m2!1ses!2smx!4v1533918782430" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="contenido-fecha">
                                        <div class="fecha-evento glyphicons glyphicons-calendar"></div>
                                        <p class="fecha">
                                            XX/XX/XXXX
                                        </p>
                                    </div>
                                </div>
                            </div>
        
                            <div class="widget">
                                <div class="campus">
                                    <h3>Campus</h3>
                                </div>
                                <div class="imagenes-eventos">
                                    <img src="../img/imagen-prueba-evento.jpg" alt="Imagen del evento en curso">
                                </div>
                                <div class="titulo-evento">
                                    <h4>Título Evento</h4>
                                    <p class="descripcion-texto">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt nobis, aspernatur dicta, possimus aperiam et maiores labore quisquam earum! Tempore.
                                    </p>
                                </div>
                                <div class="ubicacion-fecha">
                                    <a title="Ubicación del evento" class="contenido-ubicacion map1">
                                        <div class="ubicacion-evento glyphicons glyphicons-map-marker"></div>
                                        <p class="ubicacion">
                                            Ubicación
                                        </p>
                                    </a>
                                    
                                    <div class="mapGrande">
                                        <div class="contenido-map-modal">
                                            <div class="modal-map">
                                                <div class="close">
                                                    <div class="linea"></div>
                                                </div>
                                                <div class="map">
                                                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.656310776548!2d-99.16046078509339!3d19.4272502868874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff33713d6f33%3A0xeb9779c09a192a0!2sEBC+-+Campus+Ciudad+de+M%C3%A9xico+Edificio+Liverpool!5e0!3m2!1ses!2smx!4v1533918782430" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="contenido-fecha">
                                        <div class="fecha-evento glyphicons glyphicons-calendar"></div>
                                        <p class="fecha">
                                            XX/XX/XXXX
                                        </p>
                                    </div>
                                </div>
                            </div>
        
                            <!-- INICIO WIDGET -->
                            <div class="widget">
                                <div class="campus">
                                    <h3>Campus</h3>
                                </div>
                                <div class="imagenes-eventos">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Cat_November_2010-1a.jpg/220px-Cat_November_2010-1a.jpg" alt="Imagen del evento en curso">
                                </div>
                                <div class="titulo-evento">
                                    <h4>Título Evento</h4>
                                    <p class="descripcion-texto">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt nobis, aspernatur dicta, possimus aperiam et maiores labore quisquam earum! Tempore.
                                    </p>
                                </div>
                                <div class="ubicacion-fecha">
                                    <a title="Ubicación del evento" class="contenido-ubicacion map1">
                                        <div class="ubicacion-evento glyphicons glyphicons-map-marker"></div>
                                        <p class="ubicacion">
                                            Ubicación
                                        </p>
                                    </a>
                                    
                                    <div class="mapGrande">
                                        <div class="contenido-map-modal">
                                            <div class="modal-map">
                                                <div class="close">
                                                    <div class="linea"></div>
                                                </div>
                                                <div class="map">
                                                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.656310776548!2d-99.16046078509339!3d19.4272502868874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff33713d6f33%3A0xeb9779c09a192a0!2sEBC+-+Campus+Ciudad+de+M%C3%A9xico+Edificio+Liverpool!5e0!3m2!1ses!2smx!4v1533918782430" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="contenido-fecha">
                                        <div class="fecha-evento glyphicons glyphicons-calendar"></div>
                                        <p class="fecha">
                                            XX/XX/XXXX
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

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
                </nav>

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
