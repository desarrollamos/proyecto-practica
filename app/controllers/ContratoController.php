<?php 

namespace App\Controllers;
/**
 * Operations with Users: CRUD
 */
class ContratoController extends AbstractController
{
/////////////////Variables////////////
private $id_contrato;
private $EmpresaUsuario_idEmpresaUsuario;

/////////////////Propiedades////////////

///////////GET///////////

function getId_contrato(){return $this->id_consulta_medica;}
function getEmpresaUsuario_idEmpresaUsuario(){return $this->EmpresaUsuario_idEmpresaUsuario;}

///////////SET///////////

function setId_contrato($valor){$this->id_consulta_medica=$valor;}
function setEmpresaUsuario_idEmpresaUsuario($valor){$this->EmpresaUsuario_idEmpresaUsuario=$valor;}

///////////METODOS////////

function ContratoController($ic, $eie){//constructor
$this->id_conrato=$ic;
$this->EmpresaUsuario_idEmpresaUsuario=$eie;

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