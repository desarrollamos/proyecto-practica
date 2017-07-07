<?php

namespace App\Controllers;

/**
 * Operations with Users: CRUD
 */
class ConsultaActividadController extends AbstractController
{
    /////////////////Variables////////////
private $idConsultaActividad;    
private $caFecha;
private $ConsultaMedica_idConsultaMedica;
private $Actividad_idActividad;
/////////////////Propiedades////////////
///////////GET///////////
function getIDConsultaActividad(){return $this->idConsultaActividad;}
function getcaFecha(){return $this->caFecha;}
function getConsultaMedica_idConsultaMedica(){return $this->ConsultaMedica_idConsultaMedica;}
function getActividad_idActividad(){return $this->Actividad_idActividad;}
///////////SET///////////
function setIdConsultaActividad($valor){$this->idConsultaActividad=$valor;}
function setcaFecha($valor){$this->caFecha=$valor;}
function setConsultaMedica_idConsultaMedica($valor){$this->ConsultaMedica_idConsultaMedica=$valor;}
function setActividad_idActividad($valor){$this->Actividad_idActividad=$valor;}
///////////METODOS////////
function __construct($ica, $caf, $cic, $aia){//constructor
$this->idConsultaActividad=$iu;
$this->caFecha=$caf;
$this->ConsultaMedica_idConsultaMedica=$cic;
$this->Actividad_idActividad=$aia;


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