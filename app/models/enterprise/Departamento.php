<?php 

namespace App\Controllers;
/**
 * Operations with Users: CRUD
 */
class DepartamentoController extends AbstractController
{
/////////////////Variables////////////            

private $departamento;
private $conn;
private $idDepartamento;
private $dpNombre;

/////////////////Propiedades////////////

///////////GET///////////

function getidDepartamento(){return $this->idDepartamento;}
function getdpNombre(){return $this->dpNombre;}

///////////SET///////////

function setidDepartamento($valor){$this->idDepartamento=$valor;}
function setdpNombre($valor){$this->dpNombre=$valor;}

///////////CONSTRUCTOR////////                                                                      

public function __construct($id, $nd){
		
    $this->departamento=array();
    // Crear conexión
    $this->conn=mysqli_connect("localhost","root","","modelopractica1");
        // Checkear conexión
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    $this->idDepartamento=$id;
    $this->dpNombre=$nd;

}

///////////METODOS//////// 

function agregarDepartamento($nd){
    
    $sql = "INSERT INTO Departamento (dpNombre)
            VALUES ('$nd')";

    if ($conn->query($sql) === TRUE) {
        echo "Departamento agregado con exito!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

function modificarDepartamento($id, $nd){
    
    $sql = "UPDATE Departamento 
            SET dpNombre='$nd'  
            WHERE idDepartamento='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Departamento modificada con exito!";
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }

    $conn->close();

}

function obtenerDepartamento(){
    
    $sql = "SELECT * FROM Departamento";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->departamento[]=$registro;
			}
			
			return $this->departamento;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function obtenerDepartamentoPorId($id){
    
    $sql = "SELECT * FROM Departamento WHERE idDepartamento='$id'";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->departamento[]=$registro;
			}
			
			return $this->departamento;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function borrarDepartamento($id){
    
    $sql = "DELETE FROM Departamento WHERE idDepartamento='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Departamento eliminado con exito!";
    } else {
        echo "Error al intentar eliminar la empresa: " . $conn->error;
    }

    $conn->close();

}
}
?>