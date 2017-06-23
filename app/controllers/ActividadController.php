<?php 

 class Actividad 
{
/////////////////Variables////////////
private $id_actividad;
private $nombre_actividad;
private $detalle_actividad;
private $fecha_creador_actividad;
private $fecha_edicion_actividad;
/////////////////Propiedades////////////

///////////GET///////////

function getId_actividad(){return $this->id_actividad;}
function getNombre_actividad(){return $this->nombre_actividad;}
function getDetalle_actividad(){return $this->detalle_actividad;}
function getFecha_creador_actividad(){return $this->fecha_creador_actividad;}
function getFecha_edicion_actividad(){return $this->getFecha_edicion_actividad;}
///////////SET///////////

function setId_actividad($valor){$this->id_actividad=$valor;}
function setNombre_actividad($valor){$this->nombre_actividad=$valor;}
function setDetalle_actividad($valor){$this->detale_actividad=$valor;}
function setFecha_creador_actividad($valor){$this->fecha_creador_actividad=$valor;}
function setFecha_edicion_actividad($valor){$this->fecha_edicion_actividad=$valor;}



///////////METODOS////////

function Actividad($na, $da, $fca, $fea){//constructor
$this->nombre_actividad=$na;
$this->detalle_actividad=$da;
$this->fecha_creador_actividad=$fca;
$this->fecha_edicion_actividad=$fea;

}

function crearActividad(){
    //agregar funcion
}
function eliminarActividad(){
    //agregar funcion
}
function modificarActividad(){
    //agregar funcion

}
}

?>