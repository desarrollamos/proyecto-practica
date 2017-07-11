<?php 

namespace App\Controllers;
/**
 * Operations with Users: CRUD
 */
class BoletaHonorarios extends AbstractController
{
/////////////////Variables////////////
private $idBoletaHonorario;
private $bhDescripcion;
private $bhValor;
private $bhTotal;
private $ConsultaMedica_idConsultaMedica;
/////////////////Propiedades////////////

///////////GET///////////

function getIdBoletaHonorario(){return $this->idBoletaHonorario;}
function getBhDescripcion(){return $this->bhDescripcion;}
function getBhValor(){return $this->bhValor;}
function getBhTotal(){return $this->bhTotal;}
function getConsultaMedica_idConsultaMedica() {return $this->ConsultaMedica_idConsultaMedica;}
///////////SET///////////

function setidBoletaHonorario($valor){$this->idBoletaHonorario=$valor;}
function setBhDescripcion($valor){$this->bhDescripcion=$valor;}
function setBhValor($valor){$this->bhValor=$valor;}
function setBhTotal($valor){$this->bhTotal=$valor;}
function setConsultaMedica_idConsultaMedica($valor){$this->ConsultaMedica_idConsultaMedica=$valor;}



///////////METODOS////////

function __construct($idbh, $dbh, $vbh, $tbh, $cic){//constructor
$this->idBoletaHonorario=$idbh;
$this->bhDescripcion=$dbh;
$this->bhValor=$vbh;
$this->bhTotal=$tbh;
$this->ConsultaMedica_idConsultaMedica=$cic;

}

public function crearBoletaHonorario()
    {
       
    }

public function obtenerBoletaHonorario($idbh)
    {
       
    }

public function emitirBoletaHonorario()
    {
       
    }

}

?>