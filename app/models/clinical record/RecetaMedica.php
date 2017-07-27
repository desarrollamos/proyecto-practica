<?php 

 class RecetaMedica 
{
/////////////////Variables////////////
private $idRecetaMedica;
private $rmTipo;
private $rmValor;
private $rmFecha;
private $rmValidez;
private $rmConsultaMedica_idConsultaMedica;
private $conn;
private $recetaMedica;

/////////////////Propiedades////////////

///////////GET///////////

function getIdRecetaMedica(){return $this->idRecetaMedica;}
function getRmTipo(){return $this->rmTipo;}
function getRmValor(){return $this->rmValor;}
function getRmFecha(){return $this->rmFecha;}
function getRmValidez(){return $this->getrmValidez;}
function getConsultaMedica_idConsultaMedica($valor){$this->ConsultaMedica_idConsultaMedica=$valor;}
///////////SET///////////

function setIdRecetaMedica($valor){$this->idRecetaMedica=$valor;}
function setRmTipo($valor){$this->rmTipo=$valor;}
function setRmValor($valor){$this->rmValor=$valor;}
function setRmFecha($valor){$this->rmFecha=$valor;}
function setRmValidez($valor){$this->rmValidez=$valor;}
function setConsultaMedica_idConsultaMedica($valor){$this->ConsultaMedica_idConsultaMedica=$valor;}


///////////METODOS////////

function __construct($irm, $trm, $vrm, $frm, $vm, $cmicm){//constructor
$this->idRecetaMedica=$irm;
$this->rmTipo=$trm;
$this->rmValor=$vrm;
$this->rmFecha=$frm;
$this->rmValidez=$vm;
$this->rmConsultaMedica_idConsultaMedica=$cmicm;

$this->RecetaMedica=array();
       // Create connection
       $this->conn=mysqli_connect("localhost","root","","modelopractica1");
           // Check connection
           if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
           }
        }
    

    public function crearRecetaMedica($irm, $trm, $vrm, $frm, $vm, $cmicm)
    {
         
        $sql = "INSERT INTO RecetaMedica (rmTipo , rmValor , rmFecha , rmValidez , rmConsulta_idConsultaMedica)
           VALUES ('$trm' , '$vrm' , '$frm' , '$vm' , '$cmicm'  )";

   if ($conn->query($sql) === TRUE) {
       echo "Agregado con exito!";
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }

   $conn->close();
   
    }


   function modificarRecetaMedica($irm, $trm, $vrm, $frm, $vm, $cmicm){
   
   $sql = "UPDATE RecetaMedica
           SET rmTipo='$trm' , rmValor='$vrm' , rmFecha='$frm' , rmValidez='$vm' , rmConsulta_idConsultaMedica='$cmicm' 
           WHERE idrecetaMedica='$irm'";

   if ($conn->query($sql) === TRUE) {
       echo "Modificado con exito!";
   } else {
       echo "Error al actualizar los datos: " . $conn->error;
   }

   $conn->close();

}
   function obtenerRecetaMedica($irm, $trm, $vrm, $frm, $vm, $cmicm){
   
   $sql = "SELECT * FROM recetaMedica";
   
   $result=mysqli_query($this->conn,$sql);

   if ($result) {
       while($registro=mysqli_fetch_assoc($result)){
            $this->recetaMedica[]=$registro;
            }
            
            return $this->recetaMedica;
   } else {
       echo "error: " . mysqli_errno($this->con) . " -- " . mysqli_error($this->con);
            die;
   }

   $conn->close();

}



function borrarRecetaMedica($irm, $trm, $vrm, $frm, $vm, $cmicm){
   
   $sql = "DELETE FROM RecetaMedica WHERE idrecetaMedica='$irm'";

   if ($conn->query($sql) === TRUE) {
       echo " Eliminado con exito!";
   } else {
       echo "Error al intentar eliminar el RecetaMedica: " . $conn->error;
   }

   $conn->close();

}
}
}

?>