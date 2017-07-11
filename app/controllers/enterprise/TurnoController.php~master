<?php 

class Turno {

/////////////////Variables////////////

private $turno;
private $conn;
private $idTurno;
private $tnEntrada;
private $tnSalida;
private $tnEntradaColacion;
private $tnSalidaColacion;
private $Empleado_idEmpleado;

/////////////////Propiedades////////////

///////////GET///////////

function getIdTurno(){return $this->idTurno;}
function getTnEntrada(){return $this->tnEntrada;}
function getTnSalida(){return $this->tnSalida;}
function getTnEntradaColacion(){return $this->tnEntradaColacion;}
function getTnSalidaColacion(){return $this->gettnSalidaColacion;}
function getEmpleado_idEmpleado(){return $this->getEmpleado_idEmpleado;}

///////////SET///////////

function setIdTurno($valor){$this->idTurno=$valor;}
function setTnEntrada($valor){$this->tnEntrada=$valor;}
function setTnSalida($valor){$this->tnSalida=$valor;}
function setTnEntradaColacion($valor){$this->tnEntradaColacion=$valor;}
function setTnSalidaColacion($valor){$this->tnSalidaColacion=$valor;}
function setEmpleado_idEmpleado($valor){$this->Empleado_idEmpleado=$valor;}

///////////CONSTRUCTOR////////                                                                      

public function __construct($it, $et, $st, $ect, $sct, $eie){
		
    $this->turno=array();
    // Crear conexión
    $this->conn=mysqli_connect("localhost","root","","modelopractica1");
        // Checkear conexión
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    $this->idTurno=$it;
    $this->tnEntrada=$et;
    $this->tnSalida=$st;
    $this->tnEntradaColacion=$ect;
    $this->tnSalidaColacion=$sct;
    $this->Empleado_idEmpleado=$eie;
}

///////////METODOS//////// 

function agregarTurno($et, $st, $ect, $sct, $eie){
    
    $sql = "INSERT INTO Turno (tnEntrada , tnSalida , tnEntradaColacion , tnSalidaColacion , Empleado_idEmpleado)
            VALUES ('$et' , '$st' , '$ect' , '$sct' , '$eie')";

    if ($conn->query($sql) === TRUE) {
        echo "Turno agregado con exito!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

function modificarTurno($it, $et, $st, $ect, $sct, $eie){
    
    $sql = "UPDATE Turno 
            SET tnEntrada='$et' , tnSalida='$st' , tnEntradaColacion='$ect' tnSalidaColacion='$sct' , Empleado_idEmpleado='$eie'  
            WHERE idTurno='$it'";

    if ($conn->query($sql) === TRUE) {
        echo "Turno modificado con exito!";
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }

    $conn->close();

}

function obtenerTurno(){
    
    $sql = "SELECT * FROM Turno";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->turno[]=$registro;
			}
			
			return $this->turno;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function obtenerTurnoPorId($it){
    
    $sql = "SELECT * FROM Turno WHERE idTurno='$it'";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->turno[]=$registro;
			}
			
			return $this->turno;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function borrarTurno($it){
    
    $sql = "DELETE FROM Turno WHERE idTurno='$it'";

    if ($conn->query($sql) === TRUE) {
        echo "Turno eliminado con exito!";
    } else {
        echo "Error al intentar eliminar el Turno: " . $conn->error;
    }

    $conn->close();

}
}

?>