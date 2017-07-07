<?php 

namespace App\Controllers;
/**
 * Operations with Users: CRUD
 */
class BonoConsulta extends AbstractController
{
/////////////////Variables////////////
private $idBonoConsulta;
private $ConsultaMedica_idConsultaMedica;
private $Paciente_idPaciente;
private $Reserva_idReserva;
private $Especialista_idEspecialista;
/////////////////Propiedades////////////

///////////GET///////////

function getIdBonoConsulta(){return $this->idBonoConsulta;}
function getConsultaMedica_idConsultaMedica(){return $this->ConsultaMedica_idConsultaMedica;}
function getPaciente_idPaciente(){return $this->Paciente_idPaciente;}
function getReserva_idReserva(){return $this->Reserva_idReserva;}
function getEspecialista_idEspecialista(){return $this->Especialista_idEspecialista;}

///////////SET///////////

function setIdBonoConsulta($valor){$this->idBonoConsulta=$valor;}
function setConsultaMedica_idConsultaMedica($valor){$this->ConsultaMedica_idConsultaMedica=$valor;}
function setPaciente_idPaciente($valor){$this->Paciente_idPaciente=$valor;}
function setReserva_idReserva($valor){$this->Reserva_idReserva=$valor;}
function setEspecialista_idEspecialista($valor){this->setEspecialista_idEspecialista;}

///////////METODOS////////

function __construc($ibc, $cic, $pip, $rir, $cic){//constructor
$this->idBonoConsulta=$ibc;
$this->ConsultaMedica_idConsultaMedica=$cic;
$this->Paciente_idPaciente=$pip;
$this->Reserva_idReserva=$rir;
$this->ConsultaMedica_idConsultaMedica=$cic;

}

public function crearBonoConsulta()
    {
       
    }

public function obtenerBonoConsulta()
    {
       
    }

public function modificarBonoConsulta($ibc)
    {
       
    }

public function eliminarBonoConsulta($ibc)
    {
       
    }
}


?>