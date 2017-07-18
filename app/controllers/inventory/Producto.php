<?php 

 class Producto 
{
/////////////////Variables////////////

private $producto;
private $conn;
private $idProducto;
private $pdNombre;
private $Inventario_idInventario;

/////////////////Propiedades////////////

///////////GET///////////

function getIdProducto(){return $this->idProducto;}
function getpdNombre(){return $this->pdNombre;}
function getInventario_idInventario(){return $this->Inventario_idInventario;}

///////////SET///////////

function setIdProducto($valor){$this->idProducto=$valor;}
function setpdNombre($valor){$this->pdNombre=$valor;}
function setInventario_idInventario($valor){$this->Inventario_idInventario=$valor;}

///////////CONSTRUCTOR///////////                                                                      

public function __construct($ip, $np, $iii){
		
    $this->producto=array();
    // Crear conexión
    $this->conn=mysqli_connect("localhost","root","","modelopractica1");
        // Checkear conexión
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    $this->idProducto=$ip;
    $this->pdNombre=$np;
    $this->Inventario_idInventario=$iii;
}

///////////METODOS//////// 

function agregarProducto($np, $iii){
    
    $sql = "INSERT INTO Producto (pdNombre , Inventario_idInventario)
            VALUES ('$np' , '$iii')";

    if ($conn->query($sql) === TRUE) {
        echo "Producto agregado con exito!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

function modificarProducto($ip , $np, $iii){
    
    $sql = "UPDATE Producto 
            SET pdNombre='$np' , Inventario_idInventario='$iii'
            WHERE idProducto='$ip'";

    if ($conn->query($sql) === TRUE) {
        echo "Producto modificado con exito!";
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }

    $conn->close();

}

function obtenerProducto(){
    
    $sql = "SELECT * FROM Producto";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->producto[]=$registro;
			}
			
			return $this->producto;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();
}


function obtenerProductoPorId($ip){
    
    $sql = "SELECT * FROM Producto WHERE idProducto='$ip'";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->producto[]=$registro;
			}
			
			return $this->producto;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function borrarProducto($ip){
    
    $sql = "DELETE FROM Producto WHERE idProducto='$ip'";

    if ($conn->query($sql) === TRUE) {
        echo "Producto eliminado con exito!";
    } else {
        echo "Error al intentar eliminar el Producto: " . $conn->error;
    }

    $conn->close();

}

}

?>