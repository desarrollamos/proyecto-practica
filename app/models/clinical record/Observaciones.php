<?php 

 class Observaciones 
{
/////////////////Variables////////////
private $idObservaciones;
private $obDescripcion;
private $ConsultaMedica_idConsultaMedica;
private $conn;
private $observaciones;
/////////////////Propiedades////////////

///////////GET///////////

function getIdObservaciones(){return $this->idObservaciones;}
function getobDescripcion(){return $this->obDescripcion;}
function getConsultaMedica_idConsultaMedica(){return $this->ConsultaMedica_idConsultaMedica;}

///////////SET///////////

function setIdObservaciones($valor){$this->idObservaciones=$valor;}
function setobDescripcion($valor){$this->obDescripcion=$valor;}
function setConsultaMedica_idConsultaMedica($valor){$this->ConsultaMedica_idConsultaMedica=$valor;}


///////////METODOS////////

function __construct($io, $od, $da){//constructor
$this->idObservaciones=$io;
$this->obDescripcion=$od;
$this->ConsultaMedica_idConsultaMedica=$da;


   
           $this->Observaciones=array();
       // Create connection
       $this->conn=mysqli_connect("localhost","root","","modelopractica1");
           // Check connection
           if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
           }
        }
    

    public function crearObservaciones($io, $od, $da)
    {
         
        $sql = "INSERT INTO Observaciones (obDescripcion , ConsultaMedica_idConsultaMedica)
           VALUES ('$od' , '$da')";

   if ($conn->query($sql) === TRUE) {
       echo "Agregado con exito!";
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }

   $conn->close();
   
    }


   function modificarObservaciones($od,$da){
   
   $sql = "UPDATE Observaciones
           SET obDescripcion='$od' , ConsultaMedica_idConsultaMedica='$da'   
           WHERE idObservaciones='$io'";

   if ($conn->query($sql) === TRUE) {
       echo "Modificado con exito!";
   } else {
       echo "Error al actualizar los datos: " . $conn->error;
   }

   $conn->close();

}
   function obtenerObservaciones(){
   
   $sql = "SELECT * FROM Observaciones";
   
   $result=mysqli_query($this->conn,$sql);

   if ($result) {
       while($registro=mysqli_fetch_assoc($result)){
            $this->observaciones[]=$registro;
            }
            
            return $this->observaciones;
   } else {
       echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
            die;
   }

   $conn->close();

}



function borrarObservaciones(){
   
   $sql = "DELETE FROM Observaciones WHERE idObservaciones='$io'";

   if ($conn->query($sql) === TRUE) {
       echo " Eliminado con exito!";
   } else {
       echo "Error al intentar eliminar el Observaciones: " . $conn->error;
   }

   $conn->close();

}

}

?>