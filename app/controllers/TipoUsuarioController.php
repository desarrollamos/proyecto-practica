<?php

namespace App\Controllers;
/**
 * Operations with Users: CRUD
 */
class TipoUsuarioController extends AbstractController{
    /////variable
    private  $idTipoUsuario;
    private  $tuNombre;
    private $Usuario_idUsuario;

/////////////////Propiedades////////////
///////////GET///////////
function getIdTipoUsuario(){return $this->idTipoUsuario;}
function gettuNombre(){return $this->tuNombre;}
function getUsuario_idUsuario(){return $this->Usuario_idUsuario;}
///////////SET///////////
function setIdTipoUsuario($valor){$this->idTipoUsuario=$valor;}
function settuNombre($valor){$this->tuNombre=$valor;}
function setUsuario_idUsuario($valor){$this->Usuario_idUsuario=$valor;}
///////////METODOS////////
function __construct($itu, $ntu, $uiu ){//constructor
$this->idTipoUsuario=$itu;
$this->tuNombre=$ntu;
$this->Usuario_idUsuario=$uiu;
}
 public function addAction()
    {
       
    }

    /**
     * Returns user list
     *
     * @return array
     */
    public function getUserListAction()
    {
       
    }

     /**
     * Updating existing user
     *
     * @param string $userId
     */
    public function updateUserAction($userId)
    {
       
    }

    /**
     * Delete an existing user
     *
     * @param string $userId
     */
    public function deleteUserAction($userId)
    {
       
    }
}
}



?>