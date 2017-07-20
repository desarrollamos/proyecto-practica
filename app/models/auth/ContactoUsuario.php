<?php 

 
 class ContactoUsuarioController
{
/////////////////Variables////////////
private $idContactoUsuario;
private $cuKey;
private $cuValue;
private $Usuario_idUsuario;
private $conn;
private $contactousuario;
/////////////////Propiedades////////////

///////////GET///////////
function getIdContactoUsuario(){return $this->idContactoUsuario;}
function getCuKey(){return $this->cuKey;}
function getCuValue(){return $this->cuValue;}
function getUsuario_idUsuario(){return $this->Usuario_idUsuario;} 

///////////SET///////////

function setIdContactoUsuario($valor){$this->idContactoUsuario=$valor;}
function setCuKey($valor){$this->cuKey=$valor;}
function setCuValue($valor){$this->cuValue=$valor;}
function setUsuario_idUsuario($valor){$this->Usuario_idUsuario;}

///////////METODOS////////

function __constructor($icu,$ck,$cv, $uiu){//constructor
$this->idContactoUsuario=$icu;
$this->cuKey=$ck;
$this->value=$cv;
$this->Usuario_idUsuario=$uiu;

$this->ContactoUsuario=array();
       // Create connection
       $this->conn=mysqli_connect("localhost","root","","modelopractica1");
           // Check connection
           if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
           }
        }

}

 public function crearContactoUsuario($ck,$cv,$uiu)
    {
         
        $sql = "INSERT INTO ContactoUsuario (cuKey , cuValue, Usuario_idUsuario )
           VALUES ('$ck' , '$cv', '$uiu' )";

   if ($conn->query($sql) === TRUE) {
       echo "Item agregado con exito!";
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }

   $conn->close();
   
    }


   function modificarContactoUsuario($ck,$cv,$uiu){
   
   $sql = "UPDATE ContactoUsuario
           SET cuKey='$ck' , cuValue='$cv', Usuario_idUsuario='$uiu'  
           WHERE idContactoUsuario='$icu'";

   if ($conn->query($sql) === TRUE) {
       echo "Usuario modificado con exito!";
   } else {
       echo "Error al actualizar los datos: " . $conn->error;
   }

   $conn->close();

}
   function obtenerContactoUsuario(){
   
   $sql = "SELECT * FROM ContactoUsuario";
   
   $result=mysqli_query($this->conn,$sql);

   if ($result) {
       while($registro=mysqli_fetch_assoc($result)){
            $this->contactousuario[]=$registro;
            }
            
            return $this->contactousuario;
   } else {
       echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
            die;
   }

   $conn->close();

}



function borrarContactoUsuario(){
   
   $sql = "DELETE FROM Usuario WHERE idContactoUsuario='$icu'";

   if ($conn->query($sql) === TRUE) {
       echo " Eliminado con exito!";
   } else {
       echo "Error al intentar eliminar : " . $conn->error;
   }

   $conn->close();

}
}


?>