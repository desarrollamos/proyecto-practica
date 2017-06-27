<?php

namespace App\Controllers;
/**
 * Operations with Users: CRUD
 */
class TipoUsuarioController extends AbstractController{
    /////variable
    private  $id_tipo_usuario;
    private  $nombre_tipo_usuario;

/////////////////Propiedades////////////
///////////GET///////////
function getId_tipo_usuario(){return $this->id_tipo_usuario;}
function getNombre_tipo_usuario(){return $this->nombre_tipo_usuario;}
///////////SET///////////
function setId_tipo_usuario()$valor){$this->id_tipo_usuario=$valor;}
function setNombre_tipo_usuario($valor){$this->nombre_tipo_usuario=$valor;}
///////////METODOS////////
function TipoUsiario($itu, $ntu){//constructor
$this->id_tipo_usuario=$itu;
$this->nombre_tipo_usuario=$ntu;
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