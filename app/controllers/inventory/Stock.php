<<<<<<< HEAD
<?php 

 class Actividad 
{
/////////////////Variables////////////
private $idActividad;
private $acNombre;
private $acDetalle;
private $acFechaCreacion;
private $acFechaEdicion;
/////////////////Propiedades////////////

///////////GET///////////

function getIdActividad(){return $this->idActividad;}
function getAcNombre(){return $this->acNombre;}
function getAcDetalle(){return $this->acDetalle;}
function getAcFechaCreacion(){return $this->acFechaCreacion;}
function getAcFechaEdicion(){return $this->getAcFechaEdicion;}
///////////SET///////////

function setIdActividad($valor){$this->idActividad=$valor;}
function setAcNombre($valor){$this->acNombre=$valor;}
function setAcDetalle($valor){$this->acDetalle=$valor;}
function setAcFechaCreacion($valor){$this->acFechaCreacion=$valor;}
function setAcFechaEdicion($valor){$this->acFechaEdicion=$valor;}



///////////METODOS////////

function __construct($ia, $na, $da, $fca, $fea){//constructor
$this->idActividad=$ia;
$this->acNombre=$na;
$this->acDetalle=$da;
$this->acFechaCreacion=$fca;
$this->acFechaEdicion=$fea;

}

function crearActividad(){
    //agregar funcion
}
function obtenerActividad(){
    //agregar funcion
}
function modificarActividad(){
    //agregar funcion

}
}

?>
=======
<?php

namespace App\Controllers;


class stockController //extends AbstractController
{
    
    public function addStock()
    {
       
    }

    public function getStockList()
    {
       
    }

    public function updateStock($StockID)
    {
       
    }

    public function deleteStock($StockID)
    {
       
    }
}
>>>>>>> parent of 7800636... Cambios
