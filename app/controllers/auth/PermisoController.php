<?php 

namespace App\Controllers;
/**
 * Operations with Users: CRUD
 */
class Permiso extends AbstractController
{
/////////////////Variables////////////
private $idPermiso;
private $pmR;
private $pmW;
private $pmX;
/////////////////Propiedades////////////

///////////GET///////////

function getIdPermiso(){return $this->idPermiso;}
function getpmR(){return $this->pmR;}
function getpmW(){return $this->pmW;}
function getpmX(){return $this->pmX;}

///////////SET///////////

function setIdPermiso($valor){$this->idPermiso=$valor;}
function setpmR($valor){$this->pmR=$valor;}
function setpmW($valor){$this->pmX=$valor;}
function setpmX($valor){$this->pmX=$valor;}



///////////METODOS////////

function __construct($ip, $rp, $xp, $wp){//constructor
$this->idPermiso=$ip;
$this->pmR=$rp;
$this->pmX=$xp;
$this->pmW=$wp;

}

public function AgregarPermiso()
    {
       
    }

public function ObtenerPermiso()
    {
       
    }

public function EliminarPermiso($userId)
    {
       
    }
}


?>