<?php 

 class DocumentoPago 
{
/////////////////Variables////////////

private $DocumentoPago;
private $conn;
private $idDocumentoPago;
private $dpTipo;
private $Transaccion_idTransaccion;


/////////////////Propiedades////////////

///////////GET///////////

function getIdDocumentoPago(){return $this->idDocumentoPago;}
function getdpTipo(){return $this->dpTipo;}
function getTransaccion_idTransaccion(){return $this->Transaccion_idTransaccion;}

///////////SET///////////

function setIdDocumentoPago($valor){$this->idDocumentoPago=$valor;}
function setdpTipo($valor){$this->dpTipo=$valor;}
function setTransaccion_idTransaccion($valor){$this->Transaccion_idTransaccion=$valor;}

///////////CONSTRUCTOR///////////                                                                      

public function __construct($idp, $tdp, $tit){
		
    $this->DocumentoPago=array();
    // Crear conexión
    $this->conn=mysqli_connect("localhost","root","","modelopractica1");
        // Checkear conexión
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    $this->idDocumentoPago=$idp;
    $this->dpTipo=$tdp;
    $this->Transaccion_idTransaccion=$tit;
    
}

///////////METODOS//////// 

function agregarDocumentoPago($tdp, $tit, $pdt){
    
    $sql = "INSERT INTO DocumentoPago (dpTipo , Transaccion_idTransaccion)
            VALUES ('$tdp' , '$tit')";

    if ($conn->query($sql) === TRUE) {
        echo "DocumentoPago agregado con exito!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

function modificarDocumentoPago($idp , $tdp, $tit){
    
    $sql = "UPDATE DocumentoPago 
            SET dpTipo='$tdp' , Transaccion_idTransaccion='$tit'
            WHERE idDocumentoPago='$idp'";

    if ($conn->query($sql) === TRUE) {
        echo "DocumentoPago modificado con exito!";
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }

    $conn->close();

}

function obtenerDocumentoPago(){
    
    $sql = "SELECT * FROM DocumentoPago";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->documentoPago[]=$registro;
			}
			
			return $this->documentoPago;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();
}


function obtenerDocumentoPagoPorId($idp){
    
    $sql = "SELECT * FROM DocumentoPago WHERE idDocumentoPago='$idp'";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->documentoPago[]=$registro;
			}
			
			return $this->documentoPago;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function borrarDocumentoPago($idp){
    
    $sql = "DELETE FROM DocumentoPago WHERE idDocumentoPago='$idp'";

    if ($conn->query($sql) === TRUE) {
        echo "DocumentoPago eliminado con exito!";
    } else {
        echo "Error al intentar eliminar el DocumentoPago: " . $conn->error;
    }

    $conn->close();

}

}

?>