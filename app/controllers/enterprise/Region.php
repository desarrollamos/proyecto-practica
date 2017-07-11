<?php 

namespace App\Controllers;
/**
 * Operations with Users: CRUD
 */
class RegionController extends AbstractController
{
/////////////////Variables////////////
private $Region;
private $conn;
private $idRegion;
private $rgNombre;
private $Pais_idPais;
/////////////////Propiedades////////////

///////////GET///////////

function getIdRegion(){return $this->idRegion;}
function getRgNombre(){return $this->rgNombre;}
function getPais_idPais(){return $this->Pais_idPais;}

///////////SET///////////

function setIdRegion($valor){$this->idRegion=$valor;}
function setRgNombre($valor){$this->rgNombre=$valor;}
function setPais_idPais($valor){$this->Pais_idPais=$valor;}


///////////CONSTRUCTOR////////                                                                      

public function __construct($ir, $nr, $pip){
		
    $this->Region=array();
    // Crear conexión
    $this->conn=mysqli_connect("localhost","root","","modelopractica1");
        // Checkear conexión
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    $this->idRegion=$ir;
    $this->rgNombre=$nr;
    $this->Pais_idPais=$pip;
}

///////////METODOS//////// 

function agregarRegion($nr , $pip){
    
    $sql = "INSERT INTO Region (rgNombre , Pais_idPais)
            VALUES ('$nr' , '$pip')";

    if ($conn->query($sql) === TRUE) {
        echo "Region agregada con exito!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

function modificarRegion($ir, $nr , $pip){
    
    $sql = "UPDATE Region 
            SET rgNombre='$nr' , Pais_idPais='$pip'  
            WHERE idRegion='$ir'";

    if ($conn->query($sql) === TRUE) {
        echo "Region modificada con exito!";
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }

    $conn->close();

}

function obtenerRegion(){
    
    $sql = "SELECT * FROM Region";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->region[]=$registro;
			}
			
			return $this->region;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function obtenerRegionPorId($ir){
    
    $sql = "SELECT * FROM Region WHERE idRegion='$ir'";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->region[]=$registro;
			}
			
			return $this->region;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function borrarRegion($ir){
    
    $sql = "DELETE FROM Region WHERE idRegion='$ir'";

    if ($conn->query($sql) === TRUE) {
        echo "Region eliminada con exito!";
    } else {
        echo "Error al intentar eliminar la empresa: " . $conn->error;
    }

    $conn->close();

}
}
?>