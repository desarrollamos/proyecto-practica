<?php

namespace App\Controllers;

/**
 * Operations with Users: CRUD
 */
class ReservaController extends AbstractController
{
    /////////////////Variables////////////

private $idReserva;    
private $reFechaInicio;
private $reFechaFin;
private $reEstado;
private $Stock_idStock;
private $reFechaCreacion;
private $reFechaMod;
private $conn;
private $reserva;

/////////////////Propiedades////////////

///////////GET///////////

function getIdReserva(){return $this->idReserva;}
function getreFechaInicio(){return $this->reFechaInicio;}
function getreFechaFin(){return $this->reFechaFin;}
function getreEstado(){return $this->reEstado;}
function getStock_idStock(){return $this->Stock_idStock;}
function getreFechaCreacion(){return $this->reFechaCreacion;}
function getFechaMod(){return $this->reFechaMod;}

///////////SET///////////

function setIdReserva($valor){$this->idReserva=$valor;}
function setreFechaInicio($valor){$this->reFechaInicio=$valor;}
function setreFechaFin($valor){$this->reFechaFin=$valor;}
function setreEstado($valor){$this->reEstado=$valor;}
function setStock_idStock($valor){$this->Stock_idStock=$valor;}
function setreFechaCreacion($valor){$this->reFechaCreacion=$valor;}
function setreFechaMod($valor){$this->reFechaMod=$valor;}

///////////METODOS////////

public function __construct($ir,$rfi,$ff,$re,$sis,$rfc,$rfm){//constructor
$this->idReserva=$ir;    
$this->reFechaInicio=$rfi;
$this->$reFechaFin=$rff;
$this->$reEstado=$re;
$this->$Stock_idStock=$sis;
$this->$reFechaCreacion=$rfc;
$this->$reFechaMod=$rfm;
 $this->Usuario=array();
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