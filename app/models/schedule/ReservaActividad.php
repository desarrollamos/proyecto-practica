<?php

namespace App\Controllers;

/**
 * Operations with Users: CRUD
 */
class reservaActividadController extends AbstractController
{
    /////////////////Variables////////////

private $idReservaActividad;    
private $raCantidad;
private $Reserva_idReserva;
private $Actividad_idActividad;
private $conn;
private $reservaactividad;
private $raFechaCreacion;
private $raFechaMod;

/////////////////Propiedades////////////

///////////GET///////////

function getIdReservaActividad(){return $this->idReservaActividad;}
function getraCantidad(){return $this->raCantidad;}
function getraFechaCreacion(){return $this->raFechaCreacion;}
function getraFechaMod(){return $this->raFechaMod;}
function getReserva_idReserva(){return $this->Reserva_idReserva;}
function getActividad_idActividad(){return $this->Actividad_idActividad;}

///////////SET///////////

function setIdReservaActividad($valor){$this->idReservaActividad=$valor;}
function setraCantidad($valor){$this->raCantidad=$valor;}
function setraFechaCreacion($valor){$this->raFechaCreacion=$valor;}
function setraFechaMod($valor){$this->raFechaMod=$valor;}
function setReserva_idReserva($valor){$this->Reserva_idReserva=$valor;}
function setActividad_idActividad($valor){$this->Actividad_idActividad;}

///////////METODOS////////

function ReservaActividad($ira, $rc, $rfc, $rfm, $rir, $aia){//constructor
$this->idReservaActividad=$ira;
$this->raCantidad=$rc;
$this->raFechaCreacion=$rfc;
$this->raFechaMod=$rfm;
$this->Reserva_idReserva=$rir;
$this->Actividad_idActividad=$aia;

// Create connection
       $this->conn=mysqli_connect("localhost","root","","modelopractica1");
           // Check connection
           if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
           }
        
}
    public function crearReserva($ir,$rfi,$ff,$re,$sis,$rfc,$rfm)
    {
         
        $sql = "INSERT INTO Reserva (reFechaInicio , reFechaFin, reEstado, Stock_idStock, reFechaCreacion, reFechaMod)
           VALUES ('$rfi' , '$ff', '$re', '$sis' , '$rfc' , '$rfm' )";

   if ($conn->query($sql) === TRUE) {
       echo "Agregado con exito!";
   } else {
       echo "Error al agregar: " . $sql . "<br>" . $conn->error;
   }

   $conn->close();
   
    }


   function modificarReserva($ir,$rfi,$ff,$re,$sis,$rfc,$rfm){
   
   $sql = "UPDATE Reserva
           SET reFechaInicio='$rfi' , reFechaFin='$ff' , reEstado='$re' ,
               Stock_idStock='$sis' , reFechaCreacion='$rfc' , reFechaMod='$rfm'   
           WHERE idReserva='$ir'";

   if ($conn->query($sql) === TRUE) {
       echo "Modificado con exito!";
   } else {
       echo "Error al actualizar los datos: " . $conn->error;
   }

   $conn->close();

}
   function obtenerReserva(){
   
   $sql = "SELECT * FROM Reserva";
   
   $result=mysqli_query($this->conn,$sql);

   if ($result) {
       while($registro=mysqli_fetch_assoc($result)){
            $this->reserva[]=$registro;
            }
            
            return $this->reserva;
   } else {
       echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
            die;
   }

   $conn->close();

}

function borrarReserva(){
   
   $sql = "DELETE FROM Reserva WHERE idReserva='$ir'";

   if ($conn->query($sql) === TRUE) {
       echo " Eliminado con exito!";
   } else {
       echo "Error al intentar eliminar : " . $conn->error;
   }

   $conn->close();

}
}