<?php 

 class ProductoCompuesto 
{
/////////////////Variables////////////

private $productoCompuesto;
private $conn;
private $idProductoCompuesto;
private $pcPorcentaje;
private $Producto_idProducto;
private $ComponenteProducto_idProducto;

/////////////////Propiedades////////////

///////////GET///////////

function getIdProductoCompuesto(){return $this->idProductoCompuesto;}
function getpcPorcentaje(){return $this->pcPorcentaje;}
function getProducto_idProducto(){return $this->Producto_idProducto;}
function getComponenteProducto_idProducto(){return $this->ComponenteProducto_idProducto;}


///////////SET///////////

function setIdProductoCompuesto($valor){$this->idProductoCompuesto=$valor;}
function setpcPorcentaje($valor){$this->pcPorcentaje=$valor;}
function setProducto_idProducto($valor){$this->Producto_idProducto=$valor;}
function setComponenteProducto_idProducto($valor){$this->ComponenteProducto_idProducto=$valor;}

///////////CONSTRUCTOR///////////                                                                      

public function __construct($ipc, $ppc, $pip, $cpip){
		
    $this->productoCompuesto=array();
    // Crear conexión
    $this->conn=mysqli_connect("localhost","root","","modelopractica1");
        // Checkear conexión
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    $this->idProductoCompuesto=$ipc;
    $this->pcPorcentaje=$ppc;
    $this->Producto_idProducto=$pip;
    $this->ComponenteProducto_idProducto=$cpip;

}

///////////METODOS//////// 

function agregarProductoCompuesto($ppc, $pip, $cpip){
    
    $sql = "INSERT INTO ProductoCompuesto (pcPorcentaje , Producto_idProducto, ComponenteProducto_idProducto)
            VALUES ('$ppc' , '$pip', '$cpip')";

    if ($conn->query($sql) === TRUE) {
        echo "ProductoCompuesto agregado con exito!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

function modificarProductoCompuesto($ipc , $ppc, $pip, $cpip){
    
    $sql = "UPDATE ProductoCompuesto 
            SET pcPorcentaje='$ppc' , Producto_idProducto='$pip' , ComponenteProducto_idProducto='$cpip'
            WHERE idProductoCompuesto='$ipc'";

    if ($conn->query($sql) === TRUE) {
        echo "ProductoCompuesto modificado con exito!";
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }

    $conn->close();

}

function obtenerProductoCompuesto(){
    
    $sql = "SELECT * FROM ProductoCompuesto";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->productoCompuesto[]=$registro;
			}
			
			return $this->productoCompuesto;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();
}


function obtenerProductoCompuestoPorId($ipc){
    
    $sql = "SELECT * FROM ProductoCompuesto WHERE idProductoCompuesto='$ipc'";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->productoCompuesto[]=$registro;
			}
			
			return $this->productoCompuesto;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function borrarProductoCompuesto($ipc){
    
    $sql = "DELETE FROM ProductoCompuesto WHERE idProductoCompuesto='$ipc'";

    if ($conn->query($sql) === TRUE) {
        echo "ProductoCompuesto eliminado con exito!";
    } else {
        echo "Error al intentar eliminar el ProductoCompuesto: " . $conn->error;
    }

    $conn->close();

}

}

?>