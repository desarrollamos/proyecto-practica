<?php 

 class ReservaActividad 
{
/////////////////Variables////////////

private $idReservaActividad;
private $raCantidad;
private $Reserva_idReserva;
private $Actividad_idActividad;

/////////////////Propiedades////////////

///////////GET///////////

function getIdReservaActividad(){return $this->idReservaActividad;}
function getRaCantidad(){return $this->raCantidad;}
function getReserva_idReserva(){return $this->Reserva_idReserva;}
function getActividad_idActividad(){return $this->Actividad_idActividad;}

///////////SET///////////

function setIdReservaActividad($valor){$this->idReservaActividad=$valor;}
function setraCantidad($valor){$this->raCantidad=$valor;}
function setReserva_idReserva($valor){$this->Reserva_idReserva=$valor;}
function setActividad_idActividad($valor){$this->Actividad_idActividad=$valor;}


///////////METODOS////////

function __construct($ira, $cra, $rir, $aia){//constructor
$this->idReservaActividad=$ira;
$this->raCantidad=$cra;
$this->Reserva_idReserva=$rir;
$this->Actividad_idActividad=$aia;

}

function crearReservaActividad(){
    //agregar funcion
}
function obtenerReservaActividad(){
    //agregar funcion
}

}

?>