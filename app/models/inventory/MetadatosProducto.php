<?php 

 class MetadatosProducto 
{
/////////////////Variables////////////

private $metadatosProducto;
private $conn;
private $idMetadatosProducto;
private $mdKey;
private $mdValue;
private $Producto_idProducto;


/////////////////Propiedades////////////

///////////GET///////////

function getIdMetadatosProducto(){return $this->idMetadatosProducto;}
function getmdKey(){return $this->mdKey;}
function getmdValue(){return $this->mdValue;}
function getProducto_idProducto(){return $this->Producto_idProducto;}

///////////SET///////////

function setIdMetadatosProducto($valor){$this->idMetadatosProducto=$valor;}
function setmdKey($valor){$this->mdKey=$valor;}
function setmdValue($valor){$this->mdValue=$valor;}
function setProducto_idProducto($valor){$this->Producto_idProducto=$valor;}

///////////CONSTRUCTOR///////////                                                                      

public function __construct($imp, $kmp, $vmp, $pip){
		
    $this->metadatosProducto=array();
    // Crear conexión
    $this->conn=mysqli_connect("localhost","root","","modelopractica1");
        // Checkear conexión
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    $this->idMetadatosProducto=$imp;
    $this->mdKey=$kmp;
    $this->mdValue=$vmp;
    $this->Producto_idProducto=$pip;

}

///////////METODOS//////// 

function agregarMetadatosProducto($kmp, $vmp, $pip){
    
    $sql = "INSERT INTO MetadatosProducto (mdKey , mdValue, Producto_idProducto)
            VALUES ('$kmp' , '$vmp', '$pip')";

    if ($conn->query($sql) === TRUE) {
        echo "MetadatosProducto agregado con exito!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

function modificarMetadatosProducto($imp , $kmp, $vmp, $pip){
    
    $sql = "UPDATE MetadatosProducto 
            SET mdKey='$kmp' , mdValue='$vmp' , Producto_idProducto='$pip'
            WHERE idMetadatosProducto='$imp'";

    if ($conn->query($sql) === TRUE) {
        echo "MetadatosProducto modificado con exito!";
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }

    $conn->close();

}

function obtenerMetadatosProducto(){
    
    $sql = "SELECT * FROM MetadatosProducto";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->metadatosProducto[]=$registro;
			}
			
			return $this->metadatosProducto;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();
}


function obtenerMetadatosProductoPorId($imp){
    
    $sql = "SELECT * FROM MetadatosProducto WHERE idMetadatosProducto='$imp'";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->metadatosProducto[]=$registro;
			}
			
			return $this->metadatosProducto;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function borrarMetadatosProducto($imp){
    
    $sql = "DELETE FROM MetadatosProducto WHERE idMetadatosProducto='$imp'";

    if ($conn->query($sql) === TRUE) {
        echo "MetadatosProducto eliminado con exito!";
    } else {
        echo "Error al intentar eliminar el MetadatosProducto: " . $conn->error;
    }

    $conn->close();

}

}

?>