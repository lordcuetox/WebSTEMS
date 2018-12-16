<?php 
$origin = "directorio"; 
require_once 'contador_visitas.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Sitio oficial del STEMS | Directorio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="STEMS" />
        <meta name="description" content="Sitio oficial del STEMS. Directorio" />
        <!-- IE -->
        <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico" />
        <!-- other browsers -->
        <link rel="icon" type="image/x-icon" href="../img/favicon.ico" />
        <link href="../twbs/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="../css/twbscolor2.css" rel="stylesheet"/>
        <link href="../css/municipio1.css" rel="stylesheet"/>
        <style>

            /* Trailer box */
            .trailer_box { text-align: center; position: relative; line-height: 0; }
            .trailer_box a { display: block; }
            .trailer_box a:after { content: ""; display: block; position: absolute; left: 0; bottom: 0; z-index: 1; width: 100%; height: 100%; filter: alpha(opacity=0); opacity: 0; background: rgba(0,0,0,.15); }
            .trailer_box:hover a:after { filter: alpha(opacity=100); opacity: 100; }
            .trailer_box .desc { position: absolute; left: 0; bottom: 0; z-index: 2; width: 100%; padding: 20px 15px 0px; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; }
            .trailer_box .desc h2 { margin: 0; position: relative; bottom: 0; font-size: 30px; line-height: 30px; }
            .trailer_box:hover .desc h2 { bottom: 20px;}
            .trailer_box .desc .subtitle { display: inline-block; position: relative; bottom: 0; line-height: normal; letter-spacing: 1px; padding: 4px 8px; text-transform: uppercase; margin-bottom: 15px; -webkit-border-radius: 3px; border-radius: 3px; background-image: url(../img/stripes_10_w.png); }
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
            <div class="row text-center">
                <div class="col-md-12" >

                    <div class="col-md-12">
                        <h1 class="text-center text-muted">Directorio</h1>
                    </div>
                                        <div class="col-md-12">
                       
                            <div class="trailer_box">
                                <img class="img-responsive img-circle center-block" src="../img/dependencias/perfilnuevo.jpg"/>   
                                <div class="desc">
                                    <div class="subtitle">Secretaría General</div>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <h2>Candelario García Torres</h2>
                       
                 
                
     
                    </div>
                    <div class="col-md-12">

                        <div class="col-sm-3 ">
                            <div class="trailer_box">
                                <img class="img-responsive img-circle center-block" src="../img/dependencias/perfilnuevo.jpg"/>  
                                <div class="desc">
                                    <div class="subtitle">Cargo</div>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <h2>Nombre....</h2>
                        </div>
                        <div class="col-sm-3  ">
                            <div class="trailer_box">
                                <img class="img-responsive img-circle center-block" src="../img/dependencias/perfilnuevo.jpg"/> 
                                <div class="desc">
                                    <div class="subtitle">Cargo</div>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <h2>Nombre....</h2>
                        </div>
                        <div class="col-sm-3 ">
                            <div class="trailer_box">
                                <img class="img-responsive img-circle center-block" src="../img/dependencias/perfilnuevo.jpg"/>
                                <div class="desc">
                                    <div class="subtitle">Cargo</div>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <h2>Nombre</h2>
                        </div>
                                                <div class="col-sm-3  ">
                            <div class="trailer_box">
                                <img class="img-responsive img-circle center-block" src="../img/dependencias/perfilnuevo.jpg"/>
                                <div class="desc">
                                    <div class="subtitle">Cargo</div>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <h2>Nombre</h2>
                        </div>
                    </div>
                    <div class="col-md-12">

                        <div class="col-sm-3 ">
                            <div class="trailer_box">
                                <img class="img-responsive img-circle center-block" src="../img/dependencias/perfilnuevo.jpg"/>
                                <div class="desc">
                                    <div class="subtitle">Cargo</div>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <h2>Nombre...</h2>
                        </div>
                        <div class="col-sm-3">
                            <div class="trailer_box">
                                <img class="img-responsive img-circle center-block" src="../img/dependencias/perfilnuevo.jpg"/>
                                <div class="desc">
                                    <div class="subtitle">Cargo</div>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <h2>Nombre...</h2>
                        </div>
                        <div class="col-sm-3 ">
                            <div class="trailer_box">
                                <img class="img-responsive img-circle center-block" src="../img/dependencias/perfilnuevo.jpg"/>
                                <div class="desc">
                                    <div class="subtitle">Cargo</div>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <h2>Nombre...</h2>
                        </div>
                                                <div class="col-sm-3  ">
                            <div class="trailer_box">
                                <img class="img-responsive img-circle center-block" src="../img/dependencias/perfilnuevo.jpg"/>
                                <div class="desc">
                                    <div class="subtitle">Cargo</div>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <h2>Nombre</h2>
                        </div>
                    </div>
                    
                    
                   
                    <div class="col-md-12">
                        <h1 class="text-center text-muted">Coordinaciones</h1>
                    </div>
                    <div class="col-md-12">
                        <div class="col-sm-3  ">
                            <div class="trailer_box">
                                <img class="img-responsive img-circle center-block" src="../img/dependencias/perfilnuevo.jpg"/>
                                <div class="desc">
                                    <div class="subtitle">Plantel 1</div>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <h2>Nombre</h2>
                        </div>
                        <div class="col-sm-3 ">
                            <div class="trailer_box">
                                <img class="img-responsive img-circle center-block" src="../img/dependencias/perfilnuevo.jpg"/>
                                <div class="desc">
                                    <div class="subtitle">plantel 2</div>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <h2>Nombre</h2>
                        </div>
                        <div class="col-sm-3  ">
                            <div class="trailer_box">
                                <img class="img-responsive img-circle center-block" src="../img/dependencias/perfilnuevo.jpg"/>
                                <div class="desc">
                                    <div class="subtitle">Plantel 3</div>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <h2>Nombre</h2>
                        </div>
                        <div class="col-sm-3 ">
                            <div class="trailer_box">
                                <img class="img-responsive img-circle center-block" src="../img/dependencias/perfilnuevo.jpg"/>
                                <div class="desc">
                                    <div class="subtitle">Plantel 4</div>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <h2>Nombre</h2>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="col-sm-3  ">
                            <div class="trailer_box">
                                <img class="img-responsive img-circle center-block" src="../img/dependencias/perfilnuevo.jpg"/>
                                <div class="desc">
                                    <div class="subtitle">Plantel 5</div>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <h2>Nombre</h2>
                        </div>
                        <div class="col-sm-3 ">
                            <div class="trailer_box">
                                <img class="img-responsive img-circle center-block" src="../img/dependencias/perfilnuevo.jpg"/>
                                <div class="desc">
                                    <div class="subtitle">plantel 6</div>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <h2>Nombre</h2>
                        </div>
                        <div class="col-sm-3  ">
                            <div class="trailer_box">
                                <img class="img-responsive img-circle center-block" src="../img/dependencias/perfilnuevo.jpg"/>
                                <div class="desc">
                                    <div class="subtitle">Plantel 7</div>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <h2>Nombre</h2>
                        </div>
                        <div class="col-sm-3 ">
                            <div class="trailer_box">
                                <img class="img-responsive img-circle center-block" src="../img/dependencias/perfilnuevo.jpg"/>
                                <div class="desc">
                                    <div class="subtitle">Plantel 8</div>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <h2>Nombre</h2>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-sm-3  ">
                            <div class="trailer_box">
                                <img class="img-responsive img-circle center-block" src="../img/dependencias/perfilnuevo.jpg"/>
                                <div class="desc">
                                    <div class="subtitle">Plantel 9</div>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <h2>Nombre</h2>
                        </div>
                        <div class="col-sm-3 ">
                            <div class="trailer_box">
                                <img class="img-responsive img-circle center-block" src="../img/dependencias/perfilnuevo.jpg"/>
                                <div class="desc">
                                    <div class="subtitle">plantel 10</div>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <h2>Nombre</h2>
                        </div>
                        <div class="col-sm-3  ">
                            <div class="trailer_box">
                                <img class="img-responsive img-circle center-block" src="../img/dependencias/perfilnuevo.jpg"/>
                                <div class="desc">
                                    <div class="subtitle">Plantel 11</div>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <h2>Nombre</h2>
                        </div>
                        <div class="col-sm-3 ">
                            <div class="trailer_box">
                                <img class="img-responsive img-circle center-block" src="../img/dependencias/perfilnuevo.jpg"/>
                                <div class="desc">
                                    <div class="subtitle">Plantel 12</div>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <h2>Nombre</h2>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-sm-3  ">
                            <div class="trailer_box">
                                <img class="img-responsive img-circle center-block" src="../img/dependencias/perfilnuevo.jpg"/>
                                <div class="desc">
                                    <div class="subtitle">Plantel 13</div>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <h2>Nombre</h2>
                        </div>
                        <div class="col-sm-3 ">
                            <div class="trailer_box">
                                <img class="img-responsive img-circle center-block" src="../img/dependencias/perfilnuevo.jpg"/>
                                <div class="desc">
                                    <div class="subtitle">plantel 14</div>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <h2>Nombre</h2>
                        </div>
                        <div class="col-sm-3  ">
                            <div class="trailer_box">
                                <img class="img-responsive img-circle center-block" src="../img/dependencias/perfilnuevo.jpg"/>
                                <div class="desc">
                                    <div class="subtitle">Plantel 15</div>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <h2>Nombre</h2>
                        </div>
                        <div class="col-sm-3 ">
                            <div class="trailer_box">
                                <img class="img-responsive img-circle center-block" src="../img/dependencias/perfilnuevo.jpg"/>
                                <div class="desc">
                                    <div class="subtitle">Plantel 16</div>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <h2>Nombre</h2>
                        </div>
                    </div>
                                        <div class="col-md-12">
                        <div class="col-sm-3  ">
                            <div class="trailer_box">
                                <img class="img-responsive img-circle center-block" src="../img/dependencias/perfilnuevo.jpg"/>
                                <div class="desc">
                                    <div class="subtitle">Plantel 17</div>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <h2>Nombre</h2>
                        </div>
                        <div class="col-sm-3 ">
                            <div class="trailer_box">
                                <img class="img-responsive img-circle center-block" src="../img/dependencias/perfilnuevo.jpg"/>
                                <div class="desc">
                                    <div class="subtitle">plantel 18</div>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <h2>Nombre</h2>
                        </div>
                        <div class="col-sm-3  ">
                            <div class="trailer_box">
                                <img class="img-responsive img-circle center-block" src="../img/dependencias/perfilnuevo.jpg"/>
                                <div class="desc">
                                    <div class="subtitle">Plantel 19</div>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <h2>Nombre</h2>
                        </div>
                        <div class="col-sm-3 ">
                            <div class="trailer_box">
                                <img class="img-responsive img-circle center-block" src="../img/dependencias/perfilnuevo.jpg"/>
                                <div class="desc">
                                    <div class="subtitle">Plantel 20</div>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <h2>Nombre</h2>
                        </div>
                    </div>
                                        <div class="col-md-12">
                        <div class="col-sm-3  ">
                            <div class="trailer_box">
                                <img class="img-responsive img-circle center-block" src="../img/dependencias/perfilnuevo.jpg"/>
                                <div class="desc">
                                    <div class="subtitle">Plantel 21</div>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <h2>Nombre</h2>
                        </div>
                        <div class="col-sm-3 ">

                        </div>
                        <div class="col-sm-3  ">

                        </div>
                        <div class="col-sm-3 ">

                        </div>
                    </div>
    







                </div>
                <?php require_once 'include_footer.php'; ?>

            </div>
            <script src="../js/jQuery/jquery-1.11.3.min.js"></script>
            <script src="../twbs/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpdw9gyXrQvIvyLrVi9FneyumQOE8_9CA&sensor=true"></script>
            <script src="../js/maps.js" data-name="map" id="map"></script>
    </body>
</html>