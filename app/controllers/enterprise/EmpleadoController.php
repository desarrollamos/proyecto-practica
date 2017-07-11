<?php 

 class Empleado 
{
/////////////////Variables////////////
private $empleado;
private $conn;
private $idEmpleado;
private $emHoras;
private $emDias;
private $Usuario_idUsuario;
private $Empresa_idEmpresa;
/////////////////Propiedades////////////

///////////GET///////////

function getIdEmpleado(){return $this->idEmpleado;}
function getemHoras(){return $this->emHoras;}
function getemDias(){return $this->emDias;}
function getUsuario_idUsuario(){return $this->Usuario_idUsuario;}
function getEmpresa_idEmpresa(){return $this->getEmpresa_idEmpresa;}
///////////SET///////////

function setIdEmpleado($valor){$this->idEmpleado=$valor;}
function setemHoras($valor){$this->emHoras=$valor;}
function setemDias($valor){$this->emDias=$valor;}
function setUsuario_idUsuario($valor){$this->Usuario_idUsuario=$valor;}
function setEmpresa_idEmpresa($valor){$this->Empresa_idEmpresa=$valor;}


///////////CONSTRUCTOR////////                                                                      

public function __construct($ie, $he, $de, $uiu, $eie){
		
    $this->empleado=array();
    // Crear conexión
    $this->conn=mysqli_connect("localhost","root","","modelopractica1");
        // Checkear conexión
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    $this->idEmpleado=$ie;
    $this->emHoras=$he;
    $this->emDias=$de;
    $this->Usuario_idUsuario=$uiu;
    $this->Empresa_idEmpresa=$eie;
}

///////////METODOS//////// 

function agregarEmpleado($he , $de , $uiu , $eie){
    
    $sql = "INSERT INTO Empleado (emHoras , emDias , Usuario_idUsuario , Empresa_idEmpresa)
            VALUES ('$he' , '$de' , '$uiu' , '$eie')";

    if ($conn->query($sql) === TRUE) {
        echo "Empleado agregado con exito!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

function modificarEmpleado($ie ,$he , $de , $uiu , $eie){
    
    $sql = "UPDATE Empleado 
            SET emHoras='$he' , emDias='$de' , Usuario_idUsuario='$uiu' Empresa_idEmpresa='$eie'  
            WHERE idEmpleado='$ie'";

    if ($conn->query($sql) === TRUE) {
        echo "Empleado modificado con exito!";
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }

    $conn->close();

}

function obtenerEmpleado(){
    
    $sql = "SELECT * FROM Empleado";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->empleado[]=$registro;
			}
			
			return $this->empleado;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function obtenerEmpleadoPorId($ie){
    
    $sql = "SELECT * FROM Empleado WHERE idEmpleado='$ie'";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->empleado[]=$registro;
			}
			
			return $this->empleado;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function borrarEmpleado($ie){
    
    $sql = "DELETE FROM Empleado WHERE idEmpleado='$ie'";

    if ($conn->query($sql) === TRUE) {
        echo "Empleado eliminado con exito!";
    } else {
        echo "Error al intentar eliminar el empleado: " . $conn->error;
    }

    $conn->close();

}
}

?>