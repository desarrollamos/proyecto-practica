<?php 

 class EmpresaDepartamento 
{
/////////////////Variables////////////

private $empresaDepartamento;
private $conn;
private $idEmpresaDepartamento;
private $Empresa_idEmpresa;
private $Departamento_idDepartamento;

/////////////////Propiedades////////////

///////////GET///////////

function getIdEmpresaDepartamento(){return $this->idEmpresaDepartamento;}
function getEmpresa_idEmpresa(){return $this->Empresa_idEmpresa;}
function getDepartamento_idDepartamento(){return $this->Departamento_idDepartamento;}

///////////SET///////////

function setIdEmpresaDepartamento($valor){$this->idEmpresaDepartamento=$valor;}
function setEmpresa_idEmpresa($valor){$this->Empresa_idEmpresa=$valor;}
function setDepartamento_idDepartamento($valor){$this->detale_EmpresaDepartamento=$valor;}


///////////CONSTRUCTOR///////////                                                                      

public function __construct($ied, $eie, $did){
		
    $this->empresaDepartamento=array();
    // Crear conexión
    $this->conn=mysqli_connect("localhost","root","","modelopractica1");
        // Checkear conexión
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    $this->idEmpresaDepartamento=$ied;
    $this->Empresa_idEmpresa=$eie;
    $this->Departamento_idDepartamento=$did;
}

///////////METODOS//////// 

function agregarEmpresaDepartamento($eie, $did){
    
    $sql = "INSERT INTO EmpresaDepartamento (Empresa_idEmpresa , Departamento_idDepartamento)
            VALUES ('$eie' , '$did')";

    if ($conn->query($sql) === TRUE) {
        echo "EmpresaDepartamento agregado con exito!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

function modificarEmpresaDepartamento($ied , $eie, $did){
    
    $sql = "UPDATE EmpresaDepartamento 
            SET Empresa_idEmpresa='$eie' , Departamento_idDepartamento='$did'  
            WHERE idEmpresaDepartamento='$ied'";

    if ($conn->query($sql) === TRUE) {
        echo "EmpresaDepartamento modificado con exito!";
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }

    $conn->close();

}

function obtenerEmpresaDepartamento(){
    
    $sql = "SELECT * FROM EmpresaDepartamento";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->empresaDepartamento[]=$registro;
			}
			
			return $this->empresaDepartamento;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function obtenerEmpresaDepartamentoPorId($ied){
    
    $sql = "SELECT * FROM EmpresaDepartamento WHERE idEmpresaDepartamento='$ied'";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->empresaDepartamento[]=$registro;
			}
			
			return $this->empresaDepartamento;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function borrarEmpresaDepartamento($ied){
    
    $sql = "DELETE FROM EmpresaDepartamento WHERE idEmpresaDepartamento='$ied'";

    if ($conn->query($sql) === TRUE) {
        echo "EmpresaDepartamento eliminado con exito!";
    } else {
        echo "Error al intentar eliminar el EmpresaDepartamento: " . $conn->error;
    }

    $conn->close();

}
}

?>