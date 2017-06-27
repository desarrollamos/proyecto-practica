<?php 

namespace App\Controllers;
/**
 * Operations with Users: CRUD
 */
class BonoConsulta extends AbstractController
{
/////////////////Variables////////////
private $id_bono_consulta;
private $ConsultaMedica_id_consulta_medica;
private $Paciente_id_paciente;
private $Reserva_id_reserva;
/////////////////Propiedades////////////

///////////GET///////////
p
function getId_bono_consulta(){return $this->id_bono_consulta;}
function getConsultaMedica_id_consulta_medica(){return $this->ConsultaMedica_id_consulta_medica;}
function getPaciente_id_paciente(){return $this->Paciente_id_paciente;}
function getReserva_id_reserva(){return $this->Reserva_id_reserva;}
///////////SET///////////

function setId_bono_consulta($valor){$this->id_bono_consulta=$valor;}
function setConsultaMedica_id_consulta_medica($valor){$this->ConsultaMedica_id_consulta_medica=$valor;}
function setPaciente_id_paciente($valor){$this->Paciente_id_paciente=$valor;}
function setReserva_id_reserva($valor){$this->Reserva_id_reserva=$valor;}

///////////METODOS////////

function BonoConsulta($ibc, $cic, $pip, $rir){//constructor
$this->id_bono_consulta=$ibc;
$this->ConsultaMedica_id_consulta_medica=$cic;
$this->Paciente_id_paciente=$pip;
$this->Reserva_id_reserva=$rir;

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