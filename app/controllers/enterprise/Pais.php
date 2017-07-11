<?php 

namespace App\Controllers;
/**
 * Operations with Users: CRUD
 */
class PaisController extends AbstractController
{
/////////////////Variables////////////
private $pais;
private $conn;
private $idPais;
private $psNombre;
/////////////////Propiedades////////////

///////////GET///////////

function getIdPais(){return $this->idPais;}
function getpsNombre(){return $this->psNombre;}

///////////SET///////////

function setidPais($valor){$this->idPais=$valor;}
function setpsNombre($valor){$this->psNombre=$valor;}


///////////CONSTRUCTOR////////                                                                      

public function __construct($ip, $np){
		
    $this->pais=array();
    // Crear conexión
    $this->conn=mysqli_connect("localhost","root","","modelopractica1");
        // Checkear conexión
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    $this->idPais=$ip;
    $this->psNombre=$np;
}

///////////METODOS//////// 

function agregarPais($np){
    
    $sql = "INSERT INTO Pais (psNombre)
            VALUES ('$np')";

    if ($conn->query($sql) === TRUE) {
        echo "Pais agregada con exito!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

function modificarPais($ip, $np){
    
    $sql = "UPDATE Pais 
            SET psNombre='$np'  
            WHERE idPais='$ip'";

    if ($conn->query($sql) === TRUE) {
        echo "Pais modificada con exito!";
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }

    $conn->close();

}

function obtenerPais(){
    
    $sql = "SELECT * FROM Pais";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->pais[]=$registro;
			}
			
			return $this->pais;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function obtenerPaisPorId($ip){
    
    $sql = "SELECT * FROM Pais WHERE idPais='$ip'";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->pais[]=$registro;
			}
			
			return $this->pais;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function borrarPais($ip){
    
    $sql = "DELETE FROM Pais WHERE idPais='$ip'";

    if ($conn->query($sql) === TRUE) {
        echo "Pais eliminada con exito!";
    } else {
        echo "Error al intentar eliminar la empresa: " . $conn->error;
    }

    $conn->close();

}
}
?>