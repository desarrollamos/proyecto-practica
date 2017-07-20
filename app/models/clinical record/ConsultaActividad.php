<?php 

 class ConsultaActividad 
{
/////////////////Variables////////////
private $idConsultaActividad;
private $caFecha;
private $ConsultaMedica_idConsultaMedica;
private $Actividad_idActividad;
private $conn;
private $consultaActividad;

/////////////////Propiedades////////////

///////////GET///////////

function getIdConsultaActividad(){return $this->idConsultaActividad;}
function getcaFecha(){return $this->caFecha;}
function getConsultaMedica_idConsultaMedica(){return $this->ConsultaMedica_idConsultaMedica;}
function getActividad_idActividad(){return $this->Actividad_idActividad;}

///////////SET///////////

function setIdConsultaActividad($valor){$this->idConsultaActividad=$valor;}
function setcaFecha($valor){$this->acFecha=$valor;}
function setConsultaMedica_idConsultaMedica($valor){$this->ConsultaMedica_idConsultaMedica=$valor;}
function setActividad_idActividad($valor){$this->Actividad_idActividad=$valor;}


///////////METODOS////////

function __construct($ica, $caf, $cmicm, $aia){//constructor
$this->idConsultaActividad=$ia;
$this->caFecha=$caf;
$this->ConsultaMedica_idConsultaMedica=$cmicm;
$this->Actividad_idActividad=$aia;

$this->ConsultaActividad=array();
       // Create connection
       $this->conn=mysqli_connect("localhost","root","","modelopractica1");
           // Check connection
           if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
           }
        }
    

    public function crearConsultaActividad($ica, $caf, $cmicm, $aia)
    {
         
        $sql = "INSERT INTO ConsultaActividad (caFecha , ConsultaMedica_idConsultaMedica , Actividad_idActividad)
           VALUES ('$caf', '$cmicm' , '$aia')";

   if ($conn->query($sql) === TRUE) {
       echo "Agregado con exito!";
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }

   $conn->close();
   
    }


   function actualizarConsultaActividad($ica, $caf, $cmicm, $aia){
   
   $sql = "UPDATE ConsultaActividad
           SET caFecha='$caf' , ConsultaMedica_idConsultaMedica='$cmicm' , Actividad_idActividad='$aia'   
           WHERE ConsultaActividad='$ica'";

   if ($conn->query($sql) === TRUE) {
       echo "Modificado con exito!";
   } else {
       echo "Error al actualizar los datos: " . $conn->error;
   }

   $conn->close();

}
   function obtenerConsultaActividad(){
   
   $sql = "SELECT * FROM ConsultaActividad";
   
   $result=mysqli_query($this->conn,$sql);

   if ($result) {
       while($registro=mysqli_fetch_assoc($result)){
            $this->consultaActividad[]=$registro;
            }
            
            return $this->consultaActividad;
   } else {
       echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
            die;
   }

   $conn->close();

}


function borrarConsultaActividad(){
   
   $sql = "DELETE FROM ConsultaActividad WHERE idConsultaActividad='$ica'";

   if ($conn->query($sql) === TRUE) {
       echo " Eliminado con exito!";
   } else {
       echo "Error al intentar eliminar: " . $conn->error;
   }

   $conn->close();

}
}

?>