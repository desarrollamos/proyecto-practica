<?php

namespace App\Controllers;
/**
 * Operations with Users: CRUD
 */

class EspecialidadUsuario extends AbstractController{
    /////variable
    private $especialidadUsuario;
    private $conn;
    private  $idEspecialidadUsuario;
    private  $euNombre;

/////////////////Propiedades////////////
///////////GET///////////
function getIdEspecialidadUsuario(){return $this->idEspecialidadUsuario;}
function getEuNombre(){return $this->euNombre;}
///////////SET///////////
function setEuNombre($valor){$this->euNombre=$valor;}
///////////CONSTRUCTOR////////                                                                      

public function __construct($ieu , $neu){
		
    $this->especialidadUsuario=array();
    // Crear conexión
    $this->conn=mysqli_connect("localhost","root","","modelopractica1");
        // Checkear conexión
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    $this->idEspecialidadUsuario=$ieu;
    $this->euNombre=$neu;
}

///////////METODOS//////// 

function agregarEspecialidadUsuario($neu){
    
    $sql = "INSERT INTO EspecialidadUsuario (euNombre)
            VALUES ('$neu')";

    if ($conn->query($sql) === TRUE) {
        echo "EspecialidadUsuario agregado con exito!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

function modificarEspecialidadUsuario($ieu, $neu){
    
    $sql = "UPDATE EspecialidadUsuario 
            SET euNombre='$neu'  
            WHERE idEspecialidadUsuario='$ieu'";

    if ($conn->query($sql) === TRUE) {
        echo "EspecialidadUsuario modificado con exito!";
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }

    $conn->close();

}

function obtenerEspecialidadUsuario(){
    
    $sql = "SELECT * FROM EspecialidadUsuario";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->especialidadUsuario[]=$registro;
			}
			
			return $this->especialidadUsuario;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function obtenerEspecialidadUsuarioPorId($ieu){
    
    $sql = "SELECT * FROM EspecialidadUsuario WHERE idEspecialidadUsuario='$ieu'";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->especialidadUsuario[]=$registro;
			}
			
			return $this->especialidadUsuario;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function borrarEspecialidadUsuario($ieu){
    
    $sql = "DELETE FROM EspecialidadUsuario WHERE idEspecialidadUsuario='$ieu'";

    if ($conn->query($sql) === TRUE) {
        echo "EspecialidadUsuario eliminado con exito!";
    } else {
        echo "Error al intentar eliminar el EspecialidadUsuario: " . $conn->error;
    }

    $conn->close();

}
}

?>