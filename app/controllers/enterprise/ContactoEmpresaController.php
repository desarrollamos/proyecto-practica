<?php 

 
 class ContactoEmpresaController
{
/////////////////Variables////////////
private $conn;
private $idContactoEmpresa;
private $ceKey;
private $ceValue;
private $Empresa_idEmpresa;
/////////////////Propiedades////////////

///////////GET///////////
function getIdContactoEmpresa(){return $this->idContactoEmpresa;}
function getceKey(){return $this->ceKey;}
function getceValue(){return $this->ceValue;}
function getEmpresa_idEmpresa(){return $this->Empresa_idEmpresa;} 

///////////SET///////////

function setIdContactoEmpresa($valor){$this->idContactoEmpresa=$valor;}
function setceKey($valor){$this->ceKey=$valor;}
function setceValue($valor){$this->ceValue=$valor;}
function setEmpresa_idEmpresa($valor){$this->Empresa_idEmpresa;}


///////////CONSTRUCTOR////////                                                                      

public function __construct($ice, $ck, $cv, $eie){	
    
    $this->conn=mysqli_connect("localhost","root","","modelopractica1");
        // Checkear conexión
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    $this->idContactoEmpresa=$ice;
    $this->ceKey=$ck;
    $this->cevalue=$cv;
    $this->Empresa_idEmpresa=$eie;
}

///////////METODOS//////// 

function agregarContactoEmpresa($ck , $cv, $eie){
    
    $sql = "INSERT INTO ContactoEmpresa (ceKey , ceValue, Empresa_idEmpresa)
            VALUES ('$ck' , '$cv', '$eie')";

    if ($conn->query($sql) === TRUE) {
        echo "Contacto agregado con exito!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

function modificarCOntactoEmpresa($ice, $ck , $cv, $eie){
    
    $sql = "UPDATE ContactoEmpresa 
            SET ceKey='$ck' , ceValue='$cv' , Empresa_idEmpresa='$eie'  
            WHERE idContactoEmpresa='$ice'";

    if ($conn->query($sql) === TRUE) {
        echo "Contacto modificado con exito!";
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }

    $conn->close();

}

function borrarContactoEmpresa($ice){
    
    $sql = "DELETE FROM ContactoEmpresa WHERE idContactoEmpresa='$ice'";

    if ($conn->query($sql) === TRUE) {
        echo "Empresa eliminada con exito!";
    } else {
        echo "Error al intentar eliminar la empresa: " . $conn->error;
    }

    $conn->close();

}

}


?>