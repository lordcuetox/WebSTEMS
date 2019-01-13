<?php
$path = "";

if (isset($origin) && $origin != "") {
    $path = "../";
}
?>
<div class="row top-buffer" id="contacto">
    <div class="col-md-12">
        <span class="visible-md visible-lg"> <img src="<?php echo($path); ?>img//titulo_mapa.png" alt="" class="img-responsive"/></span>
        <span class="visible-xs visible-sm text-center"><img src="<?php echo($path); ?>img/titulo_mapa.png" alt="" class="img-responsive"/></span>
    </div>
    <div class="clearfix visible-md-block"></div>
    <div class="col-md-12">
        <div id="google_maps">Cargando Google Maps ...</div>
    </div>
    <div class="clearfix visible-md-block"></div>
    <div class="col-md-12">
        <div class="row" style="background-color:#3B3B3B">
            <div class="col-md-3 text-left">
                <img src="<?php echo($path); ?>img/logo_stems_inferior.png" alt="STEMS"/>
            </div>
            <div class="col-md-3">
                <ul style="list-style: none;text-transform: uppercase; color:#FFFEFF;">
                    <li><a href="<?php echo($origin == "" ? "index.php" : "../index.php"); ?>">Inicio</a></li>
                    <li><a href="<?php echo($origin == "" ? "php/" : ""); ?>mensaje.php">Mensaje del Secretario General</a></li>
                    <li><a href="<?php echo($origin == "" ? "php/" : ""); ?>directorio.php">Directorio</a></li>
                    <li><a href="<?php echo($origin == "" ? "php/" : ""); ?>dependencias.php">Transparencia</a></li>
                    <li><a href="<?php echo($origin == "" ? "php/" : ""); ?>tramites.php">Trabajo Sindical</a></li>
                    <li><a href="<?php echo($origin == "" ? "php/" : ""); ?>sala_prensa.php">Sala de prensa</a></li>
                    <li><a href="<?php echo($origin == "" ? "php/" : ""); ?>transparencia.php">Formatos</a></li>
                </ul>
            </div>
            <div class="col-md-3" style="color:#FFFEFF">
                <p>  </p>
                <p>Correo:stemscecyte@gmail.com</p>
                <p>Dirección: Calle Tulipanes No. 111, Col. López Mateos, Centro, Tabasco.</p>
            </div>
            <div class="col-md-3 text-right">
               
            </div>
            <div class="clearfix visible-md-block"></div>
        </div>
    </div>
</div>
<footer>
    <div class="row" >
        <div class="col-md-12">
            <p class="text-center" style="background-color:#A6A4A5; color:#FFFEFF; height: 52px; padding-top: 15px;">Todos los derechos reservados STEMS CECyTE, Tabasco, México.  | Contador de visitas: <?php echo $visitas ?> </p>
        </div>
    </div>
</footer>