<?php 

 class Prevision 
{
/////////////////Variables////////////
private $idPrevision;
private $prNombre;
private $prFechaMod;
private $conn;
private $prevision;

/////////////////Propiedades////////////

///////////GET///////////

function getIdPrevision(){return $this->idPrevision;}
function getprNombre(){return $this->prNombre;}
function getprFechaMod(){return $this->prFechaMod;}

///////////SET///////////

function setIdPrevision($valor){$this->idPrevision=$valor;}
function setprNombre($valor){$this->prNombre=$valor;}
function setprFechaMod($valor){$this->prFechaMod=$valor;}

///////////METODOS////////

function __construct($ip, $np, $fmp){//constructor
$this->IdPrevision=$ip;
$this->prNombre=$np;
$this->prFechaMod=$fmp;

$this->Prevision=array();
       // Create connection
       $this->conn=mysqli_connect("localhost","root","","modelopractica1");
           // Check connection
           if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
           }
        }
    

    public function crearPrevision($ip, $np, $fmp)
    {
         
        $sql = "INSERT INTO Prevision (prNombre , prFechaMod)
           VALUES ('$np' , '$fmp' )";

   if ($conn->query($sql) === TRUE) {
       echo "Agregado con exito!";
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }

   $conn->close();
   
    }


   function modificarPrevision($ip, $np, $fmp){
   
   $sql = "UPDATE Prevision
           SET prNombre='$np' , prFechaMod='$fmp' 
           WHERE idPrevision='$ip'";

   if ($conn->query($sql) === TRUE) {
       echo "Modificado con exito!";
   } else {
       echo "Error al actualizar los datos: " . $conn->error;
   }

   $conn->close();

}
   function obtenerPrevision($ip, $np, $fmp){
   
   $sql = "SELECT * FROM Prevision";
   
   $result=mysqli_query($this->conn,$sql);

   if ($result) {
       while($registro=mysqli_fetch_assoc($result)){
            $this->prevision[]=$registro;
            }
            
            return $this->prevision;
   } else {
       echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
            die;
   }

   $conn->close();

}



function borrarPrevision(){
   
   $sql = "DELETE FROM Prevision WHERE idPrevision='$ip'";

   if ($conn->query($sql) === TRUE) {
       echo " Eliminado con exito!";
   } else {
       echo "Error al intentar eliminar el Prevision: " . $conn->error;
   }

   $conn->close();

}
}
}

?>