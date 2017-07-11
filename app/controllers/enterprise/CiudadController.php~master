<?php 

namespace App\Controllers;
/**
 * Operations with Users: CRUD
 */
class CiudadController extends AbstractController
{
/////////////////Variables////////////
private $ciudad;
private $conn;
private $idCiudad;
private $cdNombre;
private $Provincia_idProvincia;
/////////////////Propiedades////////////

///////////GET///////////

function getIdCiudad(){return $this->idCiudad;}
function getcdNombre(){return $this->cdNombre;}
function getProvincia_idProvincia(){return $this->Provincia_idProvincia;}

///////////SET///////////

function setidCiudad($valor){$this->idCiudad=$valor;}
function setcdNombre($valor){$this->cdNombre=$valor;}
function setProvincia_idProvincia($valor){$this->Provincia_idProvincia=$valor;}


///////////CONSTRUCTOR////////                                                                      

public function __construct($ic, $nc, $pip){
		
    $this->ciudad=array();
    // Crear conexión
    $this->conn=mysqli_connect("localhost","root","","modelopractica1");
        // Checkear conexión
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    $this->idCiudad=$ic;
    $this->cdNombre=$nc;
    $this->Provincia_idProvincia=$pip;
}

///////////METODOS//////// 

function agregarCiudad($nc , $pip){
    
    $sql = "INSERT INTO Ciudad (cdNombre , Provincia_idProvincia)
            VALUES ('$nc' , '$pip')";

    if ($conn->query($sql) === TRUE) {
        echo "Ciudad agregada con exito!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

function modificarCiudad($ic, $nc , $pip){
    
    $sql = "UPDATE Ciudad 
            SET cdNombre='$nc' , Provincia_idProvincia='$pip'  
            WHERE idCiudad='$ic'";

    if ($conn->query($sql) === TRUE) {
        echo "Ciudad modificada con exito!";
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }

    $conn->close();

}

function obtenerCiudad(){
    
    $sql = "SELECT * FROM Ciudad";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->ciudad[]=$registro;
			}
			
			return $this->ciudad;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function obtenerCiudadPorId($ic){
    
    $sql = "SELECT * FROM Ciudad WHERE idCiudad='$ic'";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->ciudad[]=$registro;
			}
			
			return $this->ciudad;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function borrarCiudad($ic){
    
    $sql = "DELETE FROM Ciudad WHERE idCiudad='$ic'";

    if ($conn->query($sql) === TRUE) {
        echo "Ciudad eliminada con exito!";
    } else {
        echo "Error al intentar eliminar la empresa: " . $conn->error;
    }

    $conn->close();

}
}
?>