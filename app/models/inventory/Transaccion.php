<?php 

 class Transaccion 
{
/////////////////Variables////////////

private $transaccion;
private $conn;
private $itransaccion;
private $trFecha;
private $trTipo;
private $DetalleTransaccion_idDetalleTransaccion;
private $Producto_idProducto;

/////////////////Propiedades////////////

///////////GET///////////

function getIdTransaccion(){return $this->idTransaccion;}
function gettrFecha(){return $this->trFecha;}
function gettrTipo(){return $this->trTipo;}
function getDetalleTransaccion_idDetalleTransaccion(){return $this->DetalleTransaccion_idDetalleTransaccion;}
function getProducto_idProducto(){return $this->Producto_idProducto;}

///////////SET///////////

function setIdTransaccion($valor){$this->idTransaccion=$valor;}
function settrFecha($valor){$this->trFecha=$valor;}
function settrTipo($valor){$this->trTipo=$valor;}
function setDetalleTransaccion_idDetalleTransaccion($valor){$this->DetalleTransaccion_idDetalleTransaccion=$valor;}
function setProducto_idProducto($valor){$this->Producto_idProducto=$valor;}

///////////CONSTRUCTOR///////////                                                                      

public function __construct($it, $ft, $tt, $dtidt, $pip){
		
    $this->transaccion=array();
    // Crear conexión
    $this->conn=mysqli_connect("localhost","root","","modelopractica1");
        // Checkear conexión
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    $this->idTransaccion=$it;
    $this->trFecha=$ft;
    $this->trTipo=$tt;
    $this->DetalleTransaccion_idDetalleTransaccion=$dtidt;
    $this->Producto_idProducto=$pip;
}

///////////METODOS//////// 

function agregarTransaccion($ft, $tt, $dtidt, $pip){
    
    $sql = "INSERT INTO Transaccion (trFecha , trTipo, DetalleTransaccion_idDetalleTransaccion, Producto_idProducto)
            VALUES ('$ft' , '$tt', '$dtidt', '$pip')";

    if ($conn->query($sql) === TRUE) {
        echo "Transaccion agregado con exito!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

function modificarTransaccion($it , $ft, $tt, $dtidt, $pip){
    
    $sql = "UPDATE Transaccion 
            SET trFecha='$ft' , trTipo='$tt' , DetalleTransaccion_idDetalleTransaccion='$dtidt' , Producto_idProducto='$pip'
            WHERE idTransaccion='$it'";

    if ($conn->query($sql) === TRUE) {
        echo "Transaccion modificado con exito!";
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }

    $conn->close();

}

function obtenerTransaccion(){
    
    $sql = "SELECT * FROM Transaccion";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->transaccion[]=$registro;
			}
			
			return $this->transaccion;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();
}


function obtenerTransaccionPorId($it){
    
    $sql = "SELECT * FROM Transaccion WHERE idTransaccion='$it'";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->transaccion[]=$registro;
			}
			
			return $this->transaccion;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function borrarTransaccion($it){
    
    $sql = "DELETE FROM Transaccion WHERE idTransaccion='$it'";

    if ($conn->query($sql) === TRUE) {
        echo "Transaccion eliminado con exito!";
    } else {
        echo "Error al intentar eliminar el Transaccion: " . $conn->error;
    }

    $conn->close();

}

}

?>