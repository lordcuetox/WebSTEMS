<?php
require_once '../clases/Documentacion.php';
require_once '../clases/UtilDB.php';
session_start();

if ($_SESSION['cambiar_anio_trimestre'] == 0) {
    header('Location: cambiar_anio_trimestre.php');
    die();
    return;
}

$anio = isset($_SESSION['anio']) ? (int) $_SESSION['anio'] : 0;
$trimestre = isset($_SESSION['trimestre']) ? (int) $_SESSION['trimestre'] : 0;


if (!isset($_SESSION['cve_usuario'])) {
    header('Location:login.php');
    return;
}


$documentacion = new Documentacion();
$count = NULL;
$json = NULL;

if (isset($_POST['txtCveExpediente'])) {
    if ($_POST['txtCveExpediente'] != 0) {
        $documentacion = new Documentacion($_POST['txtCveExpediente']);
        $json = json_encode($documentacion->getJsonData());
    }
}


if (isset($_POST['xAccion'])) {
    if ($_POST['xAccion'] == 'grabar') {
        $documentacion->setCveArticulo($_POST['cmbCveArticulo']);
        $documentacion->setCveFraccion(($_POST['ajaxCmbFraccion'] == -1 ? 'null' : $_POST['ajaxCmbFraccion']));
        $documentacion->setCveInciso(($_POST['cmbInciso'] == -1 ? 'null' : $_POST['cmbInciso']));
        $documentacion->setCveApartado(($_POST['cmbApartado'] == -1 ? 'null' : $_POST['cmbApartado']));
        $documentacion->setCveClasificacion(($_POST['cmbClasificacion'] == -1 ? 'null' : $_POST['cmbClasificacion']));
        $documentacion->setAnio($anio);
        $documentacion->setTrimestre($trimestre);
        $documentacion->setCveReata($_SESSION['cve_usuario']);
        $documentacion->setDescripcion($_POST['txtDescripcion']);
        $documentacion->setExpediente($_POST['txtExpediente']);
        $documentacion->setFolio($_POST['txtFolio']);
        $documentacion->setAnexo($_POST['txtAnexo']);
        /* $documentacion->setRespuesta($_POST['']);          
          $documentacion->setPdf($_POST['']); */
        $documentacion->setInfomex(isset($_POST['txtInfomex']) ? "1" : "0");
        $documentacion->setSolicitud(isset($_POST['txtSolicitud']) ? "1" : "0");
        $documentacion->setFechaActualizacionDocumento($_POST['txtFechaActualizacionDocumento']);
        $documentacion->setCveModifico($_SESSION['cve_usuario']);
        $documentacion->setActivo(isset($_POST['cbxActivo']) ? 1 : 0);
        /* $fi = strtotime(($_POST['txtFechaInicio'] . " " . "00:00:00"));
          $ff = strtotime(($_POST['txtFechaFin'] . " " . "23:59:59"));
          $finicio = date('Y-m-d H:i:s', $fi);
          $ffin = date('Y-m-d H:i:s', $ff); */
        $count = $documentacion->grabar();
    }
    if ($_POST['xAccion'] == 'eliminar') {
        $documentacion->borrar($_POST['txtCveExpediente']);
    }


    if ($_POST['xAccion'] == 'logout') {
        unset($_SESSION['cve_usuario']);
        unset($_SESSION['nombre']);
        unset($_SESSION['cambiar_anio_trimestre']);
        unset($_SESSION['anio']);
        unset($_SESSION['trimestre']);
        header('Location:login.php');
        return;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Gestor de contenido del H. Ayuntamiento de Macuspana 2016-2018 | Transparencia</title>
        <meta charset="utf-8">
        <meta name="author" content="Webxico & Cuetox">
        <meta name="description" content="Gestor de contenido del H. Ayuntamiento de Macuspana 2016-2018">
        <meta name="keywords" content="ayuntamiento, Macuspana">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- IE -->
        <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico" />
        <!-- other browsers -->
        <link rel="icon" type="image/x-icon" href="../img/favicon.ico" />
        <link href="../js/jQuery/jquery-ui-1.11.4/jquery-ui.min.css" rel="stylesheet"/>
        <!-- Bootstrap Core CSS -->
        <link href="../startbootstrap-sb-admin-2-1.0.5/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <!-- MetisMenu CSS -->
        <link href="../startbootstrap-sb-admin-2-1.0.5/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet"/>
        <!-- Custom CSS -->
        <link href="../startbootstrap-sb-admin-2-1.0.5/dist/css/sb-admin-2.css" rel="stylesheet"/>
        <!-- Custom Fonts -->
        <link href="../startbootstrap-sb-admin-2-1.0.5/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="wrapper">
            <?php
            $_GET['q'] = "transparencia";
            include './includeMenuAdmin.php';
            ?>
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Transparencia</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row" >
                    <div class="col-sm-8">&nbsp;</div>
                    <div class="col-sm-8"><span class="glyphicon glyphicon-calendar"></span>&nbsp;&nbsp;<a href="cambiar_anio_trimestre.php">Cambiar año & trimestre</a></div>
                    <div class="col-sm-8">
                        <form role="form" name="frmDocumentacion" id="frmDocumentacion" action="cat_documentacion.php" method="POST">
                            <div class="form-group">
                                <label for="xAccion"><input type="hidden" class="form-control" name="xAccion" id="xAccion" value="0" /></label>

                                <input type="hidden" class="form-control" id="txtCveExpediente" name="txtCveExpediente"
                                       placeholder="ID Expediente" value="<?php echo($documentacion->getCveExpediente()); ?>">
                            </div>
                            <div class="form-group">
                                <label for="cmbCveArticulo">Artículo</label>
                                <select name="cmbCveArticulo" id="cmbCveArticulo" class="form-control" placeholder="Artículo">
                                    <option value="0">--------- SELECCIONE UNA OPCIÓN ---------</option>
                                    <?php
                                    $sql2 = "SELECT * FROM cat_articulos where activo=1 ORDER BY descripcion";
                                    $rst2 = UtilDB::ejecutaConsulta($sql2);
                                    foreach ($rst2 as $row) {
                                        echo("<option value='" . $row['cve_articulo'] . "' " . ($documentacion->getCveArticulo() != 0 ? ($documentacion->getCveArticulo() == $row['cve_articulo'] ? "selected" : "") : "") . ">" . $row['descripcion'] . "</option>");
                                    }
                                    $rst2->closeCursor();
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="ajaxCmbFraccion">Fracción:</label>
                                <select name="ajaxCmbFraccion" id="ajaxCmbFraccion" class="form-control" placeholder="Fracción" disabled>
                                    <option value="0">--------- SELECCIONE UNA OPCIÓN ---------</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="cmbInciso">Incisos:</label>
                                <select name="cmbInciso" id="cmbInciso" class="form-control" placeholder="Inciso" disabled>
                                    <option value="0">--------- SELECCIONE UNA OPCIÓN ---------</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="cmbApartado">Apartado:</label>
                                <select name="cmbApartado" id="cmbApartado" class="form-control" placeholder="Apartado" disabled>
                                    <option value="0">--------- SELECCIONE UNA OPCIÓN ---------</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="cmbClasificacion">Clasificación del apartado:</label>
                                <select name="cmbClasificacion" id="cmbClasificacion" class="form-control" placeholder="Clasificación" disabled>
                                    <option value="0">--------- SELECCIONE UNA OPCIÓN ---------</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="txtDescripcion">Descripción:</label>
                                <input type="text" class="form-control" id="txtDescripcion" name="txtDescripcion" 
                                       placeholder="Descripción del documento o solicitud a reportar(aplica para todos)" value="<?php echo($documentacion->getDescripcion()); ?>">
                            </div>
                            <div class="form-group">
                                <label for="txtExpediente"> Expediente:</label>
                                <input type="text" class="form-control" id="txtExpediente" name="txtExpediente" 
                                       placeholder="Número o nombre de la solicitud  a reportar" value="<?php echo($documentacion->getExpediente()); ?>">
                            </div>
                            <div class="form-group">
                                <label for="txtFolio"> Folio:</label>
                                <input type="text" class="form-control" id="txtFolio" name="txtFolio" 
                                       placeholder="Folio  de la solicitud  reportar" value="<?php echo($documentacion->getFolio()); ?>">
                            </div>
                            <div class="form-group">
                                <label for="txtAnexo">URL del anexo:</label>
                                <input type="text" class="form-control" id="txtAnexo" name="txtAnexo" 
                                       placeholder="URL del anexo" value="<?php echo($documentacion->getAnexo()); ?>" size="100" maxlength="100">
                            </div>
                            <div class="form-group">
                                <div class="date-form">
                                    <div class="form-horizontal">
                                        <div class="control-group">
                                            <label for="txtFechaActualizacionDocumento">Fecha de actualización del documento:</label>
                                            <div class="controls">
                                                <div class="input-group">
                                                    <input id="txtFechaActualizacionDocumento" name="txtFechaActualizacionDocumento" type="text" class="date-picker form-control"  value="<?php echo($documentacion->getFechaActualizacionDocumento()); ?>"/>
                                                    <label for="txtFechaActualizacionDocumento" class="input-group-addon btn"><span class="glyphicon glyphicon-calendar"></span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="txtSolicitud" name="txtSolicitud" <?php echo($documentacion->getSolicitud() == 1 ? "checked" : ""); ?>> ¿Es solicitud?:</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="txtInfomex" name="txtInfomex" <?php echo($documentacion->getInfomex() == 1 ? "checked" : ""); ?>> ¿Fué hecha vía INFOMEX?:</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" id="cbxActivo" name="cbxActivo" <?php echo($documentacion->getCveExpediente() != 0 ? ($documentacion->getActivo() ? "checked" : "") : "checked"); ?>> Activo</label>
                            </div>
                            <button type="button" class="btn btn-primary" id="btnLimpiar" name="btnLimpiar" onclick="limpiar();">Nuevo registro</button>
                            <button type="button" class="btn btn-success" id="btnGrabar" name="btnGrabar" onclick="grabar();">Enviar</button>
                            <br/>
                            <br/>
                            <div class="row" >
                                <!-- Aqui se cargan los datos vía AJAX-->
                                <div class="col-sm-12" id="ajax">&nbsp;</div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-4">&nbsp;</div>
                </div>
                <div class="row" >
                    <div class="col-sm-12">
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-sm-12">
                        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal2Label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <!-- jQuery -->
        <script src="../startbootstrap-sb-admin-2-1.0.5/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="../js/jQuery/jquery-ui-1.11.4/jquery-ui.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="../startbootstrap-sb-admin-2-1.0.5/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Metis Menu Plugin JavaScript -->
        <script src="../startbootstrap-sb-admin-2-1.0.5/bower_components/metisMenu/dist/metisMenu.min.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="../startbootstrap-sb-admin-2-1.0.5/dist/js/sb-admin-2.js"></script>
        <script>
                                var anio = <?php echo($anio); ?>;
                                var trimestre = <?php echo($trimestre); ?>;

                                $(document).ready(function () {
                                    $(".date-picker").datepicker({yearRange: "-0:+10", changeMonth: true, changeYear: true, dateFormat: 'yy-mm-dd'});
                                    
                                    $("#cmbCveArticulo").change(function () {
                                        //   var optionSelected = $("option:selected", this);
                                        //    var valueSelected = this.value;
                                        cveArticulo = this.value;
                                        cargarMuestra($("#cmbCveArticulo").val(), $("#ajaxCmbFraccion").val(), $("#cmbInciso").val(), $("#cmbApartado").val(), $("#cmbClasificacion").val(), anio, trimestre);
                                        cargarComboFraccion(cveArticulo);

                                    });

                                    $("#ajaxCmbFraccion").change(function () {
                                        cargarMuestra($("#cmbCveArticulo").val(), $("#ajaxCmbFraccion").val(), $("#cmbInciso").val(), $("#cmbApartado").val(), $("#cmbClasificacion").val(), anio, trimestre);
                                        cargarComboIncisos($("#cmbCveArticulo").val(), this.value);

                                    });

                                    $("#cmbInciso").change(function () {
                                        cargarMuestra($("#cmbCveArticulo").val(), $("#ajaxCmbFraccion").val(), $("#cmbInciso").val(), $("#cmbApartado").val(), $("#cmbClasificacion").val(), anio, trimestre);

                                        cargarComboApartados($("#cmbCveArticulo").val(), $("#ajaxCmbFraccion").val(), this.value);

                                    });

                                    $("#cmbApartado").change(function () {
                                        cargarMuestra($("#cmbCveArticulo").val(), $("#ajaxCmbFraccion").val(), $("#cmbInciso").val(), $("#cmbApartado").val(), $("#cmbClasificacion").val(), anio, trimestre);

                                        cargarComboClasificacion($("#cmbCveArticulo").val(), $("#ajaxCmbFraccion").val(), $("#cmbInciso").val(), this.value);

                                    });

                                    /* Limpiar la ventana modal para volver a usar*/
                                    $('body').on('hidden.bs.modal', '.modal', function () {
                                        $(this).removeData('bs.modal');
                                    });

                                    $('#myModal').on('shown.bs.modal', function (e) {
                                        $('#myModal2').modal('hide');
                                    });

                                    <?php
                                    // Cuando se ha recargado en base al id del documento se realiza lo siguiente:
                                    if ($documentacion->getCveExpediente() != 0 && $json != NULL) {
                                    ?>
                                    recargar2(<?php echo($json); ?>,<?php echo($count != NULL ? $count:0); ?>);
                                    <?php
                                    }else{ echo("$(\".date-picker\").datepicker('setDate', new Date());");}
                                    ?>

                                });

                                function cargarComboFraccion(cveArticulo, opcionalJson)
                                {
                                    opcionalJson = (typeof opcionalJson === undefined) ? {} : opcionalJson;
                                    //En el div con id 'ajaxCmbFraccion' se cargara lo que devuelva el ajax, esta petición  es realizada como POST
                                    $("#ajaxCmbFraccion").load("cat_fracciones_combos_ajax.php", {"cveArticulo": cveArticulo}, function (responseTxt, statusTxt, xhr) {
                                        $("#ajaxCmbFraccion").attr({'disabled': false});
                                        if (!(opcionalJson === undefined || opcionalJson.cveFraccion === null))
                                        {
                                            $("#ajaxCmbFraccion").val(opcionalJson.cveFraccion);
                                        }
                                        cargarComboFraccion2(cveArticulo, $("#ajaxCmbFraccion").val(), opcionalJson);
                                    });
                                }

                                function cargarComboFraccion2(cveArticulo, cveFraccion, opcionalJson)
                                {
                                    opcionalJson = (typeof opcionalJson === undefined) ? {} : opcionalJson;
                                    //En el div con id 'ajaxCmbFraccion' se cargara lo que devuelva el ajax, esta petición  es realizada como POST
                                    $("#ajaxCmbFraccion").load("cat_fracciones_combos_ajax.php", {"cveArticulo": cveArticulo, "cveFraccion": cveFraccion}, function (responseTxt, statusTxt, xhr) {
                                        $("#ajaxCmbFraccion").attr({'disabled': false});
                                        if (!(opcionalJson === undefined || opcionalJson.cveFraccion === null))
                                        {
                                            $("#ajaxCmbFraccion").val(opcionalJson.cveFraccion);
                                        }
                                        cargarComboIncisos(cveArticulo, cveFraccion, opcionalJson);
                                    });
                                }

                                function cargarComboIncisos(cveArticulo, cveFraccion, opcionalJson)
                                {
                                    opcionalJson = (typeof opcionalJson === undefined) ? {} : opcionalJson;
                                    //En el div con id 'cmbInciso' se cargara lo que devuelva el ajax, esta petición  es realizada como POST
                                    $("#cmbInciso").load("cat_incisos_combos_ajax.php", {"cveArticulo": cveArticulo, "cveFraccion": cveFraccion}, function (responseTxt, statusTxt, xhr) {
                                        $("#cmbInciso").attr({'disabled': false});
                                        if (!(opcionalJson === undefined || opcionalJson.cveInciso === null))
                                        {
                                            $("#cmbInciso").val(opcionalJson.cveInciso);
                                        }
                                        cargarComboIncisos2(cveArticulo, cveFraccion, $("#cmbInciso").val(), opcionalJson);
                                    });

                                }

                                function cargarComboIncisos2(cveArticulo, cveFraccion, cveInciso, opcionalJson)
                                {
                                    opcionalJson = (typeof opcionalJson === undefined) ? {} : opcionalJson;
                                    //En el div con id 'cmbInciso' se cargara lo que devuelva el ajax, esta petición  es realizada como POST
                                    $("#cmbInciso").load("cat_incisos_combos_ajax.php", {"cveArticulo": cveArticulo, "cveFraccion": cveFraccion, "cveInciso": cveInciso}, function (responseTxt, statusTxt, xhr) {
                                        $("#cmbInciso").attr({'disabled': false});
                                        if (!(opcionalJson === undefined || opcionalJson.cveInciso === null))
                                        {
                                            $("#cmbInciso").val(opcionalJson.cveInciso);
                                        }
                                        cargarComboApartados(cveArticulo, cveFraccion, cveInciso, opcionalJson);
                                    });

                                }

                                function cargarComboApartados(cveArticulo, cveFraccion, cveInciso, opcionalJson)
                                {
                                    opcionalJson = (typeof opcionalJson === undefined) ? {} : opcionalJson;
                                    //En el div con id 'cmbApartado' se cargara lo que devuelva el ajax, esta petición  es realizada como POST
                                    $("#cmbApartado").load("cat_apartados_combos_ajax.php", {"cveArticulo": cveArticulo, "cveFraccion": cveFraccion, "cveInciso": cveInciso}, function (responseTxt, statusTxt, xhr) {
                                        $("#cmbApartado").attr({'disabled': false});
                                        if (!(opcionalJson === undefined || opcionalJson.cveApartado === null))
                                        {
                                            $("#cmbApartado").val(opcionalJson.cveApartado);
                                        }
                                        cargarComboApartados2(cveArticulo, cveFraccion, cveInciso, $("#cmbApartado").val(), opcionalJson);
                                    });

                                }

                                function cargarComboApartados2(cveArticulo, cveFraccion, cveInciso, cveApartado, opcionalJson)
                                {
                                    opcionalJson = (typeof opcionalJson === undefined) ? {} : opcionalJson;
                                    //En el div con id 'cmbApartado' se cargara lo que devuelva el ajax, esta petición  es realizada como POST
                                    $("#cmbApartado").load("cat_apartados_combos_ajax.php", {"cveArticulo": cveArticulo, "cveFraccion": cveFraccion, "cveInciso": cveInciso, "cveApartado": cveApartado}, function (responseTxt, statusTxt, xhr) {
                                        $("#cmbApartado").attr({'disabled': false});
                                        if (!(opcionalJson === undefined || opcionalJson.cveApartado === null))
                                        {
                                            $("#cmbApartado").val(opcionalJson.cveApartado);
                                        }
                                        cargarComboClasificacion(cveArticulo, cveFraccion, cveInciso, cveApartado, opcionalJson);
                                    });

                                }

                                function cargarComboClasificacion(cveArticulo, cveFraccion, cveInciso, cveApartado, opcionalJson)
                                {
                                    opcionalJson = (typeof opcionalJson === undefined) ? {} : opcionalJson;
                                    //En el div con id 'cmbClasificacion' se cargara lo que devuelva el ajax, esta petición  es realizada como POST
                                    $("#cmbClasificacion").load("cat_clasificacion_combos_ajax.php", {"cveArticulo": cveArticulo, "cveFraccion": cveFraccion, "cveInciso": cveInciso, "cveApartado": cveApartado}, function (responseTxt, statusTxt, xhr) {
                                        $("#cmbClasificacion").attr({'disabled': false});
                                        if (!(opcionalJson === undefined || opcionalJson.cveClasificacion === null))
                                        {
                                            $("#cmbClasificacion").val(opcionalJson.cveClasificacion);
                                        }
                                        cargarComboClasificacion2(cveArticulo, cveFraccion, cveInciso, cveApartado, $("#cmbClasificacion").val(), opcionalJson);
                                    });

                                }

                                function cargarComboClasificacion2(cveArticulo, cveFraccion, cveInciso, cveApartado, cveClasificacion, opcionalJson)
                                {
                                    opcionalJson = (typeof opcionalJson === undefined) ? {} : opcionalJson;
                                    //En el div con id 'cmbClasificacion' se cargara lo que devuelva el ajax, esta petición  es realizada como POST
                                    $("#cmbClasificacion").load("cat_clasificacion_combos_ajax.php", {"cveArticulo": cveArticulo, "cveFraccion": cveFraccion, "cveInciso": cveInciso, "cveApartado": cveApartado, "cveClasificacion": cveClasificacion}, function (responseTxt, statusTxt, xhr) {
                                        $("#cmbClasificacion").attr({'disabled': false});
                                        if (!(opcionalJson === undefined || opcionalJson.cveClasificacion === null))
                                        {
                                            $("#cmbClasificacion").val(opcionalJson.cveClasificacion);
                                        }
                                    });
                                }

                                function cargarMuestra(cveArticulo, cveFraccion, cveInciso, cveApartado, cveClasificacion, anio, trimestre)
                                {   //En el div con id 'ajax' se cargara lo que devuelva el ajax, esta petición  es realizada como POST
                                    $("#ajax").load("cat_expedientes_ajax.php", {"cveArticulo": cveArticulo, "cveFraccion": cveFraccion, "cveInciso": cveInciso, "cveApartado": cveApartado, "cveClasificacion": cveClasificacion, "anio": anio, "trimestre": trimestre});
                                }


                                function logout()
                                {
                                    $("#xAccion").val("logout");
                                    $("#frmDocumentacion").submit();
                                }

                                function msg(opcion)
                                {
                                    switch (opcion)
                                    {
                                        case 0:
                                            alert("[ERROR] Documento no grabado");
                                            break;
                                        case 1:
                                            alert("Documento grabado con éxito!");
                                            break;
                                        default:
                                            break;

                                    }

                                }

                                function limpiar()
                                {
                                    $("#xAccion").val("0");
                                    $("#txtCveExpediente").val("0");
                                    $("#frmDocumentacion").submit();
                                }

                                function validar()
                                {
                                    var msg = "";
                                    var valido = false;

                                    if ($("#cmbCveArticulo").val() === "0")
                                    {
                                        msg += "Es necesario que elija un artículo.\n";
                                    }
                                    else
                                    {
                                        if ($("#ajaxCmbFraccion").val() === "0")
                                        {
                                            msg += "Es necesario que elija una fracción.\n";
                                        } else
                                        {
                                            if ($("#cmbInciso").val() === "0")
                                            {
                                                msg += "Es necesario que elija un inciso.\n";
                                            } else
                                            {
                                                if ($("#cmbApartado").val() === "0")
                                                {
                                                    msg += "Es necesario que elija un apartado.\n";
                                                } else
                                                {
                                                    if ($("#cmbClasificacion").val() === "0")
                                                    {
                                                        msg += "Es necesario que elija una clasificación del apartado.\n";
                                                    } else
                                                    {
                                                        if (anio === 0)
                                                        {
                                                            msg += "Es necesario que elija el año.\n";
                                                        } else
                                                        {
                                                            if (trimestre === 0)
                                                            {
                                                                msg += "Es necesario que elija el trimestre.\n";
                                                            } else
                                                            {
                                                                if ($("#txtDescripcion").val() !== "")
                                                                {
                                                                    valido = true;
                                                                } else
                                                                {
                                                                    msg += "Es necesario que agregue una descripción.\n";


                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }


                                    if (!valido)
                                    {
                                        alert(msg);
                                    }
                                    return valido;

                                }

                                function grabar()
                                {
                                    if (validar())
                                    {
                                        $("#xAccion").val("grabar");
                                        $("#frmDocumentacion").submit();
                                    }
                                }

                                function eliminar(valor)
                                {
                                    if (confirm("¿Estás realmente seguro de eliminar este registro?"))
                                    {
                                        $("#xAccion").val("eliminar");
                                        $("#txtCveExpediente").val(valor);
                                        $("#frmDocumentacion").submit();
                                    }
                                }

                                function recargar()
                                {
                                    $("#xAccion").val("recargar");
                                    $("#frmDocumentacion").submit();

                                }

                                function recargar2(json, count)
                                {
                                    if (count > 0)
                                    {
                                        $("#cmbCveArticulo").val(json.cveArticulo);
                                        cargarComboFraccion(json.cveArticulo, json);
                                        
                                        $('#myModal2 .modal-dialog .modal-content').load('cat_documentacion_opciones.php', {"id": json.cveExpediente}, function (result) {
                                            $('#myModal2').modal({show: true});
                                        });
                                    }
                                    else
                                    {
                                        $("#cmbCveArticulo").val(json.cveArticulo);
                                        cargarComboFraccion(json.cveArticulo, json);
                                    }

                                }

                                function subir()
                                {
                                    if ($("#fileToUpload").val() !== "")
                                    {
                                        $("#xAccion2").val("upload");
                                        $("#frmUpload").submit();
                                    }
                                    else
                                    {
                                        alert("No ha seleccionado un archivo para subir.");
                                    }
                                }

                                msg(<?php echo($count) ?>);
        </script>
    </body>
</html>