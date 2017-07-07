<?php 

namespace App\Controllers;
/**
 * Operations with Users: CRUD
 */
class CiudadController extends AbstractController
{
/////////////////Variables////////////
private $idCiudad;
private $cdNombre;
private $Provincia_idProvincia;
/////////////////Propiedades////////////

///////////GET///////////

function getIdCiudad(){return $this->idCiudad;}
function getcdNombre(){return $this->cdNombre;}
function getProvincia_idProvincia(){return $this->Provincia_idProvincia;}

///////////SET///////////

function setidCiudad($valor){$this->idCiudad=$valor;}
function setcdNombre($valor){$this->cdNombre=$valor;}
function setProvincia_idProvincia($valor){$this->Provincia_idProvincia=$valor;}


///////////METODOS////////

function __construct($ic, $nc, $pip){//constructor
$this->idCiudad=$ic;
$this->cdNombre=$dc;
$this->Provincia_idProvincia=$pip;

}

public function agregarCiudad()
    {
       
    }

public function obtenerCiudad($ic)
    {
       
    }

}

?>