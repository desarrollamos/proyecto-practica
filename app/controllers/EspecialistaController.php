<?php

namespace App\Controllers;
/**
 * Operations with Users: CRUD
 */

class Especialista extends AbstractController{
    /////variable
    private  $id_especialista;
    private  $nombre_especialista;

/////////////////Propiedades////////////
///////////GET///////////
function getId_especialista(){return $this->Id_especialista;}
function getNombre_especialista(){return $this->nombre_especilista;}
///////////SET///////////
function setNombre_especialista($valor){$this->nombre_especialista=$valor;}
///////////METODOS////////
function Especialista($ntu){//constructor
$this-> Nombre_especialista=$ne;
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