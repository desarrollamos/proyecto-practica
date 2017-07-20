<?php

namespace App\Controllers;

/**
 * Operations with Users: CRUD
 */
class UsuarioController 
{
    /////////////////Variables////////////

private $idUsuario;    
private $usNombre;
private $usApellidoPaterno;
private $usApellidoMaterno;
private $usFechaNacimiento;
private $usRut;
private $usEMail;
private $usNacionalidad;
private $usFechaCreacion;
private $usFechaMod;
private $TipoUsuario_idTipoUsuario;
private $usuario;
private $conn;

/////////////////Propiedades////////////

///////////GET///////////

function getIdUsuario(){return $this->idUsuario;}
function getusNombre(){return $this->usNombre;}
function getusApellidoPaterno(){return $this->usApellidoPaterno;}
function getusApellidoMaterno(){return $this->usApellidoMaterno;}
function getusFechaNacimiento(){return $this->usFechaNacimiento;}
function getusRut(){return $this->usRut;}
function getusEmail(){return $this->usEMail;}
function getusNacionalidad(){return $this->usNacionalidad;}
function getusFechaCreacion(){return $this->usFechaCreacion;}
function getusFechaMod(){return $this->usFechaMod;}
function getTipoUsuario_idTipoUsuario(){return $this->TipoUsuario_idTipoUsuario;}

///////////SET///////////

function setIdUsuario($valor){$this->idUsuario=$valor;}
function setusNombre($valor){$this->usNombre=$valor;}
function setusApellidoPaterno($valor){$this->usApellidoPaterno=$valor;}
function setusApellidoMaterno($valor){$this->usApellidoMaterno=$valor;}
function setusFechaNacimiento($valor){$this->usFechaNacimiento=$valor;}
function setusRut($valor){$this->usRut=$valor;}
function setusEmail($valor){$this->usEmail=$valor;}
function setusNacionalidadUsuario($valor){$this->usNacionalidad=$valor;}
function setusFechaCreacion($valor){$this->usFechaCreacion=$valor;}
function setusFechaMod($valor){$this->FechaMod=$valor;}
function setTipoUsuario_idTipoUsuario($valor){$this->TipoUsuario_idTipoUsuario=$valor;}


///////////METODOS////////

public function __construc($iu,$nu,$apu,$amu,$fn,$ru,$mu,$nau,$fmu,$fcu,$tit){//constructor
$this->idUsuario=$iu;
$this->usNombre=$nu;
$this->usApellidoPaterno=$apu;
$this->usApellidoMaterno=$amu;
$this->usFechaNacimiento=$fn;
$this->usRut=$ru;
$this->usEmail=$mu;
$this->usNacionalidad=$nau;
$this->usFechaCreacion=$fcu;
$this->usFechaMod=$fmu;
$this->TipoUsuario_idTipoUsuario=$tit;

        $this->Usuario=array();
       // Create connection
       $this->conn=mysqli_connect("localhost","root","","modelopractica1");
           // Check connection
           if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
           }
        }
    function CargarTodosLosContactos(){
////lenar el arreglo con consulta <mys>ql
}

    public function crearUsuario($nu,$apu,$amu,$fn,$ru,$mu,$nau,$fcu,$fmu,$tit)
    {
         
        $sql = "INSERT INTO Usuario (usNombre , usApellidoPaterno, usApellidoMaterno, usFechaNacimiento, usRut, usNacionalidad, usEmail, usFechaMod, usFechaCreacion, TipoUsuario_idTipoUsuario)
           VALUES ('$nu' , '$apu', '$amu', '$fn' , '$usRut' , '$nau' , '$mu' , '$fcu' , '$fmu', '$tit')";

   if ($conn->query($sql) === TRUE) {
       echo "Usuario agregado con exito!";
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }

   $conn->close();
   
    }


   function modificarUsuario($nu,$apu,$amu,$fn,$ru,$mu,$nau,$fcu,$fmu,$tit){
   
   $sql = "UPDATE Usuario
           SET usNombre='$nu' , usApellidoPaterno='$apu' , usApellidoMaterno='$amu' ,
               usFechaNacimiento='$fcu' , usRut='$ru' , usNacionalidad='$nau' , usEmail='$mu' , 
               usFechaMod='$fmu' , usFechaCreacion='$fcu', TipoUsuario_idTipoUsuario='$tit'  
           WHERE idUsuario='$iu'";

   if ($conn->query($sql) === TRUE) {
       echo "Usuario modificado con exito!";
   } else {
       echo "Error al actualizar los datos: " . $conn->error;
   }

   $conn->close();

}
   function obtenerUsuario(){
   
   $sql = "SELECT * FROM Usuario";
   
   $result=mysqli_query($this->conn,$sql);

   if ($result) {
       while($registro=mysqli_fetch_assoc($result)){
            $this->usuario[]=$registro;
            }
            
            return $this->usuario;
   } else {
       echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
            die;
   }

   $conn->close();

}



function borrarUsuario(){
   
   $sql = "DELETE FROM Usuario WHERE idUsuario='$iu'";

   if ($conn->query($sql) === TRUE) {
       echo " Usuario eliminado con exito!";
   } else {
       echo "Error al intentar eliminar el Usuario: " . $conn->error;
   }

   $conn->close();

}
}