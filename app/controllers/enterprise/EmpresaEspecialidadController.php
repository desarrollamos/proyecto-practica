<?php 

 class EmpresaEspecialidad 
{
/////////////////Variables////////////

private $empresaEspecialidad;
private $conn;
private $idEmpresaEspecialidad;
private $Empresa_idEmpresa;
private $Especialidad_idEspecialidad;

/////////////////Propiedades////////////

///////////GET///////////

function getIdEmpresaEspecialidad(){return $this->idEmpresaEspecialidad;}
function getEmpresa_idEmpresa(){return $this->Empresa_idEmpresa;}
function getEspecialidad_idEspecialidad(){return $this->Especialidad_idEspecialidad;}

///////////SET///////////

function setIdEmpresaEspecialidad($valor){$this->idEmpresaEspecialidad=$valor;}
function setEmpresa_idEmpresa($valor){$this->Empresa_idEmpresa=$valor;}
function setEspecialidad_idEspecialidad($valor){$this->Especialidad_idEspecialidad=$valor;}

///////////CONSTRUCTOR///////////                                                                      

public function __construct($iee, $eie, $esies){
		
    $this->EmpresaEspecialidad=array();
    // Crear conexión
    $this->conn=mysqli_connect("localhost","root","","modelopractica1");
        // Checkear conexión
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    $this->idEmpresaEspecialidad=$iee;
    $this->Empresa_idEmpresa=$eie;
    $this->Especialidad_idEspecialidad=$esies;
}

///////////METODOS//////// 

function agregarEmpresaEspecialidad($eie, $esies){
    
    $sql = "INSERT INTO EmpresaEspecialidad (Empresa_idEmpresa , Especialidad_idEspecialidad)
            VALUES ('$eie' , '$esies')";

    if ($conn->query($sql) === TRUE) {
        echo "EmpresaEspecialidad agregado con exito!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

function modificarEmpresaEspecialidad($iee , $eie, $esies){
    
    $sql = "UPDATE EmpresaEspecialidad 
            SET Empresa_idEmpresa='$eie' , Especialidad_idEspecialidad='$esies'  
            WHERE idEmpresaEspecialidad='$iee'";

    if ($conn->query($sql) === TRUE) {
        echo "EmpresaEspecialidad modificado con exito!";
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }

    $conn->close();

}

function obtenerEmpresaEspecialidad(){
    
    $sql = "SELECT * FROM EmpresaEspecialidad";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->empresaEspecialidad[]=$registro;
			}
			
			return $this->empresaEspecialidad;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();
}


function obtenerEmpresaEspecialidadPorId($iee){
    
    $sql = "SELECT * FROM EmpresaEspecialidad WHERE idEmpresaEspecialidad='$iee'";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->empresaEspecialidad[]=$registro;
			}
			
			return $this->empresaEspecialidad;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function borrarEmpresaEspecialidad($iee){
    
    $sql = "DELETE FROM EmpresaEspecialidad WHERE idEmpresaEspecialidad='$iee'";

    if ($conn->query($sql) === TRUE) {
        echo "EmpresaEspecialidad eliminado con exito!";
    } else {
        echo "Error al intentar eliminar el EmpresaEspecialidad: " . $conn->error;
    }

    $conn->close();

}

}

?>