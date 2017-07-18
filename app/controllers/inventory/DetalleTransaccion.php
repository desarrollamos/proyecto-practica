<?php 

 class DetalleTransaccion 
{
/////////////////Variables////////////

private $DetalleTransaccion;
private $conn;
private $idDetalleTransaccion;
private $dtDetalle;
private $dtCantidad;
private $dtPrecio;
private $dtFecha;
private $Empleado_idEmpleado;
private $Inventario_idInventario;

/////////////////Propiedades////////////

///////////GET///////////

function getIdDetalleTransaccion(){return $this->idDetalleTransaccion;}
function getdtDetalle(){return $this->dtDetalle;}
function getdtCantidad(){return $this->dtCantidad;}
function getdtPrecio(){return $this->dtPrecio;}
function getdtFecha(){return $this->dtFecha;}
function getEmpleado_idEmpleado(){return $this->Empleado_idEmpleado;}
function getInventario_idInventario(){return $this->Inventario_idInventario;}

///////////SET///////////

function setIdDetalleTransaccion($valor){$this->idDetalleTransaccion=$valor;}
function setdtDetalle($valor){$this->dtDetalle=$valor;}
function setdtCantidad($valor){$this->dtCantidad=$valor;}
function setdtPrecio($valor){$this->dtPrecio=$valor;}
function setdtFecha($valor){$this->dtFecha=$valor;}
function setEmpleado_idEmpleado($valor){$this->Empleado_idEmpleado=$valor;}
function setInventario_idInventario($valor){$this->Inventario_idInventario=$valor;}

///////////CONSTRUCTOR///////////                                                                      

public function __construct($idt, $ddt, $cdt, $pdt, $fdt, $eie, $iii){
		
    $this->DetalleTransaccion=array();
    // Crear conexión
    $this->conn=mysqli_connect("localhost","root","","modelopractica1");
        // Checkear conexión
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    $this->idDetalleTransaccion=$idt;
    $this->dtDetalle=$ddt;
    $this->dtCantidad=$cdt;
    $this->dtPrecio=$pdt;
    $this->dtFecha=$fdt;
    $this->Empleado_idEmpleado=$eie;
    $this->Inventario_idInventario=$iii;
}

///////////METODOS//////// 

function agregarDetalleTransaccion($ddt, $cdt, $pdt, $fdt, $eie, $iii){
    
    $sql = "INSERT INTO DetalleTransaccion (dtDetalle , dtCantidad, dtPrecio, dtFecha, Empleado_idEmpleado, Inventario_idInventario)
            VALUES ('$ddt' , '$cdt', '$pdt', '$fdt', '$eie', '$iii')";

    if ($conn->query($sql) === TRUE) {
        echo "DetalleTransaccion agregado con exito!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

function modificarDetalleTransaccion($idt , $ddt, $cdt, $pdt, $fdt, $eie, $iii){
    
    $sql = "UPDATE DetalleTransaccion 
            SET dtDetalle='$ddt' , dtCantidad='$cdt' , dtPrecio='$pdt' , dtFecha='$fdt', 
                Empleado_idEmpleado='$eie', Inventario_idInventario='$iii'
            WHERE idDetalleTransaccion='$idt'";

    if ($conn->query($sql) === TRUE) {
        echo "DetalleTransaccion modificado con exito!";
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }

    $conn->close();

}

function obtenerDetalleTransaccion(){
    
    $sql = "SELECT * FROM DetalleTransaccion";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->detalleTransaccion[]=$registro;
			}
			
			return $this->detalleTransaccion;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();
}


function obtenerDetalleTransaccionPorId($idt){
    
    $sql = "SELECT * FROM DetalleTransaccion WHERE idDetalleTransaccion='$idt'";
    
    $result=mysqli_query($this->conn,$sql);

    if ($result) {
        while($registro=mysqli_fetch_assoc($result)){
			$this->detalleTransaccion[]=$registro;
			}
			
			return $this->detalleTransaccion;
    } else {
        echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
			die;
    }

    $conn->close();

}

function borrarDetalleTransaccion($idt){
    
    $sql = "DELETE FROM DetalleTransaccion WHERE idDetalleTransaccion='$idt'";

    if ($conn->query($sql) === TRUE) {
        echo "DetalleTransaccion eliminado con exito!";
    } else {
        echo "Error al intentar eliminar el DetalleTransaccion: " . $conn->error;
    }

    $conn->close();

}

}

?>