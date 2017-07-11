<?php

namespace App\Controllers;
/**
 * Operations with Users: CRUD
 */
class TipoUsuarioController extends AbstractController{
    /////variable
    private  $idTipoUsuario;
    private  $tuNombre;
    private $Usuario_idUsuario;
    private $conn;
    private $tipousuario;

/////////////////Propiedades////////////
///////////GET///////////
function getIdTipoUsuario(){return $this->idTipoUsuario;}
function gettuNombre(){return $this->tuNombre;}
function getUsuario_idUsuario(){return $this->Usuario_idUsuario;}
///////////SET///////////
function setIdTipoUsuario($valor){$this->idTipoUsuario=$valor;}
function settuNombre($valor){$this->tuNombre=$valor;}
function setUsuario_idUsuario($valor){$this->Usuario_idUsuario=$valor;}
///////////METODOS////////
function __construct($itu, $ntu, $uiu ){//constructor
$this->idTipoUsuario=$itu;
$this->tuNombre=$ntu;
$this->Usuario_idUsuario=$uiu;

$this->TipoUsuario=array();
       // Create connection
       $this->conn=mysqli_connect("localhost","root","","modelopractica1");
           // Check connection
           if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
           }
        }
}
 public function crearTipoUsuario($itu,$ntu,$uiu)
    {
         
        $sql = "INSERT INTO TipoUsuario (tuNombre , Usuario_idUsuario )
           VALUES ('$ntu' , '$uiu' )";

   if ($conn->query($sql) === TRUE) {
       echo "Agregado con exito!";
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }

   $conn->close();
   
    }


   function modificarTipoUsuario($itu,$ntu,$uiu){
   
   $sql = "UPDATE TipoUsuario
           SET tuNombre='$ntu' , Usuario_idUsuario='$uiu'  
           WHERE idTipoUsuario='$itu'";

   if ($conn->query($sql) === TRUE) {
       echo "Modificado con exito!";
   } else {
       echo "Error al actualizar los datos: " . $conn->error;
   }

   $conn->close();

}
   function obtenerTipoUsuario(){
   
   $sql = "SELECT * FROM TipoUsuario";
   
   $result=mysqli_query($this->conn,$sql);

   if ($result) {
       while($registro=mysqli_fetch_assoc($result)){
            $this->Tipousuario[]=$registro;
            }
            
            return $this->tipousuario;
   } else {
       echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
            die;
   }

   $conn->close();

}



function borrarTipoUsuario(){
   
   $sql = "DELETE FROM TipoUsuario WHERE idTipoUsuario='$itu'";

   if ($conn->query($sql) === TRUE) {
       echo " Eliminado con exito!";
   } else {
       echo "Error al intentar eliminar : " . $conn->error;
   }

   $conn->close();

}
}


?>
