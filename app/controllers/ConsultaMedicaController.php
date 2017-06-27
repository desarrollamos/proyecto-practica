<?php 

namespace App\Controllers;
/**
 * Operations with Users: CRUD
 */
class ConsultaMedicaController extends AbstractController
{
/////////////////Variables////////////
private $id_consulta_medica;
private $fecha_consulta;

/////////////////Propiedades////////////

///////////GET///////////

function getId_consulta_medica(){return $this->id_consulta_medica;}
function getfecha_consulta(){return $this->fecha_consulta;}

///////////SET///////////

function setId_consulta_medica($valor){$this->id_consulta_medica=$valor;}
function setfecha_consulta($valor){$this->fecha_consulta=$valor;}

///////////METODOS////////

function ConsultaMedica($icm, $fc){//constructor
$this->id_onculta_medica=$icm;
$this->fecha_consulta=$fc;

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