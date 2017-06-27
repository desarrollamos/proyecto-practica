<?php 

namespace App\Controllers;
/**
 * Operations with Users: CRUD
 */
class CiudadController extends AbstractController
{
/////////////////Variables////////////
private $id_Ciudad;
private $Nombre_ciudad;
private $fecha_creador_ciudad;
private $fecha_edicion_ciudad;
private $Paciente_id_paciente;
/////////////////Propiedades////////////

///////////GET///////////

function getId_ciudad(){return $this->id_ciudad;}
function getNombre_ciudad(){return $this->nombre_ciudad;}
function getfecha_creador_ciudad(){return $this->fecha_creador_ciudad;}
function getfecha_edicion_ciudad(){return $this->fecha_edicion_ciudad;}
function getPaciente_id_paciente(){return $this->Paciente_id_paciente;}

///////////SET///////////

function setId_ciudad($valor){$this->id_ciudads=$valor;}
function setNombre_ciudad($valor){$this->nombre_ciudad=$valor;}
function setfecha_creador_ciudad($valor){$this->fecha_creador_ciudad=$valor;}
function setfecha_edicion_ciudad($valor){$this->edicion_ciudad=$valor;}
function setPaciente_id_paciente($valor){$this->paciente_id_pacienter=$valor;}


///////////METODOS////////

function Ciudad($ic, $nc, $fcc, $fec, $pip){//constructor
$this->id_ciudad=$ic;
$this->nombre_ciudad=$nc;
$this->fecha_creador_ciudad=$fcc;
$this->fecha_edicion_ciudad=$fec;
$thi->paciente_id_paciente=$pip;

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