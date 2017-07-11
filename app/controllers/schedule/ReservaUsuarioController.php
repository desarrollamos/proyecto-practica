<?php 

 class ReservaUsuario 
{
/////////////////Variables////////////

private $idReservaUsuario;
private $ruNombre;
private $Reserva_idReserva;
private $Usuario_idUsuario;

/////////////////Propiedades////////////

///////////GET///////////

function getIdReservaUsuario(){return $this->idReservaUsuario;}
function getRuNombre(){return $this->ruNombre;}
function getReserva_idReserva(){return $this->Reserva_idReserva;}
function getUsuario_idUsuario(){return $this->Usuario_idUsuario;}

///////////SET///////////

function setIdReservaUsuario($valor){$this->idReservaUsuario=$valor;}
function setRuNombre($valor){$this->ruNombre=$valor;}
function setReserva_idReserva($valor){$this->Reserva_idReserva=$valor;}
function setUsuario_idUsuario($valor){$this->Usuario_idUsuario=$valor;}


///////////METODOS////////

function __construct($ira, $nru, $rir, $uiu){//constructor
$this->idReservaUsuario=$ira;
$this->ruNombre=$nru;
$this->Reserva_idReserva=$rir;
$this->Usuario_idUsuario=$uiu;

}

function crearReservaUsuario(){
    //agregar funcion
}
function obtenerReservaUsuario(){
    //agregar funcion
}

}

?>