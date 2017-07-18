<?php 

 class Categoria 
{
/////////////////Variables////////////

private $Categoria;
private $conn;
private $idCategoria;
private $ctNombre;
private $ctFechaCreacion;
private $ctFechaEdicion;

/////////////////Propiedades////////////

///////////GET///////////

function getIdCategoria(){return $this->idCategoria;}
function getctNombre(){return $this->ctNombre;}
function getctFechaCreacion(){return $this->ctFechaCreacion;}
function getctFechaEdicion(){return $this->ctFechaEdicion;}

///////////SET///////////

function setIdCategoria($valor){$this->idCategoria=$valor;}
function setctNombre($valor){$this->ctNombre=$valor;}
function setctFechaCreacion($valor){$this->ctFechaCreacion=$valor;}
function setctFechaEdicion($valor){$this->ctFechaEdicion=$valor;}

///////////CONSTRUCTOR///////////                                                                      

public function __construct($ic, $nc, $fcc, $fec){
		
    $this->categoria=array();
    // Crear conexión
    $this->conn=mysqli_connect("localhost","root","","modelopractica1");
        // Checkear conexión
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    $this->idCategoria=$ic;
    $this->ctNombre=$nc;
    $this->ctFechaCreacion=$fcc;
    $this->ctFechaEdicion=$fec;
}

///////////METODOS//////// 

function agregarCategoria($nc, $fcc, $fec){
    
    $sql = "INSERT INTO Categoria (ctNombre , ctFechaCreacion)
            VALUES ('$nc' , '$fcc', '$fec')";

    if ($conn->query($sql) === TRUE) {
        echo "Categoria agregado con exito!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

function modificarCategoria($ic , $nc, $fcc, $fec){
    
    $sql = "UPDATE Categoria 
            SET ctNombre='$nc' , ctFechaCreacion='$fcc' , ctFechaEdicion='$fec'
            WHERE idCategoria='$ic'";

    if ($conn->query($sql) === TRUE) {
        echo "Categoria modificado con exito!";
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }

    $conn->close();

}

function obtenerCategoria(){
    
    $sql = "SELECT * FROM Categoria";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->categoria[]=$registro;
			}
			
			return $this->categoria;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();
}


function obtenerCategoriaPorId($ic){
    
    $sql = "SELECT * FROM Categoria WHERE idCategoria='$ic'";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->categoria[]=$registro;
			}
			
			return $this->categoria;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function borrarCategoria($ic){
    
    $sql = "DELETE FROM Categoria WHERE idCategoria='$ic'";

    if ($conn->query($sql) === TRUE) {
        echo "Categoria eliminado con exito!";
    } else {
        echo "Error al intentar eliminar el Categoria: " . $conn->error;
    }

    $conn->close();

}

}

?>