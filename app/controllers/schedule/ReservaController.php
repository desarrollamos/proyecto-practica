<?php 

 class Reserva 
{
/////////////////Variables////////////
private $idReserva;
private $reFechaInicio;
private $reFechaFin;
private $reEstado;
private $Stock_idStock;
/////////////////Propiedades////////////

///////////GET///////////

function getIdReserva(){return $this->idReserva;}
function getReFechaInicio(){return $this->reFechaInicio;}
function getReFechaFin(){return $this->reFechaFin;}
function getreEstado(){return $this->reEstado;}
function getStock_idStock(){return $this->getStock_idStock;}
///////////SET///////////

function setIdReserva($valor){$this->idReserva=$valor;}
function setReFechaInicio($valor){$this->reFechaInicio=$valor;}
function setReFechaFin($valor){$this->reFechaFin=$valor;}
function setreEstado($valor){$this->reEstado=$valor;}
function setStock_idStock($valor){$this->Stock_idStock=$valor;}



///////////METODOS////////

function __construct($ir, $fir, $ffr, $er, $sis){ //constructor
$this->idReserva=$ir;
$this->reFechaInicio=$fir;
$this->reFechaFin=$ffr;
$this->reEstado=$er;
$this->Stock_idStock=$sis;

}

function crearReserva(){
    //agregar funcion
}
function obtenerReserva(){
    //agregar funcion
}
function modificarReserva(){
    //agregar funcion
}
}