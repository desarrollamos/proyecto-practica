<<<<<<< HEAD
<?php

namespace App\Controllers;

/**
 * Operations with Users: CRUD
 */
class ReservaUsuarioController extends AbstractController
{
    /////////////////Variables////////////

private $idReservaUsuario;    
private $ruNombre;
private $Reserva_idReserva;
private $Usuario_idUsuario;
private $ruFechaCreacion;
private $ruFechaMod;
private $conn;
private $reservausuario;
=======
<?php 

 class ReservaUsuario 
{
/////////////////Variables////////////

private $idReservaUsuario;
private $ruNombre;
private $Reserva_idReserva;
private $Usuario_idUsuario;
>>>>>>> master

/////////////////Propiedades////////////

///////////GET///////////

function getIdReservaUsuario(){return $this->idReservaUsuario;}
<<<<<<< HEAD
function getruNombre(){return $this->ruNombre;}
function getReserva_idReserva(){return $this->Reserva_idReserva;}
function getUsuario_idUsuario(){return $this->Usuario_idUsuario;}
function getruFechaCreacion(){return $this->ruFechaCreacion;}
function getruFechaMod(){return $this->ruFechaMod;}
=======
function getRuNombre(){return $this->ruNombre;}
function getReserva_idReserva(){return $this->Reserva_idReserva;}
function getUsuario_idUsuario(){return $this->Usuario_idUsuario;}
>>>>>>> master

///////////SET///////////

function setIdReservaUsuario($valor){$this->idReservaUsuario=$valor;}
<<<<<<< HEAD
function setruNombre($valor){$this->ruNombre=$valor;}
function setReserva_idReserva($valor){$this->Reserva_idReserva=$valor;}
function setUsuario_idUsuario($valor){$this->Usuario_idUsuario=$valor;}
function setruFechaCreacion($valor){$this->ruFechaCreacion=$valor;}
function setruFechaMod($valor){$this->ruFechaMod=$valor;}
=======
function setRuNombre($valor){$this->ruNombre=$valor;}
function setReserva_idReserva($valor){$this->Reserva_idReserva=$valor;}
function setUsuario_idUsuario($valor){$this->Usuario_idUsuario=$valor;}
>>>>>>> master


///////////METODOS////////

<<<<<<< HEAD
function Usuario($iru,$rn, $rir, $uiu, $rfc, $rfm){//constructor
$this->idReservaUsuario=$iru;
$this->ruNombre=$rn;
$this->Reserva_idReserva=$rir;
$this->Usuario_idUsuario=$uiu;
$this->ruFechaCreacion=$rfc;
$this->ruFechaMod=$rfm;
 // Create connection
       $this->conn=mysqli_connect("localhost","root","","modelopractica1");
           // Check connection
           if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
           }
        
}
    public function crearReservaUsuario($iru,$rn, $rir, $uiu, $rfc, $rfm)
    {
         
        $sql = "INSERT INTO ReservaUsuario (ruNombre , Reserva_idReserva, Usuario_idUsuario, ruFechaCreacion, ruFechaMod)
           VALUES ('$rn' , '$rir', '$uiu', '$rfc' , '$rfm')";

   if ($conn->query($sql) === TRUE) {
       echo "Agregado con exito!";
   } else {
       echo "Error al agregar: " . $sql . "<br>" . $conn->error;
   }

   $conn->close();
   
    }


   function modificarReservausuario($iru,$rn, $rir, $uiu, $rfc, $rfm){
   
   $sql = "UPDATE Reservausuario
           SET ruNombre='$rn' , Reserva_idReserva='$rir' , Usuario_idUsuario,='$uiu' ,
               ruFechaCreacion='$rfc' , ruFechaMod='$rfm'    
           WHERE idReservaUsuario='$iru'";

   if ($conn->query($sql) === TRUE) {
       echo "Modificado con exito!";
   } else {
       echo "Error al actualizar los datos: " . $conn->error;
   }

   $conn->close();

}
   function obtenerReservaUsuario(){
   
   $sql = "SELECT * FROM ReservaUsuario";
   
   $result=mysqli_query($this->conn,$sql);

   if ($result) {
       while($registro=mysqli_fetch_assoc($result)){
            $this->reservausuario[]=$registro;
            }
            
            return $this->reservausuario;
   } else {
       echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
            die;
   }

   $conn->close();

}

function borrarReservaUsuario(){
   
   $sql = "DELETE FROM ReservaUsuario WHERE idReservaUsuario='$iru'";

   if ($conn->query($sql) === TRUE) {
       echo " Eliminado con exito!";
   } else {
       echo "Error al intentar eliminar : " . $conn->error;
   }

   $conn->close();

}
}
=======
function __construct($ira, $nru, $rir, $uiu){//constructor
$this->idReservaUsuario=$ira;
$this->ruNombre=$nru;
$this->Reserva_idReserva=$rir;
$this->Usuario_idUsuario=$uiu;

}

function crearReservaUsuario(){
    //agregar funcion
}
function obtenerReservaUsuario(){
    //agregar funcion
}

}

?>
>>>>>>> master
