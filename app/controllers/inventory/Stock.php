<?php 

 class Stock 
{
/////////////////Variables////////////

private $stock;
private $conn;
private $idStock;
private $stCantidadTotal;
private $stCantidadDisponible;
private $stFechaCreacion;
private $stFechaModificacion;
private $Producto_idProducto;

/////////////////Propiedades////////////

///////////GET///////////

function getIdStock(){return $this->idStock;}
function getstCantidadTotal(){return $this->stCantidadTotal;}
function getstCantidadDisponible(){return $this->stCantidadDisponible;}
function getstFechaCreacion(){return $this->stFechaCreacion;}
function getstFechaModificacion(){return $this->stFechaModificacion;}
function getProducto_idProducto(){return $this->Producto_idProducto;}

///////////SET///////////

function setIdStock($valor){$this->idStock=$valor;}
function setstCantidadTotal($valor){$this->stCantidadTotal=$valor;}
function setstCantidadDisponible($valor){$this->stCantidadDisponible=$valor;}
function setstFechaCreacion($valor){$this->stFechaCreacion=$valor;}
function setstFechaModificacion($valor){$this->stFechaModificacion=$valor;}
function setProducto_idProducto($valor){$this->Producto_idProducto=$valor;}

///////////CONSTRUCTOR///////////                                                                      

public function __construct($is, $cts, $cds, $fcs, $fms, $pip){
		
    $this->stock=array();
    // Crear conexión
    $this->conn=mysqli_connect("localhost","root","","modelopractica1");
        // Checkear conexión
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    $this->idStock=$is;
    $this->stCantidadTotal=$cts;
    $this->stCantidadDisponible=$cds;
    $this->stFechaCreacion=$fcs;
    $this->stFechaModificacion=$fms;
    $this->Producto_idProducto=$pip;
}

///////////METODOS//////// 

function agregarStock($cts, $cds, $fcs, $fms, $pip){
    
    $sql = "INSERT INTO Stock (stCantidadTotal , stCantidadDisponible, stFechaCreacion, stFechaModificacion, Producto_idProducto)
            VALUES ('$cts' , '$cds', '$fcs', '$fms', '$pip')";

    if ($conn->query($sql) === TRUE) {
        echo "Stock agregado con exito!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

function modificarStock($is , $cts, $cds, $fcs, $fms, $pip){
    
    $sql = "UPDATE Stock 
            SET stCantidadTotal='$cts' , stCantidadDisponible='$cds' , stFechaCreacion='$fcs' , stFechaModificacion='$fms', 
                Producto_idProducto='$pip'
            WHERE idStock='$is'";

    if ($conn->query($sql) === TRUE) {
        echo "Stock modificado con exito!";
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }

    $conn->close();

}

function obtenerStock(){
    
    $sql = "SELECT * FROM Stock";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->stock[]=$registro;
			}
			
			return $this->stock;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();
}


function obtenerStockPorId($is){
    
    $sql = "SELECT * FROM Stock WHERE idStock='$is'";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->stock[]=$registro;
			}
			
			return $this->stock;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function borrarStock($is){
    
    $sql = "DELETE FROM Stock WHERE idStock='$is'";

    if ($conn->query($sql) === TRUE) {
        echo "Stock eliminado con exito!";
    } else {
        echo "Error al intentar eliminar el Stock: " . $conn->error;
    }

    $conn->close();

}

}

?>