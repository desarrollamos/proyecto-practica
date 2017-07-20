<?php 

namespace App\Controllers;
/**
 * Operations with Users: CRUD
 */
class ConsultaMedicaController
{
/////////////////Variables////////////
private $idConsultaMedica;
private $cmFecha;
private $cmTitulo;
private $Empresa_idEmpresa;
private $HistorialClinico_idHistorialClinico;
private $Reserva_idReserva;
private $conn;
private $consultaMedica;
/////////////////Propiedades////////////

///////////GET///////////

function getidConsultaMedica(){return $this->idConsultaMedica;}
function getcmFecha(){return $this->cmFecha;}
function getcmTitulo(){return $this->cmTitulo;}
function getEmpresa_idEmpresa(){return $this->Empresa_idEmpresa;}
function getHistorialClinico_idHistorialClinico(){return $this->HistorialClinico_idHistorialClinico;}
function getReserva_idReserva(){return $this->Reserva_idReserva;}
///////////SET///////////

function setidConsultaMedica($valor){$this->idConsultaMedica=$valor;}
function setcmFecha($valor){$this->cmFecha=$valor;}
function setcmTitulo($valor){$this->cmTitulo=$valor;}
function setEmpresa_idEmpresa($valor){$this->Empresa_idEmpresa=$valor;}
function setHistorialClinico_idHistorialClinico($valor){$this->HistorialClinico_idHistorialClinico;}
function setReserva_idReserva($valor){$this->Reserva_idReserva;}

///////////METODOS////////

function __construct($icm, $fcm, $tcm, $eie, $hcihc, $rir){ //constructor
$this->idConsultaMedica=$icm;
$this->cmFecha=$fcm;
$this->cmTitulo=$tcm;
$this->Empresa_idEmpresa=$eie;
$this->HistorialClinico_idHistorialClinico=$hcihc;
$this->Reserva_idReserva=$rir;
}

public function CrearConsultaMedica()
    {
       
    }

public function obtenerConsultaMedica($icm)
    {
       
    }

public function modificarConsultaMedica($icm)
    {
       
    }

public function eliminarConsultaMedica($icm)
    {
       
    }
}


?>