<?php 

namespace App\Controllers;
/**
 * Operations with Users: CRUD
 */
class ProvinciaController extends AbstractController
{
/////////////////Variables////////////
private $Provincia;
private $conn;
private $idProvincia;
private $pvNombre;
private $Region_idRegion;
/////////////////Propiedades////////////

///////////GET///////////

function getIdProvincia(){return $this->idProvincia;}
function getPvNombre(){return $this->pvNombre;}
function getRegion_idRegion(){return $this->Region_idRegion;}

///////////SET///////////

function setidProvincia($valor){$this->idProvincia=$valor;}
function setPvNombre($valor){$this->pvNombre=$valor;}
function setRegion_idRegion($valor){$this->Region_idRegion=$valor;}


///////////CONSTRUCTOR////////                                                                      

public function __construct($ip, $np, $rir){
		
    $this->provincia=array();
    // Crear conexión
    $this->conn=mysqli_connect("localhost","root","","modelopractica1");
        // Checkear conexión
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    $this->idProvincia=$ip;
    $this->pvNombre=$np;
    $this->Region_idRegion=$rir;
}

///////////METODOS//////// 

function agregarProvincia($np , $rir){
    
    $sql = "INSERT INTO Provincia (pvNombre , Region_idRegion)
            VALUES ('$np' , '$rir')";

    if ($conn->query($sql) === TRUE) {
        echo "Provincia agregada con exito!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

function modificarProvincia($ip, $np , $rir){
    
    $sql = "UPDATE Provincia 
            SET pvNombre='$np' , Region_idRegion='$rir'  
            WHERE idProvincia='$ip'";

    if ($conn->query($sql) === TRUE) {
        echo "Provincia modificada con exito!";
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }

    $conn->close();

}

function obtenerProvincia(){
    
    $sql = "SELECT * FROM Provincia";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->provincia[]=$registro;
			}
			
			return $this->provincia;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function obtenerProvinciaPorId($ip){
    
    $sql = "SELECT * FROM Provincia WHERE idProvincia='$ic'";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->provincia[]=$registro;
			}
			
			return $this->provincia;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function borrarProvincia($ip){
    
    $sql = "DELETE FROM Provincia WHERE idProvincia='$ip'";

    if ($conn->query($sql) === TRUE) {
        echo "Provincia eliminada con exito!";
    } else {
        echo "Error al intentar eliminar la empresa: " . $conn->error;
    }

    $conn->close();

}
}
?>