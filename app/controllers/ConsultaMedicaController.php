<?php 

namespace App\Controllers;
/**
 * Operations with Users: CRUD
 */
class ConsultaMedicaController extends AbstractController
{
/////////////////Variables////////////
private $idConsultaMedica;
private $cmFecha;
private $cmTitulo;
private $HistorialClinico_idHistorialClinico;
private $Empresa_idEmpresa;
private $Reserva_idReserva;
/////////////////Propiedades////////////
///////////GET///////////
function getIdConsultaMedica(){return $this->idConsultaMedica;}
function getcmFecha(){return $this->cmFecha;}
function getcmTitulo(){return $this->cmTitulo;}
function getHistorialClinico_idHistorialClinico(){return $this->HistorialClinico_idHistorialClinico;}
function getEmpresa_idEmpresa(){return $this->Empresa_idEmpresa;}
function getReserva_idReserva(){return $this->Reserva_idReserva;}
///////////SET///////////
function setIdConsultaMedica($valor){$this->idConsultaMedica=$valor;}
function setcmFecha($valor){$this->cmFecha=$valor;}
function setcmTitulo($valor){$this->cmTitulo=$valor;}
function setEmpresa_idEmpresa($valor){$this->Empresa_idEmpresa=$valor;}
function setHistorialClinico_idHistorialClinico($valor){return $this->HistorialClinico_idHistorialClinico;}
function setReserva_idReserva($valor){return $this->Reserva_idReserva;} 

///////////METODOS////////

function __construct($icm, $fc, $tc, $eie, $hih, $rir){ //constructor
$this->idConsultaMedica=$icm;
$this->cmFecha=$fc;
$this->cmTitulo=$tc;
$this->Empresa_idEmpresa=$eie;
$this->HistorialClinico_idHistorialClinico=$hih;
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