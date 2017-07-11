<?php 

 class HistorialClinico 
{
/////////////////Variables////////////
private $idHistorialClinico;
private $hcNombre;
private $hcFechaCreacion;
private $Paciente_idPaciente;
private $Especialista_idEspecialista;
/////////////////Propiedades////////////

///////////GET///////////

function getIdHistorialClinico(){return $this->idHistorialClinico;}
function getHcNombre(){return $this->hcNombre;}
function getHcFechaCreacion(){return $this->hcFechaCreacion;}
function getPaciente_idPaciente(){return $this->Paciente_idPaciente;}
function getEspecialista_idEspecialista(){return $this->getEspecialista_idEspecialista;}
///////////SET///////////

function setIdHistorialClinico($valor){$this->idHistorialClinico=$valor;}
function setHcNombre($valor){$this->hcNombre=$valor;}
function setHcFechaCreacion($valor){$this->hcFechaCreacion=$valor;}
function setPaciente_idPaciente($valor){$this->Paciente_idPaciente=$valor;}
function setEspecialista_idEspecialista($valor){$this->Especialista_idEspecialista=$valor;}



///////////METODOS////////

function __construct($ihc, $nhc, $pip, $eie){//constructor
$this->idHistorialClinico=$ihc;
$this->hcNombre=$nhc;
$this->hcFechaCreacion=$da;
$this->Paciente_idPaciente=$pip;
$this->Especialista_idEspecialista=$eie;

}

function crearHistorialClinico(){
    //agregar funcion
}
function obtenerHistorialClinico(){
    //agregar funcion
}
function modificarHistorialClinico(){
    //agregar funcion

}
function eliminarHistorialClinico(){
    //agregar funcion

}

}

?>