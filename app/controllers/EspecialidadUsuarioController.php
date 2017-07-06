<?php

namespace App\Controllers;
/**
 * Operations with Users: CRUD
 */

class EspecialidadUsuario extends AbstractController{
    /////variable
    private  $idEspecialidadUsuario;
    private  $euNombre;

/////////////////Propiedades////////////
///////////GET///////////
function getIdEspecialidadUsuario(){return $this->idEspecialidadUsuario;}
function getEuNombre(){return $this->euNombre;}
///////////SET///////////
function setEuNombre($valor){$this->euNombre=$valor;}
///////////METODOS////////
function EspecialidadUsuario($neu){//constructor
$this->euNombre=$neu;
}

public function crearEspeclialidadUsuario()
    {
       
    }

public function ObtenerEspecialidadUsuario()
    {
       
    }

public function eliminarEspecialidadUsuario($userId)
    {
       
    }
}

?>