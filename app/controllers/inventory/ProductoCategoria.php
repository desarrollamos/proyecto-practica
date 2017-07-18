<?php 

 class ProductoCategoria 
{
/////////////////Variables////////////

private $productoCategoria;
private $conn;
private $idProductoCategoria;
private $Producto_idProducto;
private $Categoria_idCategoria;

/////////////////Propiedades////////////

///////////GET///////////

function getIdProductoCategoria(){return $this->idProductoCategoria;}
function getProducto_idProducto(){return $this->Producto_idProducto;}
function getCategoria_idCategoria(){return $this->Categoria_idCategoria;}


///////////SET///////////

function setIdProductoCategoria($valor){$this->idProductoCategoria=$valor;}
function setProducto_idProducto($valor){$this->Producto_idProducto=$valor;}
function setCategoria_idCategoria($valor){$this->Categoria_idCategoria=$valor;}

///////////CONSTRUCTOR///////////                                                                      

public function __construct($ipc, $pip, $cic){
		
    $this->productoCategoria=array();
    // Crear conexión
    $this->conn=mysqli_connect("localhost","root","","modelopractica1");
        // Checkear conexión
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    $this->idProductoCategoria=$ipc;
    $this->Producto_idProducto=$pip;
    $this->Categoria_idCategoria=$cic;
}

///////////METODOS//////// 

function agregarProductoCategoria($pip, $cic){
    
    $sql = "INSERT INTO ProductoCategoria (Producto_idProducto , Categoria_idCategoria)
            VALUES ('$pip' , '$cic')";

    if ($conn->query($sql) === TRUE) {
        echo "ProductoCategoria agregado con exito!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

function modificarProductoCategoria($ipc , $pip, $cic){
    
    $sql = "UPDATE ProductoCategoria 
            SET Producto_idProducto='$pip' , Categoria_idCategoria='$cic'
            WHERE idProductoCategoria='$ipc'";

    if ($conn->query($sql) === TRUE) {
        echo "ProductoCategoria modificado con exito!";
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }

    $conn->close();

}

function obtenerProductoCategoria(){
    
    $sql = "SELECT * FROM ProductoCategoria";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->productoCategoria[]=$registro;
			}
			
			return $this->productoCategoria;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();
}


function obtenerProductoCategoriaPorId($ipc){
    
    $sql = "SELECT * FROM ProductoCategoria WHERE idProductoCategoria='$ipc'";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->productoCategoria[]=$registro;
			}
			
			return $this->productoCategoria;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function borrarProductoCategoria($ipc){
    
    $sql = "DELETE FROM ProductoCategoria WHERE idProductoCategoria='$ipc'";

    if ($conn->query($sql) === TRUE) {
        echo "ProductoCategoria eliminado con exito!";
    } else {
        echo "Error al intentar eliminar el ProductoCategoria: " . $conn->error;
    }

    $conn->close();

}

}

?>