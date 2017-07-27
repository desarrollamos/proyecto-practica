<?php 

 class HistorialClinico 
{
/////////////////Variables////////////
private $idHistorialClinico;
private $hcNombre;
private $hcFechaCreacion;
private $Paciente_idPaciente;
private $Especialista_idEspecialista;
private $conn;
private $historialClinico;
/////////////////Propiedades////////////

///////////GET///////////

function getIdHistorialClinico(){return $this->idHistorialClinico;}
function getHcNombre(){return $this->hcNombre;}
function getHcFechaCreacion(){return $this->hcFechaCreacion;}
function getPaciente_idPaciente(){return $this->Paciente_idPaciente;}
function getEspecialista_idEspecialista(){return $this->getEspecialista_idEspecialista;}
///////////SET///////////

function setIdHistorialClinico($valor){$this->idHistorialClinico=$valor;}
function setHcNombre($valor){$this->hcNombre=$valor;}
function setHcFechaCreacion($valor){$this->hcFechaCreacion=$valor;}
function setPaciente_idPaciente($valor){$this->Paciente_idPaciente=$valor;}
function setEspecialista_idEspecialista($valor){$this->Especialista_idEspecialista=$valor;}



///////////METODOS////////

function __construct($ihc, $nhc, $da, $pip, $eie){//constructor
$this->idHistorialClinico=$ihc;
$this->hcNombre=$nhc;
$this->hcFechaCreacion=$da;
$this->Paciente_idPaciente=$pip;
$this->Especialista_idEspecialista=$eie;

 $this->HistorialClinico=array();
       // Create connection
       $this->conn=mysqli_connect("localhost","root","","modelopractica1");
           // Check connection
           if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
           }
        }
   

    public function crearHistorialClinico($ihc, $nhc, $da, $pip, $eie)
    {
         
        $sql = "INSERT INTO HistorialClinico (hcNombre , hcFechaCreacion , Paciente_idPaciente, Especialista_idEspecialista)
           VALUES ('$nhc' , '$da', '$pip', '$eie)";

   if ($conn->query($sql) === TRUE) {
       echo "Agregado con exito!";
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }

   $conn->close();
   
    }


   function modificarHistorialClinico($ihc, $nhc, $da, $pip, $eie){
   
   $sql = "UPDATE HistorialClinico
           SET hcNombre='$nhc' , hcFechaCreacion='$da' , Paciente_idPaciente='$pip' ,
               Especialista_idEspecialista='$eie'   
           WHERE idHistorialClinico='$ihc'";

   if ($conn->query($sql) === TRUE) {
       echo "Modificado con exito!";
   } else {
       echo "Error al actualizar los datos: " . $conn->error;
   }

   $conn->close();

}
   function obtenerHistorialClinico(){
   
   $sql = "SELECT * FROM HistorialClinico";
   
   $result=mysqli_query($this->conn,$sql);

   if ($result) {
       while($registro=mysqli_fetch_assoc($result)){
            $this->historialClinico[]=$registro;
            }
            
            return $this->historialClinico;
   } else {
       echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
            die;
   }

   $conn->close();

}



function borrarHistorialClinico(){
   
   $sql = "DELETE FROM HistorialClinico WHERE idHistorialClinico='$ihc'";

   if ($conn->query($sql) === TRUE) {
       echo " Eliminado con exito!";
   } else {
       echo "Error al intentar eliminar: " . $conn->error;
   }

   $conn->close();

}
}

?>