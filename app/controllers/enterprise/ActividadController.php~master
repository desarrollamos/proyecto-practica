<?php 

 class Actividad 
{
/////////////////Variables////////////
private $actividad;
private $conn;
private $idActividad;
private $acNombre;
private $acDetalle;
private $acFechaCreacion;
private $acFechaEdicion;
private $Especialidad_idEspecialidad;
/////////////////Propiedades////////////

///////////GET///////////

function getIdActividad(){return $this->idActividad;}
function getAcNombre(){return $this->acNombre;}
function getAcDetalle(){return $this->acDetalle;}
function getAcFechaCreacion(){return $this->acFechaCreacion;}
function getAcFechaEdicion(){return $this->getAcFechaEdicion;}
function getEspecialidad_idEspecialidad(){return $this->getEspecialidad_idEspecialidad;}
///////////SET///////////

function setIdActividad($valor){$this->idActividad=$valor;}
function setAcNombre($valor){$this->acNombre=$valor;}
function setAcDetalle($valor){$this->acDetalle=$valor;}
function setAcFechaCreacion($valor){$this->acFechaCreacion=$valor;}
function setEspecialidad_idEspecialidad($valor){$this->Especialidad_idEspecialidad=$valor;}



///////////CONSTRUCTOR////////

function __construct($ia, $na, $da, $fca, $fea,$ie){
    
    $this->actividad=array();
        // Crear conexión
    $this->conn=mysqli_connect("localhost","root","","modelopractica1");
        // Checkear conexión
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
		
    $this->idActividad=$ia;
    $this->acNombre=$na;
    $this->acDetalle=$da;
    $this->acFechaCreacion=$fca;
    $this->acFechaEdicion=$fea;
    $this->Especialidad_idEspecialidad=$eie;

}

///////////METODOS////////

function crearActividad($na , $da , $fca , $fea , $eie){
   
    $sql = "INSERT INTO Actividad (acNombre , acDetalle , acFechaCreacion , acFechaEdicion , Especialidad_idEspecialidad)
            VALUES ('$na' , '$da' , '$fca' , '$fea' , '$eie')";

    if ($conn->query($sql) === TRUE) {
        echo "Empresa agregada con exito!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
function obtenerActividad(){
    
    $sql = "SELECT * FROM Actividad";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->actividad[]=$registro;
			}
			
			return $this->actividad;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();
}
function obtenerActividadPorId($ia){
    
    $sql = "SELECT * FROM Actividad WHERE idActividad='$ia'";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->actividad[]=$registro;
			}
			
			return $this->actividad;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();
}
function modificarActividad($ia , $na , $da , $fca , $fea , $eie){
    
    $sql = "UPDATE Actividad 
            SET acNombre='$na' , acDetalle='$da' , acFechaCreacion='$fca' , 
            acFechaEdicion='$fea' , Especialidad_idEspecialidad='$eie'  
            WHERE idActividad='$ia'";

    if ($conn->query($sql) === TRUE) {
        echo "Empresa modificada con exito!";
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }

    $conn->close();

}
}

?>