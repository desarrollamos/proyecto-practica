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

/////////////////Propiedades////////////

///////////GET///////////

function getidConsultaMedica(){return $this->idConsultaMedica;}
function getcmFecha(){return $this->cmFecha;}
function getcmTitulo(){return $this->cmTitulo;}

///////////SET///////////

function setidConsultaMedica($valor){$this->idConsultaMedica=$valor;}
function setcmFecha($valor){$this->cmFecha=$valor;}
function setcmTitulo($valor){$this->cmTitulo=$valor;}

///////////METODOS////////

function __construct($icm, $fc, $tc){ //constructor
$this->idConsultaMedica=$icm;
$this->cmFecha=$fc;
$this->cmTitulo=$tc;

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