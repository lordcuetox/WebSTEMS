<?php
$origin = "sala_prensa";
require_once '../clases/UtilDB.php';
require_once '../php/contador_visitas.php';
$sql = "";
$html = "";
$rst = NULL;
$mtz_meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
$anio = (int) date("Y");
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Sitio oficial del STEMS | Sala de prenssa</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="STEMS" />
        <meta name="description" content="SETEMS. Transparencia" />
        <!-- IE -->
        <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico" />
        <!-- other browsers -->
        <link rel="icon" type="image/x-icon" href="../img/favicon.ico" />
        <link href="../twbs/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="../css/twbscolor2.css" rel="stylesheet"/>
        <link href="../css/municipio1.css" rel="stylesheet"/>
        <link href="../js/jQuery/jquery-ui-1.11.4/jquery-ui.min.css" rel="stylesheet"/>
        <style>

            /* Smartphones*/
            @media (max-width:767px)
            {
                #boletines_informativos div div div figure figcaption { margin-bottom: 15px;}
            }

            /* Desktops Medium*/
            @media (min-width:992px)
            {
                #boletines_informativos div div div figure img { margin-top: 65px;}
            }
            /* Desktops Large*/
            @media (min-width:1200px)
            {
                #boletines_informativos div div div figure img { margin-top: 80px;}
            }
        </style>
    </head>
    <body>
        <div class="container">
            <?php require_once 'include_header.php'; ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 titulo_principal titulo_secundario">
                            <p class="to_uppercase">Boletines inform<span>ativos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
                            <h1 class="mes_anio"><?php echo(($mtz_meses[(int) date("m") - 1]) . " " . $anio); ?></h1>
                        </div>
                        <div class="col-sm-12 col-md-8">
                            <div class="row">
                                <div class="col-sm-4 col-md-4">
                                    <div class="row redes_sociales">
                                        <div class="col-xs-6 col-sm-12 col-md-6 col-lg-4">
                                            <img src="../img/youtube_circular.jpg" alt="Youtube" />
                                        </div>
                                        <div class="col-xs-6 col-sm-12 col-md-6 col-lg-8">
                                            <p>Youtube</p>
                                            <p>Observa nuestros vídeos</p>
                                        </div>
                                    </div>                            
                                </div>
                                <div class="col-sm-4 col-md-4">                            
                                    <div class="row redes_sociales">
                                        <div class="col-xs-6 col-sm-12 col-md-6 col-lg-4">
                                            <a href="https://www.facebook.com/stems.cecytetabasco.7" target="_blank"> <img src="../img/facebook_circular.jpg" alt="Facebook"/> </a>
                                        </div>
                                        <div class="col-xs-6 col-sm-12 col-md-6 col-lg-8" >
                                            <p>Facebook</p>
                                            <p>Síguenos</p>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-sm-4 col-md-4">                            
                                    <div class="row redes_sociales">
                                        <div class="col-xs-6 col-sm-12 col-md-6 col-lg-4">
                                            <a href="https://twitter.com/stemscecyte" target="_blank">   <img src="../img/twitter_circular.jpg" alt="Twitter"/> </a>
                                        </div>
                                        <div class="col-xs-6 col-sm-12 col-md-6 col-lg-8">
                                            <p>Twitter</p>
                                            <p>Escríbenos</p>
                                        </div>
                                    </div>
                                </div>                                
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12 border_top">
                    <div class="row" id="boletines_informativos">
                        
                        
                        
                        <?php
                $sql = "SELECT foto_portada,titulo,noticia_corta,cve_noticia,date_format(fecha_grabo,\"%d-%m-%Y\")as fecha_grabo FROM noticias WHERE foto_portada IS NOT NULL AND activo = 1 ORDER BY  cve_noticia desc";
                $rst = UtilDB::ejecutaConsulta($sql);
                $count = 0;
                if ($rst->rowCount() > 0) {
                    foreach ($rst as $row) {
                        $count=$count+1;
   
                        
                         $html .= "<div class=\"col-md-6 col-lg-6 top-buffer\">";
                           $html .= "<div class=\"row\">";
                            $html .= "<div class=\"col-sm-6 col-md-6 col-lg-6\">";
                             $html .= "<figure>";
                            $html .= "<img src = \"" ."..\\".$row['foto_portada'] . "\" alt = \"" . $row['titulo'] . "\" class = \"img-responsive\"/>";
                               $html .= " <figcaption>"."</figcaption>";
                              $html .= "</figure></div>";
                              $html .= "<div class=\"col-sm-6 col-md-6 col-lg-6\">";
                              $html .= "<p class=\"text-justify\"><strong>".$row['titulo']."</strong> </p>";
                              $html .= "<p class=\"text-justify\">".$row['noticia_corta']."...</p>";
                    $html .= "<a href = \"boletin_informativo.php?id=" . $row['cve_noticia'] . "\" class = \"btn btn-success\"><span class = \"glyphicon glyphicon-plus\"></span> Leer más</a>";
                              $html .= "</div>  </div> </div>";      
                                    
                                                  if ($count % 2 == 0) {
                            $html .= "<div class=\"clearfix visible-md-block visible-lg-block\"></div>";
                        }
                    }
                }
               
                $rst->closeCursor();
                $count = 0;
                echo($html);
                ?>         

                        <div class="clearfix visible-md-block visible-lg-block"></div>


                    </div>
                </div>
                <!-- <div class="col-md-12 col-lg-3">
                     <div class="row banners">
                         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12 top-buffer">
                             <img src="../img/sala_prensa/btn_comunicados.jpg" alt="Comunicados" class="img-responsive"/>
                         </div>
                         <div class="clearfix visible-xs-block visible-lg-block"></div>
                         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12 top-buffer">
                             <img src="../img/sala_prensa/btn_avisos_importantes.jpg" alt="Avisos importantes" class="img-responsive"/>
                         </div>
                         <div class="clearfix visible-xs-block visible-lg-block"></div>
                         <div class="clearfix visible-sm-block visible-md-block"></div>
                         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 top-buffer datepicker">
                             <div id="datepicker"></div>
                         </div>
                         <div class="clearfix visible-xs-block visible-lg-block"></div>
                     </div>
                 </div>-->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="modal fade" id="mDetalleBoletin" tabindex="-1" role="dialog" aria-labelledby="mDetalleBoletinLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content"></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php require_once 'include_footer.php'; ?>
        </div>
        <script src="../js/jQuery/jquery-1.11.3.min.js"></script>
        <script src="../js/jQuery/jquery-ui-1.11.4/jquery-ui.min.js"></script>
        <script src="../js/jQuery/jquery-ui-1.11.4/ui/i18n/datepicker-es.js"></script>
        <script src="../twbs/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpdw9gyXrQvIvyLrVi9FneyumQOE8_9CA&sensor=true"></script>
        <script src="../js/maps.js" data-name="map" id="map"></script>
        <script>
            $(document).ready(function () {

                $("#datepicker").datepicker({yearRange: "-0:+10", changeMonth: true, changeYear: true});
                $.datepicker.setDefaults($.datepicker.regional[ "es-MX" ]);

                $('body').on('hidden.bs.modal', '.modal', function () {
                    $(this).removeData('bs.modal');
                });

            });
        </script>
    </body>
</html>