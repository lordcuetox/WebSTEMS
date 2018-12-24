<?php 
$origin = "historia"; 
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
                        <div class="subtitle">Historia</div>
                        <div class="line"></div>

                    </div>

                </div>

            </div>
            <div class="row">
                                
                
                <div class="col-md-10 col-md-offset-1 semblanza">
                    

                    <p class="text-justify">El Colegio de Estudios científicos y Tecnológicos de Tabasco (CECyTE), nace como una necesidad del sector productivo y de servicios, tanto de la propia entidad federativa, así como del resto del territorio nacional, el cual es creado mediante un convenio de coordinación para la Creación, Operación y Apoyo Financiero de éste, celebrado entre la Secretaria de Educación Pública, representada por el titular C. Lic. Ernesto Zedillo Ponce de León y el Gobierno del Estado de Tabasco  representado por el C. Gobernador Manuel Gurria Ordoñez, gobernador constitucional y que a través del H. Congreso del Estado se hizo publicar en el diario oficial la ley orgánica que lo crea como un Organismo Público Descentralizado del Estado, con personalidad jurídica y patrimonios propios y de esta forma le dé la validez y legalidad a todos los actos que el Colegio ejecuta, atendiendo las disposiciones emanadas del Convenio de Coordinación del Colegio de Estudios Científicos y Tecnológicos del Estado de Tabasco (CECyTE), como integrante de un Subsistema de Educación Media Superior, Tecnológica de carácter bivalente, que de acuerdo con el plan nacional  de desarrollo, sociedad y gobierno tienen la responsabilidad histórica de cimentar las bases educativas para el México del siglo XXI, realizando un esfuerzo constante y vigoroso que consolide los cambios y asegure que la educación  se convierta en un apoyo decisivo para el desarrollo. En este orden de ideas, las partes contratantes señalan que no tomaran ninguna  acción individual o colectiva que entorpezca la continuidad de los programas de trabajo y labores estudiantiles, dado a que sus principales líneas de acción, consisten en la necesidad de fortalecer el sistema de educación tecnológica mediante el mejoramiento de su calidad académica, la multiplicación de opciones formativas en ese campo, la flexibilización curricular y una más estrecha vinculación de este modelo educativo con los requerimientos del sector productivo de bienes y servicios y con las economías regionales.</p></div>
                    <p class="text-justify"></p></div>
                    <p class="text-justify"></p>
         <?php require_once 'include_footer.php'; ?>
        </div>
                 
        <script src="../js/jQuery/jquery-1.11.3.min.js"></script>
        <script src="../twbs/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpdw9gyXrQvIvyLrVi9FneyumQOE8_9CA&sensor=true"></script>
        <script src="../js/maps.js" data-name="map" id="map"></script>
    </body>
</html>