<?php

/**
 *
 * @author Roberto Eder Weiss Juárez
 * @see {@link http://webxico.blogspot.mx/}
 */
class ClasificacionTramite {

    private $cveClasificacionTramite;
    private $nombre;
    private $activo;
    private $_existe;

    function __construct() {
        $this->limpiar();
        $args = func_get_args();
        $nargs = func_num_args();

        switch ($nargs) {
            case 1:
                self::__construct1($args[0]);
                break;
            //case 2:
            //self::__construct2($args[0], $args[1]);
            //break;
        }
    }

    function __construct1($cveClasificacionTramite) {
        $this->limpiar();
        $this->cveClasificacionTramite = $cveClasificacionTramite;
        $this->cargar();
    }

    private function limpiar() {
        $this->cveClasificacionTramite = 0;
        $this->nombre = "";
        $this->activo = false;
        $this->_existe = false;
    }

    function getCveClasificacionTramite() {
        return $this->cveClasificacionTramite;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getActivo() {
        return $this->activo;
    }

    function setCveClasificacionTramite($cveClasificacionTramite) {
        $this->cveClasificacionTramite = $cveClasificacionTramite;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setActivo($activo) {
        $this->activo = $activo;
    }

    function grabar() {
        $sql = "";
        $count = 0;

        if (!$this->_existe) {
            $this->cveClasificacionTramite = UtilDB::getSiguienteNumero("clasificaciones_tramites", "cve_clasificacion_tramite");
            $sql = "INSERT INTO clasificaciones_tramites VALUES($this->cveClasificacionTramite,'$this->nombre',$this->activo)";

            $count = UtilDB::ejecutaSQL($sql);
            if ($count > 0) {
                $this->_existe = true;
            }
        } else {
            $sql = "UPDATE clasificaciones_tramites SET ";
            $sql.= "nombre = '$this->nombre',";
            $sql.= "activo = $this->activo ";
            $sql.= " WHERE cve_clasificacion_tramite = $this->cveClasificacionTramite";
            $count = UtilDB::ejecutaSQL($sql);
        }

        return $count;
    }

    function cargar() {
        $sql = "SELECT * FROM clasificaciones_tramites WHERE cve_clasificacion_tramite = $this->cveClasificacionTramite";
        $rst = UtilDB::ejecutaConsulta($sql);

        foreach ($rst as $row) {
            $this->cveClasificacionTramite = $row['cve_clasificacion_tramite'];
            $this->nombre = $row['nombre'];
            $this->activo = $row['activo'];
            $this->_existe = true;
        }
        $rst->closeCursor();
    }

    function borrar() {
        $sql = "delete from clasificaciones_tramites  WHERE cve_clasificacion_tramite = $this->cveClasificacionTramite";
        UtilDB::ejecutaSQL($sql);
    }

}