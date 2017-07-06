<?php 

namespace App\Controllers;
/**
 * Operations with Users: CRUD
 */
class CiudadController extends AbstractController
{
/////////////////Variables////////////
private $idCiudad;
private $cdDetalle;
private $Provincia_idProvincia;
/////////////////Propiedades////////////

///////////GET///////////

function getIdCiudad(){return $this->idCiudad;}
function getcdDetalle(){return $this->cdDetalle;}
function getProvincia_idProvincia(){return $this->Provincia_idProvincia;}

///////////SET///////////

function setidCiudad($valor){$this->idCiudad=$valor;}
function setcdDetalle($valor){$this->cdDetalle=$valor;}
function setProvincia_idProvincia($valor){$this->Provincia_idProvincia=$valor;}


///////////METODOS////////

function Ciudad($ic, $dc, $pip){//constructor
$this->idCiudad=$ic;
$this->cdDetalle=$dc;
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