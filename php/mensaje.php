<?php 
$origin = "mensaje"; 
require_once 'contador_visitas.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Sitio oficial del STEMS | Mensaje</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="STEMS" />
        <meta name="description" content="Sitio oficial del STEMS. Mensaje" />
        <!-- IE -->
        <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico" />
        <!-- other browsers -->
        <link rel="icon" type="image/x-icon" href="../img/favicon.ico" />
        <link href="../twbs/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="../css/twbscolor2.css" rel="stylesheet"/>
        <link href="../css/municipio1.css" rel="stylesheet"/>
        <style>
            .semblanza {
                font-size: 16px;
                line-height: 2;
                background: transparent;
                 background-repeat: no-repeat;
                 background-position: bottom;
               
                
            }
            .semblanza .title {
                font-size: 18px;
            }
            
            /* Trailer box */
            .trailer_box { text-align: center; position: relative; line-height: 0; padding: 15px; }
            .trailer_box a { display: block; }
            .trailer_box a:after { content: ""; display: block; position: absolute; left: 0; bottom: 0; z-index: 1; width: 100%; height: 100%; filter: alpha(opacity=0); opacity: 0; background: rgba(0,0,0,.15); }
            .trailer_box:hover a:after { filter: alpha(opacity=100); opacity: 100; }
            .trailer_box .desc { position: absolute; left: 0; bottom: 0; z-index: 2; width: 100%; padding: 25px 15px 0px; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; }
            .trailer_box .desc h2 { margin: 0; position: relative; bottom: 0; font-size: 30px; line-height: 30px; }
            .trailer_box:hover .desc h2 { bottom: 20px;}
            .trailer_box .desc .subtitle { display: inline-block; position: relative; bottom: 0; line-height: normal; letter-spacing: 2px; padding: 4px 8px; text-transform: uppercase; margin-bottom: 15px; -webkit-border-radius: 3px; border-radius: 3px;  }
            .trailer_box:hover .desc .subtitle { bottom: 20px; }
            .trailer_box .desc .line { height: 1px; width: 0%; margin: 0 auto; background: #111; overflow: hidden; display: block; }
            .trailer_box:hover .desc .line { width: 60%; }

            /* Animation */
            .trailer_box a:after,
            .trailer_box .desc .subtitle,
            .trailer_box .desc .line,
            .trailer_box .desc h2 { -webkit-transition: all 0.3s ease-in-out; -moz-transition: all 0.3s ease-in-out; -o-transition: all 0.3s ease-in-out; transition: all 0.3s ease-in-out; }

            .trailer_box .desc .subtitle {
                background-color: #3B3B3B;
            }

            .trailer_box .desc .subtitle {
                color: #fff;
                
            }

            .trailer_box .desc h2 {
                font-size: 14px;
                line-height: 20px;
            }

            .trailer_box .desc h2 {
                color: #fff;
            }
            
            h2 {
                font-size: 14px;
                line-height: 20px;
            }
            h2:hover {
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <?php require_once 'include_header.php'; ?>     
            <div class="row">

                <div class="trailer_box">

                    <div class="desc">
                        <div class="subtitle"> Profesor Candelario García Torres</div>
                        <div class="line"></div>

                    </div>

                </div>

            </div>
            <div class="row">
                                
                
                <div class="col-md-10 col-md-offset-1 semblanza">
                    
                    <img src="../img/mensaje/secretario_foto.jpg" alt="Candelario García Torres" class="img-responsive" style="float:left; margin: 15px 15px 0 0"/>
 
                    <p class="text-justify">Renovarse o morir, cita un adagio popular que adquiere mayor relevancia en esta nueva etapa de transición política, en la que el sector educativo está llamado a ser uno de los ejes fundamentales para el desarrollo y la transformación de nuestra sociedad.</p>
                    <p class="text-justify">El anuncio del Presidente de México, Lic. Andrés Manuel López Obrador, de dar marcha atrás a la Reforma Educativa para impulsar una amplia y profunda restructuración de este sector, tanto en el aspecto pedagógico como en lo estructural y laboral, abre la posibilidad de que todos los involucrados en los procesos de enseñanza-aprendizaje podamos aportar nuestras experiencias, aptitudes y conocimientos, para enriquecer el proyecto de nación en esta materia.</p>
                    <p class="text-justify">El Sindicato de Trabajadores de Educación Media Superior del CECYTE Tabasco, integrado por hombres y mujeres con vocación de servicio, refrenda su compromiso con las causas sociales más nobles de nuestro estado y se declara listo para participar en este proceso transformador, contribuyendo desde su ámbito con renovadas ideas y propuestas, salvaguardando siempre los intereses de sus agremiados.</p>
                    <p class="text-justify">Durante mi gestión al frente de la Secretaría General del STEMS, hemos logrado importantes beneficios en favor de las familias de cada uno de los trabajadores administrativos, docentes y de intendencia, mejorando las percepciones salariales e incrementando las prestaciones que por ley tenemos derecho, como los AFORES y los Créditos de Vivienda.</p>
                    <p class="text-justify">Actuando siempre con una responsabilidad inquebrantable, estamos fortaleciendo las relaciones institucionales para aportar lo mejor de nosotros en la tarea de mejorar el sector educativo, particularmente el nivel medio superior, y recibiendo a cambio una remuneración justa por nuestro esfuerzo laboral.</p>
                    <p class="text-justify">Este es el camino que debemos transitar en el CECYTE para que podamos ser partícipes de la Cuarta Transformación de México, con una visión de Estado, una actitud propositiva y un espíritu de colaboración, pues estamos convencidos de que sólo a través de la educación lograremos consolidar el desarrollo de Tabasco.</p>
                </div>
                  <?php require_once 'include_footer.php'; ?>
        <script src="../js/jQuery/jquery-1.11.3.min.js"></script>
        <script src="../twbs/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpdw9gyXrQvIvyLrVi9FneyumQOE8_9CA&sensor=true"></script>
        <script src="../js/maps.js" data-name="map" id="map"></script>
    </body>
</html>