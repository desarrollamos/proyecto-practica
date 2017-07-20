<?php 

namespace App\Controllers;
/**
 * Operations with Users: CRUD
 */
class EspecialidadController extends AbstractController
{
/////////////////Variables////////////            
private $especialidad;
private $conn;
private $idEspecialidad;
private $epNombre;

/////////////////Propiedades////////////

///////////GET///////////

function getIdEspecialidad(){return $this->idEspecialidad;}
function getEpNombre(){return $this->epNombre;}

///////////SET///////////

function setIdEspecialidad($valor){$this->idEspecialidad=$valor;}
function setEpNombre($valor){$this->epNombre=$valor;}

///////////CONSTRUCTOR////////                                                                      

public function __construct($ie, $ne){
		
    $this->Especialidad=array();
    // Crear conexión
    $this->conn=mysqli_connect("localhost","root","","modelopractica1");
        // Checkear conexión
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    $this->idEspecialidad=$ie;
    $this->epNombre=$ne;
}

///////////METODOS//////// 

function agregarEspecialidad($ne){
    
    $sql = "INSERT INTO Especialidad (epNombre)
            VALUES ('$ne')";

    if ($conn->query($sql) === TRUE) {
        echo "Especialidad agregado con exito!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

function modificarEspecialidad($ie ,$ne){
    
    $sql = "UPDATE Especialidad 
            SET epNombre='$ne'
            WHERE idEspecialidad='$ie'";

    if ($conn->query($sql) === TRUE) {
        echo "Especialidad modificado con exito!";
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }

    $conn->close();

}

function obtenerEspecialidad(){
    
    $sql = "SELECT * FROM Especialidad";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->especialidad[]=$registro;
			}
			
			return $this->especialidad;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function obtenerEspecialidadPorId($ie){
    
    $sql = "SELECT * FROM Especialidad WHERE idEspecialidad='$ie'";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->especialidad[]=$registro;
			}
			
			return $this->especialidad;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function borrarEspecialidad($ie){
    
    $sql = "DELETE FROM Especialidad WHERE idEspecialidad='$ie'";

    if ($conn->query($sql) === TRUE) {
        echo "Especialidad eliminado con exito!";
    } else {
        echo "Error al intentar eliminar el Especialidad: " . $conn->error;
    }

    $conn->close();

}
}

?>