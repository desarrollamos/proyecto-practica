<?php 

namespace App\Controllers;
/**
 * Operations with Users: CRUD
 */
class ConsultaMedicaController
{
/////////////////Variables////////////
private $idConsultaMedica;
private $cmFecha;
private $cmTitulo;
private $Empresa_idEmpresa;
private $HistorialClinico_idHistorialClinico;
private $Reserva_idReserva;
private $conn;
private $consultaMedica;

/////////////////Propiedades////////////

///////////GET///////////

function getidConsultaMedica(){return $this->idConsultaMedica;}
function getcmFecha(){return $this->cmFecha;}
function getcmTitulo(){return $this->cmTitulo;}
function getEmpresa_idEmpresa(){return $this->Empresa_idEmpresa;}
function getHistorialClinico_idHistorialClinico(){return $this->HistorialClinico_idHistorialClinico;}
function getReserva_idReserva(){return $this->Reserva_idReserva;}
///////////SET///////////

function setidConsultaMedica($valor){$this->idConsultaMedica=$valor;}
function setcmFecha($valor){$this->cmFecha=$valor;}
function setcmTitulo($valor){$this->cmTitulo=$valor;}
function setEmpresa_idEmpresa($valor){$this->Empresa_idEmpresa=$valor;}
function setHistorialClinico_idHistorialClinico($valor){$this->HistorialClinico_idHistorialClinico;}
function setReserva_idReserva($valor){$this->Reserva_idReserva;}

///////////METODOS////////

function __construct($icm, $fcm, $tcm, $eie, $hcihc, $rir){ //constructor
$this->idConsultaMedica=$icm;
$this->cmFecha=$fcm;
$this->cmTitulo=$tcm;
$this->Empresa_idEmpresa=$eie;
$this->HistorialClinico_idHistorialClinico=$hcihc;
$this->Reserva_idReserva=$rir;


        $this->ConsultaMedica=array();
       // Create connection
       $this->conn=mysqli_connect("localhost","root","","modelopractica1");
           // Check connection
           if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
           }
        }
   

    public function crearConsultaMedica($icm, $fcm, $tcm, $eie, $hcihc, $rir)
    {
         
        $sql = "INSERT INTO ConsultaMedica (cmFecha , cmTitulo , Empresa_idEmpresa, HistorialClinico_idHistorialClinico, Reserva_idReserva)
           VALUES ('$fcm' , '$tcm', '$eie', '$hcihc' , '$rir')";

   if ($conn->query($sql) === TRUE) {
       echo "ConsultaMedica agregado con exito!";
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }

   $conn->close();
   
    }


   function modificarConsultaMedica($icm, $fcm, $tcm, $eie, $hcihc, $rir){
   
   $sql = "UPDATE ConsultaMedica
           SET cmFecha='$fcm' , cmTitulo='$tcm' , Empresa_idEmpresa='$eie' ,
               HistorialClinico_idHistorialClinico='$hcihc' , Reserva_idReserva='$rir'  
           WHERE idConsultaMedica='$iu'";

   if ($conn->query($sql) === TRUE) {
       echo "ConsultaMedica modificado con exito!";
   } else {
       echo "Error al actualizar los datos: " . $conn->error;
   }

   $conn->close();

}
   function obtenerConsultaMedica(){
   
   $sql = "SELECT * FROM ConsultaMedica";
   
   $result=mysqli_query($this->conn,$sql);

   if ($result) {
       while($registro=mysqli_fetch_assoc($result)){
            $this->consultaMedica[]=$registro;
            }
            
            return $this->consultaMedica;
   } else {
       echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
            die;
   }

   $conn->close();

}



function borrarConsultaMedica(){
   
   $sql = "DELETE FROM ConsultaMedica WHERE idConsultaMedica='$icm'";

   if ($conn->query($sql) === TRUE) {
       echo " Eliminado con exito!";
   } else {
       echo "Error al intentar eliminar: " . $conn->error;
   }

   $conn->close();

}

}


?>