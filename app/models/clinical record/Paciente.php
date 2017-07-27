<?php 

 class Paciente 
{
/////////////////Variables////////////
private $idPaciente;
private $pcTipoSangre;
private $pcPeso;
private $pcAlergia;
private $pcFechaCreacion;
private $pcFechaMod;
private $pcObservaciones;
private $Paciente_idPaciente;
private $Especialista_idEspecialista;
private $conn;
private $paciente;
/////////////////Propiedades////////////

///////////GET///////////

function getIdActividad(){return $this->idActividad;}
function getpcTipoSangre(){return $this->pcTipoSangre;}
function getpcPeso(){return $this->pcPeso;}
function getpcAlergia(){return $this->pcAlergia;}
function getpcFechaCreacion(){return $this->pcFechaCreacion;}
function getFechaMod(){return $this->pcFechaMod;}
function getpcObservaciones(){return $this->pcObservaciones;}
function getPaciente_idPaciente(){return $this->Paciente_idPaciente;}
function getEspecialista_idEspecialista(){return $this->Especialista_idEspecialista;}

///////////SET///////////

function setIdActividad($valor){$this->idActividad=$valor;}
function setpcTipoSangre($valor){$this->pcTipoSangre=$valor;}
function setpcPeso($valor){$this->pcPeso=$valor;}
function setpcAlergia($valor){$this->pcAlergia=$valor;}
function setpcFechaCreacion($valor){$this->pcFechaCreacion=$valor;}
function setpcFechaMod($valor){$this->pcFechaMod=$valor;}
function setpcObservaciones($valor){$this->pcObservaciones=$valor;}
function setPaciente_idPaciente($valor){$this->Paciente_idPaciente=$valor;}
function setEspecialista_idEspecialista($valor){$this->Especialista_idEspecialista;}

///////////METODOS////////

function __construct($pts, $pp, $pa, $pfc, $pfm, $po, $pip, $eie){//constructor
$this->idPaciente=$idp;
$this->pcTipoSangre=$pts;
$this->pcPeso=$pp;
$this->pcAlergia=$pa;
$this->pcFechaCreacion=$pfc;
$this->pcFechaMod=$pfm;
$this->pcObservaciones=$po;
$this->Paciente_idPaciente=$pip;
$this->Especialista_idEspecialista=$eie;


 $this->Paciente=array();
       // Create connection
       $this->conn=mysqli_connect("localhost","root","","modelopractica1");
           // Check connection
           if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
           }
        }
    

    public function crearPaciente($idp, $pts, $pp, $pa, $pfc, $pfm, $po, $pip, $eie)
    {
         
        $sql = "INSERT INTO Paciente (pcTipoSangre , pcPeso, pcAlergia, pcFechaCreacion, pcFechaMod, pcObservaciones, Paciente_idPaciente, Especialista_idEspecialista)
           VALUES ('$pts' , '$pp' , '$pa', '$pfc', '$pfm' , '$po' , '$pip' , '$eie' )";

   if ($conn->query($sql) === TRUE) {
       echo "Agregado con exito!";
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }

   $conn->close();
   
    }


   function modificarPaciente($idp, $pts, $pp, $pa, $pfc, $pfm, $po, $pip, $eie){
   
   $sql = "UPDATE Paciente
           SET pcTipoSangre='$pts' , pcPeso='$pp' , pcAlergia='$pa' ,
               pcFechaCreacion='$pfc' , pcFechaMod='$pfm' , pcObservaciones='$po' , Paciente_idPaciente='$pip' , 
               Especialista_idEspecialista='$eie'  
           WHERE idPaciente='$idp'";

   if ($conn->query($sql) === TRUE) {
       echo "Modificado con exito!";
   } else {
       echo "Error al actualizar los datos: " . $conn->error;
   }

   $conn->close();

}
   function obtenerPaciente(){
   
   $sql = "SELECT * FROM Paciente";
   
   $result=mysqli_query($this->conn,$sql);

   if ($result) {
       while($registro=mysqli_fetch_assoc($result)){
            $this->paciente[]=$registro;
            }
            
            return $this->paciente;
   } else {
       echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
            die;
   }

   $conn->close();

}



function borrarPaciente(){
   
   $sql = "DELETE FROM Paciente WHERE idPaciente='$idp'";

   if ($conn->query($sql) === TRUE) {
       echo " Eliminado con exito!";
   } else {
       echo "Error al intentar eliminar el Paciente: " . $conn->error;
   }

   $conn->close();

}
}
}

?>