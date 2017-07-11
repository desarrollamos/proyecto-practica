<?php 

 class Direccion 
{
/////////////////Variables////////////
private $Direccion;
private $conn;
private $idDireccion;
private $drNombre;
private $Ciudad_idCiudad;

/////////////////Propiedades////////////

///////////GET///////////

function getIdDireccion(){return $this->idDireccion;}
function getAcNombre(){return $this->drNombre;}
function getIdCiudad(){return $this->Ciudad_idCiudad;}

///////////SET///////////

function setIdDireccion($valor){$this->idDireccion=$valor;}
function setAcNombre($valor){$this->drNombre=$valor;}
function setIdCiudad($valor){$this->Ciudad_idCiudad=$valor;}

///////////CONSTRUCTOR////////                                                                      

public function __construct($id, $nd, $cic){
		
    $this->direccion=array();
    // Crear conexión
    $this->conn=mysqli_connect("localhost","root","","modelopractica1");
        // Checkear conexión
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    $this->idDireccion=$id;
    $this->drNombre=$nd;
    $this->Ciudad_idCiudad=$cic;
}

///////////METODOS//////// 

function agregarDireccion($nd , $cic){
    
    $sql = "INSERT INTO Direccion (drNombre , Ciudad_idCiudad)
            VALUES ('$nd' , '$cic')";

    if ($conn->query($sql) === TRUE) {
        echo "Direccion agregada con exito!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

function modificarDireccion($ic, $nc , $pip){
    
    $sql = "UPDATE Direccion 
            SET drNombre='$nc' , Ciudad_idCiudad='$cic'  
            WHERE idDireccion='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Direccion modificada con exito!";
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }

    $conn->close();

}

function obtenerDireccion(){
    
    $sql = "SELECT * FROM Direccion";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->direccion[]=$registro;
			}
			
			return $this->direccion;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function obtenerDireccionPorId($id){
    
    $sql = "SELECT * FROM Direccion WHERE idDireccion='$id'";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->direccion[]=$registro;
			}
			
			return $this->direccion;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function borrarDireccion($id){
    
    $sql = "DELETE FROM Direccion WHERE idDireccion='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Direccion eliminada con exito!";
    } else {
        echo "Error al intentar eliminar la empresa: " . $conn->error;
    }

    $conn->close();

}
}

?>