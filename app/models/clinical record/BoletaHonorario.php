<?php 

namespace App\Controllers;
/**
 * Operations with Users: CRUD
 */
class BoletaHonorario 
{
/////////////////Variables////////////
private $idBoletaHonorario;
private $bhValor;
private $bhTotal;
private $ConsultaMedica_idConsultaMedica;
private $conn;
private $boletaHonorario;
/////////////////Propiedades////////////

///////////GET///////////

function getIdBoletaHonorario(){return $this->idBoletaHonorario;}
function getBhValor(){return $this->bhValor;}
function getBhTotal(){return $this->bhTotal;}
function getConsultaMedica_idConsultaMedica() {return $this->ConsultaMedica_idConsultaMedica;}
///////////SET///////////

function setidBoletaHonorario($valor){$this->idBoletaHonorario=$valor;}
function setBhValor($valor){$this->bhValor=$valor;}
function setBhTotal($valor){$this->bhTotal=$valor;}
function setConsultaMedica_idConsultaMedica($valor){$this->ConsultaMedica_idConsultaMedica=$valor;}



///////////METODOS////////

function __construct($idbh, $vbh, $tbh, $cic){//constructor
$this->idBoletaHonorario=$idbh;
$this->bhValor=$vbh;
$this->bhTotal=$tbh;
$this->ConsultaMedica_idConsultaMedica=$cic;

 $this->BoletaHonorarios=array();
       // Create connection
       $this->conn=mysqli_connect("localhost","root","","modelopractica1");
           // Check connection
           if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
           }
        }
    

    public function crearBoletaHonorario($idbh, $vbh, $tbh, $cic)
    {
         
        $sql = "INSERT INTO BoletaHonorarios (bnValorTotal , bnFecha, ConsultaMedica_idConsultaMedica)
           VALUES ('$vbh' , '$tbh', '$cic')";

   if ($conn->query($sql) === TRUE) {
       echo "Agregado con exito!";
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }

   $conn->close();
   
    }


   function actualizarBoletaHonorario($idbh, $vbh, $tbh, $cic){
   
   $sql = "UPDATE BoletaHonorario
           SET bnValorTotal='$vbh' , bnFecha='$tbh' , ConsultaMedica_idConsultaMedica='$cic'   
           WHERE BoletaHonorario='$cic'";

   if ($conn->query($sql) === TRUE) {
       echo "Modificado con exito!";
   } else {
       echo "Error al actualizar los datos: " . $conn->error;
   }

   $conn->close();

}
   function obtenerBoletaHonorario(){
   
   $sql = "SELECT * FROM BoletaHonorario";
   
   $result=mysqli_query($this->conn,$sql);

   if ($result) {
       while($registro=mysqli_fetch_assoc($result)){
            $this->boletaHonorario[]=$registro;
            }
            
            return $this->boletaHonorario;
   } else {
       echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
            die;
   }

   $conn->close();

}



function borrarBoletaHonorario(){
   
   $sql = "DELETE FROM BoletaHonorario WHERE idBoletaHonorario='$ibh'";

   if ($conn->query($sql) === TRUE) {
       echo " Eliminado con exito!";
   } else {
       echo "Error al intentar eliminar: " . $conn->error;
   }

   $conn->close();

}

}

?>