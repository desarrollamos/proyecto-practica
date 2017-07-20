<?php 

 class Inventario 
{
/////////////////Variables////////////

private $inventario;
private $conn;
private $idInventario;
private $inNombre;
private $inDescripcion;
private $inFechaCreacion;
private $inFechaMod;
private $Empresa_idEmpresa;

/////////////////Propiedades////////////

///////////GET///////////

function getIdInventario(){return $this->idInventario;}
function getinNombre(){return $this->inNombre;}
function getinDescripcion(){return $this->inDescripcion;}
function getinFechaCreacion(){return $this->inFechaCreacion;}
function getinFechaMod(){return $this->inFechaMod;}
function getEmpresa_idEmpresa(){return $this->Empresa_idEmpresa;}

///////////SET///////////

function setIdInventario($valor){$this->idInventario=$valor;}
function setinNombre($valor){$this->inNombre=$valor;}
function setinDescripcion($valor){$this->inDescripcion=$valor;}
function setinFechaCreacion($valor){$this->inFechaCreacion=$valor;}
function setinFechaMod($valor){$this->inFechaMod=$valor;}
function setEmpresa_idEmpresa($valor){$this->Empresa_idEmpresa=$valor;}

///////////CONSTRUCTOR///////////                                                                      

public function __construct($ii, $ni, $di, $fmi, $fdt, $eie){
		
    $this->inventario=array();
    // Crear conexión
    $this->conn=mysqli_connect("localhost","root","","modelopractica1");
        // Checkear conexión
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    $this->idInventario=$ii;
    $this->inNombre=$ni;
    $this->inDescripcion=$di;
    $this->inFechaCreacion=$fmi;
    $this->inFechaMod=$fdt;
    $this->Empresa_idEmpresa=$eie;
}

///////////METODOS//////// 

function agregarInventario($ni, $di, $fmi, $fdt, $eie){
    
    $sql = "INSERT INTO Inventario (inNombre , inDescripcion, inFechaCreacion, inFechaMod, Empresa_idEmpresa)
            VALUES ('$ni' , '$di', '$fmi', '$fdt', '$eie')";

    if ($conn->query($sql) === TRUE) {
        echo "Inventario agregado con exito!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

function modificarInventario($ii , $ni, $di, $fmi, $fdt, $eie){
    
    $sql = "UPDATE Inventario 
            SET inNombre='$ni' , inDescripcion='$di' , inFechaCreacion='$fmi' , inFechaMod='$fdt', 
                Empresa_idEmpresa='$eie'
            WHERE idInventario='$ii'";

    if ($conn->query($sql) === TRUE) {
        echo "Inventario modificado con exito!";
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }

    $conn->close();

}

function obtenerInventario(){
    
    $sql = "SELECT * FROM Inventario";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->inventario[]=$registro;
			}
			
			return $this->inventario;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();
}


function obtenerInventarioPorId($ii){
    
    $sql = "SELECT * FROM Inventario WHERE idInventario='$ii'";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->inventario[]=$registro;
			}
			
			return $this->inventario;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function borrarInventario($ii){
    
    $sql = "DELETE FROM Inventario WHERE idInventario='$ii'";

    if ($conn->query($sql) === TRUE) {
        echo "Inventario eliminado con exito!";
    } else {
        echo "Error al intentar eliminar el Inventario: " . $conn->error;
    }

    $conn->close();

}

}

?>