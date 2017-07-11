<?php 

 class Especialista 
{
/////////////////Variables////////////
private $especialista;
private $conn;
private $idEspecialista;
private $EspecialidadUsuario_idEspecialidadUsuario;
private $Usuario_idUsuario;
/////////////////Propiedades////////////

///////////GET///////////

function getIdEspecialista(){return $this->idEspecialista;}
function getEspecialidadUsuario_idEspecialidadUsuario(){return $this->EspecialidadUsuario_idEspecialidadUsuario;}
function getUsuario_idUsuario(){return $this->Usuario_idUsuario;}

///////////SET///////////

function setIdEspecialista($valor){$this->idEspecialista=$valor;}
function setEspecialidadUsuario_idEspecialidadUsuario($valor){$this->EspecialidadUsuario_idEspecialidadUsuario=$valor;}
function setUsuario_idUsuario($valor){$this->Usuario_idUsuario=$valor;}

///////////CONSTRUCTOR////////                                                                      

public function __construct($ie, $euieu, $uiu){
		
    $this->Especialista=array();
    // Crear conexión
    $this->conn=mysqli_connect("localhost","root","","modelopractica1");
        // Checkear conexión
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    $this->idEspecialista=$ie;
    $this->EspecialidadUsuario_idEspecialidadUsuario=$euieu;
    $this->Usuario_idUsuario=$uiu;
}

///////////METODOS//////// 

function agregarEspecialista($euieu , $uiu){
    
    $sql = "INSERT INTO Especialista (EspecialidadUsuario_idEspecialidadUsuario , Usuario_idUsuario)
            VALUES ('$euieu' , '$uiu')";

    if ($conn->query($sql) === TRUE) {
        echo "Especialista agregado con exito!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

function modificarEspecialista($ie , $euieu , $uiu){
    
    $sql = "UPDATE Especialista 
            SET EspecialidadUsuario_idEspecialidadUsuario='$euieu' , Usuario_idUsuario='$uiu'  
            WHERE idEspecialista='$ie'";

    if ($conn->query($sql) === TRUE) {
        echo "Especialista modificado con exito!";
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }

    $conn->close();

}

function obtenerEspecialista(){
    
    $sql = "SELECT * FROM Especialista";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->especialista[]=$registro;
			}
			
			return $this->especialista;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function obtenerEspecialistaPorId($ie){
    
    $sql = "SELECT * FROM Especialista WHERE idEspecialista='$ie'";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->especialista[]=$registro;
			}
			
			return $this->especialista;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function borrarEspecialista($ie){
    
    $sql = "DELETE FROM Especialista WHERE idEspecialista='$ie'";

    if ($conn->query($sql) === TRUE) {
        echo "Especialista eliminado con exito!";
    } else {
        echo "Error al intentar eliminar el Especialista: " . $conn->error;
    }

    $conn->close();

}
}

?>