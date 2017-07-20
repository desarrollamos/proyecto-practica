<?php 

namespace App\Controllers;
/**
 * Operations with Users: CRUD
 */
class BonoConsulta 
{
/////////////////Variables////////////
private $idBonoConsulta;
private $ConsultaMedica_idConsultaMedica;
private $Paciente_idPaciente;
private $Reserva_idReserva;
private $conn;
private $bonoConsulta;
/////////////////Propiedades////////////

///////////GET///////////

function getIdBonoConsulta(){return $this->idBonoConsulta;}
function getConsultaMedica_idConsultaMedica(){return $this->ConsultaMedica_idConsultaMedica;}
function getPaciente_idPaciente(){return $this->Paciente_idPaciente;}
function getReserva_idReserva(){return $this->Reserva_idReserva;}
///////////SET///////////

function setIdBonoConsulta($valor){$this->idBonoConsulta=$valor;}
function setConsultaMedica_idConsultaMedica($valor){$this->ConsultaMedica_idConsultaMedica=$valor;}
function setPaciente_idPaciente($valor){$this->Paciente_idPaciente=$valor;}
function setReserva_idReserva($valor){$this->Reserva_idReserva=$valor;}

///////////METODOS////////

function __construct($ibc, $cic, $pip, $rir){//constructor
$this->idBonoConsulta=$ibc;
$this->ConsultaMedica_idConsultaMedica=$cic;
$this->Paciente_idPaciente=$pip;
$this->Reserva_idReserva=$rir;

 $this->BonoConsulta=array();
       // Create connection
       $this->conn=mysqli_connect("localhost","root","","modelopractica1");
           // Check connection
           if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
           }
        }
    

    public function crearBonoConsulta($ibc, $cic, $pip, $rir)
    {
         
        $sql = "INSERT INTO BonoConsulta (ConsultaMedica_idConsultaMedica , Paciente_idPaciente, Reserva_idReserva)
           VALUES ('$cic' , '$pip', $rir')";

   if ($conn->query($sql) === TRUE) {
       echo "Agregado con exito!";
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }

   $conn->close();
   
    }


   function actualizarBonoConsulta($ibc, $cic, $pip, $rir){
   
   $sql = "UPDATE BonoConsulta
           SET ConsultaMedica_idConsultaMedica='$cic' , Paciente_idPaciente='$pip' Reserva_idReservataMedica='$rir'   
           WHERE BonoConsulta='$ibc'";

   if ($conn->query($sql) === TRUE) {
       echo "Modificado con exito!";
   } else {
       echo "Error al actualizar los datos: " . $conn->error;
   }

   $conn->close();

}
   function obtenerBonoConsulta(){
   
   $sql = "SELECT * FROM BonoConsulta";
   
   $result=mysqli_query($this->conn,$sql);

   if ($result) {
       while($registro=mysqli_fetch_assoc($result)){
            $this->bonoConsulta[]=$registro;
            }
            
            return $this->bonoConsulta;
   } else {
       echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
            die;
   }

   $conn->close();

}



function borrarBonoConsulta(){
   
   $sql = "DELETE FROM BonoConsulta WHERE idBonoConsulta='$ibc'";

   if ($conn->query($sql) === TRUE) {
       echo " Eliminado con exito!";
   } else {
       echo "Error al intentar eliminar: " . $conn->error;
   }

   $conn->close();

}
}


?>