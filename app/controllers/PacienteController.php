<?php 

namespace App\Controllers;
/**
 * Operations with Users: CRUD
 */
class Paciente extends AbstractController
{
/////////////////Variables////////////
private $idPaciente;
private $pcTipoSangre;
private $pcPeso;
private $pcAlergia;
private $pcFechaCreacion;
private $pcFechaMod;
private $pcObservaciones;
private $Usuario_idUsuario;
private $Prevision_idPrevision;
/////////////////Propiedades////////////
///////////GET///////////
function getIdPaciente(){return $this->idPaciente;}
function getpcTipoSangre(){return $this->pcTipoSangre;}
function getpcPeso(){return $this->pcPeso;}
function getpcAlergia(){return $this->pcAlergia;}
function getpcFechaCreacion(){return $this->pcFechaCreacion;}
function getpcFechaMod(){return $this->pcFechaMod;}
function getpcObservaciones(){return $this->pcObservaciones;}
function getUsuario_idUsuario(){return $this->Usuario_idUsuario;}
function getPrevision_idPrevision(){return $this->Prevision_idPrevision;}
///////////SET///////////
function setIdPaciente($valor){$this->idPaciente=$valor;}
function setpcTipoSangre($valor){$this->pcTipoSangre=$valor;}
function getpcPeso($valor){$this->pcPeso=$valor;}
function getpcAlergia($valor){$this->pcAlergia=$valor;}
function getpcFechaCreacion($valor){$this->pcFechaCreacion=$valor;}
function getpcFechaMod($valor){$this->pcFechaMod=$valor;}
function getpcObservaciones($valor){$this->pcObservaciones=$valor;}
function getUsuario_idUsuario($valor){$this->Usuario_idUsuario=$valor;}
function getPrevision_idPrevision($valor){$this->Prevision_idPrevision=$valor;}
///////////METODOS////////
function __construct($ic, $ts, $pp, $ap, $fcp, $fm, $po, $uiu, $pip){//constructor
$this->idPaciente=$ic;
$this->pcTipoSangre=$ts;
$this->pcPeso=$pp;
$this->pcAlergia=$ap;
$this->pcFechaCreacion=$fcp;
$this->pcFechaMod=$fm;
$this->pcObservaciones=$po;
$this->Usuario_idUsuario=$uiu;
$this->Prevision_idPrevision=$pip;


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