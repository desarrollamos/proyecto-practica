<?php 

namespace App\Controllers;
/**
 * Operations with Users: CRUD
 */
class BoletaHonorarios extends AbstractController
{
/////////////////Variables////////////
private $id_boleta_honorarios;
private $descripcion_honorario;
private $valor_honorario;
private $total_honorario;
private $liquido_honorario;
private $retencion_honorario;
private $ConsultaMedica_id_consulta_medica;
/////////////////Propiedades////////////

///////////GET///////////

function getId_boleta_honorarios(){return $this->id_boleta_honorarios;}
function getDescripcion_honorario(){return $this->descripcion_honorario;}
function getValor_honorario(){return $this->valor_honorario;}
function getTotal_honorario(){return $this->total_honorario;}
function getLiquido_honorario(){return $this->liquido_honorario;}
function getRetencion_honorario(){return $this->retencion_honoario;}
function getConsultaMedica_id_consulta_medica() {return $this->ConsultaMedica_id_consulta_medica;}
///////////SET///////////

function setId_boleta_honorarios($valor){$this->Id_boleta_honorarios=$valor;}
function setDescripcion_honorario($valor){$this->descripcion_honorario=$valor;}
function setValor_honorario($valor){$this->valor_honorario=$valor;}
function setTotal_honorario($valor){$this->total_honorario=$valor;}
function setLiquido_honorario($valor){$this->liquido_honorario=$valor;}
function setRetencion_honorario($valor){$this->retencion_honorario=$valor;}
function setConsultaMedica_id_consulta_medica($valor){$this->ConsultaMedica_id_consulta_medica=$valor;}



///////////METODOS////////

function BoletaHonorarios($idh, $dh, $vh, $th, $lh, $rh, $cic){//constructor
$this->id_boleta_honorarios=$idh;
$this->descripcion_honorario=$dh;
$this->valor_honorario=$vh;
$this->total_honorario=$th;
$this->liquido_honorario=$lh;
$this->retencion_honorario=$rh;
$this->ConsultaMedica_id_consulta_medica=$cic;

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