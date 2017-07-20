<?php 



class Empresa 
{
/////////////////Variables////////////
private $empresa;
private $conn;
private $idEmpresa;
private $emNombre;
private $emRut;
private $emRazonSocial;
private $emCorreo;
private $emTelefono;
private $emFechaCreacion;
/////////////////Propiedades////////////

///////////GET///////////

function getIdEmpresa(){return $this->idEmpresa;}
function getEmNombre(){return $this->emNombre;}
function getEmRut(){return $this->emRut;}
function getEmRazonSocial(){return $this->emRazonSocial;}
function getEmCorreo(){return $this->mai_empresa;}
function getEmTelefono(){return $this->emTelefono;}
function getEmFechaCreacion(){return $this->emFechaCreacion;}

///////////SET///////////

function setIdEmpresa($valor){$this->idEmpresa=$valor;}
function setEmNombre($valor){$this->emNombre=$valor;}
function setEmRut($valor){$this->emRut=$valor;}
function setEmRazonSocial($valor){$this->emRazonSocial=$valor;}
function setEmCorreo($valor){$this->emCorreo=$valor;}
function setEmTelefono($valor){$this->emTelefono=$valor;}
function setEmFechaCreacion($valor){$this->emFechaCreacion=$valor;}



///////////CONSTRUCTOR////////                                                                      

public function __construct(){
		$this->empresa=array();
        // Crear conexión
        $this->conn=mysqli_connect("localhost","root","","modelopractica1");
            // Checkear conexión
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
		}
        
///////////METODOS//////// 

function crearEmpresa($emNombre , $emRut , $emRazonSocial , $emCorreo , $emTelefono , $idUsuario){
    
    $sql = "INSERT INTO Empresa (emNombre , emRut , emRazonSocial , emCorreo , emTelefono , Usuario_idUsuario)
            VALUES ('$emNombre' , '$emRut' , '$emRazonSocial' , '$emCorreo' , '$emTelefono' , '$idUsuario')";

    if ($conn->query($sql) === TRUE) {
        echo "Empresa agregada con exito!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

function modificarEmpresa($idEmpresa, $emNombre , $emRut , $emRazonSocial , $emCorreo , $emTelefono , $idUsuario){
    
    $sql = "UPDATE Empresa 
            SET emNombre='$emNombre' , emRut='$emRut' , emRazonSocial='$emRazonSocial' , 
                emCorreo='$emCorreo' , emTelefono='$emTelefono' , Usuario_idUsuario='$idUsuario'  
            WHERE idEmpresa='$idEmpresa'";

    if ($conn->query($sql) === TRUE) {
        echo "Empresa modificada con exito!";
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }

    $conn->close();

}

function obtenerEmpresa(){
    
    $sql = "SELECT * FROM Empresa";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->empresa[]=$registro;
			}
			
			return $this->empresa;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function obtenerEmpresaPorId($idEmpresa){
    
    $sql = "SELECT * FROM Actividad WHERE idEmpresa='$idEmpresa'";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->empresa[]=$registro;
			}
			
			return $this->empresa;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function borrarEmpresa($ie){
    
    $sql = "DELETE FROM Empresa WHERE idEmpresa='$idEmpresa'";

    if ($conn->query($sql) === TRUE) {
        echo "Empresa eliminada con exito!";
    } else {
        echo "Error al intentar eliminar la empresa: " . $conn->error;
    }

    $conn->close();

}
}
?>